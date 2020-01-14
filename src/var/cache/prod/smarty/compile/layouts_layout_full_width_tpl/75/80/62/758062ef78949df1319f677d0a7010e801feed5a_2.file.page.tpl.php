<?php
/* Smarty version 3.1.33, created on 2020-01-09 13:15:23
  from '/Applications/MAMP/htdocs/prestashop/themes/my_theme/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e17195b948548_81928391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '758062ef78949df1319f677d0a7010e801feed5a' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/my_theme/templates/page.tpl',
      1 => 1572806558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e17195b948548_81928391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9416839135e17195b93a710_05704205', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_410149055e17195b93c360_58295234 extends Smarty_Internal_Block
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
class Block_15309420725e17195b93b400_61810227 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_410149055e17195b93c360_58295234', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_7709540425e17195b943370_40765221 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_19952463065e17195b9443d3_13711989 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20472567055e17195b942569_31114749 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7709540425e17195b943370_40765221', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19952463065e17195b9443d3_13711989', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_17555761755e17195b946924_24085067 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11203548835e17195b945d29_15534853 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer ">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17555761755e17195b946924_24085067', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9416839135e17195b93a710_05704205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9416839135e17195b93a710_05704205',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_15309420725e17195b93b400_61810227',
  ),
  'page_title' => 
  array (
    0 => 'Block_410149055e17195b93c360_58295234',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_20472567055e17195b942569_31114749',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7709540425e17195b943370_40765221',
  ),
  'page_content' => 
  array (
    0 => 'Block_19952463065e17195b9443d3_13711989',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11203548835e17195b945d29_15534853',
  ),
  'page_footer' => 
  array (
    0 => 'Block_17555761755e17195b946924_24085067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15309420725e17195b93b400_61810227', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20472567055e17195b942569_31114749', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11203548835e17195b945d29_15534853', 'page_footer_container', $this->tplIndex);
?>


  </section>


<?php
}
}
/* {/block 'content'} */
}
