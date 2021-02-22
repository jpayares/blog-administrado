$(document).ready( function() {
    $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
     });
});

ClassicEditor
    .create( document.querySelector( '#extract' ) )
    .catch( error => {
        console.error( error );
    } );
ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
        console.error( error );
    } );

//Cambiar imagen
document.getElementById("file").addEventListener('change', cambiarImagen);

function cambiarImagen(event){
    var file = event.target.files[0];

    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("picture").setAttribute('src', event.target.result); 
    };

    reader.readAsDataURL(file);
}