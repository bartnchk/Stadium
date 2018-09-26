<?php defined('_JEXEC') or die; ?>


        <ul class="menuItems mainUl">
            <?php
                //print_r($menu);
                foreach ($menu as $key => $menu_item)
                {
                    if($menu_item->level == 1) {
                        $path = '';

                        if ($menu_item->type == 'component')
                            $path = JUri::base() . $menu_item->path;
                        if ($menu_item->type == 'alias') {
                            $paramss = json_decode($menu_item->params);
                            $alias_id = $paramss->aliasoptions;
                            $path = $menu_item->link . $alias_id;
                        }
                        echo '<li class="menuItem">';
                        echo '<a href="' . $path . '" class="menuItemHeader">';
                        echo $menu_item->title;
                        echo '</a>';
                        if ($key === 0)
                        {
                            echo    '<div class="arrowsBlock">';
                            echo        '<i class="fa fa-angle-down active"></i>';
                            echo        '<i class="fa fa-angle-up"></i>';
                            echo    '</div>';
                        }
                        echo    '<div class="subMenu">';
                        echo        '<ul class="menuItems">';
                                foreach ($menu as $item)
                                {
                                    if($menu_item->id == $item->parent_id)
                                    {
                                        if ($item->type == 'component')
                                            $path = JUri::base().$item->path;
                                        if ($item->type == 'alias') {
                                            $paramss = json_decode($item->params);
                                            $alias_id = $paramss->aliasoptions;
                                            $path = $item->link . $alias_id;
                                        }

                                        echo    '<li class="menuItem">';
                                        echo        '<a href="'.$path.'" class="menuItemHeader">';
                                        echo            $item->title;
                                        echo        '</a>';
                                        $img = json_decode($item->params);
                                        echo        '<div class="liImg">';
                                        echo            '<img src="'.JUri::base().$img->menu_image.'" alt="headerSlide1_225.png">';
                                        echo        '</div>';
                                        echo        '<div class="menuItemContent"></div>';
                                        echo    '</li>';
                                    }
                                }
                        echo            '</ul>';
                        echo        '<div class="imagePlaceholder"></div>';
                        echo    '</div>';
                        echo '</li>';
                    }
                }
            ?>
        </ul>
   