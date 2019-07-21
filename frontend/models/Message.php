<?php

/**
 * Team: 404NotFound,NKU
 * Coding by 李钟毓 1711355, 20190711
 * This is the Message ActiveRecord of frontend web, which is used to save and query messages.
 */

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "message".
 *
 * @property int $id
 * @property string $author
 * @property string $identity
 * @property string $content
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Message extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['content', 'required', 'message'=>'祝福不能为空哦'],
            ['author', 'required', 'message'=>'姓名不能为空哦'],
            ['identity', 'required', 'message'=>'校友身份不能为空哦'],
            [['id', 'status'], 'integer'],
            [['content'], 'string'],
            [['id', 'created_at', 'updated_at'], 'safe'],
            [['author', 'identity'], 'string', 'max' => 32],
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
            'author' => '姓名',
            'identity' => '校友信息',
            'content' => '祝福',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }


    public function getMessages(){
        $db = Yii::$app->db;
        $sql = "select author, identity, content from message where status=1 order by created_at desc limit 0, 4";
        $command = $db->createCommand($sql);
        $result = $command->queryAll();
        return $result;
    }

    
}
