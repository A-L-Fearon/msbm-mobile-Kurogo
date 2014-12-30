<?php /* Smarty version Smarty-3.0.7, created on 2014-12-24 21:12:49
         compiled from "/home/fearon/kurogo-mw-1.8.3/sites/MMBS/app/modules/hello/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1519048520549b72a1952314-12828425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f83d5c1957e1c51c56e62a283a226ac5784a4cd3' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/sites/MMBS/app/modules/hello/templates/index.tpl',
      1 => 1416693254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1519048520549b72a1952314-12828425',
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

