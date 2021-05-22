<?php require 'views/partials/header.view.php' ?>

<main class="content">
    <div class="main">
        <?php foreach ($vars['users'] as $user) : ?>
            <div><?= $user->first_name ?></div>
            <div><?= $user->last_name ?></div>
            <div><?= $user->gender ?></div>
            <div><?= $user->loves ?></div>
            <div><?= $vars['foods'] ?></div>
        <?php endforeach ?>
    </div>
</main>

<?php require 'views/partials/footer.view.php' ?>