<?php /* Smarty version Smarty-3.0.7, created on 2015-01-14 18:11:17
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/map/templates/fullscreen.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69437923954b6f7957c0014-77621243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '933b54849358636d593d1bc73e44eab9f7c1b684' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/map/templates/fullscreen.tpl',
      1 => 1364681344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69437923954b6f7957c0014-77621243',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('scalable',false); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template("findInclude:modules/map/templates/searchbar.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div id="spacer"></div>
<div id="<?php echo $_smarty_tpl->getVariable('mapImageElementId')->value;?>
" class="mapimage"></div>


<?php $_template = new Smarty_Internal_Template("findInclude:modules/map/templates/fullscreenfooter.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('hideFooterLinks',true); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
