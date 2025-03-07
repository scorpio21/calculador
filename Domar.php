<!DOCTYPE html>
<html>
head>
    <title>Domar</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Domar</h1>
        </header>
        <main>
            <form method="post" action="">
                <label for="clase">Selecciona una clase:</label>
                <select name="clase" id="clase">
                    <option value="">--Selecciona--</option>
                    <option value="MAGO">Mago</option>
                    <option value="BRUJO">Brujo</option>
                    <option value="CLERIGO">Clérigo</option>
                    <option value="DRUIDA">Druida</option>
                    <option value="BARDO">Bardo</option>
                    <option value="ASESINO">Asesino</option>
                    <option value="GLADIADOR_MAGICO">Gladiador Mágico</option>
                </select><br><br>
                <label for="carisma">Selecciona la Carisma:</label>
                <input type="number" name="carisma" id="carisma"><br><br>
                <label for="criatura">Elije Criatura a Domar:</label>
                <input type="text" name="criatura" id="criatura"><br><br>
                <input type="submit" name="generar" value="Generar">
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['generar'])) {
                $clase = strtoupper($_POST['clase']);
                $carisma = $_POST['carisma'];
                $criatura = $_POST['criatura'];

                if ($clase == '' || $carisma == '' || $criatura == '') {
                    echo '<p>Por favor, llena todos los campos.</p>';
                } else {
                    // Aquí puedes añadir más lógica para el cálculo del skill necesario para domar según la clase y carisma.
                    echo "<p>El skill necesario para domar un/a $criatura con un pj $clase con $carisma de Carisma será de: <b>Skill Calculado</b></p>";
                }
            }
            ?>
        </main>
        <footer>
            <p>&copy; 2025 Utilidades AOMania. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>
</html>