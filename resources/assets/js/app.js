/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

function getRandomSize(min, max) {
    return Math.round(Math.random() * (max - min) + min);
}

var allImages = {
    image1: "https://image.ibb.co/nybH5b/Screenshot_from_2017_09_28_13_38_59.png",
    image2: "https://image.ibb.co/nR0zJw/Screenshot_from_2017_09_28_13_37_10.png",
    image3: "https://image.ibb.co/ghkMWG/Screenshot_from_2017_09_28_13_37_26.png",
    image4: "https://image.ibb.co/d9zgWG/Screenshot_from_2017_09_28_13_37_46.png",
    image5: "https://image.ibb.co/j6JVQb/Screenshot_from_2017_09_28_13_38_06.png"
};

var data = "";

$.each(allImages, function(index, value) {
    var width = getRandomSize(100, 300);
    var height = getRandomSize(100, 300);
    data += '<img src="' + value + '" alt="pretty kitty" style="height:' + height + ' !important; width:' + width + ' !important">';
});

// var allImages = "";

// for (var i = 0; i < 25; i++) {
//     var width = getRandomSize(200, 400);
//     var height = getRandomSize(200, 400);
//     allImages += '<img src="https://placekitten.com/' + width + '/' + height + '" alt="pretty kitty">';
// }

$('#photos').append(data);

$(document).ready(function() {
    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
    if (startchange.length) {
        $(document).scroll(function() {
            scroll_start = $(this).scrollTop();
            if (scroll_start > offset.top) {
                $("nav").addClass('navdark');
                $("nav").removeClass('navbar-transparent');
            } else {
                $("nav").addClass('navbar-transparent');
                $("nav").removeClass('navdark');
            }
        });
    }
});