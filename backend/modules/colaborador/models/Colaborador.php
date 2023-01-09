<?php

namespace backend\modules\colaborador\models;
use backend\modules\proyectosinternos\models\Proyectosinternos;
use Yii;

/**
 * This is the model class for table "colaborador".
 *
 * @property int $iddocente
 * @property string $nombre
 * @property string $tiempocompleto Si, No
 * @property string $nivelSNI si\\r\\nno
 * @property string $perfilpromep Si, No
 * @property int $proyectosinternos_id
 *
 * @property Proyectosinternos $proyectosinternos
 */
class Colaborador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'colaborador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'tiempocompleto', 'nivelSNI', 'perfilpromep', 'proyectosinternos_id'], 'required'],
            [['nombre'], 'string'],
            [['proyectosinternos_id'], 'integer'],
            [['tiempocompleto', 'nivelSNI', 'perfilpromep'], 'string', 'max' => 2],
            [['proyectosinternos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Proyectosinternos::className(), 'targetAttribute' => ['proyectosinternos_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iddocente' => 'Iddocente',
            'nombre' => 'Nombre',
            'tiempocompleto' => 'Tiempocompleto',
            'nivelSNI' => 'Nivel Sni',
            'perfilpromep' => 'Perfilpromep',
            'proyectosinternos_id' => 'Titulo del Proyecto',
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
