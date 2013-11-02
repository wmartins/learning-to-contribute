$(function(){
   var $animado = $("#result");
   $(".content-open").on("click", function(e){
       e.preventDefault();
       var url = $(this).attr('href');
       $("#result").load(url);
       $animado.stop(true, true).fadeIn('slow').delay(3000).fadeOut();
   });
});


