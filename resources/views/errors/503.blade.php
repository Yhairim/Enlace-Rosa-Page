<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            text-align: center;
            background: white;
            padding: 60px 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(233, 30, 99, 0.15);
            max-width: 600px;
            width: 100%;
        }

        .icon {
            font-size: 4em;
            margin-bottom: 20px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.7;
            }
        }

        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .subtitle {
            font-size: 1.1em;
            color: #666;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .message {
            font-size: 1em;
            color: #888;
            margin-top: 30px;
            line-height: 1.8;
            font-style: italic;
        }

        .accent {
            color: #e91e63;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">🔧</div>
        <h1>¡Volveremos pronto!</h1>
        <div class="subtitle">
            Lo sentimos, estamos realizando mantenimiento en este momento.
        </div>
        <div class="message">
            Estamos <span class="accent">construyendo cosas buenas</span> para ti. 
            Pronto volveremos con novedades.
        </div>
    </div>
</body>
</html>