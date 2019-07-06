<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "visit".
 *
 * @property int $id
 * @property string $visit_ip
 * @property string $visit_time
 */
class Visit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'visit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['visit_ip', 'visit_time'], 'required'],
            [['visit_time'], 'safe'],
            [['visit_ip'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'visit_ip' => 'Visit Ip',
            'visit_time' => 'Visit Time',
        ];
    }

    public static function ExitVisit()
    {
        $visit_ip=Yii::$app->app->request->userIP;
        if(!self::findOne(['visit_ip'=>$visit_ip])){
            $visit= new Visit();
            $visit->visit_ip=$visit_ip;
            $visit->visit_time=time();
            return $visit->save();
        }
        return true;
    }

    public static function visitNum()
    {
        return Visit::find()->count();
    }
}
