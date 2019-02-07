$(function() { 
    
 
	  $(".btn-daytours").on( "click", function() {	 
	         $(".eee").toggle();

             });
                 $(".eee").prepend("<input type='text' class='search-txt'></input>");
                $(".search-txt").css("display","block");
    
});


/*

      $(".eee").toggle(function(){
        if ($(".eee").attr("display", "block")){
            $(".eee").css("display", "none");
        }else{
            if ($(".eee").attr("display", "block"))
             $(".eee").css("display", "block");
        }  
      });*/