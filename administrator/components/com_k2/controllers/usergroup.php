<?php
/**
 * @version		2.7.x
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2014 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

class K2ControllerUserGroup extends K2Controller
{

    public function display($cachable = false, $urlparams = array())
    {
        JRequest::setVar('view', 'usergroup');
        parent::display();
    }

    function save()
    {
        JRequest::checkToken() or jexit('Invalid Token');
        $model = $this->getModel('userGroup');
        $model->save();
    }

    function apply()
    {
        $this->save();
    }

    function cancel()
    {
        $mainframe = JFactory::getApplication();
        $mainframe->redirect('index.php?option=com_k2&view=usergroups');
    }

}
