<?php

namespace backend\modules\reportes\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\reportes\models\Reportes;

/**
 * ReportesSearch represents the model behind the search form of `backend\modules\reportes\models\Reportes`.
 */
class ReportesSearch extends Reportes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idreportes', 'avance_reporte', 'proyectosinternos_id'], 'integer'],
            [['actividad_reporte', 'anexo_reporte', 'conclusion_reporte', 'observacion_reporte'], 'safe'],
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
        $query = Reportes::find();

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
            'idreportes' => $this->idreportes,
            'avance_reporte' => $this->avance_reporte,
            'proyectosinternos_id' => $this->proyectosinternos_id,
        ]);

        $query->andFilterWhere(['like', 'actividad_reporte', $this->actividad_reporte])
            ->andFilterWhere(['like', 'anexo_reporte', $this->anexo_reporte])
            ->andFilterWhere(['like', 'conclusion_reporte', $this->conclusion_reporte])
            ->andFilterWhere(['like', 'observacion_reporte', $this->observacion_reporte]);

        return $dataProvider;
    }
}
