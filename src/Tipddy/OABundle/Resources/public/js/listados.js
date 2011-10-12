/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    /* Comentado para hacerlo a nivel de CSS.
        $('#tabla-listado tbody tr:even').addClass('tr-even');
        $('#tabla-listado tbody tr:odd').addClass('tr-odd');
    */    
        $('div.acciones').css('visibility','hidden');

        $('#tabla-listado tr.registro-fila').mouseover(function(){
               $(this).addClass('tr-over');
               $(this).children('td').children('div.acciones').css('visibility','visible');

        });
        $('#tabla-listado tr.registro-fila').mouseout(function(){
               $(this).removeClass('tr-over');
               $(this).children('td').children('div.acciones').css('visibility','hidden');
        });        
});