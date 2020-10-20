// #####################################################################################
//                      jQuery UI Functions
// #####################################################################################
// jquery-ui-accordion
jQuery(document).ready(function($) {
    $( ".minimalAccordion" ).accordion({
      collapsible: true, 
      active: true, 
      heightStyle: "content",
      icon: { "header": false, "activeHeader": false},
      animate: 600,
      activate: function( event, ui ) {
        if(!$.isEmptyObject(ui.newHeader.offset())) {
            $('html:not(:animated), body:not(:animated)').animate({ scrollTop: ui.newHeader.offset().top }, 'slow');
        }
    }
    });
});
//jquery-ui-tabbed
jQuery(document).ready( function($) {
  $( ".minimalTabs" ).tabs({
    show: (400),
    hide: (250)
  });
});
