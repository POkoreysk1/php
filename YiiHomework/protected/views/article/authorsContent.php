<?php
/**
 * @var News $model
 *  @var $this ArticleController
 */
$this->breadcrumbs= array($_GET['author_name']);

foreach ($model as $data){
?>
<h1><?= CHtml::link("$data->title", ['article/article', "id" => $data->attributes['id'],
        "title" => $data->attributes['title'], "author_id" => $data->attributes['author_id']]) ?></h1>
<h2><?= $data->content ?></h2>
<hr>
    <?php }