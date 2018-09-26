<?php

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

class JFormFieldZrules extends JFormField
{
	protected $type = 'zrules';

    public function getInput()
    {
        $script = '
                    jQuery(document).ready(function($)
                    {
                        $("#add_rule").on("click", function()
                        {
                            var rules_count = Number($("#rules_count").val());
                            var newCount = rules_count+1;
                            $(".rules").prepend(\'<div class="item-block"><textarea placeholder="UA" name="rules[]"></textarea> <textarea placeholder="RU" type="textarea" name="rules_ru[]"></textarea></div>\');
                            $("#rules_count").val(newCount);
                        });
                    });
        ';

        JFactory::getDocument()->addScriptDeclaration($script);

        $style = '
            .item-block{
                padding-top: 5px;
            }        
        ';

        JFactory::getDocument()->addStyleDeclaration($style);

        $values = json_decode($this->value);

        if ($values)
        {
            $html = '
                <div class="rules">';

            foreach($values as $val)
            {
                $html .= '<div class="item-block">
                             <textarea style="width: 300px; height: 120px" placeholder="UA" name="rules[]" value="'.$val->ua.'">'.$val->ua.'</textarea>
                             <textarea style="width: 300px; height: 120px" placeholder="RU" name="rules_ru[]" value="'.$val->ru.'">'.$val->ua.'</textarea>
                          </div>';
            }

            $html .= '</div>';
        } else {

            $html = '
                <div class="rules">
                    <div class="item-block">
                        <textarea placeholder="UA" name="rules[]"></textarea>
                        <textarea placeholder="RU" name="rules_ru[]"></textarea>
                    </div>
                </div>
                <input type="hidden" name="rules_count" id="rules_count" value="1">
                ';
        }

        return $html;
    }

    public function getLabel()
    {
        $html = 'Правила (обязательно внести правила на двух языках)' . ' <button type="button" class="btn btn-mini" id="add_rule"><i class=" icon-plus"></i></button>';
        return $html;
    }
}



