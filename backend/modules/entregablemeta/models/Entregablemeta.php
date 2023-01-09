<?php

namespace backend\modules\entregablemeta\models;
use backend\modules\proyectosinternos\models\Proyectosinternos;
use Yii;

/**
 * This is the model class for table "entregablemeta".
 *
 * @property int $identregablemeta
 * @property string $tipo_entregable 1. academico \\\\\\\\n2. humano
 * @property string $descripcion Integración de alumnos de licenciatura al proyecto\\\\\\\\nParticipación de alumnos residentes\\\\\\\\nParticipación de estudiantes de servicio social\\\\\\\\nParticipación de estudiantes por créditos complementarios\\\\\\\\nArtículos científicos en revista arbitrada \\\\\\\\nArtículos científicos en revista indizadas\\\\\\\\nTesis de maestría a desarrollar (indicar en observaciones nombre del tesista, título y anexar programa de trabajo sintético)\\\\\\\\nLibros\\\\\\\\nCapítulos de libros\\\\\\\\nRegistro de Propiedad Intelectual e Industrial\\\\\\\\nPrototipos\\\\\\\\nPaquetes tecnológicos\\\\\\\\nInformes técnicos a empresas o instituciones\\\\\\\\nOtros (especifique)
 * @property string $fecha_entrega
 * @property string|null $observacion
 * @property string|null $evidencia subir documento de evidencia\\\\\\\\n(documento)
 * @property int $proyectosinternos_id
 *
 * @property Proyectosinternos $proyectosinternos
 */
class Entregablemeta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entregablemeta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_entregable', 'descripcion', 'fecha_entrega', 'proyectosinternos_id'], 'required'],
            [['fecha_entrega'], 'safe'],
            [['proyectosinternos_id'], 'integer'],
            [['tipo_entregable', 'descripcion', 'observacion', 'evidencia'], 'string', 'max' => 45],
            [['proyectosinternos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Proyectosinternos::className(), 'targetAttribute' => ['proyectosinternos_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'identregablemeta' => 'Identregablemeta',
            'tipo_entregable' => 'Tipo Entregable',
            'descripcion' => 'Descripcion',
            'fecha_entrega' => 'Fecha Entrega',
            'observacion' => 'Observacion',
            'evidencia' => 'Evidencia',
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
