<?php

namespace backend\modules\formatos\models;
use backend\modules\proyectosinternos\models\Proyectosinternos;

use Yii;

/**
 * This is the model class for table "formatos".
 *
 * @property int $idformatos
 * @property string|null $primer_reporte
 * @property string|null $segundo_reporte
 * @property string|null $tercer_reporte
 * @property string|null $protocolo
 * @property string|null $concentrador
 * @property string|null $registro_plantrabajo
 * @property int $proyectosinternos_id
 *
 * @property Proyectosinternos $proyectosinternos
 */
class Formatos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'formatos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['primer_reporte', 'segundo_reporte', 'tercer_reporte', 'protocolo', 'concentrador', 'registro_plantrabajo'], 'string'],
            [['proyectosinternos_id'], 'required'],
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
            'idformatos' => 'Idformatos',
            'primer_reporte' => 'Primer Reporte',
            'segundo_reporte' => 'Segundo Reporte',
            'tercer_reporte' => 'Tercer Reporte',
            'protocolo' => 'Protocolo',
            'concentrador' => 'Concentrador',
            'registro_plantrabajo' => 'Registro Plantrabajo',
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
