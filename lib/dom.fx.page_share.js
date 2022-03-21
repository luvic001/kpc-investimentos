$(document).on('click', '[page-share]', function(event){
  event.preventDefault();

  var uri = location.pathname.substring(1);
  var SHARE_URL = `${site_url}/${uri}`;
   
  const SHARE_DATA = {
    title: cardapio_name,
    url: SHARE_URL,
    text: ''
  };

  if (navigator.share) {
    navigator.share(SHARE_DATA);
  }
});