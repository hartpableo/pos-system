<header class="mb-8">
  <div class="container">

    <div class="flex justify-between items-end mb-4">

      <div class="text-start">
        <img src="https://fastly.picsum.photos/id/235/450/450.jpg?hmac=g3i-LnYWZ21xL5VNfhwz_cQwK8RrVlgc6cpC0IjoupI" alt="my restaurant" class="inline-block align-middle mr-2 max-w-24 max-h-24 object-cover object-center rounded-full">
        <h1 class="font-bold text-6xl leading-tight inline-block align-middle">My Restaurant</h1>
      </div>

      <div class="flex justify-end items-center flex-wrap">
        <a href="/add-item" class="btn bg-red-600 hover:bg-red-400 text-sm leading-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill inline mr-1" viewBox="0 0 16 16">
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
          </svg>
          <span class="inline-block align-middle">
            Add Item
          </span>
        </a>
      </div>

    </div>

    <?php getTemplate('partials/filters'); ?>

  </div>
</header>