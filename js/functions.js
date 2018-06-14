



//  Function SIDE MENU ----------------

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.right = "2px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.right = "-125px";
}

// function form contact ---------------

//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}

// function change to hand cursor ---------------

function handCursor(){
document.getElementById("hand").style.cursor = "pointer";
}


/* Set the width of the side navigation to 250px */
function openNavCat() {
    document.getElementById("mySidenav_cat").style.left = "-55px";
}

/* Set the width of the side navigation to 0 */
function closeNavCat() {
    document.getElementById("mySidenav_cat").style.left = "-300px";
    document.getElementsByClassName(' closebtn').style.visibility='hidden';
}

