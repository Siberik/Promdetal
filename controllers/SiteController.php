<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\UserEvent;
use app\models\Blog;
use yii\widgets\LinkPager;
use yii\web\NotFoundHttpException;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'welcome'],
                'rules' => [
                    [
                        'actions' => ['welcome'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['edit-blog', 'delete-blog'],
                        'allow' => true,
                        'roles' => ['@'], 
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Initialize the controller.
     */
    public function init()
    {
        parent::init();
    
        $this->on(\yii\web\User::EVENT_AFTER_LOGIN, [self::class, 'afterLogin']);
    }
    
    public function actionEditBlog($id = null)
{
    $model = $id ? Blog::findBlogById($id) : new Blog();

    if (Yii::$app->request->post('Blog')) {
        $model->load(Yii::$app->request->post());
        if ($model->saveBlog()) {
            Yii::$app->session->setFlash('success', 'Статья успешно сохранена.');
            return $this->redirect(['site/welcome']);
        }
    }

    return $this->render('editBlog', ['model' => $model]);
}

public function actionDeleteBlog($id)
{
    $model = Blog::findBlogById($id);
    if ($model) {
        $model->deleteBlog();
        Yii::$app->session->setFlash('success', 'Статья успешно удалена.');
    }
    return $this->redirect(['site/welcome']);
}

    /**
     * Handle the afterLogin event.
     *
     * @param UserEvent $event
     */
    public static function afterLogin($event)
    {
        $user = Yii::$app->user->identity;
        $loginTime = Yii::$app->formatter->asDatetime(time());
        $ip = Yii::$app->getRequest()->getUserIP();
    
        $subject = 'Вход Администратора';
        $body = "В $loginTime вошел администратор с логином $user->username\n\nIP входа: $ip";
    
        Yii::$app->mailer->compose()
            ->setTo('lolgagr@gmail.com') // Замените на ваш адрес электронной почты
            ->setSubject($subject)
            ->setTextBody($body)
            ->send();
    
        Yii::$app->response->redirect(['site/welcome']);
    }
    
    


    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Welcome action after login.
     *
     * @return string
     */
    public function actionWelcome()
    {
        $query = Blog::find();
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 15, // Установите желаемый размер страницы
            ],
        ]);
    
        return $this->render('welcome', ['dataProvider' => $dataProvider]);
    }
    
}