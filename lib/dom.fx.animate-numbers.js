$.animate_number = (elemend_handle, start, end, duration) => {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    elemend_handle.html(Math.floor(progress * (end - start) + start));
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);

}

$(document).ready(function(){
  animated = new Array;
  
  $('counternumber').each(function(ind){
    animated[`${ind}-animation`] = false;
    $(this).html(0);
  });

  $(window).on('scroll', function(){
    $('counternumber').each(function(ind){
      $.create_number_animation($(this), ind);    
    });
  });


  $.create_number_animation = (elemend_handle, ind) => {
    let element_position = Math.ceil(elemend_handle.offset().top);
    let scroll_position = window.pageYOffset;
    let window_height = $(window).innerHeight();
    let pixel_difference = 80;

    min_position_to_animate = eval(window_height + scroll_position - pixel_difference);

    if ( !animated[`${ind}-animation`] && (min_position_to_animate > element_position) ) {
      $.animate_number(elemend_handle, 0, elemend_handle.attr('until'), 1500);
      animated[`${ind}-animation`] = true;
    }
  }

});
