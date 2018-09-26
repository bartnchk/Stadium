<?php

defined('_JEXEC') or exit();

JHtml::_( 'formbehavior.chosen', 'select' );
JHtml::_('behavior.formvalidation');
?>

<form action="index.php?option=com_tourists&layout=edit&id=<?php echo $this->item->id; ?>" method="post" id="adminForm" name="adminForm" class="form-validate" enctype="multipart/form-data">

	<div class="form-horizontal">
		<?php foreach($this->form->getFieldsets() as $fieldset) { ?>
			<legend><?php echo JTEXT::_($fieldset->label); ?></legend>
		<?php }?>
		<div class="row-fluid">
			<?php echo $this->form->renderFieldset('details'); ?>
		</div>
	</div>

	<input type="hidden" name="task" value="">
	<?php echo JHtml::_('form.token'); ?>

</form>
