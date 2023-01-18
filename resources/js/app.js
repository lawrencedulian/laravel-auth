import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

//preview file when uploading
const coverImageInput = document.getElementById("cover_image");
const previewImage = document.getElementById("preview_image");

coverImageInput.addEventListener("change", function () {
    const uploadedFile = this.files[0];
    if (uploadedFile) {
        const reader = new FileReader();
        reader.addEventListener("load", function () {
            previewImage.src = reader.result;
        });
        reader.readAsDataURL(uploadedFile);
    }
})