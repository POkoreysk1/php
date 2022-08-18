<?php
/** @var $this ArticleController
 * @var News $model
 * @var User $author
 */


$this->breadcrumbs= array($_GET['title']);
?>
<h1><?=$model->title;?></h1>
<h2><?=$model->content;?></h2>


<?php

    echo CHtml::link($model->author->username, ['article/authorsContent', "author_id" => $model->author->id, "author_name"=>$model->author->username]);




