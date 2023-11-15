<?php  
namespace app\controllers;

use app\models\Blog;
use yii\web\Controller;

class LaserController extends Controller
{


    public function actionIndex()
    {
        $blog= Blog::find()-> all();
        return $this->render ('index',compact('blog'));
    }
    public function actionCompany()
    {
        return $this->render('company');
    }
}
?>