
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitácora Verde</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <header>
        <h1>🌿 Bitácora Verde</h1>
        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#inventario">Inventario</a>
            <a href="#registro">Registrar planta</a>
        </nav>
    </header>

    <section class="hero" id="inicio">
        <h2>Cuidemos las áreas verdes de nuestro plantel</h2>
        <p>
            Un espacio digital para registrar nuestras plantas,
            conocer su ubicación y promover la reforestación.
        </p>
        <a href="#inventario" class="boton">Ver inventario</a>
    </section>

    <main>
        <section class="estadisticas">
            <div class="tarjeta">
                <h3 id="total">0</h3>
                <p>Plantas registradas</p>
            </div>
            <div class="tarjeta">
                <h3>🌎</h3>
                <p>Cuidemos el planeta</p>
            </div>
        </section>

        <section id="inventario">
            <h2>Inventario botánico</h2>
            <p>Estas son las plantas registradas en nuestro plantel.</p>

            <div id="lista-plantas" class="plantas">
                <p>Aún no hay plantas registradas.</p>
            </div>
        </section>

        <section id="registro">
            <h2>Registrar una planta</h2>

            <form id="formulario">
                <label for="nombre">Nombre de la planta</label>
                <input type="text" id="nombre"
                       placeholder="Ej. Neem" required>

                <label for="tipo">Tipo de planta</label>
                <select id="tipo" required>
                    <option value="">Selecciona una opción</option>
                    <option>Árbol</option>
                    <option>Arbusto</option>
                    <option>Flor</option>
                    <option>Cactus</option>
                    <option>Otra</option>
                </select>

                <label for="ubicacion">Ubicación en el plantel</label>
                <input type="text" id="ubicacion"
                       placeholder="Ej. Jardín principal" required>

                <button type="submit">Registrar planta</button>
            </form>
        </section>
    </main>

    <footer>
        <p>Bitácora Verde | Proyecto PAEC</p>
        <p>Promoviendo el cuidado del medio ambiente escolar 🌱</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
