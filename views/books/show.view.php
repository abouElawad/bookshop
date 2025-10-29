<?php require 'views/partials/head.php' ?>
<?php require 'views/partials/nav.php' ?>
<!-- <?php require 'views/partials/banner.php' ?> -->


<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <?php
    $book = $db->query($query,[$id])->fetch();  
    ?>


<div class="max-w-md mx-auto bg-white shadow-lg rounded-2xl p-6 border border-gray-100 space-y-3">
  <h2 class="text-2xl font-bold text-gray-800 border-b pb-2 mb-3">
    📖 Book Details
  </h2>

  <p class="text-gray-700">
    <span class="font-semibold text-gray-900">Book Name:</span> <?= htmlspecialchars($book['name']) ?>
  </p>
  
  <p class="text-gray-700">
    <span class="font-semibold text-gray-900">Author:</span> <?= htmlspecialchars($book['author']) ?>
  </p>
  
  <p class="text-gray-700">
    <span class="font-semibold text-gray-900">Language:</span> <?= htmlspecialchars($book['language']) ?>
  </p>
  
  <p class="text-gray-700">
    <span class="font-semibold text-gray-900">Publish Year:</span> <?= htmlspecialchars($book['year']) ?>
  </p>
  
  <p class="text-gray-700 leading-relaxed">
    <span class="font-semibold text-gray-900">Description:</span> <?= htmlspecialchars($book['description']) ?>
  </p>
</div>

  </div>

</main>
</div>

</body>

</html>