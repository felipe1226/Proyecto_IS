document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")
function validar_actualizacion(){
        if($("#descripcion").val() === ""){
            $("#descripcion").focus();
            alerts("La descripcion es obligatoria para el registro del tema","Campo Vacio");
        }
        else{
            document.getElementById("actualizarTema").submit();         
               
        } 
    
}

function eliminar()
{
    document.getElementById("eliminarTema").submit();
}

function validarSiNumero(numero){
    cent=0;
    if (!/^([0-9])*$/.test(numero)){
        alerts("Se requiere un dato numerico" , "Dato invalido");

        cent=1;
    } 
}

