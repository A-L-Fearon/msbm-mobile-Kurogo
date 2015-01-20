<?php /* Smarty version Smarty-3.0.7, created on 2015-01-05 14:30:29
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/links/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83831734154aae6550fb4c6-93489207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e37e3d065783fbc56e4389a9e040d450d4f1fe6e' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/links/templates/index.tpl',
      1 => 1364681344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83831734154aae6550fb4c6-93489207',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>


<?php if (isset($_smarty_tpl->getVariable('description',null,true,false)->value)&&strlen($_smarty_tpl->getVariable('description')->value)){?>

  <p class="nonfocal smallprint">
    <?php echo $_smarty_tpl->getVariable('description')->value;?>

  </p>

<?php }?>


<?php if ($_smarty_tpl->getVariable('displayType')->value=='springboard'){?>
  <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/springboard.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('springboardItems',$_smarty_tpl->getVariable('links')->value);$_template->assign('springboardID',"links"); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }elseif($_smarty_tpl->getVariable('displayType')->value=='list'){?>
  <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navlistItems',$_smarty_tpl->getVariable('links')->value);$_template->assign('subTitleNewline',true); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>

<p class="clear"> </p>

<?php if (isset($_smarty_tpl->getVariable('description_footer',null,true,false)->value)&&strlen($_smarty_tpl->getVariable('description_footer')->value)){?>

  <p class="nonfocal smallprint">
    <?php echo $_smarty_tpl->getVariable('description_footer')->value;?>

  </p>

<?php }?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
