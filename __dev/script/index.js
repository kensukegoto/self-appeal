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

/**
 * ギア
 */
(()=>{

  const [w,h] = [
    document.querySelector(".c-gear").clientWidth,
    document.querySelector(".c-gear").clientHeight
  ]


  const size = [
    {
      width: w * 0.614678 + "px",
      height: w * 0.614678 + "px",
      top: 0,
      left: 0
    },
     {
      width: w * 0.536697 + "px",
      height: w * 0.536697 + "px",
      bottom: 0,
      left: w * 0.204128 + "px"
    },
    {
      width: w * 0.385321 + "px",
      height: w * 0.385321 + "px",
      top: h * 0.31458 + "px",
      right: 0
    }
  ]

  for(let i = 1,l = size.length; i <= l; i++){
    let ele = document.querySelector(`.c-gear img:nth-child(${i})`)
    for(var k in size[i - 1]){
      ele.style[k] = size[i- 1][k]
    }
  }

})();

import wordcloud from "./wordcloud";
wordcloud({
  selector: ".c-cloud",
  csv: window.ajaxUrl
})