<div class="project-folders-menu">
    <ul class="project-folders-v">
        <li class="project-folders-v-active"><a href="#">Авторизация</a></li>
        <li><a href="#">Регистрация</a></li>
        <li><a href="#">Забыли пароль?</a></li>
    </ul>
    <div class="clearfix"></div>
</div>

<div class="index-auth">
    <form action="/?login=yes" method="POST">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td class="iat">
                    <label for="login_id">Ваш e-mail:</label>
                    <input id="login_id" size="30" name="login" value="<?= (isset($_POST['login']) && !empty($_POST['login'])) ? htmlspecialchars($_POST['login']) : '' ?>">
                </td>
            </tr>
            <tr>
                <td class="iat">
                    <label for="password_id">Ваш пароль:</label>
                    <input id="password_id" size="30" name="password" type="password" value="<?= (isset($_POST['password']) && !empty($_POST['password'])) ? htmlspecialchars($_POST['password']) : '' ?>">
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="auth" value="Войти"></td>
            </tr>
        </table>
    </form>
</div>