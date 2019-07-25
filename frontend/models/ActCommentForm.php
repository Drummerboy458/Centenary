<?php
/**
 * Team: 404NotFound,NKU
 * Coding by 李汶蔚 1711351, 20190712
 * This is the ActCommentForm Model of frontend web.
 */
namespace frontend\models;
use frontend\controllers\ActActivityController;
use Yii;
use yii\base\Model;
/**
 * This is the model class for creating "message".
 */
class ActCommentForm extends Model
{

    public $author;
    public $identity;
    public $content;
    public $created_at;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['content', 'required', 'message'=>'留言不能为空哦'],
            ['author', 'required', 'message'=>'姓名不能为空哦'],
            ['identity', 'required', 'message'=>'校友身份不能为空哦'],
            [['content'], 'string'],
            [['author', 'identity'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'author' => '',
            'identity' => '',
            'content' => '',
            'created_at'=>'',
        ];
    }
}
