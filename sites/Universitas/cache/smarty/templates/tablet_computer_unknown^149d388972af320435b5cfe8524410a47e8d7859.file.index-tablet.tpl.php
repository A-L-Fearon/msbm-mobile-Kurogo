<?php /* Smarty version Smarty-3.0.7, created on 2014-11-26 14:05:38
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/video/templates/index-tablet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8611381654762482ade0f7-50509214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '149d388972af320435b5cfe8524410a47e8d7859' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/video/templates/index-tablet.tpl',
      1 => 1364681345,
      2 => 'file',
    ),
    '16deb1b51aa8159da792e0567736ab3d1e3a3ede' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/video/templates/index.tpl',
      1 => 1364681345,
      2 => 'file',
    ),
    '' => 
    array (
      0 => 'findInclude:common/templates/splitview.tpl',
      1 => 1364681342,
      2 => 'findInclude',
    ),
    '53765d097093b707ff83b8daf6c3cd19d11524b5' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/common/templates/search.tpl',
      1 => 1364681342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8611381654762482ade0f7-50509214',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.escape.php';
?><?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<?php ob_start(); ?>
  <select class="input" id="section" name="feed" onchange="loadSection(this);">
    <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('sections')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
?>
      <?php if ($_smarty_tpl->tpl_vars['section']->value['value']==$_smarty_tpl->getVariable('currentSection')->value){?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['section']->value['value'];?>
" selected="true"><?php echo $_smarty_tpl->tpl_vars['section']->value['title'];?>
</option>
      <?php }else{ ?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['section']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['section']->value['title'];?>
</option>
      <?php }?>
    <?php }} ?>
  </select>
<?php  $_smarty_tpl->assign("categorySelect", ob_get_contents()); Smarty::$_smarty_vars['capture']["categorySelect"]=ob_get_clean();?>


  <table id="videoHeader" class="section-search">
    <tr>
    <?php if (count($_smarty_tpl->getVariable('sections')->value)>1){?>
      <td id="categoryformcontainer">
        <form method="get" action="/<?php echo $_smarty_tpl->getVariable('configModule')->value;?>
/index">
          <fieldset>
            <label for="section" class="formlabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("SECTION_TEXT");?>
</label>
            <?php echo $_smarty_tpl->getVariable('categorySelect')->value;?>

            
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hiddenArgs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['arg']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
              <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
" />
            <?php }} ?>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('breadcrumbSamePageArgs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['arg']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
              <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
" />
            <?php }} ?>
          </fieldset>
        </form>
      </td>
    <?php }?>
      <td id="searchformcontainer">
        <form method="get" action="/<?php echo $_smarty_tpl->getVariable('configModule')->value;?>
/search">
          <input type="hidden" name="feed" value="<?php echo $_smarty_tpl->getVariable('currentSection')->value;?>
" />
          <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/search.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('insideForm',true);$_template->assign('extraArgs',$_smarty_tpl->getVariable('hiddenArgs')->value);$_template->properties['nocache_hash']  = '8611381654762482ade0f7-50509214';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.7, created on 2014-11-26 14:05:39
         compiled from "findInclude:common/templates/search.tpl" */ ?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.escape.php';
?><?php ob_start(); ?>
  <?php if ((!isset($_smarty_tpl->getVariable('searchPage',null,true,false)->value)&&($_smarty_tpl->getVariable('page')->value=='search'))||($_smarty_tpl->getVariable('page')->value==$_smarty_tpl->getVariable('searchPage')->value)){?>
    <?php $_smarty_tpl->tpl_vars['hiddenArgs'] = new Smarty_variable($_smarty_tpl->getVariable('breadcrumbSamePageArgs')->value, null, null);?>
  <?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['hiddenArgs'] = new Smarty_variable($_smarty_tpl->getVariable('breadcrumbArgs')->value, null, null);?>
  <?php }?>
  
  <?php if (isset($_smarty_tpl->getVariable('extraArgs',null,true,false)->value)){?>
    <?php $_smarty_tpl->tpl_vars['hiddenArgs'] = new Smarty_variable(array_merge($_smarty_tpl->getVariable('extraArgs')->value,$_smarty_tpl->getVariable('hiddenArgs')->value), null, null);?>
  <?php }?>
  <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['arg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hiddenArgs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['arg']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['arg']->value;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
" />
  <?php }} ?>
