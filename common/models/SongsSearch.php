<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Songs;

/**
 * SongsSearch represents the model behind the search form of `common\models\Songs`.
 */
class SongsSearch extends Songs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'album_id', 'genre_id', 'created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['name', 'release_date', 'featured_image', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Songs::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'album_id' => $this->album_id,
            'release_date' => $this->release_date,
            'genre_id' => $this->genre_id,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
            'is_deleted' => $this->is_deleted,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'featured_image', $this->featured_image]);

        return $dataProvider;
    }
}
