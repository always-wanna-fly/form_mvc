<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container">

    <h2><?php echo $pageData['title']?></h2>
    <h2><?php echo $pageData['error']?></h2>

    <div class="form__wrapper">

        <p><span class="error">Обов'язкові поля</span></p>
        <form id="feedback-form" method="post" enctype="multipart/form-data" novalidate action="">
            <div class="form-row">
                <?php if (!empty($pageData['error'])) :?>
                <p><?php echo $pageData['error']?></p>
                <?php endif;?>
                <!-- Логін користувача -->
                <div class="form-group">
                    <label for="login" class="control-label">Введіть логін</label>
                    <input id="login" type="text" name="login" class="form-control" value="" placeholder="Логін" minlength="2"
                           maxlength="30" required="required">
                    <i class="info">Лише символи латиниці и кирилиці</i>
                    <span class="error">*</span>
                    <div class="invalid-feedback"></div>
                </div>

                <!-- Пароль користувача-->
                <div class="form-group">
                    <label for="password" class="control-label">Пароль</label>
                    <input id="password" type="password" name="password" required="required" class="form-control" value=""
                           placeholder="Пароль">
                    <span class="error">*</span>
                    <div class="invalid-feedback"></div>
                </div>
                <a href="register/" class="text-center new-account">Створити нового користувача</a>
            </div>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</div>

</body>
</html>

