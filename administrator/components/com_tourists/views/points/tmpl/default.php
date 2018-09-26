<?php defined('_JEXEC') or exit();

?>

<form action="index.php?option=com_tourists&view=hotels" method="post" id="adminForm" name="adminForm">

	<?php if (!empty( $this->sidebar )) { ?>
	<div id="j-sidebar-container" class="span2">
		<?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span">
		<?php } else { ?>
		<div id="j-main-container">
			<?php } ?>

			<table class="table table-striped ">

				<thead>
                    <tr>
                        <th width="5%"><?php echo JHtml::_('grid.checkall'); ?></th>
                        <th width="90%">Название точки</th>
                    </tr>
				</thead>


				<tbody>
                    <?php if(!empty($this->items)) { ?>
                        <?php foreach($this->items as $i=>$row) { ?>
                            <?php $link = 'index.php?option=com_tourists&task=point.edit&id=' . $row->id; ?>
                            <tr>
                                <td><?php echo JHtml::_('grid.id', $i, $row->id); ?></td>
                                <? if(!empty($row->img)) {?>
                                <td><img src="<?= JUri::root() .  $row->img;?>" style="max-width: 60px "></td>
                                <?}?>
                                <td>
                                    <a href="<?= $link; ?>"><?= $row->title?></a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
				</tbody>

			</table>

			<input type="hidden" name="task" value="">
			<input type="hidden" name="boxchecked" value="">
			<?php echo JHtml::_('form.token'); ?>
        </div>
</form>
