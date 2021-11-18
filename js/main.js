function on_drop_down_menu() {
    var x = document.getElementById("myTopnav");

    if (x.className === "topnav") {
        x.className += " responsive";
        console.log("in the correct place");
    } else {
        x.className = "topnav";
        
    }
}