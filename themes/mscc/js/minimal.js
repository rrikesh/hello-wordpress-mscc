jQuery(document).ready( function($){
  "use strict";
  // Menu
  $('a[href="' + location.href + '"]').attr('class', 'active');
  
  // Ajax
  $('#call-ajax').click( function(e){
    e.preventDefault();
    jQuery.ajax({
 
      type: 'POST',
      url: minimal.ajaxurl,
      dataType: 'json',
      data: {
              action: 'ajaxdemo',
              numposts: 1
          },
  
      success: function(data, textStatus, XMLHttpRequest){
        var postList = '<li>' + data.join('</li><li>') + '</li>';
        $("#posts").html( postList );
      }
    });
    
    
  });
  
});