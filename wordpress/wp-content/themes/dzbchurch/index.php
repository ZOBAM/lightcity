<?php get_header(); ?>

<main>
    <div class="choose-life-container" style="background-image: url(<?php echo get_theme_file_uri('/images/decision_bg.png'); ?>)">
        <div class="">
            <span class="" style="font-family: 'Raleway' ">
                Choose Life
            </span>
            <p class="">
                The most important decision of your life is choosing where your
                eternity will be spent and the most important advise we can ever
                give to you is to secure an eternity with your maker. This is only
                possible through faith in Jesus Christ and therefore we invite you
                to make the decision to make Jesus the Savior and Lord of your Life
                today and now.
            </p>
        </div>
    </div>
    <!-- image gallery -->
    <?php
    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'post_status' => 'inherit',
        'posts_per_page' => 5,
        'orderby' => 'rand'
    );
    $query_images = new WP_Query($args);
    $images = array();
    foreach ($query_images->posts as $image) {
        $images[] = $image->guid;
    }
    ?>
    <section class="image-gallery">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <?php
                for ($i = 0; $i < count($images); $i++) {
                ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active' ?>" aria-current="<?php if ($i == 0) echo 'true'; ?>" aria-label="Slide <?php echo ($i + 1); ?>"></button>
                <? } ?>
                <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
            </div>
            <div class="carousel-inner">
                <!-- use php to get uploaded images from media lib -->
                <?php
                for ($i = 0; $i < count($images); $i++) {
                ?>
                    <div class="carousel-item <?php if ($i == 0) echo 'active' ?>">
                        <img src="<?php echo $images[$i]; ?>" class="d-block w-100" alt="...">
                        <!-- <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div> -->
                    </div>
                <?php } ?>
                <!-- <div class="carousel-item">
                    <img src="<?php echo get_theme_file_uri('/images/image2.png'); ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_theme_file_uri('/images/image3.png'); ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- the word of the Spirit section -->
    <?php
    $wotsposts = get_posts(array(
        'category_name' => 'wots',
        'order' => 'DESC'
    ));
    $wotspost = $wotsposts[0];
    $post_time = strtotime($wotspost->post_date);
    ?>
    <section class="wots " style="background-image: url(<?php echo get_theme_file_uri('/images/wots_bg.png'); ?>)">
        <div class="wots-heading d-flex">
            <h2 class="text-3xl font-medium bg-white px-4 pb-2 rounded-b-xl">
                <span class="">W</span>ords of The Spirit
            </h2>
            <div class="" style="margin-left: -0.5rem; width: 2rem; "></div>
        </div>

        <div class="wots-body ">
            <div class="w-full p-4 bg-gradient-to-b from-gray-500 to-black rounded-b-3xl">
                <div class="shadow-md p-4 bg-white pb-10 text-lg">
                    <h3 class="text-center">
                        <span class="d-inline-block " style="width: 1rem; height: 2rem;background-color: #FBBF24; "></span>
                        <?php echo $wotspost->post_title ?>
                    </h3>
                    <h4 class="wots-ref-verse ">
                        <?php echo $wotspost->post_excerpt ?>
                    </h4>
                    <?php echo $wotspost->post_content ?>
                </div>
                <div class="wots-date ">
                    <span class="border-b-2 border-yellow-400 p-1 text-center text-white font-bold">
                        <?php echo date('M d') . ',<br />' . date('Y') ?>
                    </span>
                </div>
            </div>
        </div>
    </section> <!-- end of wots -->
    <!-- video from our channel section -->
    <section id="video" class="container-fluid">
        <div class="row">
            <h2 class="text-center"><i class="fa-brands fa-youtube" style="color:#FBBF24"></i> Featured Video</h2>
            <section class="col-12 col-md-8 text-bg-light p-2 text-center">
                <div class="m-2 aspect-w-16 aspect-h-9 " style="max-width: 100%; overflow:hidden">
                    <iframe src="https://www.youtube.com/embed/gwITF-ximOI" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen></iframe>
                </div>
            </section>
            <aside class="col-12 col-md-4 px-2 md:px-12 w-full md:w-1/2 bg-gray-100">
                <div class="video-details">
                    <div class="mission-title position-relative">
                        <h3 class="position-relative">
                            <div class="left-box"> </div>
                            ISHIELU
                            <span style="color: #ECB733; padding-left:.5rem; font-size: 2.5rem">2020</span>
                            <div class="right-box"> </div>
                        </h3>
                    </div>
                    <p>
                        “Jesus is the Word of God Himself, Jesus is faith but Jesus needed the oil (The Anointing)” <br>
                        <span style="font-weight: bolder; color:blue">__Evang. Emmanuel Nkpume</span>
                    </p>
                    <div>
                        <p>
                            Ishielu Missionary Outreach was a great one with specific focus on Ministers of the Gospel.
                        </p>
                        <p>
                            Here, the Vision Bearer and President of Light City, <strong>Evang. Emmanuel Nkpume</strong> shares the word of God and ministers to the Ministers.
                        </p>
                    </div>
                </div>
            </aside>
        </div>
    </section>
    <!-- events sections -->
    <section id="events" class="mt-20">
        <h2 class="text-3xl font-medium text-center text-blue-900">
            Events
        </h2>
        <div class="p-4">
            <div class="events-header w-3/4 m-auto">
                <p class="text-center">
                    Don't miss any of our several Spirit filled and power packed programs and events by keeping tabs on this events section.
                </p>
            </div>
            <div class="events-container row text-center">
                <div class="col-sm-3 p-4">
                    Vigil
                    <span class="d-block event-date">14th May, 2021</span>
                </div>
                <div class="col-sm-3 p-4">
                    Vigil
                    <span class="d-block event-date">28th May, 2021</span>
                </div>
                <div class="col-sm-3 p-4">
                    Vigil
                    <span class="d-block event-date">11th June, 2021</span>
                </div>
                <div class="col-sm-3 p-4">
                    Vigil
                    <span class="d-block event-date">25th June, 2021</span>
                </div>
            </div>
            <!-- <div class="flex justify-center items-center mt-4 mb-10">
                <button class="bg-red-600 text-white p-2 shadow-xl rounded-md hover:bg-blue-900 hover:text-white">
                    View All Events
                </button>
            </div> -->
        </div>
    </section>
