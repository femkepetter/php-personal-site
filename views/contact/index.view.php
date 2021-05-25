<?php require 'views/partials/header.view.php' ?>

<main class="content">
    <!-- CONTACT -->
    <footer id="contact" class="section scrollspy">
        <h3 class="page-title white-text">Contact</h2>
            <div class="container sectie">

                <div class="row justify-content-center">
                    <div class="col-10">
                        <form action="mail_handler.php" method="post">
                            Voornaam: <input type="text" name="first_name"><br>
                            Achternaam: <input type="text" name="last_name"><br>
                            Email: <input type="text" name="email"><br>
                            Bericht:<br><textarea rows="5" name="message" cols="30"></textarea><br>
                            <input type="submit" name="submit" value="Verzenden">
                        </form>
                    </div>
                </div>
            </div>
    </footer>
</main>

<?php require 'views/partials/footer.view.php' ?>