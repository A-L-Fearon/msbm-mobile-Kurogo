<?php /* Smarty version Smarty-3.0.7, created on 2014-11-26 14:05:39
         compiled from "findInclude:modules/video/templates/results.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21799954654762483315d89-04752451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e71ce6b964784a0fd6694917a58b79faddbbb156' => 
    array (
      0 => 'findInclude:modules/video/templates/results.tpl',
      1 => 1364681345,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '21799954654762483315d89-04752451',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<ul class="results"<?php if ($_smarty_tpl->getVariable('resultsID')->value){?> id="<?php echo $_smarty_tpl->getVariable('resultsID')->value;?>
"<?php }?>>
  <?php $_smarty_tpl->tpl_vars['ellipsisCount'] = new Smarty_variable(0, null, null);?>
  <?php if ($_smarty_tpl->getVariable('previousURL')->value){?>
    <li class="pagerlink">
      <a href="<?php echo $_smarty_tpl->getVariable('previousURL')->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("PREVIOUS_VIDEO_TEXT",$_smarty_tpl->getVariable('maxPerPage')->value);?>
</a>
    </li>
  <?php }?>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
    <?php if (!isset($_smarty_tpl->tpl_vars['item']->value['separator'])){?>
      <li class="video<?php if (!$_smarty_tpl->tpl_vars['item']->value['img']){?> noimage<?php }?>">  
  
        <?php $_template = new Smarty_Internal_Template("findInclude:modules/".($_smarty_tpl->getVariable('moduleID')->value)."/templates/listItem.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('ellipsisId',$_smarty_tpl->getVariable('ellipsisCount')->value++);$_template->assign('subTitleNewline',(($tmp = @$_smarty_tpl->getVariable('subTitleNewline')->value)===null||$tmp==='' ? true : $tmp)); echo $_template->getRenderedTemplate();?><?php unset($_template);?> 
       
      </li>
    <?php }?>
  <?php }} ?>
  <?php if (count($_smarty_tpl->getVariable('results')->value)==0){?>
    
      <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NO_RESULTS");?>
</li>
    
  <?php }?>
  <?php if ($_smarty_tpl->getVariable('nextURL')->value){?>
    <li class="pagerlink">
      <a href="<?php echo $_smarty_tpl->getVariable('nextURL')->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NEXT_VIDEO_TEXT",$_smarty_tpl->getVariable('maxPerPage')->value);?>
</a>
    </li>
  <?php }?>
</ul>
