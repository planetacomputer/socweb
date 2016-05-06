$(document).ready(function () {
  $("body").append('<div id="divmensaje">hhhh</div>');
  $("#divmensaje").hide();
  $(".cuadradito").hover(function (e) {
    $("#divmensaje").show();
    $("#divmensaje").css("left",e.clientX+document.body.scrollLeft+5);
    $("#divmensaje").css("top",e.clientY+document.body.scrollTop+5);
    $("#divmensaje").load("pagina1.php?cod="+$(this).attr('id'));
  },
  function () {
    $("#divmensaje").hide();
  })
  $(".cuadradito").mousemove(function (e){
    $("#divmensaje").css("left",e.clientX+document.body.scrollLeft+5);
    $("#divmensaje").css("top",e.clientY+document.body.scrollTop+5); 
  })
})
