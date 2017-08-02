$(function() {
        var elements = $("ul#aclass  li");
        elements.hide();
        elements.each(function (i) {
            $(this).delay(200* i++).fadeIn(200);
        });

    });