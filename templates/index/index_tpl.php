<?php if (count($brand)) { ?>
    <div class="wrap-brand">
        <div class="wrap-content padding-top-bottom">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="5:10" data-md-items="5:10" data-lg-items="6:10" data-xlg-items="7:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-brand">
                <?php foreach ($brand as $v) { ?>
                    <div>
                        <a class="brand text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/150x150x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/150x150x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="control-brand control-owl transition"></div>
        </div>
    </div>
<?php } ?>
<div class="banner-quangcao">
    <a class="text-decoration-none" href="<?= $BannerQC['link'] ?>" title="<?= $setting['name' . $lang] ?>" target="_blank">
        <picture>
            <source media="(max-width: 500px)" srcset="<?= THUMBS ?>/500x125x1/<?= UPLOAD_PHOTO_L . $BannerQC['photo'] ?>">
            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/1366x300x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/1366x300x1/<?= UPLOAD_PHOTO_L . $BannerQC['photo'] ?>" alt="<?= $setting['name' . $lang] ?>" title="<?= $setting['name' . $lang] ?>" />
        </picture>
    </a>
</div>

<?php if (count($quangcao)) { ?>
    <div class="wrap-content padding-top-bottom">
        <div class="owl-quangcao">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="2:10" data-md-items="2:10" data-lg-items="2:10" data-xlg-items="2:20" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                <?php foreach ($quangcao as $v) { ?>
                    <div class="box-quangcao">
                        <a class="d-block" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/590x220x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/590x220x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (count($splistnb)) { ?>
    <div class="w-pronb">
        <div class="wrap-content padding-top-bottom">
            <div class="title-main"><span>Sản phẩm nổi bật</span></div>
            <div class=" d-flex align-items-center justify-content-center flex-wrap ">
                <div class="dm-noibat d-flex flex-wrap align-items-center justify-content-center">
                    <div class="cats-bar">
                        <div class="cats-bar-icon active">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="cats-owl list-hot">
                        <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="2:10" data-md-items="3:10" data-lg-items="4:10" data-xlg-items="4:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                            <a class="text-decoration-none" data-id="0" data-tenkhongdau="san-pham">Tất cả</a>
                            <?php foreach ($splistnb as $v) { ?>
                                <a class="text-decoration-none" data-id="<?= $v['id'] ?>" data-tenkhongdau="<?= $v[$sluglang] ?>"><?= $v['name' . $lang] ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load_ajax_product"></div>
        </div>
    </div>
<?php } ?>

<?php if (count($pronb)) { ?>
    <div class="wrap-content padding-top-bottom">
        <div class="title-main"><span>Sản phẩm nổi bật</span></div>
        <div class="owl-pronb">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="2:10" data-md-items="3:10" data-lg-items="3:10" data-xlg-items="4:20" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-pronb">
                <?php foreach ($pronb as $k => $v) { ?>
                    <div class="box-product">
                        <div class="pic-product">
                            <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100 secondary" onerror="this.src='<?= THUMBS ?>/285x285x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/285x285x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                <img class="lazy w-100 secondary-image" onerror="this.src='<?= THUMBS ?>/285x285x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/285x285x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                            <div class="product-tool d-flex align-items-stretch justify-content-between transition mb-0">
                                <a class="product-detail-view text-decoration-none text-hover-main transition" href="<?= $v[$sluglang] ?>" title="Xem chi tiêt">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                    <span>Chi tiêt</span>
                                </a>
                                <a class="product-quick-view text-decoration-none text-hover-main transition" data-slug="<?= $v[$sluglang] ?>" title="Xem nhanh">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="12" cy="12" r="2" />
                                        <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                    </svg>
                                    <span>Xem nhanh</span>
                                </a>
                            </div>
                        </div>
                        <h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                        <p class="price-product">
                            <?php if ($v['discount']) { ?>
                                <span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
                                <span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
                                <span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
                            <?php } else { ?>
                                <span class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                            <?php } ?>
                        </p>
                        <p class="cart-product d-flex flex-wrap justify-content-between">
                            <span class="cart-add addcart transition" data-id="<?= $v['id'] ?>" data-action="addnow"><?= themvaogiohang ?></span>
                            <span class="cart-buy addcart transition" data-id="<?= $v['id'] ?>" data-action="buynow"><?= muangay ?></span>
                        </p>
                    </div>
                <?php } ?>
            </div>
            <div class="control-pronb control-owl transition"></div>
        </div>

    </div>
<?php } ?>
<?php if (count($pronb)) { ?>
    <div class="wrap-product wrap-content">
        <div class="title-main"><span>Sản phẩm nổi bật</span></div>
        <div class="paging-product"></div>
    </div>
<?php } ?>

<?php if (count($splistnb)) {
    foreach ($splistnb as $vlist) { ?>
        <div class="wrap-product wrap-content">
            <div class="title-main"><span><?= $vlist['name' . $lang] ?></span></div>
            <div class="paging-product-category paging-product-category-<?= $vlist['id'] ?>" data-cat="<?= $vlist['id'] ?>"></div>
        </div>
<?php }
} ?>

<?php if (count($newsnb) || count($videonb)) { ?>
    <div class="wrap-intro wrap-content d-flex flex-wrap align-items-start justify-content-between">
        <div class="left-intro">
            <p class="title-intro"><span><?= tintucnoibat ?></span></p>
            <div class="flex_ttnb">
                <div class="newshome-intro">
                    <a class="pic-newshome-best scale-img newshome-best" href="<?= $newsnb[0][$sluglang] ?>" title="<?= $newsnb[0]['name' . $lang] ?>">
                        <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/350x250x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/350x250x1/<?= UPLOAD_NEWS_L . $newsnb[0]['photo'] ?>" alt="<?= $newsnb[0]['name' . $lang] ?>" title="<?= $newsnb[0]['name' . $lang] ?>" />
                    </a>
                    <h3>
                        <a class="text-decoration-none name-newshome text-split" href="<?= $newsnb[0][$sluglang] ?>" title="<?= $newsnb[0]['name' . $lang] ?>"><?= $newsnb[0]['name' . $lang] ?></a>
                    </h3>
                    <p class="time-newshome"><?= date("d/m/Y", $newsnb[0]['date_created']) ?></p>
                    <p class="desc-newshome text-split"><?= $newsnb[0]['desc' . $lang] ?></p>
                    <a class="view-newshome text-decoration-none hover_xemthem" href="<?= $newsnb[0][$sluglang] ?>" title="<?= $newsnb[0]['name' . $lang] ?>"><?= xemthem ?></a>
                </div>
                <div class="newshome-scroll">
                    <div class="slick-v-3">
                        <?php foreach ($newsnb as $k => $v) { ?>
                            <div>
                                <div class="news-slick">
                                    <a class="img scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                        <img onerror="this.src='<?= THUMBS ?>/150x120x1/assets/images/noimage.png';" src="<?= WATERMARK ?>/news/150x120x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                    </a>
                                    <div class="info">
                                        <h3>
                                            <a class="name-newshome text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                                        </h3>
                                        <p class="desc-newshome desc-home-cl text-split"><?= $v['desc' . $lang] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="right-intro">
            <p class="title-intro"><span><?= videoclip ?></span></p>
            <div class="videohome-intro">
                <?php foreach ($videonb as $k => $v) { ?>
                    <a class="item-video1 pic-video scale-img text-decoration-none" data-fancybox="video" data-src="<?= $v['link_video'] ?>" title="<?= $v['name' . $lang] ?>">
                        <img onerror="this.src='<?= THUMBS ?>/480x360x2/assets/images/noimage.png';" src="https://img.youtube.com/vi/<?= $func->getYoutube($v['link_video']) ?>/0.jpg" alt="<?= $v['name' . $lang] ?>" />
                    </a>
                <?php break;
                } ?>
                <div class="div_hiden">
                    <div class="owl-page owl-carousel owl-theme owl-videorun" data-xsm-items="3:10" data-sm-items="3:10" data-md-items="3:10" data-lg-items="3:10" data-xlg-items="3:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                        <?php foreach ($videonb as $k => $v) { ?>
                            <div>
                                <a class="item-video2 pic-video-2 scale-img text-decoration-none" data-fancybox="video" data-src="<?= $v['link_video'] ?>" title="<?= $v['name' . $lang] ?>">
                                    <img onerror="this.src='<?= THUMBS ?>/480x360x2/assets/images/noimage.png';" src="https://img.youtube.com/vi/<?= $func->getYoutube($v['link_video']) ?>/0.jpg" alt="<?= $v['name' . $lang] ?>" />
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?php //echo $addons->set('video-fotorama', 'video-fotorama', 4);
                ?>
                <?php echo $addons->set('video-select', 'video-select', 4); 
                ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (count($newsnb)) { ?>
    <div class="wrap-newsnb padding-top-bottom">
        <div class="wrap-content">
            <p class="title-main"><span><?= tintucnoibat ?></span></p>
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="2:10" data-md-items="3:10" data-lg-items="3:10" data-xlg-items="4:20" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                <?php foreach ($newsnb as $k => $v) { ?>
                    <div class="item-newsnb">
                        <div class="pic-newsnb itemhover ">
                            <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x200x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/news/285x200x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                            <span class="item-top"></span>
                            <span class="item-right"></span>
                            <span class="item-bot"></span>
                            <span class="item-left"></span>
                        </div>
                        <div class="info-newsnb">
                            <h3 class="mb-0">
                                <a class="name-newsnb text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                            </h3>
                            <p class="time-newshome"><?= ngaydang ?>: <?= date("d/m/Y", $v['date_created']) ?></p>
                            <p class="desc-newsnb text-split"><?= $v['desc' . $lang] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (count($partner)) { ?>
    <div class="wrap-partner pad-bottom">
        <div class="wrap-content">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="3:10" data-sm-items="5:10" data-md-items="5:10" data-lg-items="6:10" data-xlg-items="7:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-partner">
                <?php foreach ($partner as $v) { ?>
                    <div>
                        <a class="partner" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/150x120x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/150x120x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="control-partner control-owl transition"></div>
        </div>
    </div>
<?php } ?>