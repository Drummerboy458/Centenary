<?php
/**
 * Team:404NotFound,NKU
 * Coding by:皮春莹 1711436,20190721
 * This is the model class for table "visit_raw".
 */
namespace common\models;

use Yii;

/**
 * This is the model class for table "visit_raw".
 *
 * @property int $id
 * @property string $visit_ip
 * @property string $visit_time
 */
class VisitRaw extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'visit_raw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['visit_ip'], 'required'],
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
    $visit_ip=Yii::$app->request->userIP;
    // if(!self::findOne(['visit_ip'=>$visit_ip])){

    // }

    $visit=new VisitRaw();
    $visit->visit_ip=$visit_ip;
    $visit->visit_time=date('Y-m-d H:i:s');
    $visit->save();
    // var_dump(date('Y-m-d H:i:s'));
    // exit(0);
    return $visit->save();


}
public static function visitNum()
{
    return VisitRaw::find()->count();
}

}
