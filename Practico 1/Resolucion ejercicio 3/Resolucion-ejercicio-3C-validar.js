document.querySelector('#formulario-POST').addEventListener('submit', function(e) {
    e.preventDefault();
    const data = new URLSearchParams(new FormData(this));

    console.log(this.method);
    console.log(data);
    console.log(this.action);
    fetch('Resolucion-ejercicio-3C-login.php', {
        method: 'post',
        body: data,
    })
   
    .then(response => response.text()) 
    .then(html => {
        document.querySelector('#logueado').innerHTML = "usuario logueado";
    })
    .catch(error => console.log(error));
});

