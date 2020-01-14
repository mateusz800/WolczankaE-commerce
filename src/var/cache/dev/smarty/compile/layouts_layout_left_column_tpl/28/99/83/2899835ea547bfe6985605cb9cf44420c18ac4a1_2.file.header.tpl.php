<?php
/* Smarty version 3.1.33, created on 2020-01-13 20:25:55
  from '/var/www/html/themes/my_theme/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1cc443aad574_67377250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2899835ea547bfe6985605cb9cf44420c18ac4a1' => 
    array (
      0 => '/var/www/html/themes/my_theme/templates/_partials/header.tpl',
      1 => 1574857386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1cc443aad574_67377250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18504326665e1cc443a60508_56052416', 'header_top');
?>


<?php }
/* {block 'header_top'} */
class Block_18504326665e1cc443a60508_56052416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_18504326665e1cc443a60508_56052416',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
      <div class='w-100 h-100 text-center '>
        <div class='' id='logo'>
          <div class="hidden-md-up text-sm-center mobile float-xs-left">
            <div class="float-xs-left" id="menu-icon">
                <i class="material-icons d-inline">&#xE5D2;</i>
            </div>
          </div>
          <div class='mobile-center'>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
              <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              </a>
          </div>
          <div class='mobile mr-2'>
            <div class='d-inline-flex'>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

            </div>
          </div>
        </div>
        <div class='mobile-hide full-width-float-right mt-4'>
          <div class=' inline mr-2'>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

          </div>
          <div class=' inline right mobile-hide  mt-1'>
              <a style='z-index:2' id='search-btn' onclick='showSearchBar()'>
                <i class="material-icons search">&#xE8B6;</i>
              </a>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

              <div id='user_menu'>
                <ul>
                  <li>
                    <a href='https://localhost/prestashop/?mylogout=' title='Wyloguj się'> Wyloguj się </a>
                  </li>
                  <li>
                    <a href='https://localhost/prestashop/moje-konto' title='Profil'> Profil</a>
                  </li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
