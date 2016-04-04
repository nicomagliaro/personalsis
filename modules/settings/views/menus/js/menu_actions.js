/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$('document').ready(function(){

	$('#acceso').hide('fast');

	$('#auth').on('click', function(){
		if( $(this).is(':checked')){
			$('#acceso').show('fast');
		}else{
			$('#acceso').hide('fast');
		} 
	});
	   
});





