<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "albums".
 *
 * @property int $id
 * @property string $name
 * @property string $featured_image
 * @property int $created_by
 * @property string $created_at
 * @property int $updated_by
 * @property string $updated_at
 * @property int $is_deleted
 */
class Albums extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'albums';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'featured_image'], 'required'],
            [['created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
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
            'name' => 'Name',
            'featured_image' => 'Featured Image',
            // 'created_by' => 'Created By',
            // 'created_at' => 'Created At',
            // 'updated_by' => 'Updated By',
            // 'updated_at' => 'Updated At',
            // 'is_deleted' => 'Is Deleted',
        ];
    }
}
