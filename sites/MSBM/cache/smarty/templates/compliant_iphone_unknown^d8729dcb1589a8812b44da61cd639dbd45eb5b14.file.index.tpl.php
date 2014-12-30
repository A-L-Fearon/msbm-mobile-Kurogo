<?php /* Smarty version Smarty-3.0.7, created on 2014-11-22 17:30:15
         compiled from "/home/fearon/kurogo-mw-1.8.3/sites/Universitas/app/modules/hello/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208758789154710e77338565-09801725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8729dcb1589a8812b44da61cd639dbd45eb5b14' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/sites/Universitas/app/modules/hello/templates/index.tpl',
      1 => 1416693254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208758789154710e77338565-09801725',
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

