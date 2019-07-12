<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "act_category".
 *
 * @property integer $id
 * @property string $type
 *
 * @property ActActivity[] $actActivities
 */
class ActCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'act_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['type'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => '名称',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActActivities()
    {
        return $this->hasMany(ActActivity::className(), ['category_id' => 'id']);
    }
}
