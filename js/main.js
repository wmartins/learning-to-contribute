$(function(){
   var $animado = $("#result");
   $(".content-open").on("click", function(e){
       e.preventDefault();

       var url = $(this).attr('href');
       //Coloca o nome do arquivo
       $("#fileNameSel").html(url.split('/')[1]);
       $("#fileNameSel").stop(true, true).fadeIn('slow').delay(3000).fadeOut();

       $("#result").load(url);
       $animado.stop(true, true).fadeIn('slow').delay(3000).fadeOut();
   });
});


