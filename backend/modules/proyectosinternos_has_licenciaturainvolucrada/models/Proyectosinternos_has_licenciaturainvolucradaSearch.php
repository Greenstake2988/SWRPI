<?php

namespace backend\modules\proyectosinternos_has_licenciaturainvolucrada\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\proyectosinternos_has_licenciaturainvolucrada\models\Proyectosinternos_has_licenciaturainvolucrada;

/**
 * Proyectosinternos_has_licenciaturainvolucradaSearch represents the model behind the search form of `backend\modules\proyectosinternos_has_licenciaturainvolucrada\models\Proyectosinternos_has_licenciaturainvolucrada`.
 */
class Proyectosinternos_has_licenciaturainvolucradaSearch extends Proyectosinternos_has_licenciaturainvolucrada
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'licenciaturainvolucrada_idlicenciaturainvolucrada', 'proyectosinternos_id'], 'integer'],
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
        $query = Proyectosinternos_has_licenciaturainvolucrada::find();

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
            'licenciaturainvolucrada_idlicenciaturainvolucrada' => $this->licenciaturainvolucrada_idlicenciaturainvolucrada,
            'proyectosinternos_id' => $this->proyectosinternos_id,
        ]);

        return $dataProvider;
    }
}
