<?php

defined('_JEXEC') or exit();

JHtml::_( 'formbehavior.chosen', 'select' );
JHtml::_('behavior.formvalidation');
?>

<form action="index.php?option=com_team&layout=edit&id=<?php echo $this->item->id; ?>" method="post" id="adminForm" name="adminForm" class="form-validate" enctype="multipart/form-data">
	
	<div class="form-horizontal">
        <?php foreach($this->form->getFieldsets() as $name => $fieldset) { ?>

		<fieldset class="adminform">
			<legend><?php echo JTEXT::_($fieldset->label); ?></legend>
			<div class="row-fluid">
				<div class="span6">
					<?php
                        foreach($this->form->getFieldset($name) as $field)
                        {
                            echo $field->renderField();
					    }
                    ?>
				</div>
			</div>
		</fieldset>

		<?php } ?>
	</div>

	<input type="hidden" name="task" value="">
	<?php echo JHtml::_('form.token'); ?>

</form>