<?php /* Smarty version Smarty-3.0.7, created on 2014-11-21 19:47:33
         compiled from "findInclude:modules/athletics/templates/bookmarks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1771260509546fdd255b3af8-51580064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec20b02dc2b29324bc27f504d4e82e0ddce93200' => 
    array (
      0 => 'findInclude:modules/athletics/templates/bookmarks.tpl',
      1 => 1364681343,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '1771260509546fdd255b3af8-51580064',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('bookmarks')->value){?>
    <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navlistItems',$_smarty_tpl->getVariable('bookmarks')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }else{ ?>
    <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NO_BOOKMARKS");?>
</p>
<?php }?>