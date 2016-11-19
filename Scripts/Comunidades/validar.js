document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")
function validar_actualizacion(){
        if($("#etnia").val() === ""){
            $("#etnia").focus();
            alerts("La etnia es obligatoria para el registro de la comunidad","Campo Vacio");
        }
        else{
            if($("#nombre").val() === ""){
               $("#nombre").focus();
            alerts("El nombre es obligatorio para el registro de la comunidad", "Campo Vacio");
            }
            else{
                if($("#poblacion").val() === ""){
                    $("#poblacion").focus();
                    alerts("La poblacion es obligatoria para el registro de la comunidad", "Campo Vacio");
                }
                else{
                    validarSiNumero($("#poblacion").val());
                    if(cent==0){
                            if($("#representante").val() === ""){
                                $("#representante").focus();
                                alerts("El representante es obligatorio para el registro de la comunidad", "Campo Vacio");
                            }
                            else{
                                document.getElementById("actualizarComunidad").submit();  
                            }
                    }
                    else{
                        $("#poblacion").focus();
                    }
                }
            }
        } 
}


function validarSiNumero(numero){
    cent=0;
    if (!/^([0-9])*$/.test(numero)){
        alerts("Se requiere un dato numerico" , "Dato invalido");
        cent=1;
    } 
}


function eliminar()
{
    document.getElementById("eliminarComunidad").submit();
}

