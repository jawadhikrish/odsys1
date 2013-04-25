<?php

class ReportsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//private $idCodt = 1;
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
				'accessControl', // perform access control for CRUD operations
				'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
						'actions'=>array('index','create','update','admin','delete','view','report1','excel','pdf'),
						'users'=>array('@'),
				),
				array('deny',  // deny all users
						'users'=>array('*'),
				),
		);
	}


	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
				'model'=>$this->loadModel($id),
		));
	}


	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionReport1()
	{
		$modelCons = Cons::model();
		$model=new Cons();
		if(isset($_POST['Cons'])){
			$modelCons->attributes = $_POST['Cons'];
			$this->render('report1',array(
					'model'=>$modelCons,
					'idCod'=>$modelCons->COD,
					'excel'=>0,
					'pdf'=>0,
			));
		}
		else{
			$this->render('report1',array(
					'model'=>$model,
					'idCod'=>$modelCons->COD,
					'excel'=>0,
					'pdf'=>0,
			));
		}

	}
	
	public function actionExcel($idCodt)
	{
		$modelCons = Cons::model();
		$model=new Cons();
			$this->render('report1',array(
					'model'=>$model,
					'idCod'=>$modelCons->COD,
					'excel'=>$idCodt,
					'pdf'=>0,
			));
	}
	
	public function actionPdf($idCodt)
	{
		$modelCons = Cons::model();
		$model=new Cons();
		$this->render('report1',array(
				'model'=>$model,
				'idCod'=>$modelCons->COD,
				'excel'=>0,
				'pdf'=>$idCodt,
		));
	}

}
