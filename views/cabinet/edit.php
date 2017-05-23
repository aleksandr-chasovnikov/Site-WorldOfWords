<?php include ROOT . '/views/layouts/header.php'; ?>

<main class="content"><!-- MAIN ============= -->
                
                <?php if ($result): ?>
                    <p>Данные отредактированы!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                        <h2>Редактирование данных</h2>
                            <br>
                        <form action="#" method="post" class="form">
                            <p>Имя:</p>
                            <br>
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                            <br>
                            
                            <p>Пароль:</p>
                            <br>
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Сохранить" />
                        </form>
                
                <?php endif; ?>
                <br/>
                <br/>
                </main>
   
<?php include ROOT . '/views/layouts/footer.php'; ?>