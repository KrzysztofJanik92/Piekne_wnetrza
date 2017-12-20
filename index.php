
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Marcellus|Montserrat|Playfair+Display|Roboto:100,300,400,500,
    700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Piękne Wnętrza</title>
</head>
<body>
    <section class="header">
            <!-- <span class="logo">Piękne <span class="inside-logo">Wnętrza</span></span> -->
            <ul class="navigation">
                <li><a href="#">Strona Główna</a></li>
                <li><a href="#">O Nas</a></li>
                <li><a href="#">Zakres Usług</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
            <span class="phone"><i class="fa fa-mobile" aria-hidden="true"></i> 603-395-860</span>
    </section>
    <section class="main">
        <div class="photo">
            <div></div>
        </div>
        <h1>Bo liczą się wnętrza <span>Piękne Wnętrza</span></h1>
    </section>
    <h2>Stawiamy na <span>jakość</span></h2>
    <section class="feature">
        <div class="col-4">
            <i class="fa fa-truck" aria-hidden="true"></i>
            <h3>Kompleksowość</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit velit eros, nec placerat ipsum laoreet sit amet. Cras eleifend suscipit ornare. Mauris in dolor lectus.</p>
        </div>
        <div class="col-4">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <h3>Indywidualne podejście</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit velit eros, nec placerat ipsum laoreet sit amet. Cras eleifend suscipit ornare. Mauris in dolor lectus.</p>
        </div>
        <div class="col-4">
            <i class="fa fa-handshake-o" aria-hidden="true"></i>
            <h3>Gwarancja zadowolenia</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit velit eros, nec placerat ipsum laoreet sit amet. Cras eleifend suscipit ornare. Mauris in dolor lectus. </p>
        </div>
    </section>
    
    <section class="services">
        <h2 class="service-header"><span>Kompleksowy</span> zakres usług</h2>
        <div class="container">
            <div class="col-6">
                <h3><i class="fa fa-industry" aria-hidden="true"></i> Obiekty przemysłowe</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit velit eros, nec placerat ipsum laoreet sit amet. Cras eleifend suscipit ornare. Mauris in dolor lectus. Cras eleifend suscipit ornare. Mauris in dolor lectus.</p>
            </div>
            <div class="col-6">
                <h3><i class="fa fa-home" aria-hidden="true"></i> Sklepy</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit velit eros, nec placerat ipsum laoreet sit amet. Cras eleifend suscipit ornare. Mauris in dolor lectus. Cras eleifend suscipit ornare. Mauris in dolor lectus.</p>
            </div>
            <div class="col-6">
                <h3><i class="fa fa-home" aria-hidden="true"></i> Mieszkania</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit velit eros, nec placerat ipsum laoreet sit amet. Cras eleifend suscipit ornare. Mauris in dolor lectus. Cras eleifend suscipit ornare. Mauris in dolor lectus.</p>
            </div>
            <div class="col-6">                   
                <h3><i class="fa fa-building" aria-hidden="true"></i> Firmy</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit velit eros, nec placerat ipsum laoreet sit amet. Cras eleifend suscipit ornare. Mauris in dolor lectus. Cras eleifend suscipit ornare. Mauris in dolor lectus.</p>
            </div>
        </div>
    </section>

    <section class="contact">
            <form id="contact" action="" method="post">
                <h3>Kontakt</h3>
                <h4>Masz pytania? Napisz do nas!</h4>
                <fieldset>
                    <input name="formName" placeholder="Imię" type="text" tabindex="1" required >
                </fieldset>
                <fieldset>
                    <input name="formEmail" placeholder="Adres e-mail" type="email" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <textarea form="formText" placeholder="Treść wiadomości" tabindex="5" required></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Wyślij</button>
                </fieldset>
                </form>
    </section>
</body>
</html>