jQuery(document).on('submit', '#formLg', function(event){
    event.preventDefault();

    jQuery.ajax({
        url: 'server/login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){
            $('.loginBtn').val('Validando...');
        }
    })
    .done(function(response){
        console.log(response);
        if(!response.error){
            if(response.tipo.tipo == "Detalle Economico"){
                location.href = 'content.php';
            }
            else if(response.tipo.tipo == "Administrativo"){
                location.href = 'content.php';
                // alert('Wrong Password')
            }
        }
        else{
            $('.error').slideDown('slow');
            setTimeout(function(){
                $('.error').slideUp('slow');
            },3000);
            $('.loginBtn').val('Iniciar Sesión');

        }
    })
    .fail(function(error){
        console.log(error.responseText);
    })
    .always(function(){
        console.log("complete");
    });
});
