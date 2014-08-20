$(function(){
   var $animado = $("#result");
   $(".content-open").on("click", function(e){
       e.preventDefault();

       var url = $(this).attr('href');
       //Coloca o nome do arquivo
       $("#fileNameSel").html(url.split('/')[1]);
       $("#fileNameSel").stop(true, true).fadeIn('slow').delay(3000).fadeOut();
       
       //Add e remove class com delay
       $(this).addClass('addClass-cor').delay(3800).queue(function() {
           $(this).removeClass("addClass-cor");
           $(this).dequeue();
       });;

       $("#result").load(url);
       $animado.stop(true, true).fadeIn('slow').delay(3000).fadeOut();
   });
});


