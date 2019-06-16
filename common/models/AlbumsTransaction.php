<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "albums_transaction".
 *
 * @property int $id
 * @property int $album_id
 * @property int $singer_id
 */
class AlbumsTransaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'albums_transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['album_id', 'singer_id'], 'required'],
            [['album_id', 'singer_id'], 'integer'],
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
            'singer_id' => 'Singer ID',
        ];
    }
}
