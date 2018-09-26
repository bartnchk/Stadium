
<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_banners
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Routing class from com_banners
 *
 * @since  3.3
 */
class StadiumRouter extends JComponentRouterBase
{
    /**
     * Build the route for the com_banners component
     *
     * @param   array  &$query  An array of URL arguments
     *
     * @return  array  The URL arguments to use to assemble the subsequent URL.
     *
     * @since   3.3
     */
    public function build(&$query)
    {
        $segments = array();

        if (isset($query['task']))
        {
            $segments[] = $query['task'];
            unset($query['task']);
        }

        if (isset($query['id']))
        {
            $segments[] = $query['id'];
            unset($query['id']);
        }

        $total = count($segments);

        for ($i = 0; $i < $total; $i++)
        {
            $segments[$i] = str_replace(':', '-', $segments[$i]);
        }

        return $segments;
    }

    /**
     * Parse the segments of a URL.
     *
     * @param   array  &$segments  The segments of the URL to parse.
     *
     * @return  array  The URL attributes to be used by the application.
     *
     * @since   3.3
     */
    public function parse(&$segments)
    {
        $vars = array();

        $app = JFactory::getApplication();
        $menu = $app->getMenu();
        $item = $menu->getActive();

        $count = count($segments);


        if (isset($item->query['view'])) {
            switch ($item->query['view']) {
                case 'news':
                    if ($count == 1) {
                        $vars['view'] = 'newsitem';
                        $vars['id'] = (string) $segments[0];
                        $vars['id'] = str_replace(":", "-", $vars['id']);
                    }
                    break;
                case 'services':
                    if ($count == 1) {
                        $vars['view'] = 'service';
                        $vars['id'] = (string) $segments[0];
                        $vars['id'] = str_replace(":", "-", $vars['id']);
                    } elseif ($count == 2) {
                        $vars['view'] = 'serviceitem';
                        $vars['id'] = (string) $segments[1];
                        $vars['id'] = str_replace(":", "-", $vars['id']);
                    }
                    break;
            }
        }

        return $vars;
    }
}