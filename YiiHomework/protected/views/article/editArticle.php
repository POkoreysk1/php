<?php
/** @var News $model

 */
$this->breadcrumbs = ['Мои записи'=>'/index.php?r=article/myContent',
    $model->title,];

?><form action="editArticle.php" method="post">
    <textarea name="title" ><?=$model->title?></textarea>
    <textarea name="content" ><?=$model->content?></textarea>
    <button class="btn btn-outline-dark"
            name="id" value="<?= $model->id ?>"
            formaction="?r=article/editArticle&id=<?= $model->id ?>"
            type="submit">Редактировать
    </button>
</form>