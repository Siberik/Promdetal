<?php  
namespace app\controllers;

use yii\web\Controller;

class LaserController extends Controller
{


    public function actionIndex()
    {
        return $this->render ('index');
    }
}
?>