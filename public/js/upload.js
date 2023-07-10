function updateImageSrc() {
    var input = document.getElementById("file-input");
    var img = document.querySelector(".profile-edit-pict img");
    img.src = URL.createObjectURL(input.files[0]);
    input.value = img.src;
}
