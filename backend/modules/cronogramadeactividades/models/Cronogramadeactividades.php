<?php

namespace backend\modules\cronogramadeactividades\models;
use backend\modules\proyectosinternos\models\Proyectosinternos;

use Yii;

/**
 * This is the model class for table "cronogramadeactividades".
 *
 * @property int $idcronogramadeactividades
 * @property string $actividad
 * @property string $fecha_de_realizacion
 * @property string|null $entregables
 * @property int $proyectosinternos_id
 *
 * @property Proyectosinternos $proyectosinternos
 */
class Cronogramadeactividades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cronogramadeactividades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['actividad', 'fecha_de_realizacion', 'proyectosinternos_id'], 'required'],
            [['actividad', 'entregables'], 'string'],
            [['fecha_de_realizacion'], 'safe'],
            [['proyectosinternos_id'], 'integer'],
            [['proyectosinternos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Proyectosinternos::className(), 'targetAttribute' => ['proyectosinternos_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcronogramadeactividades' => 'Idcronogramadeactividades',
            'actividad' => 'Actividad',
            'fecha_de_realizacion' => 'Fecha De Realizacion',
            'entregables' => 'Entregables',
            'proyectosinternos_id' => 'Proyectosinternos ID',
        ];
    }

    /**
     * Gets query for [[Proyectosinternos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProyectosinternos()
    {
        return $this->hasOne(Proyectosinternos::className(), ['id' => 'proyectosinternos_id']);
    }
}
