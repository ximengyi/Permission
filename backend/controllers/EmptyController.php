<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 *
 */
class EmptyController extends Controller
{

    public function actionIndex()
    {
       
        return $this->render('empty');
    }


}
