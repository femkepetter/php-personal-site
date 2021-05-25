<?php require 'views/partials/header.view.php' ?>

<main class="content">
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
</main>

<?php require 'views/partials/footer.view.php' ?>