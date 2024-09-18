<!DOCTYPE html>
<html>
<head>
    <title>Invitación para Participar</title>
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
            ¡Participa como concursante en la Elección de Rey y Reina de {{ $institutionName }}!
        </div>
        <div class="content">
            <p>¡Hola {{ $name }}!</p>
            <p>Estamos emocionados de anunciar que ha llegado el momento de elegir a nuestros próximos Reyes y Reinas de {{ $institutionName }}. Este es un evento especial en nuestra institución, y tu participación es crucial para hacerlo aún más memorable.</p>
            <p>¡Estás nominado/a para ser candidato/a para el título de Rey o Reina de {{ $institutionName }}! Si estás interesado/a, por favor completa el formulario de inscripción a continuación.</p>
            <a href="{{ $participationLink }}" class="link-button">Completar Formulario de Inscripción</a>
            <p><strong>Detalles para Participar:</strong></p>
            <ul>
                <li><strong>Fecha límite para aceptar la invitación:</strong> {{ $deadline }}</li>
            </ul>
            <p><strong>Advertencia:</strong></p>
            <p>Si eres un candidato/a y has compartido tu enlace de votación con otra persona, tu participación podría verse afectada. En caso de mal uso del enlace, se suspenderá tu participación. En caso de no tener respuesta superada la fecha límite para aceptar la invitación se anulará tu candidatura. Una vez iniciado los concursos también se te proporcionará un enlace para que puedas votar.</p>
            <p>¡Esperamos contar contigo para hacer de este evento algo inolvidable!</p>
            <p>Para cualquier duda o pregunta, no dudes en ponerte en contacto con nosotros.</p>
            <p><strong>¡Gracias por tu participación y apoyo!</strong></p>
        </div>
        <div class="footer">
            <p>Saludos cordiales,</p>
            <p>{{ $adminName }}</p>
            <p>{{ $institutionName }}</p>
            <p>{{ $contactInfo }}</p>
        </div>
    </div>
</body>
</html>