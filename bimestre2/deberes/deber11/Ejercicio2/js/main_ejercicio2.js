$(document).ready(function(){


  $('.fila_par').css("background-color", "#3D819E");
  $('.fila_impar').css("background-color", "#009669");

  $(".fila_par").hover(
    function(){
        $(this).css("background-color", "#8D1AFF");
    }, 
    function(){
      $(this).css("background-color", "#FFF09B");
    }
  );

  $(".fila_impar").hover(
    function(){
        $(this).css("background-color", "red");
    }, 
    function(){
      $(this).css("background-color", "green");
    }
  );

  /*Utilizar el evento hover para mostrar un mensaje en un d#mensaje
  cuando nos posicionamos sobre un el y otro cuando salgamos de el.*/
  $("#cuadro").hover(
    function(){
        $(this).html("<p style='color:#070707;'>Dentro</p>");
    }, 
    function(){
      $(this).html("<p style='color:#ffffff;'>Fuera</p>");
    }
  );

  /*Utilizar los métodos focus() y blur() para cambiar el color de dos
  cuadros de texto cuando posicionamos el foco y cuando lo retiramos*/
  $("input").focus(function(){
        $(this).css("background-color", "#FFF706");
    });

  $("input").blur(function(){
        $(this).css("background-color", "#F8FFB3");
    });

});