$(document).on("scroll", function(){
    if($(document).scrollTop() > 60)
    {
       $("#teezr-logo").addClass("shrink");
    }
    else
    {
        $("#teezr-logo").removeClass("shrink");
    }
});
