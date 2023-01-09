<?php

namespace backend\modules\periodos\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\periodos\models\Periodos;

/**
 * PeriodosSearch represents the model behind the search form of `backend\modules\periodos\models\Periodos`.
 */
class PeriodosSearch extends Periodos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idperiodos','fechadeproyecto_idfechadeproyecto' ], 'integer'],

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
        $query = Periodos::find();

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
            'idperiodos' => $this->idperiodos,
            'fechadeproyecto_idfechadeproyecto' => $this->fechadeproyecto_idfechadeproyecto,
        ]);

        return $dataProvider;
    }
}
