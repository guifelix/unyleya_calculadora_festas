$(function() {
  $( ".calcular" ).on( "click", function(){
    if($('.aviso')){
      $('.aviso').remove()
    }
    if ( (!$('#adultos').val() || $('#adultos').val()==0) && (!$('#criancas').val() || $('#criancas').val()==0 )) {
      $("#titleFesta").append(`
        <p style="color:red; font-size:20px" class="aviso"><b><strong>
          Acho que essa festa não vai ser muito animada, ein? Que tal adicionarmos algumas pessoas nessa lista?
        </strong></b></p>`)
    }else{
      $( "#festaForm" ).submit();
    }
  });
$( ".voltar" ).on( "click", function(){
  parent.history.back();
});
// $('.tada').find('img').css({height:40,width:40});
}); //fim do function