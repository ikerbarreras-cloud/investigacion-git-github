
const formulario = document.getElementById("formulario");
const lista = document.getElementById("lista-plantas");
const total = document.getElementById("total");

let plantas = [];

formulario.addEventListener("submit", function(evento) {
    evento.preventDefault();

    const nombre = document.getElementById("nombre").value.trim();
    const tipo = document.getElementById("tipo").value;
    const ubicacion = document.getElementById("ubicacion").value.trim();

    if (!nombre || !tipo || !ubicacion) {
        alert("Completa todos los campos.");
        return;
    }

    plantas.push({
        nombre: nombre,
        tipo: tipo,
        ubicacion: ubicacion
    });

    mostrarPlantas();
    formulario.reset();
});

function mostrarPlantas() {
    lista.replaceChildren();

    total.textContent = plantas.length;

    plantas.forEach(function(planta) {
        const tarjeta = document.createElement("article");
        tarjeta.className = "planta";

        const titulo = document.createElement("h3");
        titulo.textContent = "🌱 " + planta.nombre;

        const tipo = document.createElement("p");
        tipo.textContent = "Tipo: " + planta.tipo;

        const ubicacion = document.createElement("p");
        ubicacion.textContent = "Ubicación: " + planta.ubicacion;

        tarjeta.append(titulo, tipo, ubicacion);
        lista.appendChild(tarjeta);
    });
}
