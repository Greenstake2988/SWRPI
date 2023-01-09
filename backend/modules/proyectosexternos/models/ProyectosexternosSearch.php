<?php

namespace backend\modules\proyectosexternos\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\proyectosexternos\models\Proyectosexternos;

/**
 * ProyectosexternosSearch represents the model behind the search form of `backend\modules\proyectosexternos\models\Proyectosexternos`.
 */
class ProyectosexternosSearch extends Proyectosexternos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idproyectosexternos'], 'integer'],
            [['nombre_proyectos_externos', 'evidencia', 'observaciones', 'user_id'], 'safe'],
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
        $query = Proyectosexternos::find();

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
            'idproyectosexternos' => $this->idproyectosexternos,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'nombre_proyectos_externos', $this->nombre_proyectos_externos])
            ->andFilterWhere(['like', 'evidencia', $this->evidencia])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
