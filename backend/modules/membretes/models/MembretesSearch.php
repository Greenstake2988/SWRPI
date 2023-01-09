<?php

namespace backend\modules\membretes\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\membretes\models\Membretes;

/**
 * MembretesSearch represents the model behind the search form of `backend\modules\membretes\models\Membretes`.
 */
class MembretesSearch extends Membretes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idmembretes'], 'integer'],
            [['superior_membrete', 'inferior_membrete'], 'safe'],
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
     * Crears data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Membretes::find();

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
            'idmembretes' => $this->idmembretes,
        ]);

        $query->andFilterWhere(['like', 'superior_membrete', $this->superior_membrete])
            ->andFilterWhere(['like', 'inferior_membrete', $this->inferior_membrete]);

        return $dataProvider;
    }
}
