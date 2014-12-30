<?php /* Smarty version Smarty-3.0.7, created on 2014-11-26 14:05:39
         compiled from "findInclude:modules/video/templates/listItem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173140965454762483367b90-49054446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '209822ac64353d7452cc63f90c1d80dbb3e39c64' => 
    array (
      0 => 'findInclude:modules/video/templates/listItem.tpl',
      1 => 1364681345,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '173140965454762483367b90-49054446',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('item',null,true,false)->value['label'])){?>
  <?php if ($_smarty_tpl->getVariable('boldLabels')->value){?>
    <strong>
  <?php }?>
    <?php echo $_smarty_tpl->getVariable('item')->value['label'];?>
<?php if ((($tmp = @$_smarty_tpl->getVariable('labelColon')->value)===null||$tmp==='' ? true : $tmp)){?>:&nbsp;<?php }?>
  <?php if ($_smarty_tpl->getVariable('boldLabels')->value){?>
    </strong>
  <?php }?>
<?php }?>

  <?php if ($_smarty_tpl->getVariable('item')->value['url']){?>
    <a href="<?php echo $_smarty_tpl->getVariable('item')->value['url'];?>
" class="<?php echo (($tmp = @$_smarty_tpl->getVariable('item')->value['class'])===null||$tmp==='' ? '' : $tmp);?>
"<?php if ($_smarty_tpl->getVariable('linkTarget')->value||$_smarty_tpl->getVariable('item')->value['linkTarget']){?> target="<?php if ($_smarty_tpl->getVariable('item')->value['linkTarget']){?><?php echo $_smarty_tpl->getVariable('item')->value['linkTarget'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('linkTarget')->value;?>
<?php }?>"<?php }?>>
  <?php }?>
    <?php if ($_smarty_tpl->getVariable('item')->value['img']){?>
      <img src="<?php echo $_smarty_tpl->getVariable('item')->value['img'];?>
" class="thumbnail" alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['getLocalizedString'][0][0]->getLocalizedString('VIDEO_THUMBNAIL_ALT_TEXT');?>
" />
    <?php }?>
	    <div class="ellipsis" id="ellipsis_<?php echo $_smarty_tpl->getVariable('ellipsisId')->value;?>
">
	          <div class="title"><?php echo $_smarty_tpl->getVariable('item')->value['title'];?>
</div>
	          <div class="smallprint"><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->getVariable('item')->value['subtitle']);?>
</div>
	    </div>
    <?php if ($_smarty_tpl->getVariable('item')->value['badge']){?>
      <span class="badge"><?php echo $_smarty_tpl->getVariable('item')->value['badge'];?>
</span>
    <?php }?>
  <?php if ($_smarty_tpl->getVariable('item')->value['url']){?>
    </a>
  <?php }?>

