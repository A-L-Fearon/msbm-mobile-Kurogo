<?php /* Smarty version Smarty-3.0.7, created on 2015-01-14 14:47:15
         compiled from "/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/video/templates/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33130343654b6c7c3318481-13445447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29ac5e0baaccfa15c57f002f05e1ea7e7c1feb6d' => 
    array (
      0 => '/home/fearon/kurogo-mw-1.8.3/Kurogo-Mobile-Web/app/modules/video/templates/detail.tpl',
      1 => 1364681345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33130343654b6c7c3318481-13445447',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>

<div class="video">
  <h1 class="slugline"><?php echo $_smarty_tpl->getVariable('videoTitle')->value;?>
</h1>

  <div id="videosubhead">
    <div class="videobuttons">
      <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/bookmark.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('name',$_smarty_tpl->getVariable('cookieName')->value);$_template->assign('item',$_smarty_tpl->getVariable('bookmarkItem')->value);$_template->assign('exdate',$_smarty_tpl->getVariable('expireDate')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>  
      <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/share.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('shareURL',$_smarty_tpl->getVariable('shareURL')->value);$_template->assign('shareRemark',$_smarty_tpl->getVariable('shareRemark')->value);$_template->assign('shareEmailURL',$_smarty_tpl->getVariable('shareEmailURL')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>
    <p class="byline">
      
        <?php if ($_smarty_tpl->getVariable('videoAuthor')->value){?>
          <span class="credit">by <span class="author"><?php echo $_smarty_tpl->getVariable('videoAuthor')->value;?>
</span><br /></span>
        <?php }?>
        <span class="postdate"><?php echo $_smarty_tpl->getVariable('videoDate')->value;?>
</span>
      
    </p>    
  </div><!--videosubhead-->

  <?php $_template = new Smarty_Internal_Template("findInclude:common/templates/videoPlayer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('video',$_smarty_tpl->getVariable('videoObject')->value); echo $_template->getRenderedTemplate();?><?php unset($_template);?>

  <div class="videodescription">
    <?php echo $_smarty_tpl->getVariable('videoDescription')->value;?>

  </div>
</div>

<?php $_template = new Smarty_Internal_Template("findInclude:common/templates/footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
