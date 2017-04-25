<?php include ROOT . '/views/layouts/header.php'; ?>

<main class="content"><!-- MAIN ============= -->
    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <div class="form">
        <h2>Вход на сайт</h2>
        <form action="#" method="post" class="">
            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" required/>
            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>" required/>
            <input type="submit" name="submit" class="btn btn-default" value="Вход" />
        </form>
    </div>

<br/>
<br/>

</main>


<?php include ROOT . '/views/layouts/footer.php'; ?>