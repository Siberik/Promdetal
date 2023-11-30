<?php

namespace app\controllers;

use app\models\ApplicationForm;
use yii\web\Controller;
use app\models\Blog;
use app\models\City;
use Yii;


class LaserController extends Controller
{
    public function actionViewCity($id)
    {
        $city = City::findOne($id);

        if (!$city) {
            throw new \yii\web\NotFoundHttpException('Город не найден.');
        }

        return $this->render('viewCity', compact('city'));
    }
    public function actionIndex()
    {
        $model = new ApplicationForm();
        $formSubmitted = false;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Отправка письма
            Yii::$app->mailer->compose()
                ->setTo('lolgagr@gmail.com') // Замените на свой почтовый адрес
                ->setFrom(['lolbagg@yandex.ru' => 'Новая заявка'])
                ->setSubject('Новая заявка')
                ->setTextBody(
                    "Вам поступил новый заказ:\n" .
                    "Имя: {$model->name}\n" .
                    "Почта: {$model->email}\n" .
                    "Телефон: {$model->phone}\n" .
                    "Сообщение: {$model->message}"
                )
                ->send();

            // Дополнительные действия после отправки, например, перенаправление пользователя
            $formSubmitted = true;
        }



        $blogs = Blog::find()->all();
        return $this->render('index', compact('blogs', 'model', 'formSubmitted'));
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

    public function actionApplicationForm()
    {
        $model = new ApplicationForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Отправка заявки на почту
            Yii::$app->mailer->compose()
                ->setTo('lolgagr@gmail.com')
                ->setFrom([$model->email => $model->name])
                ->setSubject('Новая заявка')
                ->setTextBody($model->message)
                ->send();

            // Сохранение заявки в базе данных (если необходимо)
            // $model->save();

            Yii::$app->session->setFlash('success', 'Заявка успешно отправлена!');
            return $this->refresh();
        }

        return $this->render('applicationForm', [
            'model' => $model,
        ]);
    }
    
    
    
}
