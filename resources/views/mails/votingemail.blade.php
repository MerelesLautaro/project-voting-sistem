<!DOCTYPE html>
<html>
<head>
    <title>Invitación para Votar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #666;
        }
        .link-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
        }
        .link-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            ¡Participa con tu voto en la Elección de Rey y Reina de {{ $nombreInstitucion }}!
        </div>
        <div class="content">
            <p>¡Hola {{ $nombre }}!</p>
            <p>Estamos emocionados de anunciar que ha llegado el momento de elegir a nuestros próximos Reyes y Reinas de {{ $nombreInstitucion }}. Este es un evento especial en nuestra institución, y tu participación es crucial para hacerlo aún más memorable.</p>
            <p>Te invitamos a ser parte de esta emocionante votación para elegir a nuestros representantes reales. Tu voto es importante para que podamos seleccionar a los candidatos que mejor representen a nuestra institución.</p>
            <a href="{{ $votingLink }}" class="link-button">Votar Ahora</a>
            <p><strong>Detalles de la Votación:</strong></p>
            <ul>
                <li><strong>Fecha de Inicio:</strong> {{ $startDate }}</li>
                <li><strong>Fecha de Cierre:</strong> {{ $endDate }}</li>
            </ul>
            <p><strong>Advertencia sobre el Enlace de Votación:</strong></p>
            <p>El enlace proporcionado para votar es de uso único. Por favor, asegúrate de utilizarlo solo una vez para tu voto. Cualquier intento de fraude, como el uso múltiple del enlace o la transferencia del mismo a otras personas, conllevará a la suspensión del voto y a posibles acciones adicionales para mantener la integridad del proceso.</p>
        </div>
        <div class="footer">
            Si tienes alguna pregunta, no dudes en contactarnos.
        </div>
    </div>
</body>
</html>