<?php
/* Smarty version 3.1.33, created on 2020-01-13 20:25:30
  from '/var/www/html/themes/my_theme/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1cc42a0613c3_06790093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d77551257537b59a94abbf093a146a8017014ab' => 
    array (
      0 => '/var/www/html/themes/my_theme/templates/index.tpl',
      1 => 1573587869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1cc42a0613c3_06790093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82518905e1cc42a0381a3_04688084', 'page_content_container');
?>

        </div>
      </section>
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_18150899275e1cc42a03fc88_23780384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_7534305205e1cc42a04b899_19789532 extends Smarty_Internal_Block
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
class Block_82518905e1cc42a0381a3_04688084 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_82518905e1cc42a0381a3_04688084',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_18150899275e1cc42a03fc88_23780384',
  ),
  'hook_home' => 
  array (
    0 => 'Block_7534305205e1cc42a04b899_19789532',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18150899275e1cc42a03fc88_23780384', 'page_content_top', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7534305205e1cc42a04b899_19789532', 'hook_home', $this->tplIndex);
?>

          
        <?php
}
}
/* {/block 'page_content_container'} */
}
