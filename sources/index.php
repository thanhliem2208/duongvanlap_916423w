<?php
    if (!defined('SOURCES')) die("Error");
    /* static */
    $banner_seo_home = $d->rawQueryOne("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('banner-seo-home', 'photo_static'));
    $popup = $d->rawQueryOne("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('popup', 'photo_static'));
    $BannerQC = $d->rawQueryOne("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('banner-quangcao', 'photo_static'));
    $gioithieu = $d->rawQueryOne("select name$lang, desc$lang, photo, status from #_static where type = ? limit 0,1", array('gioi-thieu'));

    /* multi */
    $slider = $d->rawQuery("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb asc", array('slide'));
    $brand = $d->rawQuery("select name$lang, slugvi, slugen, id, photo from #_product_brand where type = ? and find_in_set('hienthi',status) order by numb asc", array('san-pham'));
    $pronb = $d->rawQuery("select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by id desc", array('san-pham'));
    $splistnb = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb asc", array('san-pham'));
    $newsnb = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by id desc", array('tin-tuc'));
    $videonb = $d->rawQuery("select id,name$lang,link_video from #_photo where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb asc", array('video'));
    $partner = $d->rawQuery("select name$lang, link, photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb asc", array('doitac'));
    $quangcao = $d->rawQuery("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb asc", array('quang-cao'));

    /* SEO */
    $seoDB = $seo->getOnDB(0, 'setting', 'update', 'setting');
    if (!empty($seoDB['title' . $seolang])) $seo->set('h1', $seoDB['title' . $seolang]);
    if (!empty($seoDB['title' . $seolang])) $seo->set('title', $seoDB['title' . $seolang]);
    if (!empty($seoDB['keywords' . $seolang])) $seo->set('keywords', $seoDB['keywords' . $seolang]);
    if (!empty($seoDB['description' . $seolang])) $seo->set('description', $seoDB['description' . $seolang]);
    $seo->set('url', $func->getPageURL());
    $imgJson = (!empty($banner_seo_home['options'])) ? json_decode($banner_seo_home['options'], true) : null;
    if (empty($imgJson) || ($imgJson['p'] != $banner_seo_home['photo'])) {
        $imgJson = $func->getImgSize($banner_seo_home['photo'], UPLOAD_PHOTO_L . $banner_seo_home['photo']);
        $seo->updateSeoDB(json_encode($imgJson), 'photo', $banner_seo_home['id']);
    }
    if (!empty($imgJson)) {
        $seo->set('photo', $configBase . THUMBS . '/' . $imgJson['w'] . 'x' . $imgJson['h'] . 'x2/' . UPLOAD_PHOTO_L . $banner_seo_home['photo']);
        $seo->set('photo:width', $imgJson['w']);
        $seo->set('photo:height', $imgJson['h']);
        $seo->set('photo:type', $imgJson['m']);
    }
?>