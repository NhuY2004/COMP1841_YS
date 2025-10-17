<h2>List of Jokes</h2>

<?php foreach ($jokes as $joke): ?>
  <div class="joke-item">
    <div class="joke-image">
      <?php
  $img = !empty($joke['imagepath']) ? $joke['imagepath'] : '/COMP1841/Week5/images/JEJEJ.png';
        $alt = !empty($joke['imagepath']) ? 'Joke image' : 'Default joke placeholder image';
      ?>
      <img src="<?= htmlspecialchars($img, ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($alt, ENT_QUOTES, 'UTF-8') ?>">
    </div>

    <div class="joke-content">
      <p class="joke-text"><?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?></p>
      <p class="joke-date">Posted on: <?= htmlspecialchars($joke['jokedate'], ENT_QUOTES, 'UTF-8') ?></p>
    </div>

    <div class="joke-actions">
      <form action="deletejoke.php" method="post">
        <input type="hidden" name="id" value="<?= $joke['id'] ?>">
        <input type="submit" value="Delete" class="delete-button">
      </form>
    </div>
  </div>
  <hr>
<?php endforeach; ?>
