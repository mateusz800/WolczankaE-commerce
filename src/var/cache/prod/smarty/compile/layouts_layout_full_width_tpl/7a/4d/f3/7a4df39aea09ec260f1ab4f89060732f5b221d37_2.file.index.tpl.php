<?php
/* Smarty version 3.1.33, created on 2020-01-09 13:15:23
  from '/Applications/MAMP/htdocs/prestashop/themes/my_theme/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e17195b92fd21_36203072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a4df39aea09ec260f1ab4f89060732f5b221d37' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/my_theme/templates/index.tpl',
      1 => 1573587869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e17195b92fd21_36203072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20057977535e17195b92abb8_38049873', 'page_content_container');
?>

        </div>
      </section>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_3068669025e17195b92bab2_88046012 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_13064627355e17195b92cde6_36826134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class='parallax-video'>
              <video class='w-100' autoplay loop muted >
                <source src="themes/my_theme/assets/video/film.mp4" ttype="video/mp4">
              </video>
            </div>
          
            <div class='bg-white'>
              <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

              </div>
            
          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content_container'} */
class Block_20057977535e17195b92abb8_38049873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20057977535e17195b92abb8_38049873',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_3068669025e17195b92bab2_88046012',
  ),
  'hook_home' => 
  array (
    0 => 'Block_13064627355e17195b92cde6_36826134',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3068669025e17195b92bab2_88046012', 'page_content_top', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13064627355e17195b92cde6_36826134', 'hook_home', $this->tplIndex);
?>

          
        <?php
}
}
/* {/block 'page_content_container'} */
}
