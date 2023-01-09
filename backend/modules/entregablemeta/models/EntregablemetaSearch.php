<?php

namespace backend\modules\entregablemeta\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\entregablemeta\models\Entregablemeta;

/**
 * EntregablemetaSearch represents the model behind the search form of `backend\modules\entregablemeta\models\Entregablemeta`.
 */
class EntregablemetaSearch extends Entregablemeta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['identregablemeta', 'proyectosinternos_id'], 'integer'],
            [['tipo_entregable', 'descripcion', 'fecha_entrega', 'observacion', 'evidencia'], 'safe'],
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
        $query = Entregablemeta::find();

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
            'identregablemeta' => $this->identregablemeta,
            'fecha_entrega' => $this->fecha_entrega,
            'proyectosinternos_id' => $this->proyectosinternos_id,
        ]);

        $query->andFilterWhere(['like', 'tipo_entregable', $this->tipo_entregable])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'observacion', $this->observacion])
            ->andFilterWhere(['like', 'evidencia', $this->evidencia]);

        return $dataProvider;
    }
}
