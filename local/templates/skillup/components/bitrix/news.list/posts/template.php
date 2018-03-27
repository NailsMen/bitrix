<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="container">
    <div class="row">
        <?foreach ($arResult['ITEMS'] as $aItem):?>
        <div class="col-sm">
            <div>
                <img src="<?= $arResult['PICTURES'][$aItem['ID']]['src'] ?>" />

                <?
                    $iAuthorId = $aItem['DISPLAY_PROPERTIES']['AUTHOR']['VALUE'];
                ?>
                <div>
                    <?= $aItem['DISPLAY_PROPERTIES']['AUTHOR']['LINK_ELEMENT_VALUE'][$iAuthorId]['NAME']; ?>
                </div>
            </div>
        </div>
        <? endforeach; ?>
    </div>
</div>