<?php

defined('_JEXEC') or exit();

JHtml::_('jquery.framework');
JHtml::_('behavior.formvalidator');
JHtml::_( 'formbehavior.chosen', 'select' );

JFactory::getDocument()->addScriptDeclaration('
	Joomla.submitbutton = function(task)
	{
		if (task == "event.cancel" || document.formvalidator.isValid(document.getElementById("event-form")))
		{
			Joomla.submitform(task, document.getElementById("event-form"));
		}
	};
');
?>

<form action="index.php?option=com_stadium&layout=edit&id=<?php echo $this->item->id; ?>" method="post" id="event-form" name="adminForm" class="form-validate" enctype="multipart/form-data">
	
	<div class="form-horizontal">
		<?php foreach($this->form->getFieldsets() as $name => $fieldset) { ?>

		<fieldset class="adminform">
			<legend><?php echo JTEXT::_($fieldset->label); ?></legend>
			<div class="row-fluid">
				<div class="span6">
					<?php 
						foreach($this->form->getFieldset($name) as $field) 
							echo $field->renderField();
					?>
				</div>
			</div>
		</fieldset>

		<?php } ?>
	</div>

	<input type="hidden" name="task" value="">
	<?php echo JHtml::_('form.token'); ?>

</form>