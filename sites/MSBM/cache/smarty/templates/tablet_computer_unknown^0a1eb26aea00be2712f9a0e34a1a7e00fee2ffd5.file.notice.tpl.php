<?php /* Smarty version Smarty-3.0.7, created on 2015-01-05 14:30:06
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/emergency/templates/notice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198534663954aae63e3af760-49986391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a1eb26aea00be2712f9a0e34a1a7e00fee2ffd5' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/emergency/templates/notice.tpl',
      1 => 1364681343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198534663954aae63e3af760-49986391',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/lib/smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="notice">
  
  <h1 class="slugline"><?php echo $_smarty_tpl->getVariable('emergencyNotice')->value['title'];?>
</h1>
  
  <p class="byline">
  
    <?php if ($_smarty_tpl->getVariable('emergencyNotice')->value['date']){?>
      <span class="pubdate"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('emergencyNotice')->value['date'],$_smarty_tpl->getVariable('dateFormat')->value);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('emergencyNotice')->value['date'],$_smarty_tpl->getVariable('timeFormat')->value);?>
</span>
    <?php }?>
  
  </p>    
  
  <div id="notice">
        
    <span id="noticebody">
      <?php echo $_smarty_tpl->getVariable('emergencyNotice')->value['body'];?>

    </span>
    
  </div><!--#notice-->
</div><!-- .notice -->

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
