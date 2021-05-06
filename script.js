var boxes = document.getElementsByClassName("box");
var boxLeft = document.getElementsByClassName("box-left");
var boxRight = document.getElementsByClassName("box-right");

// This rule below applies for all boxes in global
Array.prototype.forEach.call(boxes, (box) => {
  box.style.transform = "rotate("+Math.random()*90+"deg)";
  box.style.height = 15+(Math.random()*40) + "px";
  box.style.width = box.style.height;  
})

// This rule below applied each 5 box divided in left and right position
Array.prototype.forEach.call(boxLeft, (box) => {
  box.style.top = 0+(Math.random()*95) + "vh";
  box.style.left = 0+(Math.random()*35) + "vw";

})
Array.prototype.forEach.call(boxRight, (box) => {
  box.style.top = 5+(Math.random()*95) + "vh";
  box.style.left = 60+(Math.random()*35) + "vw";
})

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-3.5rem";
  }
  prevScrollpos = currentScrollPos;
}

let mq = window.matchMedia('(max-width: 479px)');
if(mq.matches){
  document.getElementById("navmenu-js").addEventListener("click", menuHide);
  console.log('OK');
}
function menuHide(){
  document.getElementById("mobile-nav").checked = false;
}


