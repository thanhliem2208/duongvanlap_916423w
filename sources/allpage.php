<?php
    if(!defined('SOURCES')) die("Error");
    /* static */
    $copyright = $d->rawQueryOne("select name$lang from #_static where type = ? limit 0,1", array('copyright'));
    $favicon = $d->rawQueryOne("select photo from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('favicon','photo_static'));
    $logo = $d->rawQueryOne("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('logo','photo_static'));
    $banner = $d->rawQueryOne("select photo from #_photo where type = ? and act = ? limit 0,1", array('banner','photo_static'));
    $slogan = $d->rawQueryOne("select name$lang from #_static where type = ? limit 0,1", array('slogan'));
    $footer = $d->rawQueryOne("select name$lang, content$lang from #_static where type = ? limit 0,1", array('footer'));

    /* multi */
    
    $social = $d->rawQuery("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb asc", array('social'));

    $splist = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_list where type = ? and find_in_set('hienthi',status) order by numb asc", array('san-pham'));
    $ttlist = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_list where type = ? and find_in_set('hienthi',status) order by numb asc", array('tin-tuc'));

    $tagsProduct = $d->rawQuery("select name$lang, slugvi, slugen, id from #_tags where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'));
    $tagsNews = $d->rawQuery("select name$lang, slugvi, slugen, id from #_tags where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('tin-tuc'));

    $policy = $d->rawQuery("select name$lang, slugvi, slugen, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb asc", array('chinh-sach'));

    /* Get statistic */
    $counter = $statistic->getCounter();
    $online = $statistic->getOnline();

    /* Newsletter */
    if(!empty($_POST['submit-newsletter']))
    {
        $responseCaptcha = $_POST['recaptcha_response_newsletter'];
        $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
        $scoreCaptcha = (!empty($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
        $actionCaptcha = (!empty($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
        $testCaptcha = (!empty($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;
        $dataNewsletter = array();
        $dataNewsletter = (!empty($_POST['dataNewsletter'])) ? $_POST['dataNewsletter'] : null;

        /* Valid data */
        if(empty($dataNewsletter['email']))
        {
            $flash->set('error', 'Email không được trống');
        }

        if(!empty($dataNewsletter['email']) && !$func->isEmail($dataNewsletter['email']))
        {
            $flash->set('error', 'Email không hợp lệ');
        }

        $error = $flash->get('error');

        if(!empty($error))
        {
            $func->transfer($error, $configBase, false);
        }

        /* Save data */
        if(($scoreCaptcha >= 0.5 && $actionCaptcha == 'Newsletter') || $testCaptcha == true)
        {
            foreach($dataNewsletter as $column => $value)
            {
                $data[$column] = htmlspecialchars($value);
            }
            $dataNewsletter['date_created'] = time();
            $dataNewsletter['type'] = 'dangkynhantin';

            if($d->insert('newsletter',$dataNewsletter))
            {
                $func->transfer("Đăng ký nhận tin thành công. Chúng tôi sẽ liên hệ với bạn sớm.", $configBase);
            }
            else
            {
                $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.", $configBase, false);
            }
        }
        else
        {
            $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.", $configBase, false);
        }
    }
?>