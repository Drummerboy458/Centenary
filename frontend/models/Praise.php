<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "praise".
 *
 * @property string $occured_at
 * @property string $ip
 */
class Praise extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'praise';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['occured_at', 'ip'], 'required'],
            [['occured_at'], 'safe'],
            [['ip'], 'string', 'max' => 32],
            [['occured_at', 'ip'], 'unique', 'targetAttribute' => ['occured_at', 'ip']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'occured_at' => 'Occured At',
            'ip' => 'Ip',
        ];
    }
}
