
$("#list-view").click(function(){
$(".testt").css({display: "block"});
$(".caption").css({height: "auto", textAlign: "left"});
$(".equal").css({height: "auto"});
$("div.caption").removeClass("equal");
$(".fntsize").css({fontSize: "18px"}); 
$(".btnpos").css({textAlign: "right", marginRight: "5px"});
});
                                  
$("#grid-view").click(function(){
$("div.caption").addClass("equal");
$(".testt").css({display: "none"});
$(".fntsize").css({fontSize: "15px"});
$(".caption").css({textAlign: "center"});
$(".btnpos").css({textAlign: "center", marginRight: "none"});
$(function () {
    $('.equal').matchHeight();
});

    });

