<?php /* Smarty version Smarty-3.0.7, created on 2014-11-28 11:39:51
         compiled from "findInclude:modules/photos/templates/photoListItem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1426863805478a55795d661-82364871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efda2de331c26daf33c4e24ca991822e04401d31' => 
    array (
      0 => 'findInclude:modules/photos/templates/photoListItem.tpl',
      1 => 1364681344,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '1426863805478a55795d661-82364871',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.truncate.php';
?><?php ob_start(); ?>
  <?php if (isset($_smarty_tpl->getVariable('item',null,true,false)->value['label'])){?>
    <?php if ($_smarty_tpl->getVariable('boldLabels')->value){?>
      <strong>
    <?php }?>
      <?php echo $_smarty_tpl->getVariable('item')->value['label'];?>
<?php if ((($tmp = @$_smarty_tpl->getVariable('labelColon')->value)===null||$tmp==='' ? true : $tmp)){?>: <?php }?>
    <?php if ($_smarty_tpl->getVariable('boldLabels')->value){?>
      </strong>
    <?php }?>
  <?php }?>
<?php  $_smarty_tpl->assign("listItemLabel", ob_get_contents()); Smarty::$_smarty_vars['capture']["listItemLabel"]=ob_get_clean();?>

  <?php if ($_smarty_tpl->getVariable('item')->value['url']){?>
    <a href="<?php echo $_smarty_tpl->getVariable('item')->value['url'];?>
" class="<?php echo (($tmp = @$_smarty_tpl->getVariable('item')->value['class'])===null||$tmp==='' ? '' : $tmp);?>
"<?php if ($_smarty_tpl->getVariable('linkTarget')->value||$_smarty_tpl->getVariable('item')->value['linkTarget']){?> target="<?php if ($_smarty_tpl->getVariable('item')->value['linkTarget']){?><?php echo $_smarty_tpl->getVariable('item')->value['linkTarget'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('linkTarget')->value;?>
<?php }?>"<?php }?>>
  <?php }?>
    <?php if ($_smarty_tpl->getVariable('item')->value['img']){?>
      <img src="<?php echo $_smarty_tpl->getVariable('item')->value['img'];?>
" alt="<?php if ($_smarty_tpl->getVariable('item')->value['imgAlt']){?><?php echo $_smarty_tpl->getVariable('item')->value['imgAlt'];?>
<?php }?>"
        <?php if ($_smarty_tpl->getVariable('item')->value['imgWidth']){?> width="<?php echo $_smarty_tpl->getVariable('item')->value['imgWidth'];?>
"<?php }?>
        <?php if ($_smarty_tpl->getVariable('item')->value['imgHeight']){?> height="<?php echo $_smarty_tpl->getVariable('item')->value['imgHeight'];?>
"<?php }?> />
    <?php }?>
    <?php echo $_smarty_tpl->getVariable('listItemLabel')->value;?>

    <?php if ($_smarty_tpl->getVariable('titleTruncate')->value){?>
      <?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('item')->value['title'],$_smarty_tpl->getVariable('titleTruncate')->value);?>

    <?php }else{ ?>
      <?php echo $_smarty_tpl->getVariable('item')->value['title'];?>

    <?php }?>
    <?php if ($_smarty_tpl->getVariable('item')->value['subtitle']){?>
      <?php if ((($tmp = @$_smarty_tpl->getVariable('subTitleNewline')->value)===null||$tmp==='' ? true : $tmp)){?><div<?php }else{ ?>&nbsp;<span<?php }?> class="smallprint">
        <?php echo $_smarty_tpl->getVariable('item')->value['subtitle'];?>

      <?php if ((($tmp = @$_smarty_tpl->getVariable('subTitleNewline')->value)===null||$tmp==='' ? true : $tmp)){?></div><?php }else{ ?></span><?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('item')->value['badge']){?>
      <span class="badge"><?php echo $_smarty_tpl->getVariable('item')->value['badge'];?>
</span>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('item')->value['type']){?>
    	<div class="smallprint serviceicon <?php echo $_smarty_tpl->getVariable('item')->value['type'];?>
"><?php echo $_smarty_tpl->getVariable('item')->value['type'];?>
</div>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('item')->value['albumcount']){?>
    	<div class="smallprint"><?php echo $_smarty_tpl->getVariable('item')->value['albumcount'];?>
</div>
	<?php }?>
  <?php if ($_smarty_tpl->getVariable('item')->value['url']){?>
    </a>
  <?php }?>

