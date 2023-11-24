const images = [

    "images/27424372.jpg",
    "images/28213020.jpg",
    "images/DSC_1626.jpg"
]; 

let move_p = 0;

function slideshow() {
    const slideshow = document.getElementById("slideshow");
    slideshow.src =  images[move_p];
    move_p = (move_p + 1) % images.length;
}

setInterval(slideshow,1000);

slideshow();