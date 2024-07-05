<?php view('partials/head.php') ?>
<?php view('partials/nav.php') ?>
<?php view('partials/banner.php', ['heading' => $heading]) ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <h1>Hello, <?= $_SESSION['user']['email'] ?? 'Guest' ?>. Welcome to the home page</h1>
    </div>
  </main>

<?php view('partials/footer.php') ?>
