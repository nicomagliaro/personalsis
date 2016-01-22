/* Agrega un efecto on hover sobre el menu main para mostrar 
el user name al hacer mouseover sobre el icono de login */

var $tip1 = $('#tip1');

$(function() {
    $tip1.tooltip({trigger: 'hover'});
});