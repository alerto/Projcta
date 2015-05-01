
$(document).ready(function() {
    $('.formulari-bt').on("click", getExpoId);
    $("#enviar").on("click", validarEntradas);
});


function  getExpoId() {
    var padre = $(this).parent().parent();
    var id = padre.find("td:first-child");
    $("input[name='id']").attr("value",id.html());    
}

function validarEntradas(){
   /* var er = [0-9]{2,3}-? ?[0-9]{6,7}$;
    
    var uno = 65
    return false;*/
} 



