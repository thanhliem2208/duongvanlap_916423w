<?php
	$linkMan = "index.php?com=product&act=man_item&type=".$type;
	if($act=='add_item') $linkFilter = "index.php?com=product&act=add_item&type=".$type;
	else if($act=='edit_item') $linkFilter = "index.php?com=product&act=edit_item&type=".$type."&id=".$id;
    $linkSave = "index.php?com=product&act=save_item&type=".$type;
?>
<!-- Content Header -->
<section class="content-header text-sm">
    <div class="container-fluid">
        <div class="row">
            <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="index.php" title="Bảng điều khiển">Bảng điều khiển</a></li>
                <li class="breadcrumb-item active">Chi tiết <?=$config['product'][$type]['title_main_item']?></li>
            </ol>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <form class="validation-form" novalidate method="post" action="<?=$linkSave?>" enctype="multipart/form-data">
        <div class="card-footer text-sm sticky-top">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check" disabled><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
            <a class="btn btn-sm bg-gradient-danger" href="<?=$linkMan?>" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
        </div>

        <?=$flash->getMessages('admin')?>
        
        <div class="row">
            <div class="col-xl-8">
                <?php
                if(isset($config['product'][$type]['slug_item']) && $config['product'][$type]['slug_item'] == true)
                {
                    $slugchange = ($act=='edit_item') ? 1 : 0;
                    include TEMPLATE.LAYOUT."slug.php";
                }
                ?>
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Nội dung <?=$config['product'][$type]['title_main_item']?></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <?php $status_array = (!empty($item['status'])) ? explode(',', $item['status']) : array(); ?>
                            <?php if(isset($config['product'][$type]['check_item'])) { foreach($config['product'][$type]['check_item'] as $key => $value) { ?>
                                <div class="form-group d-inline-block mb-2 mr-2">
                                    <label for="<?=$key?>-checkbox" class="d-inline-block align-middle mb-0 mr-2"><?=$value?>:</label>
                                    <div class="custom-control custom-checkbox d-inline-block align-middle">
                                        <input type="checkbox" class="custom-control-input <?=$key?>-checkbox" name="status[<?=$key?>]" id="<?=$key?>-checkbox" <?=(empty($status_array) && empty($item['id']) ? 'checked' : in_array($key, $status_array)) ? 'checked' : ''?> value="<?=$key?>">
                                        <label for="<?=$key?>-checkbox" class="custom-control-label"></label>
                                    </div>
                                </div>
                            <?php } } ?>
                        </div>
                        <div class="form-group">
                            <label for="numb" class="d-inline-block align-middle mb-0 mr-2">Số thứ tự:</label>
                            <input type="number" class="form-control form-control-mini d-inline-block align-middle text-sm" min="0" name="data[numb]" id="numb" placeholder="Số thứ tự" value="<?=isset($item['numb']) ? $item['numb'] : 1?>">
                        </div>
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                                    <?php foreach($config['website']['lang'] as $k => $v) { ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?=($k=='vi')?'active':''?>" id="tabs-lang" data-toggle="pill" href="#tabs-lang-<?=$k?>" role="tab" aria-controls="tabs-lang-<?=$k?>" aria-selected="true"><?=$v?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="card-body card-article">
                                <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                                    <?php foreach($config['website']['lang'] as $k => $v) { ?>
                                        <div class="tab-pane fade show <?=($k=='vi')?'active':''?>" id="tabs-lang-<?=$k?>" role="tabpanel" aria-labelledby="tabs-lang">
                                            <div class="form-group">
                                                <label for="name<?=$k?>">Tiêu đề (<?=$k?>):</label>
                                                <input type="text" class="form-control for-seo text-sm" name="data[name<?=$k?>]" id="name<?=$k?>" placeholder="Tiêu đề (<?=$k?>)" value="<?=(!empty($flash->has('name'.$k))) ? $flash->get('name'.$k) : @$item['name'.$k]?>" required>
                                            </div>
                                            <?php if(isset($config['product'][$type]['desc_item']) && $config['product'][$type]['desc_item'] == true) { ?>
                                                <div class="form-group">
                                                    <label for="desc<?=$k?>">Mô tả (<?=$k?>):</label>
                                                    <textarea class="form-control for-seo text-sm <?=(isset($config['product'][$type]['desc_cke_item']) && $config['product'][$type]['desc_cke_item'] == true)?'form-control-ckeditor':''?>" name="data[desc<?=$k?>]" id="desc<?=$k?>" rows="5" placeholder="Mô tả (<?=$k?>)"><?=htmlspecialchars_decode((!empty($flash->has('desc'.$k))) ? $flash->get('desc'.$k) : @$item['desc'.$k])?></textarea>
                                                </div>
                                            <?php } ?>
                                            <?php if(isset($config['product'][$type]['content_item']) && $config['product'][$type]['content_item'] == true) { ?>
                                                <div class="form-group">
                                                    <label for="content<?=$k?>">Nội dung (<?=$k?>):</label>
                                                    <textarea class="form-control for-seo text-sm <?=(isset($config['product'][$type]['content_cke_item']) && $config['product'][$type]['content_cke_item'] == true)?'form-control-ckeditor':''?>" name="data[content<?=$k?>]" id="content<?=$k?>" rows="5" placeholder="Nội dung (<?=$k?>)"><?=htmlspecialchars_decode((!empty($flash->has('content'.$k))) ? $flash->get('content'.$k) : @$item['content'.$k])?></textarea>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card card-primary card-outline text-sm">
                    <div class="card-header">
                        <h3 class="card-title">Danh mục <?=$config['product'][$type]['title_main_item']?></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group-category row">
                            <div class="form-group col-xl-6 col-sm-4">
                                <label class="d-block" for="id_list">Danh mục cấp 1:</label>
                                <?=$func->getAjaxCategory('product', 'list', $type)?>
                            </div>
                            <div class="form-group col-xl-6 col-sm-4">
                                <label class="d-block" for="id_cat">Danh mục cấp 2:</label>
                                <?=$func->getAjaxCategory('product', 'cat', $type)?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if(isset($config['product'][$type]['images_item']) && $config['product'][$type]['images_item'] == true) { ?>
                    <div class="card card-primary card-outline text-sm">
                        <div class="card-header">
                            <h3 class="card-title">Hình ảnh <?=$config['product'][$type]['title_main_item']?></h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                                /* Photo detail */
                                $photoDetail = array();
                                $photoDetail['upload'] = UPLOAD_PRODUCT_L;
                                $photoDetail['image'] = (!empty($item)) ? $item['photo'] : '';
                                $photoDetail['dimension'] = "Width: ".$config['product'][$type]['width_item']." px - Height: ".$config['product'][$type]['height_item']." px (".$config['product'][$type]['img_type_item'].")";

                                /* Image */
                                include TEMPLATE.LAYOUT."image.php";
                            ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php if(isset($config['product'][$type]['seo_item']) && $config['product'][$type]['seo_item'] == true) { ?>
            <div class="card card-primary card-outline text-sm">
                <div class="card-header">
                    <h3 class="card-title">Nội dung SEO</h3>
                    <a class="btn btn-sm bg-gradient-success d-inline-block text-white float-right create-seo" title="Tạo SEO">Tạo SEO</a>
                </div>
                <div class="card-body">
                    <?php
                        $seoDB = $seo->getOnDB($id,$com,'man_item',$type);
                        include TEMPLATE.LAYOUT."seo.php";
                    ?>
                </div>
            </div>
        <?php } ?>
        <div class="card-footer text-sm">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check" disabled><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
            <a class="btn btn-sm bg-gradient-danger" href="<?=$linkMan?>" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
            <input type="hidden" name="id" value="<?=(isset($item['id']) && $item['id'] > 0) ? $item['id'] : ''?>">
        </div>
    </form>
</section>