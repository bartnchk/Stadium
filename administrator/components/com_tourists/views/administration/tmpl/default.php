<?php defined('_JEXEC') or exit(); ?>

<form action="index.php?option=com_tourists&view=administration" method="post" id="adminForm" name="adminForm">

    <?php if ( !empty($this->sidebar) ) : ?>
        <div id="j-sidebar-container" class="span2">
            <?= $this->sidebar; ?>
        </div>
    <?php endif; ?>

    <div id="j-main-container" class="span10">
        <div class="row-fluid">
            <?= $this->form->getField('administration')->input; ?>
        </div>
    </div>



    <input type="hidden" name="task" value="">

    <?php echo JHtml::_('form.token'); ?>

</form>


<script>
    jQuery(document).ready(function(){
        jQuery(document).on('subform-row-add', function(event, row){
            jQuery(row).find('select').chosen();
        })
    });
</script>