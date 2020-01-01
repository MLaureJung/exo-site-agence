// require('jarallax');
var jQueryBridget = require('jquery-bridget');
var Masonry = require('masonry-layout');
jQueryBridget( 'masonry', Masonry, $ );

var app = {
  init: function() {
    console.log('init');

    $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      columnWidth: 200,
      gutter: 10
      
    })

    // $('.jarallax').jarallax({
    //   speed: 0.2
    // })
  }

};

$(app.init);
