<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php'; // файлы данных подключаются в хедере

/*
Флаг отображения авторизации. Ввел из-за 3 возможных состояний:
-1 - ошибка, неправильная логин/пароль
 0 - данные еще не вводились
 1 - авторизация успешна
*/
$success = 0;

// вариант с проверкой логинов и паролей из внешних файлов
// проверяем в том случае, когда форма видна
if (isset($_GET['login']) && $_GET['login'] == 'yes'
    && !empty($_POST) && isset($_POST['auth'])) {
    $success = -1; // если POST не пустой, как минимум, есть неправильные логин и пароль
        
    // проверяем логин - FALSE или индекс в массиве
    $isTrueLogin = array_search(htmlspecialchars($_POST['login']), $logins);
    // проверяем пароль - FALSE или индекс в массиве
    $isTruePassword = array_search(htmlspecialchars($_POST['password']), $passwords);

    // если оба не FALSE и индексы равны, то это верная пара логин/пароль
    if ($isTrueLogin !== false && $isTruePassword !== false && $isTrueLogin == $isTruePassword) {
        $success = 1; // если логин и пароль правильные
    }
}
?>


<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td class="left-collum-index">
            <h1>Возможности проекта —</h1>
            <p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
        </td>

        <td class="right-collum-index">
            <?php
            if (isset($_GET['login']) && $_GET['login'] == 'yes') {
                if ($success > 0) {
                    include $_SERVER['DOCUMENT_ROOT'] . '/include/success.php';
                } else {
                    if ($success < 0) {
                        include $_SERVER['DOCUMENT_ROOT'] . '/include/wrong_login.php';
                    }
                    include $_SERVER['DOCUMENT_ROOT'] . '/template/authform.php';
                }
            }
            ?>
        </td>
    </tr>
</table>

<div class="clearfix">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/template/main_menu_bottom.php'; ?>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'; ?>
