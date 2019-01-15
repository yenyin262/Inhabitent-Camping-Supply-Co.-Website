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

    //   $('searchForm').onsubmit = function() {
    //     window.location = 'http://www.google.com/search?q=site:http://localhost:8888/Project_4 ' + $('type hit and enter...').value;
    //     return false;
    // }


  });
