<?php

namespace backend\modules\cronogramadeactividades\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\cronogramadeactividades\models\Cronogramadeactividades;

/**
 * CronogramadeactividadesSearch represents the model behind the search form of `backend\modules\cronogramadeactividades\models\Cronogramadeactividades`.
 */
class CronogramadeactividadesSearch extends Cronogramadeactividades
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcronogramadeactividades', 'proyectosinternos_id'], 'integer'],
            [['actividad', 'fecha_de_realizacion', 'entregables'], 'safe'],
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
        $query = Cronogramadeactividades::find();

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
            'idcronogramadeactividades' => $this->idcronogramadeactividades,
            'fecha_de_realizacion' => $this->fecha_de_realizacion,
            'proyectosinternos_id' => $this->proyectosinternos_id,
        ]);

        $query->andFilterWhere(['like', 'actividad', $this->actividad])
            ->andFilterWhere(['like', 'entregables', $this->entregables]);

        return $dataProvider;
    }
}
