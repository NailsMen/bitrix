<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="container">
    <div class="row">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<span class="col-sm"><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></span>
	<?else:?>
		<span class="col-sm"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></span>
	<?endif?>
	
<?endforeach?>

    </div>

</div>
<?endif?>