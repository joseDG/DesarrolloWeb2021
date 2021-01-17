document.addEventListener('DOMContentLoaded', function() {
    crearGaleria();
});

function crearGaleria(){
    const galeria = document.querySelector('.galeria-imagenes');

    for( let i = 1; i <=12; i++){
        const imagen = document.createElement('IMG');
        imagen.src = `build/img/thumb/${i}.webp`;
        /*añade un atributo en el HTML como el id de la img*/
        imagen.dataset.imagenId = i;

        //Añadiendo la funcion de mostrarImagen
        imagen.onclick = mostrarImagen;

        const lista = document.createElement('li');
        lista.appendChild(imagen);

        galeria.appendChild(lista);
    }
}

function mostrarImagen(e) {
    const id = parseInt( e.target.dataset.imagenId);

    //Generar la imagen
    const imagen = document.createElement('img');
    imagen.src = `build/img/grande/${id}.webp`;

    const overlay = document.createElement('div');
    overlay.appendChild(imagen);
    overlay.classList.add('overlay');

    //Cuando se da click cerra la imagen
    overlay.onclick = function(){
        overlay.remove();
    }

    //Botonn para cerar la imagen
    const cerrarImagen = document.createElement('p');
    cerrarImagen.textContent = 'X';
    cerrarImagen.classList.add('btn-cerrar');

    //Cundo se preciona cierra la imagen
    cerrarImagen.onclick = function() {
        overlay.remove();
    }

    overlay.appendChild(cerrarImagen);

    //Mostrar en el HTML
    const body = document.querySelector('body');
    body.appendChild(overlay);
}