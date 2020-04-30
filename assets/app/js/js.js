$('#menu').click(function(){
    $('.ui.sidebar')
    .sidebar('show')
    ;
})


//modal

//canciones
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

$('.modal-actualizar-cancion').click(function(){
    var data = $(this).attr('data-id');

    $.ajax({
        type: 'post',
        url: '?class=Usuarios&view=actualizarCancion',
        data: {id:data},
        success(response){
            $('#responseActualizarCancion').html(response);
            $('.ui.actualizar.modal').modal('show');
        }
    })

    
})

// fin canciones

//anotaciones
$('#modal-add-anotacion').click(function(){
    $('.ui.agregar.modal')
    .modal('show')
    ;
})

$('.modal-eliminar-anotacion').click(function(){
    $('.ui.eliminar.basic.modal')
    .modal('show')
    ;

    var data = $(this).attr('data-id');

    $('.eliminar-anotacion').click(function(){
        $.ajax({
            type: 'post',
            url : '?class=Usuarios&view=eliminarAnotacion',
            data :{id:data},
            success(){
                location.reload()
            }
         });
    })
})

$('.modal-actualizar-anotacion').click(function(){
    var data = $(this).attr('data-id');

    $.ajax({
        type: 'post',
        url: '?class=Usuarios&view=actualizarAnotacion',
        data: {id:data},
        success(response){
            $('#responseActualizarAnotacion').html(response);
            $('.ui.actualizar.modal').modal('show');
        }
    })

    
})

//fin anotaciones
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

