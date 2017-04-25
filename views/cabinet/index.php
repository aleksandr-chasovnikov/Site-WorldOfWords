<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
					<a href="/admin">Админпанель</a>

            <h3>Кабинет пользователя</h3>
            
            <h4>Привет, <?php echo $user['name'];?>!</h4>
            <a href="/cabinet/edit">Редактировать данные</a>
                
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>