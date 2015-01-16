<?php /* Smarty version Smarty-3.0.7, created on 2015-01-14 15:16:08
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/map/templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17310661754b6ce884f51f8-92035320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d0185a8ad7a522d7130a0bfb719ea60e7291eb8' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/map/templates/search.tpl',
      1 => 1364681344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17310661754b6ce884f51f8-92035320',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php ob_start(); ?>
  <?php if ($_smarty_tpl->getVariable('campuses')->value){?>
    <?php $_template = new Smarty_Internal_Template("findInclude:modules/map/templates/selectcampus.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('campuses',$_smarty_tpl->getVariable('campuses')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  <?php }?>
<?php  $_smarty_tpl->assign("additionalInputs", ob_get_contents()); Smarty::$_smarty_vars['capture']["additionalInputs"]=ob_get_clean();?>

<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("MAP_SEARCH_PLACEHOLDER");?>
<?php $_tmp1=ob_get_clean();?><?php $_template = new Smarty_Internal_Template("findInclude:common/templates/search.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('placeholder',$_tmp1); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('poweredByGoogle')->value){?>
  
  <div>
    <img src="/modules/map/images/powered-by-google-on-white.png"/>
  </div>
  
<?php }?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/results.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('results',$_smarty_tpl->getVariable('places')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
