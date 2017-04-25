<?php include ROOT . '/views/layouts/header.php' ?>

<a href="/" class="list-category">Список словарей</a>
			<table class="table-word">
				<tr>
					<td>id</td>
					<td>Слово</td>
					<td>Описание</td>
				</tr>
				<?php foreach ($categoryProducts as $product): ?>
				<tr>
					<td><?php echo $product['id']; ?></td>
					<td class=""><?php echo $product['name']; ?></td>
					<td class="toggle extremum-slide">
						<?php echo $product['content']; ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
	
<?php include ROOT . '/views/layouts/footer.php' ?>