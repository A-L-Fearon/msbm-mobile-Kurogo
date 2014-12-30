<?php /* Smarty version Smarty-3.0.7, created on 2014-12-29 23:31:37
         compiled from "/home/fearon/kurogo-mw-1.8.3/sites/MSBM/app/modules/hello/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169772985754a22aa94d9f26-81876419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deb0b20d5a625656dc6caa656e78e89e86c29177' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/sites/MSBM/app/modules/hello/templates/index.tpl',
      1 => 1416693254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169772985754a22aa94d9f26-81876419',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?> 

<h1 class="focal"><?php echo $_smarty_tpl->getVariable('message')->value;?>
</h1> 

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

