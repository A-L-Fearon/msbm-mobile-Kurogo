<?php /* Smarty version Smarty-3.0.7, created on 2015-01-14 14:47:15
         compiled from "findInclude:common/templates/videoPlayer/videoPlayer_youtube.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136289128554b6c7c349b3c5-84913149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67deb7f03c620bd96ff3af732f1a10f275e2a528' => 
    array (
      0 => 'findInclude:common/templates/videoPlayer/videoPlayer_youtube.tpl',
      1 => 1364681342,
      2 => 'findInclude',
    ),
  ),
  'nocache_hash' => '136289128554b6c7c349b3c5-84913149',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('http_protocol')->value;?>
://www.youtube.com/player_api"></script>
<?php $_smarty_tpl->tpl_vars['enableJSAPI'] = new Smarty_variable((($tmp = @$_smarty_tpl->getVariable('enableJSAPI')->value)===null||$tmp==='' ? false : $tmp), null, null);?>
<?php $_smarty_tpl->tpl_vars['showControls'] = new Smarty_variable((($tmp = @$_smarty_tpl->getVariable('showControls')->value)===null||$tmp==='' ? true : $tmp), null, null);?>
<?php $_smarty_tpl->tpl_vars['showInfo'] = new Smarty_variable((($tmp = @$_smarty_tpl->getVariable('showInfo')->value)===null||$tmp==='' ? false : $tmp), null, null);?>
<?php $_smarty_tpl->tpl_vars['modestBranding'] = new Smarty_variable((($tmp = @$_smarty_tpl->getVariable('modestBranding')->value)===null||$tmp==='' ? true : $tmp), null, null);?>
<?php $_smarty_tpl->tpl_vars['showRelatedVideos'] = new Smarty_variable((($tmp = @$_smarty_tpl->getVariable('showRelatedVideos')->value)===null||$tmp==='' ? false : $tmp), null, null);?>
<iframe id="ytplayer" class="kgo-videoplayer-iframe" type="text/html" width="100%" height="100%" scrolling="no" src="<?php echo $_smarty_tpl->getVariable('http_protocol')->value;?>
://www.youtube.com/embed/<?php echo $_smarty_tpl->getVariable('video')->value->getID();?>
?enablejsapi=<?php if ($_smarty_tpl->getVariable('enableJSAPI')->value){?>1<?php }else{ ?>0<?php }?>&controls=<?php if ($_smarty_tpl->getVariable('showControls')->value){?>1<?php }else{ ?>0<?php }?>&showinfo=<?php if ($_smarty_tpl->getVariable('showInfo')->value){?>1<?php }else{ ?>0<?php }?>&modestbranding=<?php if ($_smarty_tpl->getVariable('modestBranding')->value){?>1<?php }else{ ?>0<?php }?>&rel=<?php if ($_smarty_tpl->getVariable('showRelatedVideos')->value){?>1<?php }else{ ?>0<?php }?><?php if ($_smarty_tpl->getVariable('platform')->value=='android'){?>&html5=1<?php }?>" frameborder="0">
</iframe>
