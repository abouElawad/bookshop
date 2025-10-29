<?php require 'views/partials/head.php' ?>
<?php require 'views/partials/nav.php' ?>
<?php require 'views/partials/banner.php' ?>


<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <?php
    $books = $db->query($query)->fetchAll();

    foreach ($books as $book) {
      echo "<li><a href=\" /books/show?id={$book['id']}\"  >{$book['name']}</a></li>";
    }
    ?>
  </div>

</main>
</div>

</body>

</html>