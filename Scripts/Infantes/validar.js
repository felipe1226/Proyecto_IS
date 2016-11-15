document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")
function validar_actualizacion(){
        if($("#nombre").val() === ""){
            $("#nombre").focus();
            alerts("El nombre es obligatorio para el registro del infante","Campo Vacio");
        }
        else{
            if($("#apellido").val() === ""){
               $("#apellido").focus();
            alerts("El apellido es obligatorio para el registro del infante", "Campo Vacio");
            }
            else{
                if($("#fnato").val() === ""){
                    $("#fnato").focus();
                    alerts("La fecha de nacimiento es obligatoria para el registro del infante", "Campo Vacio");
                }
                else{
                    document.getElementById("actualizarInfante").submit();    
                }
            }
        } 
    
}

function eliminar()
{
    document.getElementById("eliminarInfante").submit();
}

