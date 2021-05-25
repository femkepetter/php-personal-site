<?php require 'views/partials/header.view.php' ?>

<main class="content">

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
</main>

<?php require 'views/partials/footer.view.php' ?>