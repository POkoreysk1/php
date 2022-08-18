<?php
/** @var $this UsersController
 * @var UsersController $message
 * @var UsersController $status
 * @var User $model
 */


$this->breadcrumbs = array('Регистрация');
?>
    <form action="login.php" method="post">
        Введите логин:
        <input type="text" name="login">
        Ведите пароль:
        <input type="password" name="password">

        <button class="btn btn-outline-dark"
                name="id"
                formaction="?r=users/login"
                type="submit">Зарегистрироваться
        </button>
    </form>
<?php echo $message; ?>