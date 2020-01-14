<?php
/* Smarty version 3.1.33, created on 2020-01-09 13:15:11
  from '/Applications/MAMP/htdocs/prestashop/admin/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e17194f56dfd3_09816831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '459fa2fc7e58f2fd248f71685e3620b70de1d351' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin/themes/new-theme/template/content.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e17194f56dfd3_09816831 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
