// ハンバーガーメニュー
(()=>{

  const gnavi = document.querySelector(".m-gnavi");
  const btn = document.querySelector(".c-humburger");
  btn.addEventListener("click",function(){
    gnavi.classList.toggle("is-open");
  });

  const items = gnavi.querySelectorAll(".item");
  for(let item of items){
    item.addEventListener("click",function(e){
      e.preventDefault();
      gnavi.classList.remove("is-open");
      const target = this.querySelector("a").getAttribute("href");
      console.log(target)
    });
  }
})();