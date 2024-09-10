let body = document.querySelector("body");
let mode = document.querySelector(".lightdark");
let circle = document.querySelector(".circle");
let btn = document.querySelector("button");
let abt_container = document.querySelector("abt_container");
let currmode = "light";

mode.addEventListener("click", () => {
    if(currmode === "light"){
        currmode = "dark";
        body.style.backgroundColor="black";
        body.style.color="white";
        abt_container.style.backgroundColor="black";
        abt_container.style.color="white";
      //   mode.style.border="1px solid white";
      btn.innerHTML='Light';
     }
     else{
        currmode = "light";
        body.style.backgroundColor="white";
        abt_container.style.backgroundColor="white";
        body.style.color="black";
        abt_container.style.color="black";
      //   mode.style.border="1px solid black";
      btn.innerHTML='Dark';
     }
});