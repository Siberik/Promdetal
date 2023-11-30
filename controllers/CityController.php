<?
// controllers/CityController.php

namespace app\controllers;

use app\models\City;
use Yii;
use yii\web\Controller;

class CityController extends Controller
{
    public function actionView($id)
    {
        $city = City::findOne($id);

        if (!$city) {
            throw new \yii\web\NotFoundHttpException('Город не найден.');
        }

        return $this->render('view', compact('city'));
    }
}

?>