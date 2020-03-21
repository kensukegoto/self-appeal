export default class Resizer {

  constructor(func){
    this.w = window.innerWidth;
    this.timer = null;
    window.addEventListener("resize",()=>{
      clearTimeout(this.timer);
      this.timer = setTimeout(()=>{
        if(this.w === window.innerWidth) return;
        this.w = window.innerWidth;
        func();
    },300)
    })
  }
};