/************************** 
    Mobile Menu Toggle
***************************/

let menu = document.querySelector("#menu");
let toggle = document.querySelector("#toggle");

toggle.addEventListener("click", function () {
  let display = getComputedStyle(menu).display;
  display == "none"
    ? (menu.style.display = "block")
    : (menu.style.display = "none");
});

/************************** 
    Home page - Star Shinging Effect
***************************/

let stars = document.querySelectorAll(".fa-star");
let starsCon = document.querySelectorAll(".quali-con p");
let hoverColor = "rgb(250, 135, 0)";

starsCon.forEach((starCon) => {
  starCon.addEventListener("mouseover", () => {
    starCon.style.color = hoverColor;

    // 檢查是否所有 starCon 都已經變成 #FA8700 / rgb(250, 135, 0) 顏色
    let allStarConColored = true;

    // 再 loop over 一次
    starsCon.forEach((con) => {
      if (con.style.color !== hoverColor) {
        allStarConColored = false;
        return; // 中止
      }
    });

    // 改變要變的color
    if (allStarConColored) {
      hoverColor =
        hoverColor === "rgb(250, 135, 0)"
          ? "rgb(44, 69, 95)"
          : "rgb(250, 135, 0)";
    }
  });
});
