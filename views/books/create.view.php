<?php require 'views/partials/head.php' ?>
<?php require 'views/partials/nav.php' ?>
<!-- <?php require 'views/partials/banner.php' ?> -->


<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    
<form class="max-w-md mx-auto bg-white p-6 rounded-2xl shadow-md space-y-4" method="post" action="/books/store">
  <h2 class="text-2xl font-semibold text-gray-800 mb-4">Create A book</h2>

  <!-- Name Field -->
  <div>
    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
    <input
      type="text"
      id="name"
      name="name"
      placeholder="book name"
      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"

    />
  </div>

  <!-- Email Field -->
  <div>
    <label for="author" class="block text-sm font-medium text-gray-700 mb-1">Author</label>
    <input
      type="text"
      id="author"
      name="author"
      placeholder="author name"
      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
      
    />
  </div>
  <div>
    <label for="language" class="block text-sm font-medium text-gray-700 mb-1">Language</label>
    <input
      type="text"
      id="language"
      name="language"
      placeholder="language"
      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
      
    />
  </div>
  <div>
    <label for="year" class="block text-sm font-medium text-gray-700 mb-1">Year</label>
    <input
      type="text"
      id="year"
      name="year"
      placeholder="year"
      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
      
    />
  </div>

  <!-- Message Field -->
  <div>
    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
    <textarea
      id="description"
      name="description"
      rows="4"
      placeholder="Write your description here..."
      class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
    ></textarea>
  </div>

  <!-- Submit Button -->
  <button
    type="submit"
    class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300"
  >
    Create
  </button>
</form>


  </div>

</main>
</div>

</body>

</html>