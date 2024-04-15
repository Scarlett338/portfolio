<?php
include_once("./components/header.php");
?>
    <!-- main content -->
    <main class="cu-home">

    <div class="full-width-con">
        <div class="banner-con hero-banner hb1"></div><!-- banner-con -->
        <div class="flex-cc parallax parallax-1">
            <h2 class="t-center">Welcome!<br>Want a professional website?</h2>
        </div><!-- cover-con -->
        <div class="banner-con hero-banner hb2"></div><!-- banner-con -->
        <div class="flex-cc parallax parallax-2">
            <h2 class="t-center">I am your best shot.</h2>
        </div><!-- cover-con -->
        <div class="banner-con hero-banner hb3"></div><!-- banner-con -->
    </div><!-- full -->

    <div class="full-width-con">
        <div class="section section-primary projects-section" id="selected-work">
            <h2 class="t-center t-underline t-primary">Selected Work</h2>
        </div><!-- section -->
    </div><!-- full -->

    <?php
    include_once("./components/banner2.php");
    ?>

    <div class="full-width-con">
        <div class="section section-primary single-page-cards-section" id="side-projects">
            <h2 class="t-center t-underline t-primary">Side Projects</h2>

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
                <div class="rel single-card sp-single-card">
                    <?php if($page['url']=='') :?>
                    <a href="/single-page.php?page_id=<?=$page['page_id']?>">
                    <?php else:?>
                    <a href="<?=$page['url']?>" target="_blank">
                    <?php endif;?>
                        <div class="border-primary sp-img-con" style="background:url('/assets/images/<?=$page['image']?>') no-repeat center center; background-size: cover" alt="<?=$page['title']?>">
                            <h3 class="word-break-wait t-center"><?=$page['title']?></h3>
                            <div class="abs overlay"></div>
                        </div>
                    </a>
                </div><!-- end single-card -->
                <?php endforeach;?>
            </div><!-- cards-con -->

        </div><!-- section -->
    </div><!-- full -->


    <div class="full-width-con">
        <div class="section section-secondary about-me-section" id="about-me">
            <h2 class="t-center t-underline t-primary">About Me</h2>
            <div class="flex-cc about-me-con">
                <div class="flex-cc col-40 padding-s about-me-img ">
                    <img class="border-secondary" src="/assets/images/home-4.jpg"/>
                </div>
                <div class="flex-cc col-50 padding-m about-me-content">
                    <p class="t-primary line-height-l" >
                    I'm a website developer, author, dubbing artist, movie enthusiast and swimming lover who lives in Hong Kong. <br><br> As a member of Generation Y, I am individual with multiple identities and talents. Other than 'freelancer', I would say my fulltime job is loving myself and the people around me, living genuinely, regardless of the changes in my surroundings. <br><br> I love writing -- both human languages and computer's languages. Coding is an effective communication tool that connects thoughts in an unusual way. I love my job as a programmer, as creating beautiful and functional websites is like creating art, connecting with and impressing countless people is my ambition. <br><br> Feel free to contact me! Let me handle the complex aspects of your job.
                    </p>
                </div><!-- content -->
            </div><!-- con -->
            <div class="flex-cc t-primary about-me-quali">
                <div class="padding-s flex-col quali-con">
                    <h3 class="padding-s">Qualifications:</h3>
                    <?php
                    $quali = ['hard' => ['HTML', 'CSS', 'Javascript', 'React', 'PHP', 'mySQL'], 'soft' => ['Teamwork', 'Problem-solving', 'Time management', 'Active listening', 'Creativity', 'Organizational skills'], 'tool' => ['Wordpress','Shopify','Woocommerce']];
                    foreach($quali['hard'] as $key => $quali_each){
                        echo '<p><i class="fa-solid fa-star"></i></i>'.$quali_each.'</p>';
                    } 
                    ?>
                </div>
                <div class="padding-s flex-col quali-con">
                    <h3 class="padding-s">Soft Skills:</h3>
                    <?php
                    foreach($quali['soft'] as $key => $quali_each){
                        echo '<p><i class="fa-solid fa-star"></i></i>'.$quali_each.'</p>';
                    } 
                    ?>
                </div>
                <!-- <div class="padding-s flex-col quali-con">
                    <h3>Tools:</h3>
                    <?php
                    //foreach($quali['tool'] as $key => $quali_each){
                    //  echo '<p><i class="fa-solid fa-star"></i></i>'.$quali_each.'</p>';
                    //} 
                    ?>
                </div> -->
            </div><!-- con -->
        </div><!-- section -->
        
    </div><!-- full -->

    <div class="full-width-con">
        <div class="section section-primary contact-me-section" id="contact-me">
            <h2 class="t-center t-underline t-primary">Contact Me</h2>
            <p class="padding-s t-center contact">
                <a href="https://wa.me/85267330107" target="_blank">Whatsapp: +852-6733-0107</a>
            </p>
            <p class="padding-s t-center contact">
                <a href="mailto:scarlettliu.job@gmail.com" target="_blank">scarlettliu.job@gmail.com</a>
            </p>
        </div><!-- section -->
    </div><!-- full -->


    </main>
    <!-- end of main content -->

    <?php
include_once("./components/footer.php");
?>