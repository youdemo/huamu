<?php
defined('IN_DESTOON') or exit('Access Denied');
$db->query("DROP TABLE IF EXISTS `".$DT_PRE.$module."_".$moduleid."`");
$db->query("DROP TABLE IF EXISTS `".$DT_PRE.$module."_data_".$moduleid."`");
$db->query("DROP TABLE IF EXISTS `".$DT_PRE.$module."_item_".$moduleid."`");
?>