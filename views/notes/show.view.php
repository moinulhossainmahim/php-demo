<?php view('partials/head.php') ?>
<?php view('partials/nav.php') ?>
<?php view('partials/banner.php', ['heading' => $heading]) ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p class="mb-6">
        <a href="/notes" class="text-blue-600 hover:underline">Go Back</a>
      </p>
      <p><?= htmlspecialchars($note['body']) ?></p>
    </div>
  </main>

<?php view('partials/footer.php') ?>
