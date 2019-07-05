<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%act_activity}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $published_at
 * @property string $holded_at
 * @property string $updated_at
 * @property string $sponsor
 * @property string $location
 *
 * @property ActBodyCategory[] $actBodyCategories
 * @property ActCategory[] $categories
 * @property ActComment[] $actComments
 */
class ActActivity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%act_activity}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'content', 'sponsor'], 'required'],
            [['id'], 'integer'],
            [['content'], 'string'],
            [['published_at', 'holded_at', 'updated_at'], 'safe'],
            [['title', 'sponsor', 'location'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'published_at' => 'Published At',
            'holded_at' => 'Holded At',
            'updated_at' => 'Updated At',
            'sponsor' => 'Sponsor',
            'location' => 'Location',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActBodyCategories()
    {
        return $this->hasMany(ActBodyCategory::className(), ['activity_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(ActCategory::className(), ['id' => 'category_id'])->viaTable('{{%act_body_category}}', ['activity_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActComments()
    {
        return $this->hasMany(ActComment::className(), ['activity_id' => 'id']);
    }
}
