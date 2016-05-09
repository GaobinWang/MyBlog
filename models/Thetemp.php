<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thetemp".
 *
 * @property integer $id
 * @property string $title
 * @property string $author
 * @property string $content
 */
class Thetemp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thetemp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['title', 'author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'content' => 'Content',
        ];
    }
}
