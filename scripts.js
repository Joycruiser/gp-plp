$(function() {
    $(".header-categories-box").hide();
    $("#menu-item-1").click(function(){
        $(".header-categories-box").fadeToggle(400);
    });

    $(".categories-icon").click(function() {
        var op = $(this).css("opacity");
        if (op == 1) {
            op = 0.6;
        }
        else
        {
            op = 1;
        }

        $(this).css("opacity", op);
    });
});
