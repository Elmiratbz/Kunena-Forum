<?php
/**
 * Kunena Plugin
 *
 * @package       Kunena.Plugins
 * @subpackage    AltaUserPoints
 *
 * @copyright (C) 2008 - 2016 Kunena Team. All rights reserved.
 * @license       http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link          http://www.kunena.org
 **/
defined('_JEXEC') or die ();

class KunenaAvatarAltaUserPoints extends KunenaAvatar
{
	protected $params = null;

	public function __construct($params)
	{
		$this->params = $params;
	}

	public function getEditURL()
	{
		return JRoute::_('index.php?option=com_altauserpoints&view=account');
	}

	public function _getURL($user, $sizex, $sizey)
	{
		trigger_error(__CLASS__ . '::' . __FUNCTION__ . '() not implemented');
	}

	public function getLink($user, $class = '', $sizex = 90, $sizey = 90)
	{
		$user = KunenaFactory::getUser($user);
		$size = $this->getSize($sizex, $sizey);
		if ($size->y > 100)
		{
			$avatar = AltaUserPointsHelper::getAupAvatar($user->userid, 0, 100 * (float) $size->x / (float) $size->y, '100');
		}
		else
		{
			$avatar = AltaUserPointsHelper::getAupAvatar($user->userid, 0, $size->x, $size->y);
		}
		if (!$avatar)
		{
			$avatar = '<img border="0" width="100" height="100" alt="" src="' . JUri::root() . 'components/com_altauserpoints/assets/images/avatars/generic_gravatar_grey.png">';
		}

		return $avatar;
	}
}
