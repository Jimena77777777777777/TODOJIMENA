<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Página</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa; /* Fondo suave para que el contenedor resalte */
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        
        .footer-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .footer-links {
            display: flex;
            gap: 15px;
        }

        .footer-link {
            text-decoration: none;
            color: #6c757d;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #ff8fab;
        }

        .footer-social {
            display: flex;
            gap: 50px;
            margin: 10px 0; /* Espacio vertical entre los íconos sociales y el texto */
        }

        .footer-social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background-color: #8B0000; /* Rojo sangre */
            border-radius: 50%; /* Ovalado */
            overflow: hidden;
            transition: background-color 0.3s ease;
        }

        .footer-social-link:hover {
            background-color: #a52a2a; /* Color rojo más claro al pasar el ratón */
        }

        .footer-social-link img {
            width: 50px;
            height: 50px;
        }

       
    </style>
</head>
<body>
    <div class="content">
        <!-- Aquí va el contenido de la página -->
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-social">
                <a href="https://www.facebook.com/share/pfanUs1ZSAs9wZT3/?mibextid=qi2Omg" class="footer-social-link">
                    <img src="https://i.pinimg.com/564x/47/97/44/4797447ae33dcf3e23ccb05edba9b6f1.jpg" alt="Facebook">
                </a>
                <a href="https://vm.tiktok.com/ZMrgfqVUW/" class="footer-social-link">
                    <img src="https://i.pinimg.com/564x/84/97/9a/84979a892a9c3df345d9e26a559f5831.jpg" alt="Twitter">
                </a>
                <a href="https://www.instagram.com/s/aGlnaGxpZ2h0OjE3OTA5ODEwNjQ4NzgzMzU3?story_media_id=3235363374782951719_45575472527&igsh=MW85OHFvb2huZnJxeQ==" class="footer-social-link">
                    <img src="https://i.pinimg.com/564x/12/ec/3c/12ec3cd5eb27905a9970e10b683070b8.jpg" alt="Instagram">
                </a>
            </div>
        </div>
       
    </footer>
</body>
</html>
