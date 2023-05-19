import './bootstrap';
import * as bootstrap from 'bootstrap';
import '~resources/scss/app.scss';
import.meta.glob([
    '../img/**'
])
/* Mostra anteprima download */
const imageInput = document.getElementById('image');
imageInput.addEventListener('change', showPreview);

function showPreview(event) {
    if (event.target.files.lenght > 0) {
        const src = URL.createObjectURL(event.target.files[0]);
        const preview = document.getElementById('file-image-preview');
        preview.src = src;
        preview.style.display = "block";
    }
}
