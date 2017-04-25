<?php include ROOT . '/views/layouts/header.php'; ?>

<main class="content"><!-- MAIN ============= -->
				<ol class="breadcrumb">
					<li><a href="/admin">Админпанель</a></li>
					<li><a href="/admin/product">Управление записями</a></li>
					<li class="active">Редактировать запись</li>
				</ol>
			
			<h4>Добавить новую запись</h4>
			<br/>

			<?php if (isset($errors) && is_array($errors)): ?>
				<ul>
					<?php foreach ($errors as $error): ?>
						<li> - <?php echo $error; ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

					<form action="#" method="post" enctype="multypart/form-date">

						<p>Слово</p>
						<input type="text" name="name" placeholder="" value="" required>			

						<p>Словари</p>
						<select name="category_id">

							<?php if (is_array($categoriesList)): ?>
								<?php foreach ($categoriesList as $category): ?>

									<option value="<?php echo $category['id']; ?>">

										<?php echo $category['name']; ?>

									</option>

								<?php endforeach; ?>
							<?php endif; ?>

						</select>

						<br><br>

						<p>Описание</p>
						<textarea name="content" required></textarea>

						<br><br>

						<p>Статус</p>
						<select name="status">
							<option value="1" selected="selected">Отображается</option>
							<option value="0">Скрыт</option>
						</select>

						<br><br>

						<input type="submit" name="submit" value="Сохранить" class="btn btn-default">

						<br><br>

					</form>
				</main>

<?php include ROOT . '/views/layouts/footer.php'; ?>