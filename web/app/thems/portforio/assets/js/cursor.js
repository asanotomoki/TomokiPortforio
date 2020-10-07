//カーソル
class Cursor {
  constructor() {
    let cursorR = 4;
    const cursor = document.getElementById("cursor");

    document.addEventListener("mousemove", function (e) {
      cursor.style.transform =
        "translate(" + e.clientX + "px, " + e.clientY + "px)";
    });

    //カーソル　hover
    const linkElem = document.querySelectorAll("a");
    for (let i = 0; i < linkElem.length; i++) {
      linkElem[i].addEventListener("mouseover", function (e) {
        cursor.classList.add("hov_");
      });
      linkElem[i].addEventListener("mouseout", function (e) {
        cursor.classList.remove("hov_");
      });
    }
  }
}