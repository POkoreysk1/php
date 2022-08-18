<?php

class UsersController extends Controller
{


    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return [

            [
                'deny',
                'actions' => ['index',],
                'users' =>['?']
            ],

        ];

    }
    public function actionIndex()

    {

        if (!empty($_POST['title']) && !empty($_POST['content']) ) {
            $newRecord = new News();
            $newRecord->title = $_POST['title'];
            $newRecord->content = $_POST['content'];
            $newRecord->author_id =  Yii::app()->user->id;
            $newRecord->save();
            $this->redirect('index.php?r=news/index');
        }
        $this->render('index');
    }



    public function actionLogin()
    {
        $message = '';
        $status = 'registration';
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
            $user = new User;
            if (User::model()->findByAttributes(['username' => $_POST['login']]) === null) {
                $user->username = $_POST['login'];
                $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $user->role = 'user';
                $user->save();
                $this->redirect('index.php?r=site/login');
                $status = 'newUser';
                $message = 'Регистрация прошла успешно!';

            } else {
                $message = 'Пользователь с таким логином уже существует!';

            }
        }
        $this->render('login', ['message' => $message, 'status'=>$status]);
    }

    // Uncomment the following methods and override them if needed
    /*
    public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            'inlineFilterName',
            array(
                'class'=>'path.to.FilterClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }

    public function actions()
    {
        // return external action classes, e.g.:
        return array(
            'action1'=>'path.to.ActionClass',
            'action2'=>array(
                'class'=>'path.to.AnotherActionClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }
    */
}