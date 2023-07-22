<?php if(count($slider)) { ?>
    <div class="wrap-slide">
        <div class="slide-text">
            <?php foreach($slider as $v) { ?>
                <div class="box-slide">
                    <a class="slideshow-image" href="<?=$v['link']?>" target="_blank" title="<?=$v['name'.$lang]?>">
                        <picture>
                            <source media="(max-width: 500px)" srcset="<?=THUMBS?>/500x200x1/<?=UPLOAD_PHOTO_L.$v['photo']?>" >
                            <img class=" w-100" onerror="this.src='<?=THUMBS?>/1366x650x1/assets/images/noimage.png';" src="<?=THUMBS?>/1366x650x1/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['name'.$lang]?>" title="<?=$v['name'.$lang]?>"/>
                        </picture>
                        <div class="info-slide">
                            <div class="name-slide opacity-0 "><?=$v['name'.$lang]?></div>
                            <div class="desc-slide text-split opacity-0"><?=$v['desc'.$lang]?></div>
                            <div class="content-slide text-split opacity-0"><?=$v['content'.$lang]?></div>
                            <div class="name4-slide text-split opacity-0"><?=$v['name4'.$lang]?></div>
                            <?php if(!empty($v['name5'.$lang])){?>
                            <div class="khung-name5 opacity-0">
                                <p class="hl">hotline</p>
                                <div class="name5-slide text-split ">
                                <?=$v['name5'.$lang]?></div>
                            </div>
                        <?php }?>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="box-info-slide">
                <div class="wrap-content">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="address-slide">
                            <p class="title-slide">Địa Chỉ:</p>
                            <span class="desc-info-slide"><?=$setting['address'.$lang]?></span>
                        </div>
                        <div class="email-slide">
                        <p class="title-slide">Email:</p>
                        <span class="desc-info-slide"><?=$optsetting['email']?></span>
                        </div>
                        <div class="phone-slide">
                        <p class="title-slide">Liên Hệ tư vấn:</p>
                        <span class="desc-info-slide-phone"><?=$func->formatPhone($optsetting['hotline'])?></span>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php } ?>