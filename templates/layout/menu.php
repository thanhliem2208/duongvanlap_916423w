<div class="w-menu">
    <div class="menu">
        <div class="wrap-content d-flex flex-wrap justify-content-between align-items-center">
            <div class="logo">
                <a class="logo-header" href="">
                    <img class="" onerror="this.src='<?= THUMBS ?>/209x38x1/assets/images/noimage.png';" src="<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" alt="logo" title="logo" />
                </a>
            </div>
            <ul class="d-flex align-items-center justify-content-between">
                <li><a class="<?php if ($com == '' || $com == 'index') echo 'active'; ?> transition" href="" title="<?= trangchu ?>"><?= trangchu ?></a></li>
                <li>
                    <a class="has-child <?php if ($com == 'san-pham') echo 'active'; ?> transition" href="san-pham" title="Menu">Menu</a>
                    <?php if (count($splist)) { ?>
                        <ul>
                            <?php foreach ($splist as $klist => $vlist) {
                                $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                <li>
                                    <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                    <?php if (!empty($spcat)) { ?>
                                        <ul>
                                            <?php foreach ($spcat as $kcat => $vcat) { ?>
                                                <li>
                                                    <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
                <li><a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="<?= gioithieu ?>"><?= gioithieu ?></a></li>
                <li>
                    <a class="has-child <?php if ($com == 'he-thong') echo 'active'; ?> transition" href="he-thong" title="Hệ thống">Hệ thống</a>
                </li>
                <li><a class="<?php if ($com == 'lien-he') echo 'active'; ?> transition" href="lien-he" title="<?= lienhe ?>"><?= lienhe ?></a></li>
            </ul>
            <div class="click-khuyenmnain">
                 <a class="text-decoration-none" href="<?=$setting['link']?>"> Khuyến mãi</a>
            </div>
        </div>
    </div>
    <?php include TEMPLATE . LAYOUT . "mmenu.php"; ?>
</div>