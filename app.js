let heart = document.querySelector(".my-heart");
let gift = document.querySelector(".bi-gift");
let basket = document.querySelector(".bi-basket2");
let cards = document.querySelectorAll(".my-images");
const dropdown = document.getElementById('dropdown-menu');
let list_menue = document.querySelector(".bi-blockquote-right");
let underlay = document.querySelector(".underlay");
let sidebar = document.querySelector(".sidebar");
let cross = document.querySelector(".bi-x");
let overlay = document.querySelector(".overlay");
let change_image = document.querySelector(".change-image");
let change_img_text = document.querySelector(".img-text");
let caret = document.querySelector(".caret");


let fav = document.querySelector(".fav");
let gif = document.querySelector(".gift");
let bas = document.querySelector(".basket");



let rendomImages = [
  {
    image: "1.png",
    img_text : "Bangles",
  },
  {
    image: "2.png",
    img_text : "Pendant Naclos",
  },
  {
    image: "3.png",
    img_text : "Pendant Naclos",
  },
  {
    image: "4.png",
    img_text : "Womans's T-shirts",
  },
  {
    image: "5.png",
    img_text : "Accessiors",
  },
]


heart.addEventListener("mouseover", () => {
  fav.classList.add("fav-show");
});
heart.addEventListener("mouseout", () => {
  fav.classList.remove("fav-show");
});

gift.addEventListener("mouseover", () => {
  gif.classList.add("fav-show");
});
gift.addEventListener("mouseout", () => {
  gif.classList.remove("fav-show");
});

basket.addEventListener("mouseover", () => {
  bas.classList.add("fav-show");
});
basket.addEventListener("mouseout", () => {
  bas.classList.remove("fav-show");
});

cards.forEach((card) => {
  let heartIcon = card.querySelector(".our-heart");

  card.addEventListener("mouseover", () => {
    heartIcon.classList.add("show-my-heart");
  });

  card.addEventListener("mouseout", () => {
    heartIcon.classList.remove("show-my-heart");
  });

  heartIcon.addEventListener("click", () => {
    heartIcon.classList.toggle("red");
  });
});

function toggleDropdown() {
  if (dropdown.classList.contains('hidden')) {
overlay.style.visibility = "visible";
setTimeout(()=>{

  dropdown.classList.remove('hidden');
  dropdown.style.display = 'block';
  caret.style.display = "block";
},100)
  }
  // else {
  //   dropdown.classList.add('hidden');
  //   dropdown.style.display = 'none';
  // }
}
overlay.addEventListener("click", ()=>{
    dropdown.classList.add('hidden');
    dropdown.style.display = 'none';
    caret.style.display = "none";

    overlay.style.visibility = "hidden";
})




list_menue.addEventListener("click", ()=>{
underlay.style.visibility = 'visible';
setTimeout(()=>{
  sidebar.style.transform = "translateX(0)";
},50)
})

underlay.addEventListener("click", ()=>{
  sidebar.style.transform = "translateX(-100%)";
underlay.style.visibility = 'hidden';
})
cross.addEventListener("click", ()=>{
  sidebar.style.transform = "translateX(-100%)";
underlay.style.visibility = 'hidden';
})
sidebar.addEventListener("click", (e)=>{
e.stopPropagation();
})


window.addEventListener("DOMContentLoaded", ()=>{
  const genrateRandomNum  =()=>{
    let randomNUm  = Math.random() * rendomImages.length;
    let floorNUm  = Math.floor(randomNUm);
    return floorNUm;
  }
  let RandomImagesNum = genrateRandomNum();

 change_image.src = `./front_images/./${rendomImages[RandomImagesNum].image}`;
 change_img_text.innerHTML= `${rendomImages[RandomImagesNum].img_text}`;
 

})