<?php
/* Smarty version 3.1.33, created on 2020-01-09 13:15:23
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e17195bc9a0d9_34955929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1566837319,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5e17195bc9a0d9_34955929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost:8888/prestashop/moje-konto" rel="nofollow">
      Twoje konto
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Twoje konto</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost:8888/prestashop/dane-osobiste" title="Dane osobowe" rel="nofollow">
            Dane osobowe
          </a>
        </li>
            <li>
          <a href="http://localhost:8888/prestashop/sledzenie-zamowienia" title="Zwroty produktów" rel="nofollow">
            Zwroty produktów
          </a>
        </li>
            <li>
          <a href="http://localhost:8888/prestashop/historia-zamowien" title="Zamówienia" rel="nofollow">
            Zamówienia
          </a>
        </li>
            <li>
          <a href="http://localhost:8888/prestashop/potwierdzenie-zwrotu" title="Moje pokwitowania - korekty płatności" rel="nofollow">
            Moje pokwitowania - korekty płatności
          </a>
        </li>
            <li>
          <a href="http://localhost:8888/prestashop/adresy" title="Adresy" rel="nofollow">
            Adresy
          </a>
        </li>
        
	</ul>
</div>
<?php }
}
