<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */

/**
 * Delete group component initilize
 * 
 * @return void;
 */
function delete_group_init() {
		if(ossn_isAdminLoggedin()) {
				ossn_register_callback('page', 'load:group', 'delete_group_button');
				ossn_register_action('group/delete', ossn_route()->com . 'DeleteGroup/actions/delete.php');
		}
}
/**
 * Create a group delete link on group page menu
 *
 * @return void;
 * @access private
 */
function delete_group_button() {
		$owner = ossn_get_page_owner_guid();
		$url   = ossn_site_url("action/group/delete?guid={$owner}", true);
		
		ossn_register_menu_link('deletegroup', 'delete:group', $url, 'groupheader');
}

ossn_register_callback('ossn', 'init', 'delete_group_init');
