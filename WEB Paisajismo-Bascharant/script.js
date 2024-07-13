document.getElementById('cotizacionForm').addEventListener('submit', function(event) {
    let nombre = document.getElementById('nombre').value;
    let email = document.getElementById('email').value;
    let servicio = document.getElementById('servicio').value;
    let mensaje = document.getElementById('mensaje').value;
    
    if (!nombre || !email || !servicio || !mensaje) {
        alert('Por favor, completa todos los campos.');
        event.preventDefault();
    }
});

document.getElementById('contactForm').addEventListener('submit', function(event) {
    let nombre = document.getElementById('nombre').value;
    let email = document.getElementById('email').value;
    let mensaje = document.getElementById('mensaje').value;
    
    if (!nombre || !email || !mensaje) {
        alert('Por favor, completa todos los campos.');
        event.preventDefault();
    }
});

document.getElementById('jobForm').addEventListener('submit', function(event) {
    let nombre = document.getElementById('nombre').value;
    let email = document.getElementById('email').value;
    let cv = document.getElementById('cv').value;
    
    if (!nombre || !email || !cv) {
        alert('Por favor, completa todos los campos.');
        event.preventDefault();
    }
});
