<?php include ROOT . '/views/layouts/header.php'; ?>
<main class="content"><!-- MAIN ============= -->
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/category">Управление словарями</a></li>
                    <li class="active">Удалить запись</li>
                </ol>
            </div>


            <h4>Удалить запись #<?php echo $id; ?></h4>


            <p>Вы действительно хотите удалить эту запись?</p>

            <form method="post">
                <input type="submit" name="submit" value="Удалить" />
            </form>
</main>

<?php include ROOT . '/views/layouts/footer.php'; ?>

