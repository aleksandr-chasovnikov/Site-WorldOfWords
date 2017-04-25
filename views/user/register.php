<?php include ROOT . '/views/layouts/header.php'; ?>

<main class="content"><!-- MAIN ============= -->
 <?php if ($result): ?>
    <p>Вы зарегистрированы!</p>
<?php else: ?>
    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <div class="form">
        <h2>Регистрация на сайте</h2>
        <form action="#" method="post" class="">
            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>" required/>
            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" required/>
            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>" required/>
            <input type="submit" name="submit" class="btn btn-default" value="Отправить" />
        </form>
    </div>
<?php endif; ?>
<br/>
<br/>

</main>


<?php include ROOT . '/views/layouts/footer.php'; ?>