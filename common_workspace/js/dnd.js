/*

Completely unrefactored code
just for the sake of illustration
code portability and optimzation is in works


*/


$(document).ready( function () {

var caller = null; // element to be dragged

if (Modernizr.draganddrop) {
    // Browser supports HTML5 DnD.
    } else {
    // Fallback to a library solution.

    alert("not supported");

}
var offset = $("#surface").offset();
var offX = offset.left;
var offY = offset.top;

var height = $("#surface").height();
var width = $("#surface").width();
document.getElementById('dragme').style.left = parseInt(offX,10)+5+'px';
document.getElementById('dragme').style.top = parseInt(offY,10)+5+'px';



function dragEventHandler(event) {

caller = event.target;



event.dataTransfer.setData("text/plain",(event.clientX - parseInt($('#'+caller.id).offset().left,10))
+ '$' +( event.clientY -parseInt($('#'+caller.id).offset().top,10))+'$'+caller.id);

event.dataTransfer.dropEffect='move';

return true;
};


function dragOverEventHandler(event) {
	event.dataTransfer.dropEffect = 'move';
	event.preventDefault();
	return false;
	
};

function dropEventHandler(event) {


	var positionObject = event.dataTransfer.getData("text/plain").split('$');
	
	caller = document.getElementById(positionObject[2]);
	
	if(event.clientX - parseInt(positionObject[0],10) < (parseInt(offX,10)+5))
		caller.style.left =  parseInt(offX,10)+5+'px';
	
	else
	caller.style.left =  (event.clientX - parseInt(positionObject[0],10)) + 'px';
	
	

	
	//alert((event.clientX - parseInt(positionObject[0],10)));
	//alert(caller.style.color);
	
	if(event.clientY - parseInt(positionObject[1],10) < (parseInt(offY,10)+5))
		caller.style.top =  parseInt(offY,10)+5+'px';
	else
	caller.style.top =  (event.clientY - parseInt(positionObject[1],10)) + 'px';
	

 
	event.preventDefault();
	return false;
	


	
	
	


	
	


}


document.getElementById('dragme').addEventListener('dragstart',dragEventHandler,false);
document.getElementById('surface').addEventListener('dragover',dragOverEventHandler,false); 
document.getElementById('surface').addEventListener('drop',dropEventHandler,false); 





});









