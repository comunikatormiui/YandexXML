<?php
/**
 * Yandex.Market XML
 *
 * @version 	2.0.0
 * @author		Arkadiy, Joomline
 * @copyright	© 2015-2019. All rights reserved.
 * @license 	GNU/GPL v.3 or later.
 */

defined('_JEXEC') or die;


class argensymlControllerItems extends JControllerAdmin
{
    public function getModel($name = 'Item', $prefix = 'argensymlModel', $config = array())
    {
        return parent::getModel($name, $prefix, $config);
    }
}
