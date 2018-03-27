<?php
$aSize = [
    'width'=>200,
    'height'=>200,
];
foreach ($arResult['ITEMS'] as $aItem) {
    $aPicture = \CFile::ResizeImageGet($aItem['DETAIL_PICTURE'],$aSize,BX_RESIZE_IMAGE_EXACT);
    $arResult['PICTURES'][$aItem['ID']] = $aPicture;
}