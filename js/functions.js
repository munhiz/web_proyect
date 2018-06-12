
$( document ).ready(function() {
    console.log( "ready!" );
    //funcion scrolldown
    $("bt-portfolio").click(function () {
        $('html,body').animate({
            scrollTop: $("#portfolio").offset().top
        }, 2000);
    });
    
});



//  Function SIDE MENU ----------------

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "125px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

// function form contact ---------------

//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}

function handCursor(){
document.getElementById("hand").style.cursor = "pointer";
}


/* Set the width of the side navigation to 250px */
function openNavCat() {
    document.getElementById("mySidenav_cat").style.width = "300px";
}

/* Set the width of the side navigation to 0 */
function closeNavCat() {
    document.getElementById("mySidenav_cat").style.width = "0";
}