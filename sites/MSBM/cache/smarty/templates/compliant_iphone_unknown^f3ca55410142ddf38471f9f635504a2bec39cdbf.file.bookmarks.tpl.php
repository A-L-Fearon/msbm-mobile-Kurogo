<?php /* Smarty version Smarty-3.0.7, created on 2015-01-14 21:50:09
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/map/templates/bookmarks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165136158854b72ae1153051-69210922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3ca55410142ddf38471f9f635504a2bec39cdbf' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/map/templates/bookmarks.tpl',
      1 => 1364681344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165136158854b72ae1153051-69210922',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="nonfocal">
  <a name="places"> </a>
  <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("MAP_BOOKMARKED_PLACES_TITLE");?>
</h3>
</div>
<?php if ($_smarty_tpl->getVariable('navItems')->value){?>
  <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navlistItems',$_smarty_tpl->getVariable('navItems')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }else{ ?>
  
    <ul class="nav">
      <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NO_RESULTS");?>
</li>
    </ul>
  
<?php }?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
