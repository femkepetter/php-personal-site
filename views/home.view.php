<?php require 'views/partials/header.view.php' ?>

<main class="content">
    <!-- LANDING -->
    <section id="landing" class="landing section scrollspy">
        <div class="container">
            <h1 class="user-select-none">Femke Petter</h1>
            <h2 class="user-select-none">webdeveloper</h2>
        </div>
    </section>

    <div class="main">
        <label>First name</label><?= $vars['name'] ?>
    </div>

    <!-- VAARDIGHEDEN -->
    <section id="skills" class="section scrollspy">
        <h3 class="page-title white-text">Vaardigheden</h2>
            <div class="container sectie">

                <div class="row align-items-start justify-content-center">
                    <div class="col-md-6 col-10">
                        <h4 class="subtitel">Web Development</h4>
                        <ul>
                            <?php foreach ($vars['skills']['webdev'] as $webdev) : ?>
                                <div class="row">
                                    <div class="col">
                                        <li><?= $webdev['label'] ?>:
                                    </div>

                                    <div class="col"><?= $webdev['value'] ?></li>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </ul>
                    </div>

                    <div class="col-md-6 col-10">
                        <h4 class="subtitel">Overige</h4>
                        <ul>
                            <?php foreach ($vars['skills']['overig'] as $overig) : ?>
                                <div class="row">
                                    <div class="col">
                                        <li><?= $overig['label'] ?>:
                                    </div>

                                    <div class="col"><?= $overig['value'] ?></li>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>

    </section>

    <!-- WERKERVARING -->
    <section id="experience" class="section scrollspy">
        <h3 class="page-title white-text">Werkervaring</h2>

            <div class="container sectie">
                <div class="row">
                    <div class="col">
                        <h4 class="subtitel">Nije Balans</h4>
                        <ul>
                            <?php foreach ($vars['experience']['nijebalans']['algemeen'] as $nijebalans) : ?>
                                <li><?= $nijebalans['label'] ?>: <?= $nijebalans['value'] ?></li>
                            <?php endforeach ?>
                        </ul>
                        <h5 class="taken">Taken:</h5>
                        <ul>
                            <?php foreach ($vars['experience']['nijebalans']['taken'] as $nijebalans) : ?>
                                <li>- <?= $nijebalans['value'] ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container sectie">
                <div class="row">
                    <div class="col">
                        <h4 class="subtitel">Jelle Bijlsma</h4>
                        <ul>
                            <?php foreach ($vars['experience']['jellebijlsma']['algemeen'] as $jellebijlsma) : ?>
                                <li><?= $jellebijlsma['label'] ?>: <?= $jellebijlsma['value'] ?></li>
                            <?php endforeach ?>
                        </ul>
                        <h5 class="taken">Taken:</h5>
                        <ul>
                            <?php foreach ($vars['experience']['jellebijlsma']['taken'] as $jellebijlsma) : ?>
                                <li>- <?= $jellebijlsma['value'] ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container sectie">
                <div class="row">
                    <div class="col">
                        <h4 class="subtitel">Koninklijke Marine</h4>
                        <ul>
                            <?php foreach ($vars['experience']['bba']['algemeen'] as $bba) : ?>
                                <li><?= $bba['label'] ?>: <?= $bba['value'] ?></li>
                            <?php endforeach ?>
                        </ul>
                        <h5 class="taken">Taken:</h5>
                        <ul>
                            <?php foreach ($vars['experience']['bba']['taken'] as $bba) : ?>
                                <li>- <?= $bba['value'] ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container sectie">
                <div class="row">
                    <div class="col">
                        <h4 class="subtitel">Koninklijke Marine</h4>
                        <ul>
                            <?php foreach ($vars['experience']['schepen']['algemeen'] as $schepen) : ?>
                                <li><?= $schepen['label'] ?>: <?= $schepen['value'] ?></li>
                            <?php endforeach ?>
                        </ul>
                        <h5 class="taken">Taken:</h5>
                        <ul>
                            <?php foreach ($vars['experience']['schepen']['taken'] as $schepen) : ?>
                                <li>- <?= $schepen['value'] ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    <!-- OPLEIDINGEN -->
    <section id="education" class="section scrollspy">
        <h3 class="page-title white-text">Opleidingen en cursussen</h2>
            <div class="container sectie">
                <div class="row align-items-start justify-content-center">
                    <div class="col-md-6 col-11 px-4">
                        <h4 class="subtitel">Opleidingen</h4>
                        <h5 class="taken">Officier Zeedienst</h5>
                        <ul>
                            <?php foreach ($vars['education']['opleidingen']['officier'] as $officier) : ?>
                                <li><?= $officier['label'] ?>: <?= $officier['value'] ?></li>
                            <?php endforeach ?>
                        </ul>
                        <h5 class="taken">Havo</h5>
                        <ul>
                            <?php foreach ($vars['education']['opleidingen']['havo'] as $havo) : ?>
                                <li><?= $havo['label'] ?>: <?= $havo['value'] ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>

                    <div class="col-md-6 col-11 px-4">
                        <h4 class="subtitel">Cursussen</h4>
                        <ul>
                            <?php foreach ($vars['education']['cursussen']['autocad'] as $autocad) : ?>
                                <li><?= $autocad['label'] ?>: <?= $autocad['value'] ?></li>
                            <?php endforeach ?>
                        </ul>
                        <ul>
                            <?php foreach ($vars['education']['cursussen']['raw'] as $raw) : ?>
                                <li><?= $raw['label'] ?>: <?= $raw['value'] ?></li>
                            <?php endforeach ?>
                        </ul>

                        <ul>
                            <?php foreach ($vars['education']['cursussen']['vca'] as $vca) : ?>
                                <li><?= $vca['label'] ?>: <?= $vca['value'] ?></li>
                            <?php endforeach ?>
                        </ul>

                        <ul>
                            <?php foreach ($vars['education']['cursussen']['uav'] as $uav) : ?>
                                <li><?= $uav['label'] ?>: <?= $uav['value'] ?></li>
                            <?php endforeach ?>
                        </ul>

                        <ul>
                            <?php foreach ($vars['education']['cursussen']['diverse'] as $diverse) : ?>
                                <li><?= $diverse['label'] ?>: <?= $diverse['value'] ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    <!-- PROJECTS -->
    <section id="portfolio" class="section scrollspy">
        <h3 class="page-title white-text">Portfolio</h2>
            <div class="container sectie">
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellendus architecto maxime asperiores quis corporis cumque at repudiandae harum odit. Illo, incidunt repellat error nisi reprehenderit ipsum cumque fuga provident?
                    Reprehenderit aperiam quidem laudantium magni? Nemo repudiandae, earum illum tempora ab harum ducimus, consectetur voluptates error accusamus fugiat modi cum perferendis et esse quisquam pariatur adipisci molestias eveniet odio officiis!</div>
            </div>
    </section>
</main>
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

<!-- <?php require 'views/partials/footer.view.php' ?> -->