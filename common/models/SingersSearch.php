<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Singers;

/**
 * SingersSearch represents the model behind the search form of `common\models\Singers`.
 */
class SingersSearch extends Singers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['name', 'image', 'dob', 'info', 'created_at', 'updated_at'], 'safe'],
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
        $query = Singers::find();

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
            'dob' => $this->dob,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
            'is_deleted' => $this->is_deleted,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'info', $this->info]);

        return $dataProvider;
    }
}
