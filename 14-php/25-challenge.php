<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Edad</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            padding: 40px 60px;
            text-align: center;
            max-width: 400px;
            width: 90%;
            animation: fadeIn 1s ease;
        }

        h2 {
            margin-bottom: 25px;
            font-size: 28px;
            letter-spacing: 1px;
            background: linear-gradient(90deg, #6dd5fa, #2980b9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        label {
            font-size: 16px;
            color: #cce0ff;
        }

        input[type="date"] {
            margin-top: 10px;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 10px;
            background: rgba(255,255,255,0.2);
            color: #fff;
            outline: none;
            text-align: center;
            font-size: 16px;
            transition: 0.3s;
        }

        input[type="date"]:focus {
            background: rgba(255,255,255,0.3);
        }

        input[type="submit"] {
            margin-top: 20px;
            background: linear-gradient(90deg, #6dd5fa, #2980b9);
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            color: white;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.3s ease;
        }

        input[type="submit"]:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(109, 213, 250, 0.5);
        }

        h3 {
            margin-top: 25px;
            font-size: 20px;
            background: rgba(255, 255, 255, 0.15);
            padding: 15px;
            border-radius: 12px;
            box-shadow: inset 0 0 10px rgba(255,255,255,0.1);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calcula tu Edad</h2>

        <form method="post">
            <label for="fecha_nacimiento">Selecciona tu fecha de nacimiento:</label><br>
            <input type="date" name="fecha_nacimiento" required><br>
            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fecha_nacimiento = new DateTime($_POST["fecha_nacimiento"]);
            $hoy = new DateTime();
            $diferencia = $hoy->diff($fecha_nacimiento);
            $años = $diferencia->y;

            echo "<h3>Tienes $años años.</h3>";
        }
        ?>
    </div>
</body>
</html>
