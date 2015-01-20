<?php /* Smarty version Smarty-3.0.7, created on 2015-01-05 14:08:33
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/home/templates/searchResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119830019154aae1312f8b77-77348694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b466d95c497a24292f35ce9d8daec887a1724a9c' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/home/templates/searchResult.tpl',
      1 => 1364681343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119830019154aae1312f8b77-77348694',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_smarty_tpl->tpl_vars['resultsList'] = new Smarty_variable($_smarty_tpl->getVariable('federatedSearchResults')->value['items'], null, null);?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('resultsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
  <?php if ($_smarty_tpl->tpl_vars['item']->value['subtitle']||$_smarty_tpl->tpl_vars['item']->value['img']){?>
    <?php if (!isset($_smarty_tpl->tpl_vars['resultsList']) || !is_array($_smarty_tpl->tpl_vars['resultsList']->value)) $_smarty_tpl->createLocalArrayVariable('resultsList', null, null);
$_smarty_tpl->tpl_vars['resultsList']->value[$_smarty_tpl->tpl_vars['i']->value]['class'] = ($_smarty_tpl->tpl_vars['item']->value['class']).(" ellipsis");?>
  <?php }?>
<?php }} ?>
<?php if (!count($_smarty_tpl->getVariable('federatedSearchResults')->value['items'])){?>
  <?php $_smarty_tpl->tpl_vars['noResults'] = new Smarty_variable(array(), null, null);?>
  <?php if (!isset($_smarty_tpl->tpl_vars['noResults']) || !is_array($_smarty_tpl->tpl_vars['noResults']->value)) $_smarty_tpl->createLocalArrayVariable('noResults', null, null);
$_smarty_tpl->tpl_vars['noResults']->value['title'] = $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NO_RESULTS");?>
  <?php if (!isset($_smarty_tpl->tpl_vars['resultsList']) || !is_array($_smarty_tpl->tpl_vars['resultsList']->value)) $_smarty_tpl->createLocalArrayVariable('resultsList', null, null);
$_smarty_tpl->tpl_vars['resultsList']->value[] = $_smarty_tpl->getVariable('noResults')->value;?>

<?php }elseif($_smarty_tpl->getVariable('federatedSearchResults')->value['total']>count($_smarty_tpl->getVariable('federatedSearchResults')->value['items'])){?>
  <?php $_smarty_tpl->tpl_vars['moreLink'] = new Smarty_variable(array(), null, null);?>
  <?php if (!isset($_smarty_tpl->tpl_vars['moreLink']) || !is_array($_smarty_tpl->tpl_vars['moreLink']->value)) $_smarty_tpl->createLocalArrayVariable('moreLink', null, null);
$_smarty_tpl->tpl_vars['moreLink']->value['title'] = "More results";?>
  <?php if (!isset($_smarty_tpl->tpl_vars['moreLink']) || !is_array($_smarty_tpl->tpl_vars['moreLink']->value)) $_smarty_tpl->createLocalArrayVariable('moreLink', null, null);
$_smarty_tpl->tpl_vars['moreLink']->value['url'] = $_smarty_tpl->getVariable('federatedSearchResults')->value['url'];?>
  <?php if (!isset($_smarty_tpl->tpl_vars['resultsList']) || !is_array($_smarty_tpl->tpl_vars['resultsList']->value)) $_smarty_tpl->createLocalArrayVariable('resultsList', null, null);
$_smarty_tpl->tpl_vars['resultsList']->value[] = $_smarty_tpl->getVariable('moreLink')->value;?>
<?php }?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navlistItems',$_smarty_tpl->getVariable('resultsList')->value);$_template->assign('subTitleNewline',true); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
