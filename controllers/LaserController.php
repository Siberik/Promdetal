<?php

namespace app\controllers;

use app\models\ApplicationForm;
use app\models\Blog;
use app\models\Product; // Добавлено для работы с моделью Product
use Yii;
use yii\web\Controller;

class LaserController extends Controller
{
    public function actionIndex()
    {
        $model = new ApplicationForm();
        $formSubmitted = false;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Обработка формы
            Yii::$app->mailer->compose()
                ->setTo('lolgagr@gmail.com')
                ->setFrom([$model->email => $model->name])
                ->setSubject('Новая заявка')
                ->setTextBody($model->message)
                ->send();

            // Дополнительные действия после отправки формы
            $formSubmitted = true;
        }

        $blogs = Blog::find()->all();

     
        

        return $this->render('index', compact('blogs', 'model', 'formSubmitted'));
    }
   
   
    public function actionView($id)
    {
        $blog = Blog::findOne($id);

        if (!$blog) {
            throw new \yii\web\NotFoundHttpException('Страница не найдена.');
        }

        return $this->render('view', compact('blog'));
    }

    public function actionCompany()
    {
        return $this->render('company');
    }

    public function actionApplicationForm()
    {
        $model = new ApplicationForm();
        $formSubmitted = false;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->mailer->compose()
                ->setTo('lolgagr@gmail.com')
                ->setFrom([$model->email => $model->name])
                ->setSubject('Новая заявка')
                ->setTextBody($model->message)
                ->send();

            $formSubmitted = true;
        }

        return $this->render('applicationForm', [
            'model' => $model,
            'formSubmitted' => $formSubmitted,
        ]);
    }

    public function actionProduct($id)
    {
        $product = Product::findOne($id);

        if (!$product) {
            throw new \yii\web\NotFoundHttpException('Продукт не найден.');
        }

        return $this->render('product', compact('product'));
    }
}
