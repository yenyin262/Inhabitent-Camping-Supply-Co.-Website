$(function () {
 
    $('.header_logo_menu').on('click', '.open-search', function() {
        $('[name="searchForm"]').css('display', 'initial');
        
        $('[name="searchForm"]').focus(function(){
      
        console.log('hi');
        });
  
    });
    $('[name="searchForm"]').mouseleave(function() {
        $('[name="searchForm"]').css("display", "none");

        $("input").blur(function(){

        });
      });
  });
