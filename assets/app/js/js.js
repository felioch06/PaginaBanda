$('#menu').click(function(){
    $('.ui.sidebar')
    .sidebar('show')
    ;
})


//modal
$('#modal-add-cancion').click(function(){
    $('.ui.agregar.modal')
    .modal('show')
    ;
})

$('.modal-eliminar-cancion').click(function(){
    $('.ui.eliminar.basic.modal')
    .modal('show')
    ;

    var data = $(this).attr('data-id');

    $('.eliminar-cancion').click(function(){
        $.ajax({
            type: 'post',
            url : '?class=Usuarios&view=eliminarCancion',
            data :{id:data},
            success(){
                location.reload()
            }
         });
    })
})

//fin modal

//Login
$('#registrar').click(function(){
    $('#form-registro').removeClass('hidden');
    $('#form-login').addClass('hidden');
})

$('#login').click(function(){
    $('#form-login').removeClass('hidden');
    $('#form-registro').addClass('hidden');
})

function reFresh(){
    $('#success').addClass('hidden');
    $('#yaExiste').addClass('hidden');
    $('#noExiste').addClass('hidden');
  }
  
  var repeticion = window.setInterval("reFresh()", 3000);

  //fin login

