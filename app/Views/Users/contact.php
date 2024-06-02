<?= $this->include('Templates/header'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus necessitatibus, quas ratione, perferendis quos distinctio eligendi nam facilis error consequatur modi? Quidem earum culpa sit laboriosam quis nulla, enim mollitia.</p>
            <?php $session = session(); ?>
            <p>ID: <?= $session->get('id'); ?></p>
            <p>Name: <?= $session->get('name'); ?></p>
            <p>Email: <?= $session->get('email'); ?></p>
            <p>Image URL: <?= $session->get('imageUrl'); ?></p>
        </div>
    </div>
</div>

<?= $this->include('Templates/footer'); ?>