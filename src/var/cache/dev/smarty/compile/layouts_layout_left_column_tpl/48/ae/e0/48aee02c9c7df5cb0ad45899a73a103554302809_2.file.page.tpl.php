<?php
/* Smarty version 3.1.33, created on 2020-01-14 14:58:29
  from '/var/www/html/themes/my_theme/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1dc905648506_00601937',
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
function content_5e1dc905648506_00601937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5752955975e1dc905627658_03384035', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2417493955e1dc90562b3e3_41027864 extends Smarty_Internal_Block
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
class Block_20267527395e1dc905628ea1_51979321 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2417493955e1dc90562b3e3_41027864', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_17505881605e1dc90563eb53_39331897 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_10932192305e1dc905640854_84421249 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11979923415e1dc90563d5c0_89833562 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17505881605e1dc90563eb53_39331897', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10932192305e1dc905640854_84421249', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_15400927345e1dc905645069_64881030 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_19103211555e1dc905643a88_33703944 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer ">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15400927345e1dc905645069_64881030', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_5752955975e1dc905627658_03384035 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5752955975e1dc905627658_03384035',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_20267527395e1dc905628ea1_51979321',
  ),
  'page_title' => 
  array (
    0 => 'Block_2417493955e1dc90562b3e3_41027864',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_11979923415e1dc90563d5c0_89833562',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17505881605e1dc90563eb53_39331897',
  ),
  'page_content' => 
  array (
    0 => 'Block_10932192305e1dc905640854_84421249',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_19103211555e1dc905643a88_33703944',
  ),
  'page_footer' => 
  array (
    0 => 'Block_15400927345e1dc905645069_64881030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20267527395e1dc905628ea1_51979321', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11979923415e1dc90563d5c0_89833562', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19103211555e1dc905643a88_33703944', 'page_footer_container', $this->tplIndex);
?>


  </section>


<?php
}
}
/* {/block 'content'} */
}
