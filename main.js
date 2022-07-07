var imag = ['imagenes/banner.jpg','imagenes/banner2.jpg','imagenes/esparta_final.png'],
cont = 0;

function carrousel(contenedors){
    contenedors.addEventListener('click', e =>{
    let atras = contenedors.querySelector('.atras'),
        adelante = contenedors.querySelector('.adelante'),
        img = contenedors.querySelector('imagenes'),
        tgt = e.target;

        if(tgt == atras){
            if(cont > 0){
                img.src = imag[cont - 1];
                cont--;
            } else {
                img.src = imag [imag.length - 1];
                cont = imag.length - 1;
            }
        } else if(tgt == adelante){
            if(cont < imag.length - 1){
                img.src = imag[cont + 1];
                cont++;
            } else {
                img.src = imag [0];
                cont = 0;
            }
        }

    } );
}

document.addEventListener("DOMContentLoaded",()=>{
    let contenedor = document.querySelector('.contenedors');
    carrousel (contenedor);
})