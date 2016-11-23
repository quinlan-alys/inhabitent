

(function( $ ) {
    
 //shows the search input field on click 
 $('.searchicon').on('click', function(event){
   console.log("hye");
   event.preventDefault();
   $('.search-form .search-field').animate({width: 210}).focus();
 });
 //hides the search input field when not in focus
 $('.search-form .search-field').on('focusout', function(){
   $(this).animate({width: 0});
 });
})( jQuery );