<?php
/**
* @version $Id$
* Kunena Component
* @package Kunena
*
* @Copyright (C) 2008 - 2009 Kunena Team All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.com
*
* Based on FireBoard Component
* @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.bestofjoomla.com
*
* Based on Joomlaboard Component
* @copyright (C) 2000 - 2004 TSMF / Jan de Graaff / All Rights Reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author TSMF & Jan de Graaff
**/

// Dont allow direct linking
defined( '_JEXEC' ) or die('Restricted access');

$fbConfig =& CKunenaConfig::getInstance();
$document=& JFactory::getDocument();

$document->setTitle(_GEN_HELP . ' - ' . stripslashes($fbConfig->board_title));

?>
<div class="<?php echo $boardclass; ?>_bt_cvr1">
<div class="<?php echo $boardclass; ?>_bt_cvr2">
<div class="<?php echo $boardclass; ?>_bt_cvr3">
<div class="<?php echo $boardclass; ?>_bt_cvr4">
<div class="<?php echo $boardclass; ?>_bt_cvr5">
<table class = "kunena_blocktable" id ="kunena_forumfaq" border = "0" cellspacing = "0" cellpadding = "0" width="100%">
            <thead>
                <tr>
                    <th>
                        <div class = "kunena_title_cover fbm">
                        <span class="kunena_title fbl" ><?php echo _COM_FORUM_HELP; ?></span>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
            <tr>
            <td class="kunena_faqdesc" valign="top">

        <?php
          $kunena_db->setQuery("SELECT introtext, id FROM #__content WHERE id='{$fbConfig->help_cid}'");
		  $j_introtext = $kunena_db->loadResult();

           ?>
            <?php echo $j_introtext; ?>


         </td>
         </tr>
         </tbody>
         </table>
</div>
</div>
</div>
</div>
</div>
                     <!-- Begin: Forum Jump -->
<div class="<?php echo $boardclass; ?>_bt_cvr1">
<div class="<?php echo $boardclass; ?>_bt_cvr2">
<div class="<?php echo $boardclass; ?>_bt_cvr3">
<div class="<?php echo $boardclass; ?>_bt_cvr4">
<div class="<?php echo $boardclass; ?>_bt_cvr5">
<table class = "kunena_blocktable" id="kunena_bottomarea"  border="0" cellspacing="0" cellpadding="0" width="100%">
  <thead>
    <tr>
       <th class="th-right">
       <?php
//(JJ) FINISH: CAT LIST BOTTOM
if ($fbConfig->enableforumjump)
require_once (KUNENA_PATH_LIB .DS. 'kunena.forumjump.php');
?></th>
    </tr>
  </thead>
  <tbody><tr><td></td></tr></tbody>
  </table>
  </div>
</div>
</div>
</div>
</div>
  <!-- Finish: Forum Jump -->
