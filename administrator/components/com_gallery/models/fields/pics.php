
<?php

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

class JFormFieldPics extends JFormField
{
	protected $type = 'pics';

	public function getInput()
	{
		$script = '
                    jQuery(document).ready(function($){
                        $("#add_pic").on("click", function(){
                            var pics_count = Number($("#pics_count").val());
                            var newCount = pics_count+1;
                            $(".controls-pic").prepend(\'<div class="item-block"><input type="file" name="pics[]"></div><hr>\');
                            $("#pics_count").val(newCount);
                        });
                    });
        ';

		JFactory::getDocument()->addScriptDeclaration($script);

		$style = '
                    .controls-pic input {
                    }

                    .controls-pic hr {
                            margin: 5px 0;
                            border: none;
                    }

                    .picone {
                            text-align: center;
                            width:200px;
                            float: left;
                            margin-right: 15px;
                    }

                    .picone img {
                            max-width: 200px;
                            border: solid 2px #000;
                            margin-bottom: 5px;
                            padding: 5px;
                            box-sizing: border-box;
                    }

                    .picone input[type=text] {
                            width: 180px;
                            margin-bottom: 5px;
                    }

                    .picone input[type=radio] {
                        vertical-align: sub;
                    }
                    
                    .pics {
                        padding-top: 20px
                    }
            ';

		JFactory::getDocument()->addStyleDeclaration( $style );

		$value = $this->value;

		if ($value) {

			$html = '
                <div class="controls-pic">
                    
                    <div class="item-block">
                        <input type="file" name="pics[]">
                    </div>
                    
                    <div class="pics">
            ';

			$flag = 0;

			for ($i=0; $i < count($value); $i++) {

				$file = JURI::root(). '/images/gallery/' .$value[$i]['id_gallery']. '/' .$value[$i]['file'];

				$html .= '<div class="picone">
                             <img src="'.$file.'">
                             <button onclick="jQuery(\'#picid\').val('.$value[$i]['id'].'); Joomla.submitbutton(\'galleryitem.deletepic\')" >удалить</button>
                          </div>';
			}
			$html .= '</div></div>
                        <input type="hidden" name="pics_count" id="pics_count" value="'.$i.'">
                        <input type="hidden" name="picid" id="picid" value="0">';
		} else {

			$html = '
                <div class="controls-pic">
                        <div class="item-block">
                                <input type="file" name="pics[]">
                        </div>
                </div>
                <input type="hidden" name="pics_count" id="pics_count" value="1">
                ';
		}

		return $html;
	}

	public function getLabel() {

		$html = 'Добавить фото (желательная ширина 1920px)<button type="button" class="btn btn-mini" id="add_pic"><i class=" icon-plus"></i></button>';

		return $html;  
	}
}