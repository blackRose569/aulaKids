$(document).ready(function () {
    var validar_titulo = false;
    var validar_iframe = false;
    var validar_descripcion = false;
    var validar_autor = false;



    

    /*$("#titulo").on("input", function (e) {

        
        if ((this.value.length >= 3) && this.value.split(' ').length == 1) {
            
             validar_titulo = true;
             console.log('usuario:' + validar_titulo);
            
        }
        
    });*/

    $("#titulo").on("input", function (e) {

        
        if (!null) {
            
             validar_titulo = true;
             console.log('usuario:' + validar_titulo);
            
        }
        
    });

    $("#iframe").on("input", function (e) {

        if (!null) {
            validar_iframe = true;
            console.log("contraseña: " + validar_iframe);
        }
    });

    $("#descripcion").on("input", function (e) {

        if (!null) {
            validar_descripcion = true;
            console.log("contraseña: " + validar_descripcion);
        }
    });

    $("#autor").on("input", function (e) {

        if (!null) {
            validar_autor = true;
            console.log("contraseña: " + validar_autor);
        }
    });



    $(document).on('click', '#boton', function (e) {


        if (validar_titulo == true && validar_iframe == true && validar_descripcion && validar_autor) {
            alert("Campos completados correctamente, actualizando...");
        }
        else {
            e.preventDefault();
            alert("Datos no válidos o incompletos.");
        }
    });

});
