<?php
/** @var $this AdminController
 * @var News $model
 * @var AdminController $author
 */

$this->breadcrumbs = array(
    'Админ панель',
);

?>

<?php
foreach ($model

as $data){
?>
<table>

    <tr>
        <td width="75"><?= $data->author->username ?> </td>
        <td width="75"><?= $data->title ?></td>
        <td width="100"><?php echo CHtml::link(CHtml::submitButton('Редактировать'), ['admin/editArticle', 'id' => $data->id,]) ?></td>
        <td width="75"><?php echo CHtml::link(CHtml::submitButton('Удалить'), ['admin/delete', 'id' => $data->id,]) ?></td>
    </tr>
    <?php
    }
    ?>
</table>
