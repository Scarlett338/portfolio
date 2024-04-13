
<main class="cu-single-page day2main">
    <div class="day2con">
        <h1>What to do if you make your partner angry?</h1>
    </div>

    <div class="flexCon day2-f1">

        <div class="flexCol">
            <input type="text" minlength="1" placeholder="What have you done?">
        </div>
    </div> <!-- flexCon -->

    <div class="flexCon day2-f2">
        <form method="post" id="day2form">
        <div class="flexCol">
            <button class="formItem" type="submit">Calculate how angry your partner is.</button>                   
        </div>               
        <div class="flexCol day2boxContainer">
            <div class="day2box" id="day2box10"></div>
            <div class="day2box" id="day2box9"></div>
            <div class="day2box" id="day2box8"></div>
            <div class="day2box" id="day2box7"></div>
            <div class="day2box" id="day2box6"></div>
            <div class="day2box" id="day2box5"></div>
            <div class="day2box" id="day2box4"></div>
            <div class="day2box" id="day2box3"></div>
            <div class="day2box" id="day2box2"></div>
            <div class="day2box" id="day2box1"></div>
        </div>
    
        </form>

    </div> <!-- flexCon -->

<div class="flexCon day2-f3 day2sol">
    <div id="day2sol1"></div>
</div>
<div class="day2hide">
<div class="flexCon mainCol"><h3>Pick a solution to see if it can help you.</h3></div>
<div class="flexCon day2-f4">    
    <div class="flexCol"><h2>Allow sleep</h2></div>
    <div class="flexCol"><h2>Provide cat/dog</h2></div>
    <div class="flexCol"><h2>Buy delicious food</h2></div>
    <div class="flexCol"><h2>Massage service</h2></div>
    <div class="flexCol"><h2>Shut your mouth off</h2></div>
    <div class="flexCol"><h2>Provide everything you can</h2></div>
</div>

<div class="flexCon mainCol"> </div>
    <div id="day2sol2"></div>
</div>

</main>

<script>

//----------------day 2 partner angry
/* 
day2form
1 addEventListener("submit",());
var angrylv = random
angrylv box color > red > green > red > green > slower
transform translate 2s
text show number
.day2hide{display: block;}

2 click img > 
angrylv + / -

 */
//問題： click 完係行邊個fuc先？會行多於一次？
var angryLevel;

document
  .querySelector("#day2form")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    angryLevel = 0;
    var msg = "";
    var colorCode = "#2FFF7F";
    var fontColor = "#14213D";
    angryLevel = Math.ceil(Math.random() * 10);
    document.querySelector(
      "#day2form button"
    ).innerHTML = `Your partner's angry level is ${angryLevel}`;

    /* reset to green */
    for (var i = 1; i <= 10; i++) {
      document.querySelector(`#day2box${i}`).style.backgroundColor = "#2FFF7F"; // green
    }
    console.log("init ang lvl: " + angryLevel);

    /* change to angry color */
    for (var i = 1; i <= angryLevel; i++) {
      if (i >= 1 && i <= 3) {
        colorCode = "#FFE400"; // yellow
        msg = "The situation is not too bad. But if you don't do something...";
      }
      if (i >= 4 && i <= 6) {
        colorCode = "#FF8E00"; //orange
        msg = "<h3>Quick! Do Something!</h3>";
      }
      if (i >= 7 && i <= 10) {
        colorCode = "#FF1700"; // red
        msg = "<h2>Oops...... Good Luck to you......</h2>";
        fontColor = "white";
      }
      document.querySelector(`#day2box${i}`).style.backgroundColor = colorCode;
    }

    document.querySelector(`.day2hide`).style.visibility = "visible";
    document.querySelector(`#day2sol1`).innerHTML = `${msg} `;
    document.querySelector(`.day2-f3`).style.visibility = "visible";
    document.querySelector("#day2form button").style.backgroundColor =
      colorCode;
    document.querySelector("#day2form button").style.color = fontColor;
    document.querySelector("#day2form button").style.boxShadow =
      "grey 2px 2px 5px";
  }); //day2s1

/* -------------------different result */

function coolDown1(event) {
  event.preventDefault();
  console.log("coolDown1 | begin:" + angryLevel);

  if (angryLevel > 0) {
    document.querySelector(`#day2box${angryLevel}`).style.backgroundColor =
      "#2FFF7F";
    angryLevel -= 1;

    document.querySelector(
      "#day2form button"
    ).innerHTML = `Your partner's angry level is ${angryLevel}!`;
  }
  console.log("coolDown1 | after:" + angryLevel);
  //return angryLevel;
}

//一次減3嬲
function coolDown2(event) {
  event.preventDefault();
  console.log("coolDown2 | begin:" + angryLevel);
  for (var i = 1; i < 4; i++) {
    if (angryLevel > 0) {
      document.querySelector(`#day2box${angryLevel}`).style.backgroundColor =
        "#2FFF7F";
      angryLevel -= 1;
      document.querySelector(
        "#day2form button"
      ).innerHTML = `Your partner's angry level is ${angryLevel}!`;
    }
  }
}

/* 
function coolDown2 (event){
    event.preventDefault();
    for (var i=1;i<=3;i++){
        if (angryLevel>0){
        document.querySelector(`#day2box${angryLevel}`).style.backgroundColor = "#2FFF7F";
        angryLevel-=1;                 
        }
        }    
console.log(angryLevel);
    return angryLevel;
}
 */

function coolDown3(event) {
  event.preventDefault();

  var divBoxes = document.querySelectorAll(".day2box");
  for (var i = 0; i < divBoxes.length; i++) {
    divBoxes[i].style.backgroundColor = "#2FFF7F";
  }

  angryLevel = 0;
  document.querySelector(
    "#day2form button"
  ).innerHTML = `Your partner's angry level is ${angryLevel}!`;
  console.log(angryLevel);
}

/* function coolCon(event){
    if (angryLevel <0){
    angryLevel=0;
    console.log(angryLevel);
};
return angryLevel;
}
 */

document
  .querySelector(".day2-f4 div:nth-child(1)")
  .addEventListener("click", coolDown1);
document
  .querySelector(".day2-f4 div:nth-child(2)")
  .addEventListener("click", coolDown1);
document
  .querySelector(".day2-f4 div:nth-child(3)")
  .addEventListener("click", coolDown2);
document
  .querySelector(".day2-f4 div:nth-child(4)")
  .addEventListener("click", coolDown2);
document
  .querySelector(".day2-f4 div:nth-child(5)")
  .addEventListener("click", coolDown1);
document
  .querySelector(".day2-f4 div:nth-child(6)")
  .addEventListener("click", coolDown3);

/* 
document.querySelector(".day2-f4 div:nth-child(1)").addEventListener("click", coolCon);
document.querySelector(".day2-f4 div:nth-child(2)").addEventListener("click", coolCon);
document.querySelector(".day2-f4 div:nth-child(3)").addEventListener("click", coolCon);
document.querySelector(".day2-f4 div:nth-child(4)").addEventListener("click", coolCon);
document.querySelector(".day2-f4 div:nth-child(5)").addEventListener("click", coolCon);
document.querySelector(".day2-f4 div:nth-child(6)").addEventListener("click", coolCon);
*/

</script>

