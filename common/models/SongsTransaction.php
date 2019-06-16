<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "songs_transaction".
 *
 * @property int $id
 * @property int $song_id
 * @property int $singer_id
 */
class SongsTransaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'songs_transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['song_id', 'singer_id'], 'required'],
            [['song_id', 'singer_id'], 'integer'],
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
            'singer_id' => 'Singer ID',
        ];
    }
}
