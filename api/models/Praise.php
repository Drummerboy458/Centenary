<?php

/**
 * Team: 404NotFound,NKU
 * Coding by 李钟毓 1711355, 20190709
 * This this the ActiveRecord Model which is used to query or save praise in praise module of api.
 */

namespace api\models;

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
            ['ip', 'required','message'=>'ip值缺失'],
            [['ip'], 'string', 'max' => 32],
            [['occured_at', 'ip'], 'unique', 'targetAttribute' => ['occured_at', 'ip'], 'message'=>'数据重复'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'occured_at' => '时间',
            'ip' => 'Ip',
        ];
    }
}
