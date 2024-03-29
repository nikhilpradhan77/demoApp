<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AlbumsTransaction;

/**
 * AlbumsTransactionSearch represents the model behind the search form of `common\models\AlbumsTransaction`.
 */
class AlbumsTransactionSearch extends AlbumsTransaction
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'album_id', 'singer_id'], 'integer'],
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
        $query = AlbumsTransaction::find();

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
            'singer_id' => $this->singer_id,
        ]);

        return $dataProvider;
    }
}
