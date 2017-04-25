<?php include ROOT . '/views/layouts/header_admin.php'; ?>

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
					<li><a href="/admin/product">Управление статьями</a></li>
					<li class="active">Удалить статью</li>
				</ol>
			</div>

			<h4>Удалить статью #<?php echo $id; ?></h4>

			<p>Вы действительно хотите удалить эту статью?</p>
			
			<form method="post">
				<input type="submit" name="submit" value="Удалить">
			</form>

		</div><!--/row-->
	</div><!--/container-->
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>