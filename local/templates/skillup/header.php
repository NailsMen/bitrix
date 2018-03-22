<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>
<link href="<?=SITE_TEMPLATE_PATH?>/common.css" type="text/css" rel="stylesheet" />
<link href="<?=SITE_TEMPLATE_PATH?>/colors.css" type="text/css" rel="stylesheet" />


	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="page-wrapper">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:menu",
            ".default",
            ["ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "top",
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "Y",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => ""
            ]

        );
        ?>
	<header>

        <div id="logo">
            <img src="img-head/photo.jpg" alt="Reach.com" title="Reach.ru">
            <span><a href="index.php" title="Reach.ru">Reach</a></span>
        </div>
        <div id="about">
            <a href="Reit.php">По рейтингу</a>

            <a href="Random.php">Случайно</a>
        </div>
        <div id="auth">
            <a href="/IvanBaykov/Reachhh/signin/signin.php" title="Вход в личный кабинет"><div class="but-auth">Войти</div>
            </a>
            <div id="reg">
                <a href="/IvanBaykov/Reachhh/register/register.php" title="Регистрация личного кабинета">
                    <div class="but-reg"> Регистрация</div></a>


            </div>


    </header>
</body>