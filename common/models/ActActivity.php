<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "act_activity".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $published_at
 * @property string $holded_at
 * @property string $updated_at
 * @property string $sponsor
 * @property string $location
 * @property integer $date_filter
 * @property integer $category_id
 *
 * @property ActCategory $category
 * @property ActComment[] $actComments
 */
class ActActivity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'act_activity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'holded_at', 'date_filter'], 'required'],
            [['content'], 'string'],
            [['published_at', 'holded_at', 'updated_at'], 'safe'],
            [['date_filter', 'category_id'], 'integer'],
            [['title', 'sponsor'], 'string', 'max' => 64],
            [['location'], 'string', 'max' => 11],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ActCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'content' => '内容',
            'published_at' => '发布时间',
            'holded_at' => '举办时间',
            'updated_at' => '更新时间',
            'sponsor' => '主办方',
            'location' => '地点',
            'date_filter' => '年月',
            'category_id' => '分类',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ActCategory::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActComments()
    {
        return $this->hasMany(ActComment::className(), ['activity_id' => 'id']);
    }
}
