<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $title
 * @property string $author
 * @property string $uptime
 * @property string $updatetime
 * @property string $tag
 * @property string $category
 * @property string $content
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'author', 'uptime'], 'required'],
            [['id'], 'integer'],
            [['uptime', 'updatetime'], 'safe'],
            [['content'], 'string'],
            [['title', 'author', 'tag', 'category'], 'string', 'max' => 255],
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
            'uptime' => 'Uptime',
            'updatetime' => 'Updatetime',
            'tag' => 'Tag',
            'category' => 'Category',
            'content' => 'Content',
        ];
    }
	
	private function getAllByCategory($category = 'SL')
	{
		if ($gender === 'Quant') {
			return array_filter($this->db, function($artiles){
				return $artiles['category'] === 'Quant';
			});
		} elseif ($gender === 'Bigdata') {
			return array_filter($this->db, function($persons){
				return $persons['category'] === 'Bigdata';
			});
		} else {
			return $this->db;
		}
	}
	
}
