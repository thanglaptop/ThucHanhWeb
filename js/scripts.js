function myFunction() {
    var x = document.getElementById("mySearchbar");
    if (x.className === "thanhtimkiem__search") {
        x.className += " responsive";
    } else {
        x.className = "thanhtimkiem__search";
    }
}