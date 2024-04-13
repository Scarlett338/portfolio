<?php
include_once("./components/header.php");
?>
    <!-- main content -->
    <main class="cu-home">

    <?php
    include_once("./components/banner.php");
    ?>

    <div class="full-width-con">
        <div class="section section-primary projects-section">
            <h2 class="text-center text-underline text-primary">My Projects</h2>
        </div><!-- section -->
    </div><!-- full -->

    <div class="full-width-con">
        <div class="section section-secondary single-page-cards-section">
            <h2 class="text-center text-underline text-primary">180 Days Challenge</h2>

            <?php
            $all_pages = [
                //['page_id'=> , 'title'=>'', 'image'=>'', 'url' => ''],
                ['page_id'=> 9, 'title'=>'Demo Store:<br>Pixel Mate', 'image'=>'p9.jpg', 'url' => 'https://react-store-ajn.pages.dev/'],
                ['page_id'=> 8, 'title'=>'Blog Layout', 'image'=>'p8.jpg', 'url' => ''],
                ['page_id'=> 6, 'title'=>'Demo Store:<br>Lucky Shrub', 'image'=>'p6.jpg', 'url' => 'https://scarlett338.github.io/lucky-shrub/index.html'],
                ['page_id'=> 5, 'title'=>'Swimming with jellyfish', 'image'=>'p5.png', 'url' => ''],
                ['page_id'=> 4, 'title'=>'Layout Showcase', 'image'=>'p4.jpg', 'url' => ''],
                ['page_id'=> 2, 'title'=>'What to do if you make your partner angry?', 'image'=>'p2.jpg', 'url' => ''],
            ]
            ?>

            <div class="cards-con sp-cards-con">
                <?php foreach($all_pages as $key => $page):?>
                <div class="single-card sp-single-card">
                    <?php if($page['url']=='') :?>
                    <a href="/single-page.php?page_id=<?=$page['page_id']?>">
                    <?php else:?>
                    <a href="<?=$page['url']?>">
                    <?php endif;?>
                        <div class="border-primary sp-img-con" style="background:url('/assets/images/<?=$page['image']?>') no-repeat center center; background-size: cover" alt="<?=$page['title']?>">
                            <h3 class="word-break-wait text-center"><?=$page['title']?></h3>
                            <div class="overlay"></div>
                        </div>
                    </a>
                </div><!-- end single-card -->
                <?php endforeach;?>
            </div><!-- cards-con -->

        </div><!-- section -->
    </div><!-- full -->


    <div class="full-width-con">
        <div class="section section-primary about-me-section" id="about-me">
            <h2 class="text-center text-underline text-primary">About Me</h2>
        </div><!-- section -->
    </div><!-- full -->

    <div class="full-width-con">
        <div class="section section-secondary contact-me-section" id="contact-me">
            <h2 class="text-center text-underline text-primary">Contact Me</h2>
        </div><!-- section -->
    </div><!-- full -->


    </main>
    <!-- end of main content -->

    <?php
include_once("./components/footer.php");
?>