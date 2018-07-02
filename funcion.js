/**
 * Created by Jonatan Moncada on 26/6/2018.
 */
$(function() {
    //continente
    $.post('continente.php').done(function(respuesta) {
            $('#continentes').html(respuesta);
    });

    $("#pais").change(function () {
        var id_pais=$(this).val();
        $.post("departamentos.php",{id_pais:id_pais}).done(function(respuesta) {
            $("#dep").html(respuesta);
        });
        
    });
    
    $('#continentes').change(function() {
        var el_continente=$(this).val();

        $.post('pais.php',{continente:el_continente}).done(function(respuesta) {
            $('#pais').html(respuesta);
        });
    });

})