<?php  $_smarty_tpl->assign("hiddenArgHTML", ob_get_contents()); Smarty::$_smarty_vars['capture']["hiddenArgHTML"]=ob_get_clean();?>

<?php ob_start(); ?>
  <?php if ($_smarty_tpl->getVariable('inlineSearchError')->value){?>
    <p><?php echo $_smarty_tpl->getVariable('inlineSearchError')->value;?>
</p>
  <?php }elseif(isset($_smarty_tpl->getVariable('resultCount',null,true,false)->value)){?>
    <?php if ($_smarty_tpl->getVariable('resultCount')->value==0){?>
      <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NO_MATCHES_FOUND");?>
</p>
    <?php }elseif($_smarty_tpl->getVariable('resultCount')->value==1){?>
      <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("ONE_MATCH_FOUND");?>
</p>
    <?php }else{ ?>
      <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("NUM_MATCHES_FOUND",$_smarty_tpl->getVariable('resultCount')->value);?>
</p>
    <?php }?>
  <?php }?>
<?php  $_smarty_tpl->assign("inlineErrorHTML", ob_get_contents()); Smarty::$_smarty_vars['capture']["inlineErrorHTML"]=ob_get_clean();?>

<?php ob_start(); ?>
  <?php if (isset($_smarty_tpl->getVariable('tip',null,true,false)->value)){?>
    <p class="legend nonfocal">
      <strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString("SEARCH_TIP_TITLE");?>
</strong> <?php echo $_smarty_tpl->getVariable('tip')->value;?>

    </p>
  <?php }?>
<?php  $_smarty_tpl->assign("tipHTML", ob_get_contents()); Smarty::$_smarty_vars['capture']["tipHTML"]=ob_get_clean();?>

<?php $_smarty_tpl->tpl_vars['searchAction'] = new Smarty_variable((($tmp = @$_smarty_tpl->getVariable('searchPage')->value)===null||$tmp==='' ? "/".($_smarty_tpl->getVariable('configModule')->value)."/search" : $tmp), null, null);?>


  <?php if (!$_smarty_tpl->getVariable('insideForm')->value){?>
    <div class="nonfocal" id="searchformcontainer">
      <form method="get" action="<?php echo $_smarty_tpl->getVariable('searchAction')->value;?>
">
  <?php }?>
  
        <fieldset class="inputcombo<?php if ((($tmp = @$_smarty_tpl->getVariable('emphasized')->value)===null||$tmp==='' ? $_smarty_tpl->getVariable('isModuleHome')->value : $tmp)){?> emphasized<?php }?>">
          <input class="forminput" type="text" id="<?php echo (($tmp = @$_smarty_tpl->getVariable('inputName')->value)===null||$tmp==='' ? 'filter' : $tmp);?>
" name="<?php echo (($tmp = @$_smarty_tpl->getVariable('inputName')->value)===null||$tmp==='' ? 'filter' : $tmp);?>
" placeholder="<?php echo (($tmp = @$_smarty_tpl->getVariable('placeholder')->value)===null||$tmp==='' ? '' : $tmp);?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('searchTerms')->value);?>
" />
          <input class="hiddensubmit" type="submit" value="submit" />
          <?php echo $_smarty_tpl->getVariable('hiddenArgHTML')->value;?>

        </fieldset>
        <?php if (isset($_smarty_tpl->getVariable('additionalInputs',null,true,false)->value)){?>
          <fieldset>
            <?php echo $_smarty_tpl->getVariable('additionalInputs')->value;?>

          </fieldset>
        <?php }?>
        <?php echo $_smarty_tpl->getVariable('tipHTML')->value;?>

        <?php echo $_smarty_tpl->getVariable('inlineErrorHTML')->value;?>

      
  <?php if (!$_smarty_tpl->getVariable('insideForm')->value){?>
      </form>
    </div>
  <?php }?>

