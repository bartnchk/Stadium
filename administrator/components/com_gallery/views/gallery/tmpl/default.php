<?php defined('_JEXEC') or exit(); ?>

<form action="index.php?option=com_gallery&view=gallery" method="post" id="adminForm" name="adminForm">

    <?php if (!empty( $this->sidebar )) { ?>
    <div id="j-sidebar-container" class="span2">
        <?php echo $this->sidebar; ?>
    </div>
    <div id="j-main-container" class="span10">
        <?php } else { ?>
        <div id="j-main-container">
            <?php } ?>

    <table class="table table-stripped table-hover">

        <thead>
            <tr>
                <th width="50%">Название</th>
            </tr>
        </thead>

        <tbody>
            <?php if(!empty($this->items)) { ?>
                <?php foreach($this->items as $i=>$row) { ?>
                    <?php $link = 'index.php?option=com_gallery&task=galleryitem.edit&id='.$row->id; ?>
                    <tr>
                        <td><a href="<?php echo $link; ?>"><?php echo $row->title; ?></a></td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>

    </table>

    <input type="hidden" name="task" value="">
    <input type="hidden" name="boxchecked" value="">
    <?php echo JHtml::_('form.token'); ?>

</form>