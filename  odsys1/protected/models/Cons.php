<?php

/**
 * This is the model class for table "cons".
 *
 * The followings are the available columns in table 'cons':
 * @property integer $Registro
 * @property string $FECHA
 * @property integer $COD
 * @property integer $CODT
 * @property integer $C1VESALANO
 * @property integer $CSUBSECUENTE
 * @property integer $APREVENTIVA
 * @property integer $ACURATIVA
 * @property integer $PROMHORAS
 * @property integer $PROMACTIV
 *
 * The followings are the available model relations:
 * @property Up $cOD
 * @property Tipos $cODT
 */
class Cons extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cons the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cons';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Registro, FECHA', 'required'),
			array('Registro, COD, CODT, C1VESALANO, CSUBSECUENTE, APREVENTIVA, ACURATIVA, PROMHORAS, PROMACTIV', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Registro, FECHA, COD, CODT, C1VESALANO, CSUBSECUENTE, APREVENTIVA, ACURATIVA, PROMHORAS, PROMACTIV', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'cOD' => array(self::BELONGS_TO, 'Up', 'COD'),
			'cODT' => array(self::BELONGS_TO, 'Tipos', 'CODT'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Registro' => 'Registro',
			'FECHA' => 'Fecha',
			'COD' => 'Cod',
			'CODT' => 'Codt',
			'C1VESALANO' => 'C1 Vesalano',
			'CSUBSECUENTE' => 'Csubsecuente',
			'APREVENTIVA' => 'Apreventiva',
			'ACURATIVA' => 'Acurativa',
			'PROMHORAS' => 'Promhoras',
			'PROMACTIV' => 'Promactiv',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Registro',$this->Registro);
		$criteria->compare('FECHA',$this->FECHA,true);
		$criteria->compare('COD',$this->COD);
		$criteria->compare('CODT',$this->CODT);
		$criteria->compare('C1VESALANO',$this->C1VESALANO);
		$criteria->compare('CSUBSECUENTE',$this->CSUBSECUENTE);
		$criteria->compare('APREVENTIVA',$this->APREVENTIVA);
		$criteria->compare('ACURATIVA',$this->ACURATIVA);
		$criteria->compare('PROMHORAS',$this->PROMHORAS);
		$criteria->compare('PROMACTIV',$this->PROMACTIV);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}