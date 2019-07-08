<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "visit_count".
 *
 * @property int $id
 * @property int $nums
 * @property string $created_time
 */
class VisitCount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'visit_count';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nums', 'created_time'], 'required'],
            [['id', 'nums'], 'integer'],
            [['created_time'], 'safe'],
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
            'nums' => 'Nums',
            'created_time' => 'Created Time',
        ];
    }
}
