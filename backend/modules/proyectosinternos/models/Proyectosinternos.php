<?php

namespace backend\modules\proyectosinternos\models;
use backend\modules\membretes\models\Membretes;
use backend\modules\user\models\User;
use backend\modules\periodos\models\Periodos;

use Yii;

/**
 * This is the model class for table "proyectosinternos".
 *
 * @property int $id
 * @property string $titulo_proyecto
 * @property string $tipo_investigacion_proyecto 1. basica\\\\\\\\n2.aplicada\\\\\\\\n3.desarrollo tecnologico\\\\\\\\n4.educativa
 * @property string $area_de_desarrollo 1.Ciencias Químicas\\\\\\\\n2.Ingeniería Industrial, Administrativa y Desarrollo Regional\\\\\\\\n3.Ciencias Biológicas\\\\\\\\n4.Ciencias de la Educación\\\\\\\\n5.Ciencias de la Tierra y del Medio Ambiente\\\\\\\\n6.Ciencias del Mar\\\\\\\\n7.Ingeniería Eléctrica, Electrónica\\\\\\\\n8.Ciencias Agrícolas y Forestales\\\\\\\\n9.Ingeniería Química, Bioquímica, Alimentos, Biotecnología\\\\\\\\n10.Ingeniería Mecánica, Mecatrónica\\\\\\\\n11.Ciencias de los Materiales, Polímeros\\\\\\\\n12.Ciencias de la Computación, Sistemas Computacionales, Informática
 * @property string $descripcion_proyecto
 * @property string $duracion_proyecto 1.6meses\\\\\\\\n2.12meses
 * @property string $institucion_apoyoeconomico 1.TecnmValladolid\\\\\\\\ndescribir financiamiento y monto total
 * @property string|null $resumen_proyecto
 * @property string|null $introduccion_proyecto
 * @property string|null $estado_arte_proyecto
 * @property string $objetivo_general_proyecto
 * @property string $objetivo_especifico_proyecto
 * @property int $periodos_idperiodos
 * @property int $membretes_idmembretes
 * @property string|null $impactos_proyecto
 * @property string|null $metodologia_proyecto
 * @property string|null $vinculacion_sector_proyecto
 * @property string|null $referencias_proyecto
 * @property string|null $lugar_desarrollo_proyecto
 * @property string|null $infraestructura_proyecto
 * @property int $user_id
 *
 * @property Colaborador[] $colaboradors
 * @property Cronogramadeactividades[] $cronogramadeactividades
 * @property Entregablemeta[] $entregablemetas
 * @property Formatos[] $formatos
 * @property Membretes $membretesIdmembretes
 * @property Periodos $periodosIdperiodos
 * @property ProyectosinternosHasLicenciaturainvolucrada[] $proyectosinternosHasLicenciaturainvolucradas
 * @property ProyectosinternosHasLineadeinvestigacion[] $proyectosinternosHasLineadeinvestigacions
 * @property Reportes[] $reportes
 * @property User $user
 */
