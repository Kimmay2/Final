var number = 0;

var images = ["/ace12.jpg", "/ace18.jpg", "/ace13.jpg"];

function Left() {
  if (number > 0) {
    number--;
  } else {
    number = images.length - 1;
  }
  //document.getElementById("myImage").src = "images/" + images[number];
  document.getElementById("myImage").src = "./images/" + images[number];;
  document.getElementById("h1").innerHTML = number + 1;
}

function Right() {
  if (number < images.length - 1) {
    number++;
  } else {
    number = 0;
  }
  // document.getElementById("myImage").src = "images/" + images[number];
  document.getElementById("myImage").src = "./images" + images[number];
  document.getElementById("h1").innerHTML = number + 1;
}