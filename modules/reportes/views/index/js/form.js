/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).on('ready', function(){
    $('#reportes').change(function() { 
       var data = {fecha:$("#fecha").val()};
       
       var opt = $('option:selected').val();
       if(opt === '1'){
           $("form").attr("action", "http://localhost/mesa/reportes/index/getRemitoEntrada");
           /*var uri = 'getRemitoEntrada';
           data = {};
           $.ajax
           ({               
                type: "POST",
                //the url where you want to sent the userName and password to
                url: uri,
                //json object to sent to the authentication url
                data: data,
                success: function ( result ) {
                    alert(result);
                }    
            });*/   
       }
       else if(opt === '2')
       {
           $("form").attr("action", "http://localhost/mesa/reportes/index/getRemitoSalida");
           /*data = {fecha:$("#fecha").val()};
           var uri = 'getRemitoSalida';
           $.ajax
           ({               
                type: "POST",
                //the url where you want to sent the userName and password to
                url: uri,
                //json object to sent to the authentication url
                data: data,
                success: function ( result ) {
                    alert(result);
                }    
            });*/   
       }
       else if(opt === '3')
       {
           
       }
       else if(opt === '4')
       {
           
       }
       else if( opt === '5'){
           $("form").attr("action", "http://localhost/mesa/reportes/index/remitoLegajos");
           /*var uri = 'remitoLegajos';
           data = {estado:$("#estado input").val(),from:$("#from").val(),to:$("#to").val()};
            $.ajax
                ({
                    type: "POST",
                    //the url where you want to sent the userName and password to
                    url: uri,
                    //json object to sent to the authentication url
                    data: data,
                    success: function ( result ) {               
                        alert(result);
                    },
                    error: function () { 
                        alert("error de conexion: 601"); 
                    }            

                });*/            
       }
       else{
           alert('Ha ocurrido un error inesperado');
       };        
    });
});
