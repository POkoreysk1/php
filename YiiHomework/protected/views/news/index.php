<?php
/** @var $this NewsController
 * @var News $model

 */

foreach ($model as $data) {
    ?>

    <h1><?= CHtml::link("$data->title", ['article/article', "id" => $data->attributes['id'],
            "title" => $data->attributes['title'], "author_id" => $data->attributes['author_id']]) ?></h1>
    <h2><?= $data->content ?></h2>
    <hr>
<?php }



