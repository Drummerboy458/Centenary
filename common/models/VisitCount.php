<?php
/**
 * Team:404NotFound,NKU
 * Coding by:皮春莹 1711436,20190721
 * This is the model class for table "visit_count".
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "visit_count".
 *
 * @property int $id
 * @property int $nums
 * @property string $date
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
            [['id', 'nums', 'date'], 'required'],
            [['id', 'nums'], 'integer'],
            [['date'], 'safe'],
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
            'date' => 'Date',
        ];
    }
}
