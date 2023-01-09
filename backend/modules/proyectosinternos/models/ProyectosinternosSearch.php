<?php

namespace backend\modules\proyectosinternos\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\proyectosinternos\models\Proyectosinternos;

/**
 * ProyectosinternosSearch represents the model behind the search form of `backend\modules\proyectosinternos\models\Proyectosinternos`.
 */
class ProyectosinternosSearch extends Proyectosinternos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'periodos_idperiodos', 'membretes_idmembretes'], 'integer'],
            [['titulo_proyecto', 'tipo_investigacion_proyecto', 'area_de_desarrollo', 'descripcion_proyecto', 'duracion_proyecto', 'institucion_apoyoeconomico', 'resumen_proyecto', 'introduccion_proyecto', 'estado_arte_proyecto', 'objetivo_general_proyecto', 'objetivo_especifico_proyecto', 'impactos_proyecto', 'metodologia_proyecto', 'vinculacion_sector_proyecto', 'referencias_proyecto', 'lugar_desarrollo_proyecto', 'infraestructura_proyecto', 'user_id'], 'safe'],
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
        $query = Proyectosinternos::find();

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
            'periodos_idperiodos' => $this->periodos_idperiodos,
            'membretes_idmembretes' => $this->membretes_idmembretes,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'titulo_proyecto', $this->titulo_proyecto])
            ->andFilterWhere(['like', 'tipo_investigacion_proyecto', $this->tipo_investigacion_proyecto])
            ->andFilterWhere(['like', 'area_de_desarrollo', $this->area_de_desarrollo])
            ->andFilterWhere(['like', 'descripcion_proyecto', $this->descripcion_proyecto])
            ->andFilterWhere(['like', 'duracion_proyecto', $this->duracion_proyecto])
            ->andFilterWhere(['like', 'institucion_apoyoeconomico', $this->institucion_apoyoeconomico])
            ->andFilterWhere(['like', 'resumen_proyecto', $this->resumen_proyecto])
            ->andFilterWhere(['like', 'introduccion_proyecto', $this->introduccion_proyecto])
            ->andFilterWhere(['like', 'estado_arte_proyecto', $this->estado_arte_proyecto])
            ->andFilterWhere(['like', 'objetivo_general_proyecto', $this->objetivo_general_proyecto])
            ->andFilterWhere(['like', 'objetivo_especifico_proyecto', $this->objetivo_especifico_proyecto])
            ->andFilterWhere(['like', 'impactos_proyecto', $this->impactos_proyecto])
            ->andFilterWhere(['like', 'metodologia_proyecto', $this->metodologia_proyecto])
            ->andFilterWhere(['like', 'vinculacion_sector_proyecto', $this->vinculacion_sector_proyecto])
            ->andFilterWhere(['like', 'referencias_proyecto', $this->referencias_proyecto])
            ->andFilterWhere(['like', 'lugar_desarrollo_proyecto', $this->lugar_desarrollo_proyecto])
            ->andFilterWhere(['like', 'infraestructura_proyecto', $this->infraestructura_proyecto]);

        return $dataProvider;
    }
}
