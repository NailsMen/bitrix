<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$oAsset = \Bitrix\Main\Page\Asset::getInstance();
$oAsset->addCss('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="page-wrapper">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <?$APPLICATION->IncludeComponent(
            'bitrix:menu',
            '',
            [
                "ROOT_MENU_TYPE" => "top",
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
    ); ?>
<?$APPLICATION->IncludeComponent(
    'bitrix:search.title',
    '',
    [
        "SHOW_INPUT" => "Y",
        "INPUT_ID" => "title-search-input",
        "CONTAINER_ID" => "title-search",
        "PRICE_CODE" => array("BASE","RETAIL"),
        "PRICE_VAT_INCLUDE" => "Y",
        "PREVIEW_TRUNCATE_LEN" => "150",
        "SHOW_PREVIEW" => "Y",
        "PREVIEW_WIDTH" => "75",
        "PREVIEW_HEIGHT" => "75",
        "CONVERT_CURRENCY" => "Y",
        "CURRENCY_ID" => "RUB",
        "PAGE" => "#SITE_DIR#search/index.php",
        "NUM_CATEGORIES" => "3",
        "TOP_COUNT" => "10",
        "ORDER" => "date",
        "USE_LANGUAGE_GUESS" => "Y",
        "CHECK_DATES" => "Y",
        "SHOW_OTHERS" => "Y",
        "CATEGORY_0_TITLE" => "Новости",
        "CATEGORY_0" => array("iblock_news"),
        "CATEGORY_0_iblock_news" => array("all"),
        "CATEGORY_1_TITLE" => "Форумы",
        "CATEGORY_1" => array("forum"),
        "CATEGORY_1_forum" => array("all"),
        "CATEGORY_2_TITLE" => "Каталоги",
        "CATEGORY_2" => array("iblock_books"),
        "CATEGORY_2_iblock_books" => "all",
        "CATEGORY_OTHERS_TITLE" => "Прочее"
    ]
);

?>
</body>