<?php
/* @var $this UsersController */

$this->breadcrumbs=array(
	'Добавить запись',
);
?>




    <form action="index.php" method="post">
        Заголовок:
        <label>
            <textarea name="title" ></textarea>
        </label>
        Статья:        <label>
            <textarea name="content" ></textarea>
        </label>

        <button class="btn btn-outline-dark"
                name="id"
                formaction="?r=users/index"
                type="submit">Создать запись
        </button>
</form>
<?php


