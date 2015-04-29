<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */
$guid = input('guid');
$delete = new OssnGroup;
if($delete->deleteGroup($guid)){
        ossn_trigger_message(ossn_print('com:delete:group:deleted'));
        redirect();	
}
 else {
        ossn_trigger_message(ossn_print('com:delete:group:delete:error'), 'error');
        redirect(REF);	 
 }