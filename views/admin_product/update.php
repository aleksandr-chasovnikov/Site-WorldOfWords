
<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
	<div class="container">
		<div class="row">

			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="/admin">Админпанель</a></li>
					<li><a href="/admin/product">Управление статьями</a></li>
					<li class="active">Редактировать статью</li>
				</ol>
			</div>
			<h4>Добавить новую статью</h4>
			<br/>

			<?php if (isset($errors) && is_array($errors)): ?>
				<ul>
					<?php foreach ($errors as $error): ?>
						<li> - <?php echo $error; ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			<div class="col-lg-4">
				<div class="login-form">
					<form action="#" method="post" enctype="multypart/form-date">

						<p>Название</p>
						<input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">			

						<p>Категория</p>
						<select name="category_id">

							<?php if (is_array($categoriesList)): ?>
								<?php foreach ($categoriesList as $category): ?>

                                    <option value="<?php echo $category['id']; ?>"
                                        <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>

								<?php endforeach; ?>
							<?php endif; ?>
							
						</select>
						<br><br>


						<p>Изображение</p>
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>">

						<p>Описание</p>
                        <textarea name="description"><?php echo $product['description']; ?></textarea>

						<br><br>

						<p>Текст</p>
						<textarea name="content"><?php echo $product['content']; ?></textarea>

						<br><br>

						<p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Отображается</option>
                            <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Скрыт</option>
                        </select>

						<br><br>

						<input type="submit" name="submit" value="Сохранить" class="btn btn-default">

						<br><br>

					</form>
				</div>
			</div>
				</div>
			</div>
			
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>