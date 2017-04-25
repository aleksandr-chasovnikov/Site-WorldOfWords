<?php include ROOT . '/views/layouts/header.php'; ?>

<main class="content"><!-- MAIN ============= -->

  <ul>
      <li><a href="/admin">Админпанель</a></li>
      <li><a href="/admin/category/create" class=""><i class="fa fa-plus"></i> Добавить категорию</a></li>
      <li></li>
      <li></li>
      </ul>
  <hr>
  
  <h4>Список словарей</h4>
  <hr>
  <br/>

  <table class="table-word">
    <tr>
        <td>ID словаря</td>
        <td>Название словаря</td>
        <td>Порядковый номер</td>
        <td>Статус</td>
        <td>Редактировать</td>
        <td>Удалить</td>
    </tr>
    <?php foreach ($categoriesList as $category): ?>
        <tr>
            <td><?php echo $category['id']; ?></td>
            <td><?php echo $category['name']; ?></td>
            <td><?php echo $category['sort_order']; ?></td>
            <td><?php echo Category::getStatusText($category['status']); ?></td>  
            <td><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i>Редактировать</a></td>
            <td><a href="/admin/category/delete/<?php echo $category['id']; ?>" title="Удалить"><i class="fa fa-times"></i>Удалить</a></td>
        </tr>
    <?php endforeach; ?>
</table>

</main>

<?php include ROOT . '/views/layouts/footer.php'; ?>

