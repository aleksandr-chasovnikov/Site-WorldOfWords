<?php include ROOT . '/views/layouts/header.php'; ?>

<main class="content"><!-- MAIN ============= -->


                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/category">Управление словарями</a></li>
                    <li class="active">Добавить словарь</li>
                </ol>


            <h4>Добавить новый словарь</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

                    <form action="#" method="post" class="form">

                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="" required>

                        <p>Порядковый номер</p>
                        <input type="text" name="sort_order" placeholder="0" value="0">

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Отображается</option>
                            <option value="0">Скрыта</option>
                        </select>

                        <br><br>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>

        </div>
    </div>
</main>

<?php include ROOT . '/views/layouts/footer.php'; ?>

