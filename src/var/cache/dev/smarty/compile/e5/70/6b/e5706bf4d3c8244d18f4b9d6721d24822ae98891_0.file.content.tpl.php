<?php
/* Smarty version 3.1.33, created on 2020-01-13 20:23:55
  from '/var/www/html/admin-dev/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1cc3cbd4fee9_43118098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5706bf4d3c8244d18f4b9d6721d24822ae98891' => 
    array (
      0 => '/var/www/html/admin-dev/themes/new-theme/template/content.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1cc3cbd4fee9_43118098 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
