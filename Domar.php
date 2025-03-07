<div class="container">
    <header>
        <h1>Domar</h1>
    </header>
    <main>
        <form method="post" action="index.php?page=domar">
            <label for="clase">Selecciona una clase:</label>
            <select name="clase" id="clase" required>
                <option value="">--Selecciona--</option>
                <option value="MAGO">Mago</option>
                <option value="BRUJO">Brujo</option>
                <option value="CLERIGO">Clérigo</option>
                <option value="DRUIDA">Druida</option>
                <option value="BARDO">Bardo</option>
                <option value="ASESINO">Asesino</option>
                <option value="GLADIADOR_MAGICO">Gladiador Mágico</option>
            </select>
            
            <label for="carisma">Selecciona la Carisma:</label>
            <input type="number" name="carisma" id="carisma" required>
            
            <label for="criatura">Elije Criatura a Domar:</label>
            <input type="text" name="criatura" id="criatura" required>
            
            <input type="submit" name="generar" value="Generar">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['generar'])) {
            $clase = strtoupper($_POST['clase']);
            $carisma = intval($_POST['carisma']);
            $criatura = $_POST['criatura'];

            if ($clase == '' || $carisma == '' || $criatura == '') {
                echo '<p class="result">Por favor, llena todos los campos.</p>';
            } else {
                // Lógica de cálculo del skill
                $skillBase = 50; // Valor base de skill, puede ajustarse según sea necesario
                $factorClase = 1.0;

                switch ($clase) {
                    case 'MAGO':
                        $factorClase = 1.2;
                        break;
                    case 'BRUJO':
                        $factorClase = 1.1;
                        break;
                    case 'CLERIGO':
                    case 'DRUIDA':
                        $factorClase = 1.5;
                        break;
                    case 'BARDO':
                        $factorClase = 1.3;
                        break;
                    case 'ASESINO':
                        $factorClase = 1.4;
                        break;
                    case 'GLADIADOR_MAGICO':
                        $factorClase = 1.6;
                        break;
                    default:
                        $factorClase = 1.0;
                }

                $skillNecesario = $skillBase + ($carisma * $factorClase);

                // Limitar el skill a un máximo de 100
                if ($skillNecesario > 100) {
                    $skillNecesario = 100;
                }

                echo "<div class='result'><p>El skill necesario para domar un/a $criatura con un pj $clase con $carisma de Carisma será de: $skillNecesario <b>Skill Calculado</b></p></div>";
            }
        }
        ?>
    </main>
</div>