<?php
/* Smarty version 3.1.33, created on 2020-01-13 20:25:30
  from '/var/www/html/themes/my_theme/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1cc42a15b895_07374240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48aee02c9c7df5cb0ad45899a73a103554302809' => 
    array (
      0 => '/var/www/html/themes/my_theme/templates/page.tpl',
      1 => 1572806558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1cc42a15b895_07374240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3370037835e1cc42a0d95a2_22248969', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_16771658735e1cc42a0e99e7_60990269 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_3713203275e1cc42a0e0845_98412787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16771658735e1cc42a0e99e7_60990269', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_20679544485e1cc42a1207e7_24151626 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_18653157475e1cc42a12c852_63351307 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10434943815e1cc42a1171c2_02195292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20679544485e1cc42a1207e7_24151626', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18653157475e1cc42a12c852_63351307', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_17315838055e1cc42a1469d5_46870864 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_10773234355e1cc42a13eba4_92857370 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer ">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17315838055e1cc42a1469d5_46870864', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3370037835e1cc42a0d95a2_22248969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3370037835e1cc42a0d95a2_22248969',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_3713203275e1cc42a0e0845_98412787',
  ),
  'page_title' => 
  array (
    0 => 'Block_16771658735e1cc42a0e99e7_60990269',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_10434943815e1cc42a1171c2_02195292',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20679544485e1cc42a1207e7_24151626',
  ),
  'page_content' => 
  array (
    0 => 'Block_18653157475e1cc42a12c852_63351307',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_10773234355e1cc42a13eba4_92857370',
  ),
  'page_footer' => 
  array (
    0 => 'Block_17315838055e1cc42a1469d5_46870864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3713203275e1cc42a0e0845_98412787', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10434943815e1cc42a1171c2_02195292', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10773234355e1cc42a13eba4_92857370', 'page_footer_container', $this->tplIndex);
?>


  </section>


<?php
}
}
/* {/block 'content'} */
}
