<!-- index.php  -->
<?php

get_header();
$title = get_field('title');
$image_bg = get_field('image');
$button = get_field('text-button');
$button_url = get_field('button-url');
$title_secondBanner = get_field('title-secondBanner');
$p_secondBanner = get_field('paragraph-secondBanner');
$btn_secondBanner = get_field('button-secondBanner');

?>

<!-- first block -->

<div class="bg-img" style="background-image: url('<?php echo $image_bg['url']; ?>')">
    <div class="bg-img-text">
        <h1 class="title title-first-block"><?php echo $title ?></h1>
        <a href=" <?php echo $button_url ?>" class="btn"><?php echo $button ?></a>
    </div>
</div>

<!-- second block  -->
<div class="secondBanner">
    <div class="left-side-secondBanner">
        <h1> <?php echo $title_secondBanner ?></h1>
        <p><?php echo $p_secondBanner ?></p>
        <a href="" class="btn">
            <?php echo $btn_secondBanner ?>
        </a>
    </div>
    <div class="right-side-secondBanner">

    </div>
</div>




<!-- // echo $title;

get_footer(); -->