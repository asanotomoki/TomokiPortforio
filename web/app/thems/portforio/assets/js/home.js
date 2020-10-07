const screen_width = screen.width;
if (screen_width > 1024) {
  const home_caption = document.querySelector(".home_caption");
  home_caption.addEventListener("mouseover", function () {
    let begin = new Date() - 0;
    let myMain = document.querySelectorAll("li");
    let myTime = 500;
    let id = setInterval(function () {
      let current = new Date() - begin;
      if (current > myTime) {
        clearInterval(id);
        current = myTime;
      }
      for (let i = 0; i < myMain.length; i++) {
        myMain[i].style.height = 10 * (current / myTime) + "vh";
        myMain[i].style.opacity = 1;
      }
    });
  });
}
