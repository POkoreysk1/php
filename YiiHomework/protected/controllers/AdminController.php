<?php


class AdminController extends Controller
{

    public function filters()
    {
        return ['accessControl',];
    }

    public function accessRules()
    {
        return [
            [
                'allow',
                'actions' => ['admin', 'users', 'editArticle', 'adminDelete'],
                'roles' => ['admin'],

            ],
            [
                'deny',
                'actions' => ['admin', 'users', 'editArticle', 'adminDelete'],
                'users' => ['*'],

            ],

        ];

    }


    public function actionAdmin()
    {
        $model = News::model()->findAll();
        $this->render('admin', ['model' => $model,]);

    }

    private function newPost()
    {
        $model = News::model()->findByPk([$_POST['id']]);
        $model->title = $_POST['title'];
        $model->content = $_POST['content'];
        $model->save();
        $this->redirect('index.php?r=admin/admin');

    }


    public function actionDelete()
    {

        $delete = News::model()->findByPk($_GET['id']);
        $delete->delete();
        $this->redirect('index.php?r=admin/admin');

    }

    public function actionEditArticle()
    {

        $model = News::model()->findByPk([$_GET['id']]);
        if (!empty($_POST)) {
            $this->newPost();
        }
        $this->render('editArticle', ['model' => $model]);


    }


    public function actionUsers()
    {

        $model = User::model()->findAllByAttributes(['role' => 'user']);

        if (!empty($_POST)) {
            $user = User::model()->findByAttributes(['username' => $_POST['name']]);
            if ($user !== null) {
                if (array_key_exists('delete', $_POST)) {
                    $user->delete();
                }
                if (array_key_exists('edit', $_POST)) {
                    $user->role = $_POST['role'];
                    $user->save();
                }
            }
            $this->redirect('index.php?r=admin/users');
        }
        $this->render('users', array('model' => $model,));

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