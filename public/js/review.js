let star = document.querySelector(".star");
let starAll = document.querySelectorAll(".star");

let starOne = document.querySelectorAll(".Container_star-1");
let starTwo = document.querySelectorAll(".Container_star-2");
let starThree = document.querySelectorAll(".Container_star-3");
let starFour = document.querySelectorAll(".Container_star-4");
let starFive = document.querySelectorAll(".Container_star-5");

let change_star = (e, val) => {
  starAll.forEach((el, key) => {
    if (key + 1 <= val) {
      console.log(key);
      el.setAttribute("class", "star checked");
    } else {
      el.setAttribute("class", "star");
    }
  });
};

let listStar = (typeStar, display) => {
  typeStar.forEach((el, key) => {
    el.style.display = display;
  });
};

const displayStar = (star, display) => {
  listStar(star, display);
};

const CatStar = starNumber => {
  const stars = [starOne, starTwo, starThree, starFour, starFive];
  stars.forEach((star, index) => {
    const display = index === starNumber - 1 ? "initial" : "none";
    listStar(star, display);
  });
};

let selectStar = e => {
  //listStar(starOne, "none");
  if(e === "default") resetStar()
  else CatStar(e);
  
};
let resetStar = () => {
  listStar(starOne, "initial");
  listStar(starTwo, "initial");
  listStar(starThree, "initial");
  listStar(starFour, "initial");
  listStar(starFive, "initial");
};

let OrderByDate = val => {
  location.replace(window.location.origin + "/?order=" + val);
  if (val === "none") {
    location.replace(window.location.origin);
  }
};
let OrderByStar = (val) => {
  location.replace(window.location.origin + "/?star=" + val);
  if (val === "none") {
    location.replace(window.location.origin);
  }
};


let verifyfile=()=>{
  let inputimg = document.querySelector(".img_feedback")
  let valInput = inputimg.value
  let data = valInput.split(".").pop()
  console.log(data)

  if(data !== "jpg" && data !== "jpeg" && data !== "JPG" && data !== "JPEG" && data!=="png" && data!=="PNG") return inputimg.value = null;
}
