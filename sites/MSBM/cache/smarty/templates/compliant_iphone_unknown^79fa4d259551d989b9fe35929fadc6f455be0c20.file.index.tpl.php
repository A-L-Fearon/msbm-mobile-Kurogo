<?php /* Smarty version Smarty-3.0.7, created on 2015-01-14 20:21:57
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/photos/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8341815554b71635cb5176-80013878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79fa4d259551d989b9fe35929fadc6f455be0c20' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/photos/templates/index.tpl',
      1 => 1364681344,
      2 => 'file',
    ),
    '' => 
    array (
      0 => 'findInclude:common/templates/navlist.tpl',
      1 => 1364681342,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '8341815554b71635cb5176-80013878',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.escape.php';
?><?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if (isset($_smarty_tpl->getVariable('description',null,true,false)->value)&&strlen($_smarty_tpl->getVariable('description')->value)){?>
  <p class="nonfocal">
    <?php echo smarty_modifier_escape($_smarty_tpl->getVariable('description')->value);?>

  </p>
<?php }?>


  <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navlistItems',$_smarty_tpl->getVariable('albums')->value);$_template->assign('listItemTemplateFile',"findInclude:modules/photos/templates/photoListItem.tpl");$_template->properties['nocache_hash']  = '8341815554b71635cb5176-80013878';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.7, created on 2015-01-14 20:21:57
         compiled from "findInclude:common/templates/navlist.tpl" */ ?>
<?php $_smarty_tpl->tpl_vars['defaultTemplateFile'] = new Smarty_variable("findInclude:common/templates/listItem.tpl", null, null);?>
<?php $_smarty_tpl->tpl_vars['listItemTemplateFile'] = new Smarty_variable((($tmp = @$_smarty_tpl->getVariable('listItemTemplateFile')->value)===null||$tmp==='' ? $_smarty_tpl->getVariable('defaultTemplateFile')->value : $tmp), null, null);?>
<?php if ($_smarty_tpl->getVariable('navListHeading')->value){?>
<div class="nonfocal listhead">
  <h3><?php echo $_smarty_tpl->getVariable('navListHeading')->value;?>
</h3>
  <?php if ($_smarty_tpl->getVariable('navListSubheading')->value){?><p class="smallprint"><?php echo $_smarty_tpl->getVariable('navListSubheading')->value;?>
</p><?php }?>
</div>
<?php }?>
<ul class="nav<?php if ($_smarty_tpl->getVariable('secondary')->value){?> secondary<?php }?><?php if ($_smarty_tpl->getVariable('nested')->value){?> nested<?php }?><?php if ($_smarty_tpl->getVariable('navlistClass')->value){?> <?php echo $_smarty_tpl->getVariable('navlistClass')->value;?>
<?php }?>"<?php if ($_smarty_tpl->getVariable('navlistID')->value){?> id="<?php echo $_smarty_tpl->getVariable('navlistID')->value;?>
"<?php }?>>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('navlistItems')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
    <?php if ($_smarty_tpl->getVariable('hideImages')->value){?><?php if (!isset($_smarty_tpl->tpl_vars['item']) || !is_array($_smarty_tpl->tpl_vars['item']->value)) $_smarty_tpl->createLocalArrayVariable('item', null, null);
$_smarty_tpl->tpl_vars['item']->value['img'] = null;?><?php }?>
    <?php if (!isset($_smarty_tpl->tpl_vars['item']->value['separator'])){?>
      <li<?php if ($_smarty_tpl->tpl_vars['item']->value['img']||$_smarty_tpl->tpl_vars['item']->value['listclass']){?> class="<?php echo $_smarty_tpl->tpl_vars['item']->value['listclass'];?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['img']){?> icon<?php }?>"<?php }?>><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('listItemTemplateFile')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('subTitleNewline',(($tmp = @$_smarty_tpl->getVariable('subTitleNewline')->value)===null||$tmp==='' ? false : $tmp)); echo $_template->getRenderedTemplate();?><?php unset($_template);?></li>
    <?php }?>
  <?php }} ?>
</ul>
<?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "findInclude:common/templates/navlist.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>


<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
