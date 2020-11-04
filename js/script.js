$(document).ready(function(){
    $('#drop-slika').click(function(){
        $('.collapse-box').slideToggle(300);
    });   
});


//GALLERY
let galleryImages = document.querySelectorAll('.materijali-grid-item');
let windowWidth = window.innerWidth;


if(galleryImages){
    galleryImages.forEach(function(img,index){
        img.onclick = function(){
            let container = document.body;
            let newImgWindow = document.createElement('div'); 
            container.appendChild(newImgWindow);
            newImgWindow.setAttribute('class', 'img-window');
            newImgWindow.setAttribute('onclick', 'closeImg()');
        }
    });
}