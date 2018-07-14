$(document).ready(function(){
	$(".menubtn").on('click', function(){
    	$('#sideNav').animate({width: "100%"}, 500);
    });
    $(".closebtn").on('click', function(){
    	$('#sideNav').animate({width: "0"}, 500);
    });
    $(".menu-link").on('click', function(){
    	$('#sideNav').animate({width: "0"}, 500);
    });
    $(".form").addClass('animated-0-8s fadeInUp');
    $('.article').addClass('animated-1-1s fadeInUp');
	$('form').on('submit', sendForm);
        function sendForm(ev) {
            ev.preventDefault();
        }
});