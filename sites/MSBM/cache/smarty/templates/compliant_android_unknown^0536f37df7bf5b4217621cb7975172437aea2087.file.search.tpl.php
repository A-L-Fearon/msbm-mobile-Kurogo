<?php /* Smarty version Smarty-3.0.7, created on 2015-01-15 14:55:50
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/people/templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124315334354b81b46c0c207-81976875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0536f37df7bf5b4217621cb7975172437aea2087' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/people/templates/search.tpl',
      1 => 1364681344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124315334354b81b46c0c207-81976875',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php ob_start(); ?>
<?php if (count($_smarty_tpl->getVariable('feeds')->value)>1){?>
    <select id="feed" name="feed">
	<?php  $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['feed'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('feeds')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['title']->key => $_smarty_tpl->tpl_vars['title']->value){
 $_smarty_tpl->tpl_vars['feed']->value = $_smarty_tpl->tpl_vars['title']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['feed']->value;?>
"<?php if ($_smarty_tpl->getVariable('selectedFeed')->value==$_smarty_tpl->tpl_vars['feed']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("PEOPLE_SEARCH_IN",$_smarty_tpl->tpl_vars['title']->value);?>
</option>
	<?php }} ?>
	</select>
<?php }?>
<?php  $_smarty_tpl->assign("selectSection", ob_get_contents()); Smarty::$_smarty_vars['capture']["selectSection"]=ob_get_clean();?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/search.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('emphasized',false);$_template->assign('inlineSearchError',$_smarty_tpl->getVariable('searchError')->value);$_template->assign('additionalInputs',$_smarty_tpl->getVariable('selectSection')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/results.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('results',$_smarty_tpl->getVariable('results')->value);$_template->assign('accessKey',false); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

