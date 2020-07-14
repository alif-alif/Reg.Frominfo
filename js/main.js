$(document).ready (function() {
    //sticky menu

    $(".js--form-section").waypoint(function(direction){
        if(direction == "down"){
            $("nav").addClass ("sticky");
        } else {
            $("nav").removeClass("sticky");
        }

    });

    
});



