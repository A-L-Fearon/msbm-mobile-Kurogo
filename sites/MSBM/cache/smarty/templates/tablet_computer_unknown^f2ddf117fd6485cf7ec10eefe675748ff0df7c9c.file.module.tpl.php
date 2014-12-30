<?php /* Smarty version Smarty-3.0.7, created on 2014-11-22 16:22:48
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/admin/templates/module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14907799555470fea8c0f201-08235189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2ddf117fd6485cf7ec10eefe675748ff0df7c9c' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/admin/templates/module.tpl',
      1 => 1364681343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14907799555470fea8c0f201-08235189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.escape.php';
?><?php $_template = new Smarty_Internal_Template("findInclude:modules/admin/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<form method="post" id="adminForm" class="<?php echo $_smarty_tpl->getVariable('section')->value;?>
">
<input id="adminSubmit" type="submit" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("BUTTON_SAVE");?>
" />
<h1 id="moduleTitle"><img src="<?php if ($_smarty_tpl->getVariable('navigation_icon_set')->value){?>/common/images/iconsets/<?php echo $_smarty_tpl->getVariable('navigation_icon_set')->value;?>
/<?php echo $_smarty_tpl->getVariable('navigation_icon_size')->value;?>
/<?php }else{ ?>/modules/<?php echo $_smarty_tpl->getVariable('homeModuleID')->value;?>
/images/<?php }?><?php echo $_smarty_tpl->getVariable('moduleIcon')->value;?>
.png" width="50" height="50" alt="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('moduleName')->value);?>
" id="moduleImage" /> <?php echo $_smarty_tpl->getVariable('moduleName')->value;?>
</h1>
<ul id="adminSections"></ul>
<p id="moduleDescription" class="preamble">&nbsp;</p>
<div id="adminFields" class="formfields">

</div>
<script type="text/javascript">
    var moduleID = '<?php echo $_smarty_tpl->getVariable('moduleID')->value;?>
';
    var adminSection = '<?php echo $_smarty_tpl->getVariable('moduleSection')->value;?>
';
</script>
</form>
<?php $_template = new Smarty_Internal_Template("findInclude:modules/admin/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
