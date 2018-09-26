<?php defined('_JEXEC') or exit(); ?>

<form action="index.php?option=com_tourists&view=photos" method="post" id="adminForm" name="adminForm" enctype="multipart/form-data">

	<?php if ( !empty($this->sidebar) ) : ?>
        <div id="j-sidebar-container" class="span2">
            <?= $this->sidebar; ?>
        </div>
    <?php endif; ?>

    <div id="j-main-container" class="span10">
        <div class="row-fluid">

            <div class="span10">

                <?= $this->form->renderField('map') ?>

                <label for="photos">Photos</label>
                <input type="file" name="photos[]" multiple id="photos">

                <div class="photos" style="margin-top: 20px">
                    <?php if( !empty($this->photos) ) : ?>
                        <?php foreach ($this->photos as $photo) : ?>
                            <img class="photo" src="/images/landing/<?= $photo->src ?>" data-filename="<?= $photo->src ?>" />
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>

    <input type="hidden" name="task" value="">
    <?php echo JHtml::_('form.token'); ?>

</form>

<script>
    jQuery(document).ready(function(){

        jQuery(document).on('subform-row-add', function(event, row){
            jQuery(row).find('select').chosen();
        });

        jQuery('.photo').on('click', function(){

            if (confirm("Вы действительно хотите удалить фотографию")) {

                var src =jQuery(this).data('filename');

                jQuery.ajax({
                    type: 'POST',
                    url: '<?= JUri::base() ?>index.php?option=com_tourists&task=photos.deletePhoto',
                    data: {'src' : src},
                    success: function () {
                        location.reload();
                    }
                });
            }
        });
    });
</script>