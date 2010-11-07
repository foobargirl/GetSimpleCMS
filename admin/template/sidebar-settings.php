<?php
/**
 * Sidebar Settings Template
 *
 * @package GetSimple
 */
?>
<ul class="snav">
<li><a href="settings.php" accesskey="<?php echo find_accesskey(i18n_r('SIDE_GEN_SETTINGS'));?>" <?php check_menu('settings');  ?> ><?php i18n('SIDE_GEN_SETTINGS'); ?></a></li>
<li><a href="settings.php#profile" accesskey="<?php echo find_accesskey(i18n_r('SIDE_USER_PROFILE'));?>" ><?php i18n('SIDE_USER_PROFILE'); ?></a></li>
<?php exec_action("settings-sidebar"); ?>
</ul>
