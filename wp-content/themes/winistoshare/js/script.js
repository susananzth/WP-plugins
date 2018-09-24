$(document).ready(function(){
	$(".menubtn").on('click', function(){
    	$('#sideNav').animate({width: "100%"}, 500);
        document.getElementById("body").style.overflow = "hidden";
    });
    $(".closebtn").on('click', function(){
    	$('#sideNav').animate({width: "0"}, 500);
        document.getElementById("body").style.overflow = "visible";
    });
    $(".menu-link").on('click', function(){
    	$('#sideNav').animate({width: "0"}, 500);
        document.getElementById("body").style.overflow = "visible";
    });
	$('form').on('submit', sendForm);
        function sendForm(ev) {
            ev.preventDefault();
        }
});