/**
 * ハンバーガーメニュー
 */
(()=>{

  const gnavi = document.querySelector(".m-gnavi");
  const btn = document.querySelector(".c-humburger");
  btn.addEventListener("click",function(){
    gnavi.classList.toggle("is-open");
  });

  /**
  * jQueryを使わないページ内スクロール
  * https://www.to-r.net/media/smooth_scrolling_2019/
  */
  const items = gnavi.querySelectorAll(".item");
  for(let item of items){
    item.addEventListener("click",function(e){
      e.preventDefault();
      gnavi.classList.remove("is-open");
      let target = this.querySelector("a").getAttribute("href");

      let top = 0;
      
      if(target !== "#top"){
        // 画面上部から要素までの距離
        const rectTop = document.querySelector(target).getBoundingClientRect().top;
        // 現在のスクロール距離
        const offsetTop = window.pageYOffset
        // スクロール位置に持たせるバッファ
        const buffer = (window.innerWidth > 959) ? 80 : 60;
        top = rectTop + offsetTop - buffer
      }

      
      window.scrollTo({
        top,
        behavior: "smooth"
      });
      
    });
  }
})();

import wordcloud from "./wordcloud";
wordcloud({
  selector: ".c-cloud",
  csv: "./data/word.csv"
})