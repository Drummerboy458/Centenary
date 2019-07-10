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
            'title' => '标题',
            'content' => '',
            'published_at' => '发布于',
            'holded_at' => '举办时间',
            'updated_at' => '最近更新时间',
            'sponsor' => '主办方',
            'location' => '地点',
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

    public function getActivities(){
        $db = Yii::$app->db;
        $sql = "select title from act_activity  order by holded_at desc limit 0, 6";
        $command = $db->createCommand($sql);
        $result = $command->queryAll();
        return $result;
    }
}
