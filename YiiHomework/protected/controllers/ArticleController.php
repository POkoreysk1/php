<?php

class ArticleController extends Controller
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
                'actions' => ['myContent', 'editArticle'],
                'users' => ['?'],

            ],


        ];

    }

    public function actionArticle()
    {
        $model = News::model()->findByAttributes(['id' => $_GET['id']]);
        $this->render('article', ['model' => $model]);
    }

    public function actionAuthorsContent()
    {
        $model = News::model()->findAllByAttributes(array('author_id' => $_GET['author_id']));
        $this->render('authorsContent', ['model' => $model]);
    }

    public function actionMyContent()
    {
        $content = News::model()->findAllByAttributes(['author_id' => Yii::app()->user->id]);
        $this->render('myContent', ['content' => $content]);
    }

    private function newPost()
    {
        $model = News::model()->findByPk([$_POST['id']]);
        $model->title = $_POST['title'];
        $model->content = $_POST['content'];
        $model->save();
        $this->redirect('index.php?r=article/myContent');

    }


    public function actionDelete()
    {

        $delete = News::model()->findByPk($_GET['id']);
        if (Yii::app()->user->name === $delete->author->username) {
            $delete->delete();
            $this->redirect('index.php?r=article/myContent');
        } else $this->render('error');

    }

    public function actionEditArticle()
    {

        $model = News::model()->findByPk([$_GET['id']]);
        if (Yii::app()->user->name === $model->author->username) {
        if (!empty($_POST)) {
            $this->newPost();
        }
        $this->render('editArticle', ['model' => $model]);
        } else $this->render('error');


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