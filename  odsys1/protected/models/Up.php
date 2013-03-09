<?php

/**
 * This is the model class for table "up".
 *
 * The followings are the available columns in table 'up':
 * @property integer $COD
 * @property string $DES
 *
 * The followings are the available model relations:
 * @property Capi[] $capis
 * @property Cons[] $cons
 * @property Eqp[] $eqps
 * @property Infra[] $infras
 * @property Perm[] $perms
 * @property Pla[] $plas
 * @property Pob[] $pobs
 * @property Ress[] $resses
 * @property Supr[] $suprs
 * @property Upje[] $upjes
 */
class Up extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Up the static model class
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
		return 'up';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COD, DES', 'required'),
			array('COD', 'numerical', 'integerOnly'=>true),
			array('DES', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('COD, DES', 'safe', 'on'=>'search'),
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
			'capis' => array(self::HAS_MANY, 'Capi', 'COD'),
			'cons' => array(self::HAS_MANY, 'Cons', 'COD'),
			'eqps' => array(self::HAS_MANY, 'Eqp', 'COD'),
			'infras' => array(self::HAS_MANY, 'Infra', 'COD'),
			'perms' => array(self::HAS_MANY, 'Perm', 'COD'),
			'plas' => array(self::HAS_MANY, 'Pla', 'COD'),
			'pobs' => array(self::HAS_MANY, 'Pob', 'COD'),
			'resses' => array(self::HAS_MANY, 'Ress', 'COD'),
			'suprs' => array(self::HAS_MANY, 'Supr', 'COD'),
			'upjes' => array(self::HAS_MANY, 'Upje', 'COD'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'COD' => 'Cod',
			'DES' => 'Des',
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

		$criteria->compare('COD',$this->COD);
		$criteria->compare('DES',$this->DES,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}