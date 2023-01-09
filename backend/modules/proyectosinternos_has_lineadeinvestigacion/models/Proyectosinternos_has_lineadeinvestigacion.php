<?php

namespace backend\modules\proyectosinternos_has_lineadeinvestigacion\models;
use backend\modules\proyectosinternos\models\Proyectosinternos;
use backend\modules\lineadeinvestigacion\models\Lineadeinvestigacion;
use Yii;

/**
 * This is the model class for table "proyectosinternos_has_lineadeinvestigacion".
 *
 * @property int $id
 * @property int $lineadeinvestigacion_idlineadeinvestigacion
 * @property int $proyectosinternos_id
 *
 * @property Lineadeinvestigacion $lineadeinvestigacionIdlineadeinvestigacion
 * @property Proyectosinternos $proyectosinternos
 */
class Proyectosinternos_has_lineadeinvestigacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proyectosinternos_has_lineadeinvestigacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lineadeinvestigacion_idlineadeinvestigacion', 'proyectosinternos_id'], 'required'],
            [['lineadeinvestigacion_idlineadeinvestigacion', 'proyectosinternos_id'], 'integer'],
            [['lineadeinvestigacion_idlineadeinvestigacion'], 'exist', 'skipOnError' => true, 'targetClass' => Lineadeinvestigacion::className(), 'targetAttribute' => ['lineadeinvestigacion_idlineadeinvestigacion' => 'id']],
            [['proyectosinternos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Proyectosinternos::className(), 'targetAttribute' => ['proyectosinternos_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lineadeinvestigacion_idlineadeinvestigacion' => 'Lineadeinvestigacion Idlineadeinvestigacion',
            'proyectosinternos_id' => 'Proyectosinternos ID',
        ];
    }

    /**
     * Gets query for [[LineadeinvestigacionIdlineadeinvestigacion]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLineadeinvestigacionIdlineadeinvestigacion()
    {
        return $this->hasOne(Lineadeinvestigacion::className(), ['id' => 'lineadeinvestigacion_idlineadeinvestigacion']);
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
