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
class Albums_Transaction extends \yii\db\ActiveRecord
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
            [['id', 'album_id', 'singer_id'], 'required'],
            [['id', 'album_id', 'singer_id'], 'integer'],
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
            'album_id' => 'Album ID',
            'singer_id' => 'Singer ID',
        ];
    }
}
