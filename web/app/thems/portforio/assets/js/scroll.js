function scrollTop(elem, duration) {
  let target = document.getElementById(elem);
  target.addEventListener("click", function () {
    let currentY = window.pageYOffset;
    let step = duration / currentY > 1 ? 10 : 100;
    let timeStep = (duration / currentY) * step;
    let intervalID = setInterval(scrollUp, timeStep);

    function scrollUp() {
      currentY = window.pageYOffset;
      if (currentY === 0) {
        clearInterval(intervalID);
      } else {
        scrollBy(0, -step);
      }
    }
  });
}

if (!document.getElementById("home")) {
  //アンカータグ　ページ内移動
  let headH = document.querySelector("header").offsetHeight;
  document.body.style.marginTop = headH + "px";

  let smoothScroll = (target, offset) => {
    let toY;
    let nowY = pageYOffset;
    const divisor = 9;
    const range = divisor / 2 + 1;

    //ターゲットの座標
    const targetRect = target.getBoundingClientRect();
    const targetY = targetRect.top + nowY - offset;
    //スクロール終了まで繰り返す処理
    (function () {
      let thisFunc = arguments.callee;
      toY = nowY + Math.round((targetY - nowY) / divisor);
      window.scrollTo(0, toY);
      nowY = toY;

      if (document.body.clientHeight - window.innerHeight < toY) {
        window.scrollTo(0, document.body.clientHeight);
        return;
      }
      if (toY >= targetY + range || toY <= targetY - range) {
        window.setTimeout(thisFunc, 30);
      } else {
        window.scrollTo(0, targetY);
      }
    })();
  };

  //  アンカータグにクリックイベントを登録

  const smoothOffset = headH;
  const links = document.querySelectorAll('a[href*="#"]');
  for (let i = 0; i < links.length; i++) {
    links[i].addEventListener("click", function (e) {
      const href = e.currentTarget.getAttribute("href");
      const splitHref = href.split("#");
      const targetID = splitHref[1];
      const target = document.getElementById(targetID);

      if (target) {
        smoothScroll(target, smoothOffset);
      } else {
        return true;
      }
      return false;
    });
  }

  scrollTop("top_scroll", 500);
}
