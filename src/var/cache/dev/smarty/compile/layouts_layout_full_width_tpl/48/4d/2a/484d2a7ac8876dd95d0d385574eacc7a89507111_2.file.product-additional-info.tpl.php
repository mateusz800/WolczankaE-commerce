<?php
/* Smarty version 3.1.33, created on 2020-01-13 20:25:38
  from '/var/www/html/themes/my_theme/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1cc432efcc97_45790032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '484d2a7ac8876dd95d0d385574eacc7a89507111' => 
    array (
      0 => '/var/www/html/themes/my_theme/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1cc432efcc97_45790032 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
