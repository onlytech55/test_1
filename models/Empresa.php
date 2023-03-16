<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa".
 *
 * @property int $id_empresa
 * @property string $nombre
 *
 * @property RolUsuarios[] $rolUsuarios
 */
class Empresa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empresa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_empresa' => 'Id Empresa',
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
        return $this->hasMany(RolUsuarios::class, ['id_empresa' => 'id_empresa']);
    }
}
