<?php

namespace app\controllers;

use app\models\Blog;
use yii\web\Controller;
use Yii;

class LaserController extends Controller
{
    public function actionIndex()
    {
        $blogs = Blog::find()->all();
        return $this->render('index', compact('blogs'));
    }

    public function actionView($id)
    {
        // Найти новость по идентификатору
        $blog = Blog::findOne($id);

        // Проверка наличия новости
        if (!$blog) {
            throw new \yii\web\NotFoundHttpException('Страница не найдена.');
        }

        return $this->render('view', compact('blog'));
    }

    public function actionCompany()
    {
        return $this->render('company');
    }
}
