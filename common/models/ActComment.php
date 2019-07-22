<?php
/**
 * Team:404NotFound,NKU
 * Coding by:李汶蔚 1711351,20190721
 * This is the model class for table "act_comment".
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%act_comment}}".
 *
 * @property integer $id
 * @property string $content
 * @property string $author
 * @property string $identity
 * @property integer $activity_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $status
 *
 * @property ActActivity $activity
 */
class ActComment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%act_comment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'activity_id'], 'required'],
            [['content'], 'string'],
            [['activity_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['author', 'identity'], 'string', 'max' => 32],
            [['activity_id'], 'exist', 'skipOnError' => true, 'targetClass' => ActActivity::className(), 'targetAttribute' => ['activity_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => '内容',
            'author' => '作者',
            'identity' => '身份',
            'activity_id' => '活动ID',
            'created_at' => '发布时间',
            'updated_at' => '更新时间',
            'status' => '当前状态',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivity()
    {
        return $this->hasOne(ActActivity::className(), ['id' => 'activity_id']);
    }

     public function getStatus($status){
            if($status == 0)
                return '待审核';
            else if($status == 1)
                return '审核通过';  
            else
                return '审核未通过';  
        }
}
