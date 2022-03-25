$(document).on('click', '[isotope-toggle]', function(event){
  event.preventDefault();

  let element_handle = $(this);
  let element_parent = element_handle.parent();
  let target = element_handle.attr('isotope-toggle');

  element_parent.parent().find('li').removeClass('active');
  element_parent.addClass('active');

  var $iso = $('.isotope-items').isotope({
    itemSelector: '.isotope-item',
    layoutMode: 'fitRows'
  });
  
  $iso.isotope({
    filter: target
  });

});