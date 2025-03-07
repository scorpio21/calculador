<div class="container">
    <header>
        <h1>Mana de los personajes en AOMania</h1>
    </header>
    <main>
        <form method="post" action="index.php?page=mana">
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
            
            <label for="inteligencia">Selecciona la inteligencia:</label>
            <input type="number" name="inteligencia" id="inteligencia" required>
            
            <label for="nivel">Nivel:</label>
            <input type="number" name="nivel" id="nivel" max="100" required>
            
            <input type="submit" name="generar" value="Generar">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['generar'])) {
            $clase = strtoupper($_POST['clase']);
            $inteligencia = $_POST['inteligencia'];
            $nivel = $_POST['nivel'];

            if ($clase == '' || $inteligencia == '' || $nivel == '') {
                echo '<p class="result">Por favor, llena todos los campos.</p>';
            } else if ($nivel <= 0 || $nivel > 100) {
                echo '<p class="result">Nivel inválido!</p>';
            } else {
                $maxMana = 0;
                $minMana = 0;
                $incrementoMana = 0;

                switch ($clase) {
                    case 'MAGO':
                        $incrementoMana = $inteligencia * 3;
                        $maxMana = 100 + $inteligencia / 3;
                        $minMana = 101;
                        break;
                    case 'BRUJO':
                        $incrementoMana = $inteligencia * 2.7;
                        $maxMana = 100 + $inteligencia / 3;
                        $minMana = 101;
                        break;
                    case 'CLERIGO':
                    case 'DRUIDA':
                    case 'BARDO':
                        $incrementoMana = $inteligencia * 2;
                        $maxMana = $minMana = 50;
                        break;
                    case 'ASESINO':
                    case 'GLADIADOR_MAGICO':
                        $incrementoMana = $inteligencia;
                        $maxMana = $minMana = 50;
                        break;
                    default:
                        $maxMana = $minMana = 0;
                }

                if (in_array($clase, ['MAGO', 'BRUJO', 'CLERIGO', 'DRUIDA', 'BARDO'])) {
                    $minMana += $incrementoMana * ($nivel - 1);
                    $maxMana += $incrementoMana * ($nivel - 1);
                } else if (in_array($clase, ['ASESINO', 'GLADIADOR_MAGICO']) && $nivel >= 2) {
                    $minMana += $inteligencia * ($nivel - 1);
                    $maxMana += $inteligencia * ($nivel - 1);
                }

                echo "<div class='result'><p>El incremento de mana por nivel es de: $incrementoMana</p>";
                echo "<p>El mana de su Pj $clase con $inteligencia de Inteligencia al Nivel $nivel será de $minMana/$maxMana</p></div>";
            }
        }
        ?>
    </main>
</div>