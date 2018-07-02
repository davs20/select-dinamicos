/**
 * Created by Jonatan Moncada on 26/6/2018.
 */
$(function() {
    //continente
    $.post('continente.php').done(function(respuesta) {
            $('#continentes').html(respuesta);
    });
    
    $('#continentes').change(function() {
        var el_continente=$(this).val();

        $.post('pais.php',{continente:el_continente}).done(function(respuesta) {
            $('#pais').html(respuesta);
        });
    });

})