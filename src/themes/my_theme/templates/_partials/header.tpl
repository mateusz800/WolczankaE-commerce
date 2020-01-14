{**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}




{block name='header_top'}
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
            <a href="{$urls.base_url}">
              <img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
              </a>
          </div>
          <div class='mobile mr-2'>
            <div class='d-inline-flex'>
              {hook h='displayNav2'}
            </div>
          </div>
        </div>
        <div class='mobile-hide full-width-float-right mt-4'>
          <div class=' inline mr-2'>
              {hook h='displayTop'}
          </div>
          <div class=' inline right mobile-hide  mt-1'>
              <a style='z-index:2' id='search-btn' onclick='showSearchBar()'>
                <i class="material-icons search">&#xE8B6;</i>
              </a>
              {hook h='displayNav2'}
              <div id='user_menu'>
                <ul>
                  <li>
                    <a href='/?mylogout=' title='Wyloguj się'> Wyloguj się </a>
                  </li>
                  <li>
                    <a href='/moje-konto' title='Profil'> Profil</a>
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
  {hook h='displayNavFullWidth'}
{/block}

