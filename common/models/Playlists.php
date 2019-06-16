<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "playlists".
 *
 * @property int $id
 * @property int $song_id
 * @property int $user_id
 * @property int $created_by
 * @property string $created_at
 * @property int $updated_by
 * @property string $updated_at
 * @property int $is_deleted
 */
class Playlists extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'playlists';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['song_id', 'user_id', 'created_by', 'created_at', 'updated_by', 'is_deleted'], 'required'],
            [['song_id', 'user_id', 'created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'song_id' => 'Song ID',
            'user_id' => 'User ID',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
