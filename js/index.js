jQuery(document).ready(function(){

    $(".block-name").click(function(){
        $(".block-slogan").slideToggle();
        $(".block-slogan").css("display", "block");
        $(".block-slogan").css("top", "70px");
    })

    $(".container").click(function(event){
        if(!$(event.target).is(".item-linker"))
        {
            $(".item1").removeClass("itm");
            $(".item2").removeClass("itm");
            $(".item3").removeClass("itm");
            $(".item4").removeClass("itm");
            $(".item5").removeClass("itm");
            $(".item6").removeClass("itm");
        }
    })

    $(".container").click(function(event){
        if(!$(event.target).is(".block-name"))
        {
            $(".block-slogan").css("display", "none");
            $(".block-slogan").css("top", "0px");
        }
    })
    
    $(".item1").click(function(){
        $(".item1").addClass("itm");
        $(".item2").removeClass("itm");
        $(".item3").removeClass("itm");
        $(".item4").removeClass("itm");
        $(".item5").removeClass("itm");
        $(".item6").removeClass("itm");
    })
    $(".item2").click(function(){
        $(".item1").removeClass("itm");
        $(".item2").addClass("itm");
        $(".item3").removeClass("itm");
        $(".item4").removeClass("itm");
        $(".item5").removeClass("itm");
        $(".item6").removeClass("itm");
    })
    $(".item3").click(function(){
        $(".item1").removeClass("itm");
        $(".item2").removeClass("itm");
        $(".item3").addClass("itm");
        $(".item4").removeClass("itm");
        $(".item5").removeClass("itm");
        $(".item6").removeClass("itm");
    })
    $(".item4").click(function(){
        $(".item1").removeClass("itm");
        $(".item2").removeClass("itm");
        $(".item3").removeClass("itm");
        $(".item4").addClass("itm");
        $(".item5").removeClass("itm");
        $(".item6").removeClass("itm");
    })
    $(".item5").click(function(){
        $(".item1").removeClass("itm");
        $(".item2").removeClass("itm");
        $(".item3").removeClass("itm");
        $(".item4").removeClass("itm");
        $(".item5").addClass("itm");
        $(".item6").removeClass("itm");
    })
    $(".item6").click(function(){
        $(".item1").removeClass("itm");
        $(".item2").removeClass("itm");
        $(".item3").removeClass("itm");
        $(".item4").removeClass("itm");
        $(".item5").removeClass("itm");
        $(".item6").addClass("itm");
    })

    // $(".container").click(function(event){
    //     if(!$(event.target).is(".menu-item"))
    //     {
    //         $(".item1").removeClass("itm");
    //         $(".item2").removeClass("itm");
    //         $(".item3").removeClass("itm");
    //         $(".item4").removeClass("itm");
    //         $(".item5").removeClass("itm");
    //         $(".item6").removeClass("itm");
    //     }
    // })
    
})