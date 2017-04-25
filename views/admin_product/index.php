<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
	<div class="container">
		<div class="row">

			<br/>

			<div class="breadcrumb">
				<ol class="breadcrumb">
					<li>
						<a href="/">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><a href="/admin">Админпанель</a></li>
					<li class="active">Управление записями</li>
				</ol>
			</div>
			
			<a href="/admin/category">Управление словарями</a>
			<br />
			<br />
			<a href="/admin/product/create"><i class="fa fa-plus"></i> Добавить запись</a>

			<h4>Список записей</h4>

			<br>

			<table class="table-bordered table-striped table">
				<tr>
					<td>id</td>
					<td>Слово или фраза</td>
					<td>Описание</td>
				</tr>
				<?php foreach ($productsList as $product): ?>
				<tr>
					<td><?php echo $product['id']; ?></td>
					<td><?php echo $product['name']; ?></td>
					<td><?php echo $product['content']; ?></td>
					<td><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
					<td><a href="/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div><!--/row-->
	</div><!--/container-->
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>