</main>
<script>
    //get the number of days in month
    function daysInMonth(month, year) {
        return new Date(year, month + 1, 0).getDate();
    }

    function getVigilDays(dateObject) {
        //get the current date
        let d = dateObject;
        //extract date variable
        let year = d.getFullYear();
        let month = d.getMonth();
        let day = d.getDate();

        let numDays = daysInMonth(d.getMonth(), d.getFullYear())
        let str = '';
        let firstFriday = null;
        for (let i = 1; i <= numDays; i++) {
            let newDate = new Date(year, month, i);
            // console.log(newDate.getDay());
            str += '__' + i + '__';
            if (newDate.getDay() == 5) {
                firstFriday = i;
                break;
            }
        }
        let secondFriday = firstFriday + 7;
        let lastFriday = firstFriday < 4 ? firstFriday + 7 * 4 : firstFriday + 7 * 3;
        //in case lastFriday from above calculation is bigger than days in a month.
        if (lastFriday > numDays) {
            lastFriday -= 7;
        }
        let secondFridayDate = new Date(year, month, secondFriday);
        let lastFridayDate = new Date(year, month, lastFriday);
        return [secondFridayDate.toDateString(), lastFridayDate.toDateString()];
    }
    let date1 = new Date();
    let date2 = new Date(date1.getFullYear(), date1.getMonth() + 1);
    let allDays = [...getVigilDays(date1), ...getVigilDays(date2)]

    let eventDates = document.getElementsByClassName('event-date');
    let next = false;
    for (let i = 0; i < eventDates.length; i++) {
        eventDates[i].style.fontWeight = 'bolder';
        eventDates[i].textContent = allDays[i];
        if (!next) {
            let list = eventDates[i].parentElement.classList;
            if (checkDate(allDays[i])) {
                // eventDates[i].style.color = 'blue';
                list.add("current");
                // eventDates[i].parentElement.style.backgroundColor = 'purple';
                next = true;
            }
        }
    }

    function checkDate(date) {
        let now = new Date().getTime();
        let refDate = new Date(date).getTime();
        return refDate > now;
    }
</script>
<?php get_footer();
