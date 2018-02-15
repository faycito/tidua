jQuery(document).on('submit', '#formRg', function(event){
    event.preventDefault();

    jQuery.ajax({
        url: 'server/pregistro.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){
            $('.loginBtn').val('Validando...');
        }
    })
    .done(function(){
        console.log("complete");
        location.href= 'index.php';

    })
    .fail(function(error){
        console.log(error.responseText);
        // location.href= 'index.php';
        // alert('Datos erroneos por favor intentar de nuevo.');
    })
    .always(function(){
        console.log("complete");
        location.href= 'index.php';

    });
});