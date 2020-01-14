/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
window.onload= function(){
  console.log(window.location.pathname);
  if (window.location.pathname == '/prestashop/nowe-produkty' ||
          window.location.pathname == '/prestashop/najczesciej-kupowane' ) {
    //Hide the element.
    console.log('ok');
    document.querySelector('#left-column').classList.add('hide');
    document.querySelector('#content-wrapper').classList.add('w-100');
  }
  document.querySelector('body').addEventListener("click", this.hideElement)
  try {
    document.querySelector('.mobile-hide .logout i').addEventListener("click", displayProfileMenu);
  } catch (error) {
    /* User not logged*/
  }

  
};

function showSearchBar(){
    document.querySelector('#search_widget').classList.add('active');
    document.querySelector('#search_widget input[type=text]').focus();
    document.querySelector('#search-btn').classList.add('hidden');
}



function hideElement(event){
  if(event.target != document.querySelector('#search-btn i')){
    // hiding search bar
  const searchWidget = document.querySelector('#search_widget');
  if(search_widget.classList.contains('active')){
    if(event.target != document.querySelector('#search_widget input[type=text]') && event.target != document.querySelector('#search_widget i' )){
      searchWidget.classList.remove('active');
      document.querySelector('#search-btn').classList.remove('hidden');
    }
  }
  }
  // hiding user menu
  try {
    if(document.querySelector('#user_menu').classList.contains('active')){
      if(event.target != document.querySelector('.mobile-hide .logout i')){
        document.querySelector('#user_menu').classList.remove('active');
      }
    }
  } catch (error) {  }
  
} 

function displayProfileMenu(e){
  console.log('ok');
    e.preventDefault();
    document.querySelector('#user_menu').classList.add('active');
}