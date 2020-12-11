<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class BasicController extends  Controller
{
    /**
     * Сообщение об ошибке
     *
     * @var
     */
    public $msg;
    /**
     * Наличие ошибки
     *
     * @var
     */
    public $error;

    /**
     * Код ошибки
     *
     * @var int
     */
    public $error_type = 0;

    /**
     * Данные к выдаче
     *
     * @var
     */
    public $data;

    public $user;


    public function init()
    {
        $this->user = Yii::$app->user->getIdentity();
        parent::init(); // TODO: Change the autogenerated stub
    }


    //---------------------------------------------------- AJAX ----------------------------------------//
    /**
     * Стандартная выдача сообщений
     *
     * @return array
     */
    public function out()
    {
        return ['error'=>$this->error, $this->error_type,'msg'=>$this->msg, 'data'=> ($this->error=='no') ? $this->data : '' ];
    }

    /**
     * Базовая инициализация
     */
    public function init_ajax()
    {
        $this->error = 'yes';
        $this->msg = 'Ошибка';
        Yii::$app->response->format = Response::FORMAT_JSON;
    }
    //---------------------------------------------------- END AJAX ----------------------------------------//
}