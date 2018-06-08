var mn = $("#mainNav");
var mobile = $('#hamburger');
mns = "main-nav-scrolled";
hdr = $('.header').height();


$(window).scroll(function () {
    if ($(this).scrollTop() > hdr) {
        mn.addClass(mns);
    } else {
        mn.removeClass(mns);
    }
});

mobile.click(function () {
    var nav = $('#mobileNav');

    nav.slideToggle(200);
});

var images = [
    'IMG/interior.jpeg',
    'IMG/third.jpeg',
    'IMG/zdjecie8.jpg'
];

var img = document.querySelector('.photo__img');
var backgr = document.querySelector('.main');
var index = 0;
var iterations = 0;

var updateImage = function() {
    if (index >= images.length) {
        index = 0;
        iterations++;
    }

    // img.style.backgroundImage = 'url(' + images[index] + ')';
    // $('.photo__img').css('background-image', 'url(' + images[index] + ')');
    // $('.photo__img').fadeIn(1000); //this is new, will fade in smoothly
    $(".photo__img").fadeOut(1000, //Speed - (higher slower)
        function () { //On fadeOut complete
            $(this).css("background-image", "url(" + images[index - 1] + ")") //Change BG
                .fadeIn(1500); //FadeIn
        });
    img.style.animationDuration = '35s';
    img.style.transform = 'scale(1)';
    backgr.style.background = 'url(' + images[index] + ')';
    // $('.main').fadeIn(1000); //this is new, will fade in smoothly
    // $(".main").fadeOut(200, //Speed - (higher slower)
    //     function () { //On fadeOut complete
    //         $(this).css("background-image", "url(" + images[index] + ")") //Change BG
    //             .show(100); //FadeIn
    //     });
    if (iterations >= 2) {
        clearInterval(interval);
    } else {
        index++;
    }
}

var interval = setInterval(updateImage, 10000);
updateImage();