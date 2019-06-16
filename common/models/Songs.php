<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "songs".
 *
 * @property int $id
 * @property int $album_id
 * @property string $name
 * @property string $release_date
 * @property string $featured_image
 * @property int $genre_id
 * @property int $created_by
 * @property string $created_at
 * @property int $updated_by
 * @property string $updated_at
 * @property int $is_deleted
 */
class Songs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'songs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['album_id', 'name', 'release_date', 'featured_image', 'genre_id', 'created_by', 'created_at', 'updated_by', 'is_deleted'], 'required'],
            [['album_id', 'genre_id', 'created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['release_date', 'created_at', 'updated_at'], 'safe'],
            [['name', 'featured_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'album_id' => 'Album ID',
            'name' => 'Name',
            'release_date' => 'Release Date',
            'featured_image' => 'Featured Image',
            'genre_id' => 'Genre ID',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
