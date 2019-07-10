<?php

namespace frontend\models;

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
            // [['author','content','identity' ], 'required'],
            // [['content'], 'string'],
            // [['created_at', 'updated_at'], 'safe'],
            // [['author', 'identity'], 'string', 'max' => 32],
            // [['activity_id'], 'exist', 'skipOnError' => true, 'targetClass' => ActActivity::className(), 'targetAttribute' => ['activity_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'author' => 'Author',
            'identity' => 'Identity',
            'activity_id' => 'Activity ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivity()
    {
        return $this->hasOne(ActActivity::className(), ['id' => 'activity_id']);
    }

    public function getComments($id){
        $db = Yii::$app->db;
        //评论与活动关联查询
        $sql = "select author, identity, content,created_at from act_comment where status=1 and activity_id =  $id order by created_at desc limit 0, 5";
        $command = $db->createCommand($sql);
        $result = $command->queryAll();
        return $result;
    }
}
