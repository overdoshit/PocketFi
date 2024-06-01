<?= $this->include('Templates/header'); ?>

<h1>BERHASIL</h1>
<p>Nama: <?= session()->get('name'); ?></p>
<p>Email: <?= session()->get('email'); ?></p>
<p>imageUrl: <?= session()->get('imageUrl'); ?></p>
<p>provider: <?= session()->get('provider'); ?></p>
<p>oauthId: <?= session()->get('oauthId'); ?></p>
<a href="<?= base_url('/logout'); ?>" class="btn btn-danger">Logout</a>

<?= $this->include('Templates/footer'); ?>