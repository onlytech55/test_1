<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "etapa".
 *
 * @property int $id_etapa
 * @property string $nombre
 *
 * @property RolUsuarios[] $rolUsuarios
 */
class Etapa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'etapa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_etapa' => 'Id Etapa',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * Gets query for [[RolUsuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRolUsuarios()
    {
        return $this->hasMany(RolUsuarios::class, ['id_etapa' => 'id_etapa']);
    }
}
