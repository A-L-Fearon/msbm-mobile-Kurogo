<?php /* Smarty version Smarty-3.0.7, created on 2015-01-14 21:49:17
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/social/templates/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78471025454b72aad624e72-65560637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4eef0a88b552b52eabd1a836482b182bc00322' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/social/templates/detail.tpl',
      1 => 1364681345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78471025454b72aad624e72-65560637',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="focal">
    <p class="post"><?php echo $_smarty_tpl->getVariable('postBody')->value;?>
</p>
    <div class="byline">
        <a href="<?php echo $_smarty_tpl->getVariable('authorURL')->value;?>
"><img class="social-avatar" src="<?php echo $_smarty_tpl->getVariable('authorImageURL')->value;?>
" alt="" /></a>
        <div class="author-created">
            <div class="author"><a href="<?php echo $_smarty_tpl->getVariable('authorURL')->value;?>
"><?php echo $_smarty_tpl->getVariable('authorName')->value;?>
</a></div>
            <div class="created"><?php echo $_smarty_tpl->getVariable('postDate')->value;?>
</div>
        </div>
    </div>
    <?php if (count($_smarty_tpl->getVariable('postLinks')->value)>0){?>
        <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/actionButtonList.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('actionButtons',$_smarty_tpl->getVariable('postLinks')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    <?php }?>
</div>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
