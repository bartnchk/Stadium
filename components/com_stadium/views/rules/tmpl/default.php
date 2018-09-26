<?php defined('_JEXEC') or exit(); ?>

<div class="wrapper rulesPage">
    <div class="wrapPreview">
        <div class="overlayPreview"></div>
        <div class="preview">
            <div class="h2">
                <?= JText::_('RULES') ?>
            </div>
            <div class="text">
                <?= $this->params->get('rules_page_description_ua','') ?>
            </div>
        </div>
    </div>

    <div class="wrapToggleRules">
        <div class="container">
            <?php
                foreach ($this->rules as $rule)
                {
                    echo '<div class="wrapRule">';
                    echo    '<div class="nameRule">';
                    echo        $rule->title;
                    echo        '<i class="fa fa-angle-down" aria-hidden="true"></i>';
                    echo        '<i class="fa fa-angle-up hiddenIcon" aria-hidden="true"></i>';
                    echo    '</div>';
                    echo    '<ul class="listRules">';
                            $json_rules = json_decode($rule->rules);
                            foreach ($json_rules as $one_rule)
                            {
                                echo '<li class="ruleText">'.nl2br($one_rule->ua).'</li>';
                            }
                    echo    '</ul>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</div>