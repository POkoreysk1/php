<?php
/**
 * @var News $content
 */

$this->breadcrumbs = array(
    'Мои записи',
);

?>

<?php
foreach ($content as $data){
?>
<table>

    <tr>
        <td width="75"><?= $data->author->username ?> </td>
        <td width="75"><?= $data->title ?></td>
        <td width="100"><?php echo CHtml::link(CHtml::submitButton('Редактировать'), ['article/editArticle', 'id' => $data->id,]) ?></td>
        <td width="75"><?php echo CHtml::link(CHtml::submitButton('Удалить'), ['article/delete', 'id' => $data->id,]) ?></td>
    </tr>
    <?php
    }
    ?>
</table>
