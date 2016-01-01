/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).on('ready', function(){
    $('#num').hide('fast');
    $('#fecha').show('fast');
    $('#fecha-form').hide('fast');
    $('#estado').hide('fast');
    
    /*$('reportes button').on('click', function() {
       var data = $( 'form' ).serialize();
       if( $('option:selected').val() === '5'){
           var uri = 'remitoLegajos';
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
            });
       }; 
    });*/
    
    $( "#datepicker" ).datepicker({
        defaultDate: null,
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        yearRange: "2014:2020",
        dateFormat: "dd-mm-yy",
        showButtonPanel: true,
        changeMonth: true,
        changeYear: true
    });
    
    $( "#from" ).datepicker({
        defaultDate: null,
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        yearRange: "2014:2020",
        dateFormat: "dd-mm-yy",
        showButtonPanel: true,
        changeMonth: true,
        changeYear: true,
        onClose: function( selectedDate ) {
            $( "#to" ).datepicker( "option", selectedDate );
            }
     });
     
     $( "#to" ).datepicker({
        defaultDate: +1, 
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'], 
        yearRange: "2014:2020", 
        dateFormat: "dd-mm-yy", 
        showButtonPanel: true,
        changeMonth: true,
        changeYear: true,
        onClose: function( selectedDate ) {
            $( "#from" ).datepicker( "option", selectedDate );
        }
    });
    
    $('#reportes').on('change', function(){
        var opt = $('option:selected').val();
        //alert(opt);
        if( opt === '1'){
            $('#num').hide('fast'); 
            $('#num input').val('');
            $('#estado').hide('slow');
            $('#fecha-form').hide('fast');
            $('#fecha').show('slow');                       
        }
        else if( opt === '2'){
            $('#num').hide('fast');
            $('#num input').val('');
            $('#estado').hide('slow');
            $('#fecha-form').hide('fast');
            $('#fecha').show('slow');            
        }
        else if( opt === '3')
        {
            $('#fecha').hide('fast');
            $('#fecha input').val('');
            $('#num').show('slow');            
        }
        else if( opt === '5')
        {
            $('#num').hide('fast');
            $('#fecha').hide('fast');
            $('#fecha input').val('');
            $('#fecha-form').show('slow');
            $('#estado').show('slow');
        }else{
            $('#num').hide('fast');
            $('#fecha').hide('fast');
            $('#num input').val('');
            $('#fecha input').val('');
        }
    });           
});

