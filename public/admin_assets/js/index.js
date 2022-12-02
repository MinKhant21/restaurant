
function previewImg(el){
    var previewArea = document.querySelector('#previewArea');
    var previewText = document.querySelector('#previewText');
   if(el.files.length > 0){
    let img = URL.createObjectURL(el.files[0]);
    previewArea.src = img;
    previewArea.style.display = 'block';
    previewText.style.display = 'none';
   }else{
    previewArea.style.display = 'none';
    previewText.style.display = 'flex';
   }
}