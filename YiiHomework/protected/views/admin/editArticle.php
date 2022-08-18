<?php
/** @var News $model

 */
$this->breadcrumbs = array('Админ панель' => 'index.php?r=admin/admin',
    'Редактирование записи',);

?><form action="editArticle.php" method="post">
    <textarea name="title" ><?=$model->title?></textarea>
    <textarea name="content" ><?=$model->content?></textarea>
    <button class="btn btn-outline-dark"
            name="id" value="<?= $model->id ?>"
            formaction="?r=admin/editArticle&id=<?= $model->id ?>"
            type="submit">Редактировать
    </button>
</form>




