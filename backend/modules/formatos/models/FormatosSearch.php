<?php

namespace backend\modules\formatos\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\formatos\models\Formatos;

/**
 * FormatosSearch represents the model behind the search form of `backend\modules\formatos\models\Formatos`.
 */
class FormatosSearch extends Formatos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idformatos', 'proyectosinternos_id'], 'integer'],
            [['primer_reporte', 'segundo_reporte', 'tercer_reporte', 'protocolo', 'concentrador', 'registro_plantrabajo'], 'safe'],
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
        $query = Formatos::find();

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
            'idformatos' => $this->idformatos,
            'proyectosinternos_id' => $this->proyectosinternos_id,
        ]);

        $query->andFilterWhere(['like', 'primer_reporte', $this->primer_reporte])
            ->andFilterWhere(['like', 'segundo_reporte', $this->segundo_reporte])
            ->andFilterWhere(['like', 'tercer_reporte', $this->tercer_reporte])
            ->andFilterWhere(['like', 'protocolo', $this->protocolo])
            ->andFilterWhere(['like', 'concentrador', $this->concentrador])
            ->andFilterWhere(['like', 'registro_plantrabajo', $this->registro_plantrabajo]);

        return $dataProvider;
    }
}
