<?php

namespace backend\modules\reportes\models;
use backend\modules\proyectosinternos\models\Proyectosinternos;
use Yii;

/**
 * This is the model class for table "reportes".
 *
 * @property int $idreportes
 * @property int $avance_reporte
 * @property string $actividad_reporte
 * @property string $anexo_reporte
 * @property string $conclusion_reporte
 * @property string $observacion_reporte
 * @property int $proyectosinternos_id
 *
 * @property Proyectosinternos $proyectosinternos
 */
class Reportes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reportes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['avance_reporte', 'actividad_reporte', 'anexo_reporte', 'conclusion_reporte', 'observacion_reporte', 'proyectosinternos_id'], 'required'],
            [['avance_reporte', 'proyectosinternos_id'], 'integer'],
            [['actividad_reporte', 'anexo_reporte', 'conclusion_reporte', 'observacion_reporte'], 'string', 'max' => 45],
            [['proyectosinternos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Proyectosinternos::className(), 'targetAttribute' => ['proyectosinternos_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idreportes' => 'Idreportes',
            'avance_reporte' => 'Avance Reporte',
            'actividad_reporte' => 'Actividad Reporte',
            'anexo_reporte' => 'Anexo Reporte',
            'conclusion_reporte' => 'Conclusion Reporte',
            'observacion_reporte' => 'Observacion Reporte',
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
