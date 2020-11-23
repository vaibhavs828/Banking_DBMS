
const div1 = document.querySelector(".main-div-1");
const divx = document.querySelector(".div-1");
const div2 = document.querySelector(".main-div-2");
const divy = document.querySelector(".div-2");
const div3 = document.querySelector(".main-div-3");
const div4 = document.querySelector(".main-div-4");
const div5 = document.querySelector(".main-div-5");
const nav = document.querySelector(".yellow");
const carousel = document.querySelector(".anim-car");
const image= document.querySelector(".image");
const heading = document.querySelector(".heading");
const signup = document.querySelector(".signup");
const header = document.querySelector(".jumbo");
const te = new TimelineMax();
const td = new TimelineMax();
const tl = new TimelineMax();
const t2 = new TimelineMax();
const t3 = new TimelineMax();
const t4 = new TimelineMax();
const t5 = new TimelineMax();
te.fromTo(nav,1,{width:"0%"},{width:"100%",ease: Power2.easeInOut});
td.fromTo(header,1,{width:"0%"},{width:"100%",ease: Power2.easeInOut},"-=1");

t1.fromTo(heading,3,{opacity:-1},{opacity:1},"-=2");
/*
t4.fromTo(div1,0.5,{x:"300%"},{x:"0%"});
tl.fromTo(div2,0.5,{x:"-300%"},{x:"0%"});
t2.fromTo(div3,0.5,{x:"300%"},{x:"0%"});
t3.fromTo(div4,0.5,{x:"300%"},{x:"0%"});
t4.fromTo(div5,0.3,{x:"-100%"},{x:"0%"});
*/