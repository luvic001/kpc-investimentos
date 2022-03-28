$( document ).ready(function( $ ) {
  $( '#slider-pro' ).sliderPro({
    width: 555,
    height: 350,
    orientation: 'horizontal',
    loop: false,
    arrows: true,
    buttons: false,
    waitForLayers: true,
    fade: true,
    fullScreen: true,
    fadeFullScreen: true,
    thumbnailsPosition: 'bottom',
    thumbnailPointer: true,
    thumbnailWidth: 182,
    thumbnailHeight: 142,
    breakpoints: {
      800: {
        thumbnailsPosition: 'bottom',
        thumbnailWidth: 100,
        thumbnailHeight: 100,
        height: 400,
      },
      500: {
        thumbnailsPosition: 'bottom',
        thumbnailWidth: 100,
        thumbnailHeight: 100,
        height: 400,
      }
    }
  });
});