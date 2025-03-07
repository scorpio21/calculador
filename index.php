<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilidades AOMania</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 90%;
            margin: 0 auto;
            max-width: 1200px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        header {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 1em 0;
            text-align: center;
            border-radius: 15px 15px 0 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.7);
            margin: 0;
            border-radius: 0 0 15px 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        nav li {
            margin: 0 10px;
        }
        nav a {
            text-decoration: none;
            color: #fff;
            padding: 15px 20px;
            display: block;
            transition: background-color 0.3s, transform 0.3s;
            border-radius: 10px;
        }
        nav a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: scale(1.05);
        }
        .content {
            padding: 20px 0;
            min-height: 400px;
            text-align: center;
            color: #fff;
        }
        footer {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
            padding: 1em 0;
            border-radius: 0 0 15px 15px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            align-items: center;
        }
        label {
            font-weight: bold;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }
        input[type="number"], select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        input[type="submit"]:hover {
            background-color: #555;
            transform: scale(1.05);
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.2);
            border-left: 5px solid #007bff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Utilidades AOMania</h1>
        </header>
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
                <li><a href="index.php?page=mana"><i class="fas fa-magic"></i> Calcular Mana</a></li>
                <li><a href="index.php?page=domar"><i class="fas fa-paw"></i> Calcular Skill para Domar</a></li>
            </ul>
        </nav>
        <div id="content" class="content">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                if ($page == 'mana') {
                    include 'Mana.php';
                } elseif ($page == 'domar') {
                    include 'Domar.php';
                }
            } else {
                echo '<h2>Bienvenido a Utilidades AOMania</h2>';
                echo '<p>Selecciona una opción del menú para comenzar.</p>';
            }
            ?>
        </div>
        <footer>
            <p>&copy; 2025 Utilidades AOMania. Todos los derechos reservados.</p>
        </footer>
    </div>
</body>
</html>