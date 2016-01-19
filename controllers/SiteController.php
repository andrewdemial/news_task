<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\News;


class SiteController extends Controller
{
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

    public function actionIndex()
    {
        //Записываем в переменную все новости из базы через модель
        $model = News::find()->all();
        //Передаем переменную представлению
        return $this->render('index', ['news' => $model]);
    }

    //Действие для отображения новости по id
    public function actionView($id)
    {
        //Ищем запись по id
        $new = News::findOne($id);
        //Отправляем представлению
        return $this->render('view', ['new' => $new]);
    }
}
