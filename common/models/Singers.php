<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "singers".
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $dob
 * @property string $info
 * @property int $created_by
 * @property string $created_at
 * @property int $updated_by
 * @property string $updated_at
 * @property int $is_deleted
 */
class Singers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'singers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'image', 'dob', 'info', 'created_by', 'created_at', 'updated_by', 'is_deleted'], 'required'],
            [['dob', 'created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['name', 'image', 'info'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'image' => 'Image',
            'dob' => 'Dob',
            'info' => 'Info',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
