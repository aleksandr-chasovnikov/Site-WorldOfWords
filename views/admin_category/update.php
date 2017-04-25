<?php include ROOT . '/views/layouts/header.php'; ?>

<main class="content"><!-- MAIN ============= -->

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/category">Управление словарями</a></li>
                    <li class="active">Редактировать словарь</li>
                </ol>
            </div>


            <h4>Редактировать словарь "<?php echo $category['name']; ?>"</h4>

            <br/>

                    <form action="#" method="post">

                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $category['name']; ?>">

                        <p>Порядковый номер</p>
                        <input type="text" name="sort_order" placeholder="" value="<?php echo $category['sort_order']; ?>">
                        
                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>Скрыта</option>
                        </select>

                        <br><br>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>

 </main>

<?php include ROOT . '/views/layouts/footer.php'; ?>

