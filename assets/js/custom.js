let image = document.getElementById('image-changing');
let images = ['image1.png', 'image2.png', 'image3.png', 'image4.png', 'image5.png', 'image6.png', 'image7.png', 'image8.png'];
setInterval(function() {
    let random = Math.floor(Math.random() * 8);
    image.src = "assets/img/slide-banner/" + images[random];
}, 2000)