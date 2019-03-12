/*alert("Hello");*/
$().ready(function(){

    $("button").click(function(){
        $("ul").fadeToggle();
        $("ul").fadeToggle("slow");
        $("ul").fadeToggle("3000");
    })
})