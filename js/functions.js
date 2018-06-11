


$( document ).ready(function() {
    console.log( "ready!" );
    //funcion scrolldown
    $("bt-portfolio").click(function () {
        $('html,body').animate({
            scrollTop: $("#portfolio").offset().top
        }, 2000);
    });
    
});


// adjust textarea from form
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}

    /* Open */
    function openNav() {
        document.getElementById("myNav").style.height = '20%';
        document.getElementById("myNav").style.width = '100%';
    }
    
    
    /* Close */
    function closeNav() {
        document.getElementById("myNav").style.height = '0%';
        document.getElementById("myNav").style.width = '0%';
    
    }
