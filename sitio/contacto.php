<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summer Exploring</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <!-- Logo + empresa -->
        <a href="index.html">
            <img src="imgs/sunsea.png" alt="Logo Summer Exploring ">
            Summer Exploring
        </a>

        <!-- barra de navegación -->
        <nav>
            <a href="index.html">Inicio</a>
            <a href="">Promos</a>
            <a href="servicios.html">Servicios</a>
            <a href="contacto.html">Contacto</a>
        </nav>
    </header>
    <main>

        <section id="contacto">
<?php
    //capturamos datos enviados por el form
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];
    //configuramos datos de email a enviar
    $destinatario = 'contacto@adidas.com.ar';
    $asunto = 'Email enviado desde Summer Exploring';
    $cuerpo = '<div style="background-color: #CB582E;
                           color: #fff; width: 550px;
                           font-family: Arial; 
                           font-size: 20px;
                           padding: 24px 32px;
                           border-radius: 12px;">';
    $cuerpo .= 'Nombre: '.$nombre.'<br>';
    $cuerpo .= 'Email: '.$email.'<br>';
    $cuerpo .= 'Consulta: '.$consulta.'</div>';
    # encabezados adicionales
    $headers = 'From: contacto@adidas.com.ar'. "\r\n";
    $headers .= 'Reply-To: '.$email."\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    //enviamos el email
    mail($destinatario, $asunto, $cuerpo, $headers);

    #### generamos emnsaje de agradecimiento
    echo 'Gracias '.$nombre.' por contactarnos';
?>            
        </section>

        <section id="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.692662355019!2d-0.11866732254412228!3d51.50050717181179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b8be668bd9%3A0x803c1962e6448108!2s203%20Westminster%20Bridge%20Rd%2C%20London%20SE1%207FP%2C%20Reino%20Unido!5e0!3m2!1ses!2sar!4v1692789594698!5m2!1ses!2sar"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
    <footer>
        <!-- logo + e presa -->
        <a href="index.html">
            <img src="imgs/sunsea-wht.png">
            Summer Exploring
        </a>
        <!-- redes sociales -->
        <div>
            <a href="">
                <img src="imgs/instagram-w 1.png">
            </a>
            <a href="">
                <img src="imgs/facebook-w 1.png">
            </a>
            <a href="">
                <img src="imgs/twitter-w 1.png">
            </a>
            <a href="">
                <img src="imgs/linkedin-w.png">
            </a>
        </div>
    </footer>

</body>
</html>