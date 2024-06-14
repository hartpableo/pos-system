<?php getTemplate('partials/header-dashboard'); ?>

<main>
  <div class="container">
    <h2 class="leading-none text-2xl mb-6 font-bold">
      Sales History
    </h2>
    <div class="overflow-x-auto">
      <table class="table text-base">
        <!-- head -->
        <thead class="text-base">
          <tr>
            <th class="text-white">&nbsp;</th>
            <th class="text-white">Product Name</th>
            <th class="text-white">Price</th>
            <th class="text-white">Amount given by customer</th>
            <th class="text-white">Change</th>
            <th class="text-white">Transaction Date (mm-dd-yyyy)</th>
          </tr>
        </thead>
        <tbody>
        <tr class="hover">
          <th>1</th>
          <td>Lemon Juice M</td>
          <td>₱ 45</td>
          <td>₱ 100</td>
          <td>₱ 55</td>
          <td>mm-dd-yyyy</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</main>