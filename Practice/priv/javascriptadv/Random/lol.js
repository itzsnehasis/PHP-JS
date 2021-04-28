$(document).ready(function(){
    $("button").click(function(){
        $("div").animate({height: 300}, "slow");
        $("div").animate({width:  300}, "slow");
        $("div").animate({height: 100}, "slow");
        $("div").animate({top   : 100}, "slow");
    });
});
