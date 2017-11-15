var newImage = new Image();
newImage.src = "http://localhost/kukkuluuruu.jpg";

function updateImage()
{
if(newImage.complete) {
    document.getElementById("theText").src = newImage.src;
    newImage = new Image();
    number++;
    newImage.src = "http://localhost/image/id/kukkuluuruu.jpg?time=" + new Date();
}

    setTimeout(updateImage, 1000);
}
