<?php /* Smarty version Smarty-3.0.7, created on 2014-12-29 23:31:29
         compiled from "/home/fearon/kurogo-mw-1.8.3/sites/MSBM/app/modules/directory/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147309101854a22aa18a8a71-12141261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '551be65ea79e747cc63bb66644d1300618c1eabd' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/sites/MSBM/app/modules/directory/templates/index.tpl',
      1 => 1419740482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147309101854a22aa18a8a71-12141261',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<h1 class="focal"><?php echo $_smarty_tpl->getVariable('message')->value;?>
</h1>
<?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('contacts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
 $_smarty_tpl->tpl_vars['info']->value = $_smarty_tpl->tpl_vars['record']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['record']->value){?>
        <p class="focal"><?php echo $_smarty_tpl->tpl_vars['record']->value["fname"];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value["lname"];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value['jobTitle'];?>
 <?php echo $_smarty_tpl->tpl_vars['record']->value['unit'];?>
</p>
    <?php }?>
<?php }} ?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>