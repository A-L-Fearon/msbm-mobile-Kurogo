<?php /* Smarty version Smarty-3.0.7, created on 2015-01-15 00:25:44
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/people/templates/group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213977174554b74f583ca934-59252253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '222b24b328af4236073d9b61c713a66b0e5a4696' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/people/templates/group.tpl',
      1 => 1364681344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213977174554b74f583ca934-59252253',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.escape.php';
?><?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('description')->value){?>
  <p class="nonfocal smallprint">
    <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('description')->value);?>

  </p>
<?php }?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navlistItems',$_smarty_tpl->getVariable('contacts')->value);$_template->assign('secondary',true);$_template->assign('accessKey',false);$_template->assign('subTitleNewline',$_smarty_tpl->getVariable('contactsSubTitleNewline')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
