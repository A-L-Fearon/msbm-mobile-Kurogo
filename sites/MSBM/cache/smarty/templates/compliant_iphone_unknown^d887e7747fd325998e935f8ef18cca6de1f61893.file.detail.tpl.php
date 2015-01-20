<?php /* Smarty version Smarty-3.0.7, created on 2015-01-14 13:49:03
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/people/templates/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127165709154b6ba1ff1bfc0-57342203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd887e7747fd325998e935f8ef18cca6de1f61893' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/people/templates/detail.tpl',
      1 => 1364681344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127165709154b6ba1ff1bfc0-57342203',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('searchError')->value){?>
  <div class="nonfocal"><?php echo $_smarty_tpl->getVariable('searchError')->value;?>
</div>
<?php }else{ ?>

<?php if ($_smarty_tpl->getVariable('headerSections')->value){?>
  <div class="nonfocal header">
    <?php if (isset($_smarty_tpl->getVariable('headerSections',null,true,false)->value['HEADER_THUMBNAIL'])){?>
      <?php $_smarty_tpl->tpl_vars['item'] = new Smarty_variable(reset($_smarty_tpl->getVariable('headerSections')->value['HEADER_THUMBNAIL']), null, null);?>
      
        <?php if ($_smarty_tpl->getVariable('item')->value['img']){?>
          <img src="<?php echo $_smarty_tpl->getVariable('item')->value['img'];?>
" class="photo" alt="<?php echo $_smarty_tpl->getVariable('item')->value['title'];?>
"<?php if ($_smarty_tpl->getVariable('item')->value['imgWidth']){?>
            width="<?php echo $_smarty_tpl->getVariable('item')->value['imgWidth'];?>
"<?php }?><?php if ($_smarty_tpl->getVariable('item')->value['imgHeight']){?>
            height="<?php echo $_smarty_tpl->getVariable('item')->value['imgHeight'];?>
"<?php }?><?php if ($_smarty_tpl->getVariable('item')->value['imgAlt']){?>
            alt="<?php echo $_smarty_tpl->getVariable('item')->value['imgAlt'];?>
"<?php }?> />
        <?php }?>
      
    <?php }?>
    <div class="header-text">
	  <div class="action-buttons">
	    <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/bookmark.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('name',$_smarty_tpl->getVariable('cookieName')->value);$_template->assign('item',$_smarty_tpl->getVariable('bookmarkItem')->value);$_template->assign('exdate',$_smarty_tpl->getVariable('expireDate')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
	  </div>
      <?php if (isset($_smarty_tpl->getVariable('headerSections',null,true,false)->value['HEADER_TITLE'])){?>
      <?php $_smarty_tpl->tpl_vars['item'] = new Smarty_variable(reset($_smarty_tpl->getVariable('headerSections')->value['HEADER_TITLE']), null, null);?>
      
        <?php if ($_smarty_tpl->getVariable('item')->value['url']){?><a href="<?php echo $_smarty_tpl->getVariable('item')->value['url'];?>
" class="<?php echo $_smarty_tpl->getVariable('item')->value['class'];?>
"><?php }?>
          <h2><?php echo $_smarty_tpl->getVariable('item')->value['title'];?>
</h2>
        <?php if ($_smarty_tpl->getVariable('item')->value['url']){?></a><?php }?>
      
      <?php }else{ ?>
      <h2><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NO_HEADER_TITLE");?>
</h2>
      <?php }?>
      <?php if (isset($_smarty_tpl->getVariable('headerSections',null,true,false)->value['HEADER_SUBTITLE'])){?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('headerSections')->value['HEADER_SUBTITLE']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
          
            <?php if ($_smarty_tpl->tpl_vars['item']->value['url']){?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
"><?php }?>
              <div class="smallprint"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['url']){?></a><?php }?>
          
        <?php }} ?>
      <?php }?>
    </div>
  </div>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['sectionName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('personDetails')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
 $_smarty_tpl->tpl_vars['sectionName']->value = $_smarty_tpl->tpl_vars['section']->key;
?>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['section']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['label']){?>
      <?php ob_start(); ?>
        
          <div class="label"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</div>
        
      <?php  $_smarty_tpl->assign("label", ob_get_contents()); Smarty::$_smarty_vars['capture']["label"]=ob_get_clean();?>
      <?php if (!isset($_smarty_tpl->tpl_vars['section']) || !is_array($_smarty_tpl->tpl_vars['section']->value)) $_smarty_tpl->createLocalArrayVariable('section', null, null);
$_smarty_tpl->tpl_vars['section']->value[$_smarty_tpl->tpl_vars['key']->value]['label'] = $_smarty_tpl->getVariable('label')->value;?>
    <?php }?>
    <?php ob_start(); ?>
      
        <div class="value"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
      
    <?php  $_smarty_tpl->assign("title", ob_get_contents()); Smarty::$_smarty_vars['capture']["title"]=ob_get_clean();?>
    <?php if (!isset($_smarty_tpl->tpl_vars['section']) || !is_array($_smarty_tpl->tpl_vars['section']->value)) $_smarty_tpl->createLocalArrayVariable('section', null, null);
$_smarty_tpl->tpl_vars['section']->value[$_smarty_tpl->tpl_vars['key']->value]['title'] = $_smarty_tpl->getVariable('title')->value;?>
  <?php }} ?>
  <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/navlist.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('navlistItems',$_smarty_tpl->tpl_vars['section']->value);$_template->assign('accessKey',false);$_template->assign('labelColon',false); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<?php }} ?>

<?php }?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

