<?php /* Smarty version Smarty-3.0.7, created on 2014-11-22 01:34:27
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/athletics/templates/sport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45377648754702e7376d8d5-98975808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3b94a5e2cd5c01af1f162b38fcc5e05391fe12a' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/athletics/templates/sport.tpl',
      1 => 1364681343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45377648754702e7376d8d5-98975808',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="nonfocal">
  <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/bookmark.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('name',$_smarty_tpl->getVariable('cookieName')->value);$_template->assign('item',$_smarty_tpl->getVariable('bookmarkItem')->value);$_template->assign('exdate',$_smarty_tpl->getVariable('expireDate')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>  
  <h2><?php echo $_smarty_tpl->getVariable('sportTitle')->value;?>
</h2>
</div>

<?php if ($_smarty_tpl->getVariable('scheduleItems')->value){?>
<h3 class="nonfocal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("SCHEDULE_TITLE");?>
</h3>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navlistItems',$_smarty_tpl->getVariable('scheduleItems')->value);$_template->assign('subTitleNewline',true); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }?>
<?php if ($_smarty_tpl->getVariable('newsItems')->value){?>
    <h3 class="nonfocal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NEWS_TITLE");?>
</h3>
    <?php $_template = new Smarty_Internal_Template("findInclude:modules/athletics/templates/stories.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('stories',$_smarty_tpl->getVariable('newsItems')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?> 
<?php }?>


<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
