<?php include ROOT . '/views/layouts/header.php'; ?>

<main class="content"><!-- MAIN ============= -->
    <h2>Список словарей</h2>
    <hr>

    <?php foreach ($categories as $categoryItem): ?>

      <ul class="artile__item">
        <li class="item">
          <a href="/category/<?php echo $categoryItem['id']; ?>"
           class="item item__link <?php if ($categoryId == $categoryItem['id']) echo 'active'; ?>">
           <?php echo $categoryItem['name']; ?>
         </a>
       </li>
     </ul>

   <?php endforeach; ?>

</main>

<?php include ROOT . '/views/layouts/footer.php'; ?>