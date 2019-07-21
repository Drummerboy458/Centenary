<?php
/**
 * Team:404NotFound,NKU
 * Coding by:史晓融 1711438,20190721
 * This is Message Check of common
 */

namespace common\models;

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
            [['id', 'content', 'status'], 'required'],
            [['id', 'status'], 'integer'],
            [['content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
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
            'identity' => '身份',
            'content' => '内容',
            'status' => '状态',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
