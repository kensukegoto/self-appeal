import Resizer from "./Resizer ";

export default function adjustGear () {

  main();
  new Resizer(main);

}

function main(){

  const gear = document.querySelector(".c-gear");

  const [w,h] = [
    gear.clientWidth,
    gear.clientHeight
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
    let ele = gear.querySelector(`img:nth-child(${i})`)
    for(var k in size[i - 1]){
      ele.style[k] = size[i- 1][k]
    }
  }
}