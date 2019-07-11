<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "act_category".
 *
 * @property int $id
 * @property string $type
 *
 * @property ActBodyCategory[] $actBodyCategories
 * @property ActActivity[] $activities
 */
class Act_category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'act_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type'], 'required'],
            [['id'], 'integer'],
            [['type'], 'string', 'max' => 64],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActBodyCategories()
    {
        return $this->hasMany(ActBodyCategory::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivities()
    {
        return $this->hasMany(ActActivity::className(), ['id' => 'activity_id'])->viaTable('act_body_category', ['category_id' => 'id']);
    }
}