<?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/common/templates/search.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>
        </form>
      </td>
      <td id="bookmarkscontainer"<?php if (!$_smarty_tpl->getVariable('hasBookmarks')->value){?> style="display:none"<?php }?>>
        <a id="bookmarkslink" href="<?php echo $_smarty_tpl->getVariable('bookmarkLink')->value[0]['url'];?>
"><div></div></a>
      </td>
    </tr>
  </table>






  <?php ob_start(); ?>
    <?php $_template = new Smarty_Internal_Template("findInclude:modules/".($_smarty_tpl->getVariable('moduleID')->value)."/templates/results.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('results',$_smarty_tpl->getVariable('videos')->value);$_template->assign('resultsID',"videoList");$_template->assign('titleTruncate',40); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
  <?php  $_smarty_tpl->assign("splitviewList", ob_get_contents()); Smarty::$_smarty_vars['capture']["splitviewList"]=ob_get_clean();?>
  <?php $_smarty_tpl->tpl_vars['splitview'] = new Smarty_variable(array(), null, null);?>
  <?php if (!isset($_smarty_tpl->tpl_vars['splitview']) || !is_array($_smarty_tpl->tpl_vars['splitview']->value)) $_smarty_tpl->createLocalArrayVariable('splitview', null, null);
$_smarty_tpl->tpl_vars['splitview']->value['id'] = "tabletVideos";?>
  <?php if (!isset($_smarty_tpl->tpl_vars['splitview']) || !is_array($_smarty_tpl->tpl_vars['splitview']->value)) $_smarty_tpl->createLocalArrayVariable('splitview', null, null);
$_smarty_tpl->tpl_vars['splitview']->value['class'] = "splitview-stories";?>
  <?php if (!isset($_smarty_tpl->tpl_vars['splitview']) || !is_array($_smarty_tpl->tpl_vars['splitview']->value)) $_smarty_tpl->createLocalArrayVariable('splitview', null, null);
$_smarty_tpl->tpl_vars['splitview']->value['list'] = $_smarty_tpl->getVariable('splitviewList')->value;?>
  <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/splitview.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('splitview',$_smarty_tpl->getVariable('splitview')->value);$_template->properties['nocache_hash']  = '8611381654762482ade0f7-50509214';
$_tpl_stack[] = $_smarty_tpl; $_smarty_tpl = $_template;?>
<?php /* Smarty version Smarty-3.0.7, created on 2014-11-26 14:05:39
         compiled from "findInclude:common/templates/splitview.tpl" */ ?>
<div<?php if ($_smarty_tpl->getVariable('splitview')->value['id']){?> id="<?php echo $_smarty_tpl->getVariable('splitview')->value['id'];?>
"<?php }?> class="splitview<?php if ($_smarty_tpl->getVariable('splitview')->value['class']){?> <?php echo $_smarty_tpl->getVariable('splitview')->value['class'];?>
<?php }?>">
  <div class="splitview-listwrapper">
    <div class="splitview-list"><?php echo $_smarty_tpl->getVariable('splitview')->value['list'];?>
</div>
  </div>
  <div class="splitview-detailwrapper">
    <div class="splitview-detail"><?php echo $_smarty_tpl->getVariable('splitview')->value['detail'];?>
</div>
  </div>
</div>
<?php $_smarty_tpl->updateParentVariables(0);?>
<?php /*  End of included template "findInclude:common/templates/splitview.tpl" */ ?>
<?php $_smarty_tpl = array_pop($_tpl_stack);?><?php unset($_template);?>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
