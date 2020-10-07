// class Works {
//   constructor() {
    const hp_btn = document.getElementById("hp_btn");
    const ap_btn = document.getElementById("ap_btn");
    const hp_contents = document.querySelectorAll(".hp_content");
    const ap_contents = document.querySelectorAll(".ap_content");
    //#worksの判断
    hp_btn.addEventListener("click", function () {
      for (let i = 0; i < ap_contents.length; i++) {
        ap_contents[i].classList.toggle("ap_hide");
      }
      for (let i = 0; i < hp_contents.length; i++) {
        hp_contents[i].classList.remove("hp_hide");
      }
    });

    ap_btn.addEventListener("click", function toggleStyle() {
      for (let i = 0; i < hp_contents.length; i++) {
        hp_contents[i].classList.toggle("hp_hide");
      }
      for (let i = 0; i < ap_contents.length; i++) {
        ap_contents[i].classList.remove("ap_hide");
      }
    });
