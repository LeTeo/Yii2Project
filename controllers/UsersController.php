<?php 

namespace app\controllers;

use yii\web\Controller;
use app\models\Users;

class UsersController extends Controller{
	
	public function actionIndex(){
		$users = users::find()->all();
		return $this ->render('index',['users'=>$users]);
	}
}