class Proyectosinternos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proyectosinternos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo_proyecto', 'tipo_investigacion_proyecto', 'area_de_desarrollo', 'descripcion_proyecto', 'duracion_proyecto', 'institucion_apoyoeconomico', 'objetivo_general_proyecto', 'objetivo_especifico_proyecto', 'periodos_idperiodos', 'membretes_idmembretes', 'user_id'], 'required'],
            [['descripcion_proyecto', 'resumen_proyecto', 'introduccion_proyecto', 'objetivo_general_proyecto', 'objetivo_especifico_proyecto', 'impactos_proyecto', 'metodologia_proyecto', 'infraestructura_proyecto'], 'string'],
            [['periodos_idperiodos', 'membretes_idmembretes', 'user_id'], 'integer'],
            [['titulo_proyecto', 'tipo_investigacion_proyecto', 'area_de_desarrollo', 'institucion_apoyoeconomico', 'estado_arte_proyecto', 'vinculacion_sector_proyecto', 'referencias_proyecto', 'lugar_desarrollo_proyecto'], 'string', 'max' => 100],
            [['duracion_proyecto'], 'string', 'max' => 45],
            [['membretes_idmembretes'], 'exist', 'skipOnError' => true, 'targetClass' => Membretes::className(), 'targetAttribute' => ['membretes_idmembretes' => 'idmembretes']],
            [['periodos_idperiodos'], 'exist', 'skipOnError' => true, 'targetClass' => Periodos::className(), 'targetAttribute' => ['periodos_idperiodos' => 'idperiodos']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo_proyecto' => 'Titulo Proyecto',
            'tipo_investigacion_proyecto' => 'Tipo Investigacion Proyecto',
            'area_de_desarrollo' => 'Area De Desarrollo',
            'descripcion_proyecto' => 'Descripcion Proyecto',
            'duracion_proyecto' => 'Duracion Proyecto',
            'institucion_apoyoeconomico' => 'Institucion Apoyoeconomico',
            'resumen_proyecto' => 'Resumen Proyecto',
            'introduccion_proyecto' => 'Introduccion Proyecto',
            'estado_arte_proyecto' => 'Estado Arte Proyecto',
            'objetivo_general_proyecto' => 'Objetivo General Proyecto',
            'objetivo_especifico_proyecto' => 'Objetivo Especifico Proyecto',
            'periodos_idperiodos' => 'Periodos Idperiodos',
            'membretes_idmembretes' => 'Membretes Idmembretes',
            'impactos_proyecto' => 'Impactos Proyecto',
            'metodologia_proyecto' => 'Metodologia Proyecto',
            'vinculacion_sector_proyecto' => 'Vinculacion Sector Proyecto',
            'referencias_proyecto' => 'Referencias Proyecto',
            'lugar_desarrollo_proyecto' => 'Lugar Desarrollo Proyecto',
            'infraestructura_proyecto' => 'Infraestructura Proyecto',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[Colaboradors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getColaboradors()
    {
        return $this->hasMany(Colaborador::className(), ['proyectosinternos_id' => 'id']);
    }

    /**
     * Gets query for [[Cronogramadeactividades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCronogramadeactividades()
    {
        return $this->hasMany(Cronogramadeactividades::className(), ['proyectosinternos_id' => 'id']);
    }

    /**
     * Gets query for [[Entregablemetas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEntregablemetas()
    {
        return $this->hasMany(Entregablemeta::className(), ['proyectosinternos_id' => 'id']);
    }

    /**
     * Gets query for [[Formatos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFormatos()
    {
        return $this->hasMany(Formatos::className(), ['proyectosinternos_id' => 'id']);
    }

    /**
     * Gets query for [[MembretesIdmembretes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMembretesIdmembretes()
    {
        return $this->hasOne(Membretes::className(), ['idmembretes' => 'membretes_idmembretes']);
    }

    /**
     * Gets query for [[PeriodosIdperiodos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriodosIdperiodos()
    {
        return $this->hasOne(Periodos::className(), ['idperiodos' => 'periodos_idperiodos']);
    }

    /**
     * Gets query for [[ProyectosinternosHasLicenciaturainvolucradas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProyectosinternosHasLicenciaturainvolucradas()
    {
        return $this->hasMany(ProyectosinternosHasLicenciaturainvolucrada::className(), ['proyectosinternos_id' => 'id']);
    }

    /**
     * Gets query for [[ProyectosinternosHasLineadeinvestigacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProyectosinternosHasLineadeinvestigacions()
    {
        return $this->hasMany(ProyectosinternosHasLineadeinvestigacion::className(), ['proyectosinternos_id' => 'id']);
    }

    /**
     * Gets query for [[Reportes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReportes()
    {
        return $this->hasMany(Reportes::className(), ['proyectosinternos_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
