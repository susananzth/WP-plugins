$(document).ready(function(){
	$(".menubtn").on('click', function(){
    	$('#sideNav').animate({width: "100%"}, 500);
    });
    $(".closebtn").on('click', function(){
    	$('#sideNav').animate({width: "0"}, 500);
    });
    $(".menu").on('click', function(){
    	$('#sideNav').animate({width: "0"}, 500);
    });
    
	$('form').on('submit', sendForm);
        function sendForm(ev) {
            ev.preventDefault();
        }
});