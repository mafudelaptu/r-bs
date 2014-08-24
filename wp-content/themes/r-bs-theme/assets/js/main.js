$(document).ready(function() {
    setHeightForSidebar();
});


function setHeightForSidebar() {
    setTimeout(function(){
        var h_content = $("#full_left_content").height();
        var h_side = $("aside").height();
        var h = h_content;
        if (h_content < h_side) {
            h = h_side;
        }
        // console.log(h);
        // console.log($("aside"));
    // set height
    $("#full_right_content > aside").height(h);
}, 50);
}