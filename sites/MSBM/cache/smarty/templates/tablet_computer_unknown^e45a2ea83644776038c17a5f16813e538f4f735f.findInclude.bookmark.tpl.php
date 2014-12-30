<?php /* Smarty version Smarty-3.0.7, created on 2014-11-22 01:34:27
         compiled from "findInclude:common/templates/bookmark.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27165583354702e7386b1a2-17322545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e45a2ea83644776038c17a5f16813e538f4f735f' => 
    array (
      0 => 'findInclude:common/templates/bookmark.tpl',
      1 => 1364681342,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '27165583354702e7386b1a2-17322545',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.escape.php';
?><?php if ($_smarty_tpl->getVariable('item')->value){?>
<div id="bookmarkContainer">
  <a onclick="<?php if (strlen($_smarty_tpl->getVariable('GOOGLE_ANALYTICS_ID')->value)){?>_gaq.push(['_trackEvent', '<?php echo $_smarty_tpl->getVariable('configModule')->value;?>
', 'bookmark button pressed', '<?php echo smarty_modifier_escape(smarty_modifier_escape($_smarty_tpl->getVariable('item')->value,'javascript'),'html');?>
']);<?php }?>toggleBookmark('<?php echo $_smarty_tpl->getVariable('name')->value;?>
', '<?php echo smarty_modifier_escape(smarty_modifier_escape($_smarty_tpl->getVariable('item')->value,'javascript'),'html');?>
', <?php echo $_smarty_tpl->getVariable('exdate')->value;?>
, '<?php echo @COOKIE_PATH;?>
')">
    <div id="bookmark" ontouchstart="addClass(this, 'pressed')" ontouchend="removeClass(this, 'pressed')"<?php if ($_smarty_tpl->getVariable('bookmarkStatus')->value=="on"){?> class="on"<?php }?>></div>
  </a>
</div>
<?php }?>
