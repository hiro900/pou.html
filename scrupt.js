// Get references to the button and the image
const changeImageButton = document.getElementById('changeImageButton');
const imageToChange = document.getElementById('imageToChange');

// Add an event listener to the button
changeImageButton.addEventListener('click', function() {
    // Check the current source of the image
    if (imageToChange.src.endsWith('file:///home/joao_pedro/Imagens/2023-01-02_13_24_20.jpg.jpg')) {
        // If the current image is the default one, change it to another image
        imageToChange.src = 'file:///home/joao_pedro/Imagens/2022-12-30%2004.56.31.jpg';
    } else {
        // If the current image is the new one, change it back to the default image
        imageToChange.src = 'file:///home/joao_pedro/Imagens/2022-11-12-15-50-44--1367240672.jpg';
    }
});
