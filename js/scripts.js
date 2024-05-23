function myFunction() {
  var x = document.getElementById("mySearchbar");
  if (x.className === "thanhtimkiem__search") {
    x.className += " responsive";
  } else {
    x.className = "thanhtimkiem__search";
  }
}
function myFunction2() {
  var x = document.getElementById("my_canhan");
  if (x.className === "thanhtimkiem__search__canhan") {
    x.className += " responsive";
  } else {
    x.className = "thanhtimkiem__search__canhan";
  }
}
function mothongtin(sukien, tentab) {
  var i, tabcontent, tabthongtin;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tabthongtin = document.getElementsByClassName("tabthongtin");
  for (i = 0; i < tabthongtin.length; i++) {
    tabthongtin[i].className = tabthongtin[i].className.replace(" active", "");
  }
  document.getElementById(tentab).style.display = "flex";
  sukien.currentTarget.className += " active";
}