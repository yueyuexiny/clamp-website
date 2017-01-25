$(document).ready(function () {
	$('label.tree-toggler').click(function () {
		var submenus= $(this).parent().children('ul.tree');
        submenus.toggle(300);
	});
	$('label.tree-toggler').parent().children('ul.tree').toggle();

	/* Code to back to top button  */
    var amountScrolled = 300;

    $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
            $('a.back-to-top').fadeIn('slow');
        } else {
            $('a.back-to-top').fadeOut('slow');
        }
    });
    $('a.back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 700);
        return false;
    });


});