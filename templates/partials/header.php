<header class="mb-8">
  <div class="container">

    <div class="flex justify-between items-end mb-4">

      <div class="text-start">
        <img src="https://fastly.picsum.photos/id/235/450/450.jpg?hmac=g3i-LnYWZ21xL5VNfhwz_cQwK8RrVlgc6cpC0IjoupI" alt="my restaurant" class="inline-block align-middle mr-2 max-w-24 max-h-24 object-cover object-center rounded-full">
        <h1 class="font-bold text-6xl leading-tight inline-block align-middle">My Restaurant</h1>
      </div>

      <ul class="flex justify-end items-center flex-wrap gap-3" aria-label="General Actions">
        <li>
          <a href="/dashboard" class="btn bg-red-600 hover:bg-red-400 text-sm leading-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2 inline mr-1" viewBox="0 0 16 16">
              <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
              <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"/>
            </svg>
            <span class="inline-block align-middle">
            Dashboard
          </span>
          </a>
        </li>
      </ul>

    </div>

    <?php getTemplate('partials/filters'); ?>

  </div>
</header>