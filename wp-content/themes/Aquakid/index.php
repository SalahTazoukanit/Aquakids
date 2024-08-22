<!-- index.php  -->
<?php

get_header();
$title = get_field('title');
$image_bg = get_field('image');
$button = get_field('text-button');
$button_url = get_field('button-url');
//secondBlock
$title_secondBanner = get_field('title-secondBanner');
$p_secondBanner = get_field('paragraph-secondBanner');
$btn_secondBanner = get_field('button-secondBanner');
$btn_urlSecondBanner = get_field('button-url-secondBanner');
$image_secondBanner = get_field('image-secondBanner');
//thirdBlock
$title_thirdBanner = get_field('title-third-banner');
$paragraphe_thirdBanner = get_field('paragraphe-third-banner');
$image_thirdBanner = get_field('image-third-banner');
$image2_thirdBanner = get_field('image2-third-banner');
$image3_thirdBanner = get_field('image3-third-banner');
$image4_thirdBanner = get_field('image4-third-banner');
$title_service1 = get_field('title_service1');
$title_service2 = get_field('title_service2');
$title_service3 = get_field('title_service3');
$title_service4 = get_field('title_service4');
//fourthBlock
$title_fourthBanner = get_field('title_fourthBanner');
$image_attraction_1 = get_field('image_attraction_1');
$image_attraction_2 = get_field('image_attraction_2');
$image_attraction_3 = get_field('image_attraction_3');
$image_attraction_4 = get_field('image_attraction_4');
$title_attraction_1 = get_field('title_attraction_1');
$title_attraction_2 = get_field('title_attraction_2');
$title_attraction_3 = get_field('title_attraction_3');
$title_attraction_4 = get_field('title_attraction_4');
// fifthBlock
$title_block5 = get_field('title_block_5');
$texte_button_lastblock = get_field('texte_button_lastblock');
$url_button_reserve = get_field('url_button_reserve');
$image_lastblock = get_field('image_lastblock');

?>

<!-- first block -->

<div class="bg-img" style="background-image: url('<?php echo $image_bg['url']; ?>')">
    <div class="bg-img-text">
        <h1 class=" title-first-block"><?php echo $title ?></h1>
        <a href=" <?php echo $button_url ?>" class="btn"><?php echo $button ?></a>
    </div>
</div>


<div class="container-general">

    <!-- second block  -->
    <div class="block">
        <div class="left-side-block secondBlock">
            <h1> <?php echo $title_secondBanner ?></h1>
            <p><?php echo $p_secondBanner ?></p>
            <a href="<?php echo $btn_urlSecondBanner  ?>" class="btn-blue">
                <?php echo $btn_secondBanner ?>
            </a>
        </div>
        <div class="right-side-block">
            <!-- <img class="img-secondBlock" src="<?php echo $image_secondBanner ?>" alt=""> -->
            <?php if (!empty($image_secondBanner)): ?>
                <img src="<?php echo esc_url($image_secondBanner['url']); ?>" alt="<?php echo esc_attr($image_secondBanner['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>

    <!-- third block -->
    <div class="block">
        <div class="left-side-block">
            <h1><?php echo $title_thirdBanner ?></h1>
            <p><?php echo $paragraphe_thirdBanner ?></p>
        </div>
        <div class="right-side-block">
            <div class="all-services">
                <div class="services">
                    <div class="container-service">
                        <?php if (!empty($image_thirdBanner['url'])) : ?>
                            <img class="service-image" src="<?php echo $image_thirdBanner['url'] ?> " alt="">
                        <?php endif ?>
                        <h4><?php echo $title_service1 ?> </h4>
                    </div>
                    <div class="container-service">
                        <?php if (!empty($image2_thirdBanner['url'])) : ?>
                            <img class="service-image" src="<?php echo $image2_thirdBanner['url'] ?> " alt="">
                        <?php endif ?>
                        <h4><?php echo $title_service2 ?> </h4>
                    </div>
                </div>
                <div class="services">
                    <div class="container-service">
                        <?php if (!empty($image3_thirdBanner['url'])) : ?>
                            <img class="service-image" src="<?php echo $image3_thirdBanner['url'] ?> " alt="">
                        <?php endif ?>
                        <h4><?php echo $title_service3 ?> </h4>
                    </div>
                    <div class="container-service">
                        <?php if (!empty($image4_thirdBanner['url'])) : ?>
                            <img class="service-image" src="<?php echo $image4_thirdBanner['url'] ?> " alt="">
                        <?php endif ?>
                        <h4><?php echo $title_service4 ?> </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- fourth block  -->
    <div class="block-attractions">
        <div class="container-block-attractions">
            <h1 style="text-align: center; margin-top :5%;"><?php echo $title_fourthBanner ?></h1>
            <div class="container-attractions">
                <div class="container-attraction">
                    <?php if (!empty($image_attraction_1['url'])) : ?>
                        <div class="container-img"><img class="attraction-img" src="<?php echo $image_attraction_1['url'] ?>" alt=""></div>
                    <?php endif ?>
                    <div class="border-attraction-title">
                        <h3><?php echo $title_attraction_1 ?> </h3>
                    </div>
                </div>
                <div class="container-attraction">
                    <?php if (!empty($image_attraction_2['url'])) : ?>
                        <div class="container-img"><img class="attraction-img" src="<?php echo $image_attraction_2['url'] ?>" alt=""></div>
                    <?php endif ?>
                    <div class="border-attraction-title">
                        <h3><?php echo $title_attraction_2 ?> </h3>
                    </div>
                </div>
                <div class="container-attraction">
                    <?php if (!empty($image_attraction_3['url'])) : ?>
                        <div class="container-img"><img class="attraction-img" src="<?php echo $image_attraction_3['url'] ?>" alt=""></div>
                    <?php endif ?>
                    <div class="border-attraction-title">
                        <h3><?php echo $title_attraction_3 ?> </h3>
                    </div>
                </div>
                <div class="container-attraction">
                    <?php if (!empty($image_attraction_4['url'])) : ?>
                        <div class="container-img"><img class="attraction-img" src="<?php echo $image_attraction_4['url'] ?>" alt=""></div>
                    <?php endif ?>
                    <div class="border-attraction-title">
                        <h3><?php echo $title_attraction_4 ?> </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- // echo $title;

get_footer(); -->