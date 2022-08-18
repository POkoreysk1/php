<?php
/** @var User $model
 *
 */
?>

    <table>
        <tr >
            <td  width="200">Пользователь</td>
            <td>Роль</td>
        </tr>
    </table>

    <table>
        <?php
        foreach ($model as $user) {
            ?>
        <tr>
            <form action="users.php" method="post">

            <td width="200">
                <?=$user->username?>
                <input type="hidden" value="<?= $user->username ?>" name="name">
            </td>
            <td>
                <select name="role"><?=$user->role?>
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>

            </td>
           <td>
               <button class="btn btn-outline-dark"
                    name="edit" id="edit" value="<?=$user->username?>"
                    formaction="?r=admin/users"
                    type="submit">Редактировать
            </button>
           </td>
            <td>
                <button  class="btn btn-outline-dark"
                    name="delete" id="delete" value="<?=$user->username?>"
                    formaction="?r=admin/users"
                    type="submit">Удалить
            </button>
            </td>
            </form>

        </tr>
        <?php }?>
    </table>


