<?php defined('_JEXEC') or exit(); ?>

<form action="index.php?option=com_stadium&view=instagram" method="post" id="adminForm" name="adminForm">

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
                <th width="1%"><?php echo JText::_('#'); ?></th>
                <th width="2%"><?php echo JHtml::_('grid.checkall'); ?></th>
                <th width="50%">Фото</th>
                <th width="5%">Опубликовать</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <td colspan="5">
                    <div class="pagination">
                        <?php echo $this->pagination->getListFooter(); ?>
                        <?php echo $this->pagination->getLimitBox(); ?>
                    </div>
                </td>
            </tr>
            </tfoot>

            <tbody>
            <?php if(!empty($this->items)) { ?>
                <?php foreach($this->items as $i=>$row) { ?>
                    <?php $link = 'index.php?option=com_stadium&task=instagramitem.edit&id='.$row->id; ?>
                    <tr>
                        <td><?php echo $this->pagination->getRowOffset($i); ?></td>
                        <td><?php echo JHtml::_('grid.id', $i, $row->id); ?></td>
                        <td>
                            <div style="width: 100px; height: 100px">
                                <?php echo '<img src="'.$row->thumbnail_src.'" />'; ?>
                            </div>
                        </td>
                        <td align="center"><?php echo JHtml::_('jgrid.published', $row->published, $i, 'instagram.', true); ?></td>
                    </tr>
                <?php } ?>
            <?php } ?>
            </tbody>

        </table>

    <input type="hidden" name="task" value="">
    <input type="hidden" name="boxchecked" value="">
    <?php echo JHtml::_('form.token'); ?>

</form>