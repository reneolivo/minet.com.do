function fly(clase, delay) {
    $(clase).animate({
        'top' : '-=30'
    }, delay, function(){
        $(clase).animate({
        'top' : '+=30'
        }, delay, function(){
            fly(clase, delay);
        });
    });
};


$(document).ready(function() {
    //globos
    fly('.globo-1 img', 2700);
    fly('.globo-2 img', 3400);
    fly('.globo-3 img', 3800);

	//Proyectos Recientes
	$("#slide1 .proyectos-recientes ul").bxSlider({
		ticker: true,
		infiniteLoop: true,
		responsive: false,
		slideWidth: 300,
		pager: false,
		controls: false,
		speed: 1000 * 30,
		slideMargin: 6
	});

    //Stellar (parallax)
    $(window).stellar({
    	horizontalScrolling: false,
		verticalScrolling: true,
        hideDistantElements: false,
		horizontalOffset: 0,
		verticalOffset: 0,
		responsive: false
    });


    //Cargar proyecto
    $("#slide4 .listado-clientes li a").click(function(){
        $("#proyecto-detalle").fadeIn();

        $("#proyecto-detalle h4").html($(this).siblings('div').find('.nombre-proyecto').html());
        $("#proyecto-detalle .imagenes-proyecto img").attr('src', $(this).siblings('div').find('.foto-proyecto').html());
        //$("#proyecto-detalle .tecnologias-usadas ul").fadeIn();
        $("#proyecto-detalle .datos-proyecto img").attr('src', $(this).siblings('div').find('.logo-cliente').html());
        $("#proyecto-detalle .datos-proyecto .cliente").html($(this).siblings('div').find('.nombre-cliente').html());
        $("#proyecto-detalle .datos-proyecto .descripcion").html($(this).siblings('div').find('.descripcion-proyecto').html());

        return false;
    });    

    //Detalle de Proyecto - botón cerrar
    $("#proyecto-detalle .close").click(function(){
        $(this).parent().parent().fadeOut();
        return false;
    });

    //Cache some variables
    var links = $('#main-navigation').find('li');
    slide = $('.slide');
    button = $('.button');
    mywindow = $(window);
    htmlbody = $('html,body');


    //Setup waypoints plugin
    slide.waypoint(function (event, direction) {

        //cache the variable of the data-slide attribute associated with each slide
        dataslide = $(this).attr('data-slide');

        //If the user scrolls up change the navigation link that has the same data-slide attribute as the slide to active and 
        //remove the active class from the previous navigation link 
        if (direction === 'down') {
            $('#main-navigation li[data-slide="' + dataslide + '"]').addClass('selected').prev().removeClass('selected');
        }
        // else If the user scrolls down change the navigation link that has the same data-slide attribute as the slide to selected and 
        //remove the selected class from the next navigation link 
        else {
            $('#main-navigation li[data-slide="' + dataslide + '"]').addClass('selected').next().removeClass('selected');
        }

    });

    //waypoints doesnt detect the first slide when user scrolls back up to the top so we add this little bit of code, that removes the class 
    //from navigation link slide 2 and adds it to navigation link slide 1. 
    mywindow.scroll(function () {
        if (mywindow.scrollTop() == 0) {
            $('#main-navigation li[data-slide="1"]').addClass('selected');
            $('#main-navigation li[data-slide="2"]').removeClass('selected');
        }
    });

    //Create a function that will be passed a slide number and then will scroll to that slide using jquerys animate. The Jquery
    //easing plugin is also used, so we passed in the easing method of 'easeInOutQuint' which is available throught the plugin.
    function goToByScroll(dataslide) {
        htmlbody.animate({
            scrollTop: $('.slide[data-slide="' + dataslide + '"]').offset().top
        }, 2000, 'easeInOutQuint');
    }



    //When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
    links.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
    });

    //When the user clicks on the button, get the get the data-slide attribute value of the button and pass that variable to the goToByScroll function
    button.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);

    });

});