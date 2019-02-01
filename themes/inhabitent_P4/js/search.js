$(function () {
 
    $('.header_logo_menu').on('click', '.open-search', function() {
        $('[name="searchForm"]').css('display', 'initial');
        
        $('[name="searchForm"]').focus(function(){
      
   
        });
        
    });
    $('[name="searchForm"]').blur(function() {
        console.log('d')
        $(this).hide(30);
        //css("display", "none");
      ;
        // $("input").blur(function(){
           
        // });
      });
  });
