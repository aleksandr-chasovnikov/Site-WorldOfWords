<?php include ROOT . '/views/layouts/header.php' ?>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Каталог</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->

						<?php foreach ($categories as $categoryItem): ?>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="/category/<?php echo $categoryItem['id']; ?>">
											<?php echo $categoryItem['name']; ?>											
										</a>
									</h4>
								</div>
							</div>

						<?php endforeach; ?>
							
						</div><!--/category-products-->
					</div>
				</div>
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="/template/images/product-details/1.jpg" alt="" />
								<h3>ZOOM</h3>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />

								<h2><?php echo $product['name'] ?></h2>
								
								<a href=""><img src="/template/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
						<div class="row">
							<div class="col-sm-12">
								<p><?php echo $product['content']; ?></p>
							</div>
						</div>

					</div><!--/product-details-->
					
				</div><!--padding-right-->
			</div>
		</div>
	</section>
	
<?php include ROOT . '/views/layouts/footer.php' ?>