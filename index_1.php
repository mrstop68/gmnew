<?php include 'code.php' ?>
<!DOCTYPE html>
<html lang="<?php if(empty($langURL)){echo 'tr';}else{echo $langURL;} ?>">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php if(isset($seoData->title))echo $seoData->title?></title>
    <meta content="" name="description">


    <link href="<?=$dataHOTEL->website?>/assets/img/1/gm-kategori-logo.jpg" rel="icon">
    <link href="<?=$dataHOTEL->website?>/assets/img/1/gm-kategori-logo.jpg" rel="apple-touch-icon">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


    <link href="<?=$dataHOTEL->website?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$dataHOTEL->website?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?=$dataHOTEL->website?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?=$dataHOTEL->website?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?=$dataHOTEL->website?>/assets/vendor/aos/aos.css" rel="stylesheet">




    <link href="<?=$dataHOTEL->website?>/assets/css/variables.css" rel="stylesheet">
    <link href="<?=$dataHOTEL->website?>/assets/css/main.css" rel="stylesheet">



    <?php include 'inc/header.php' ?>

    <main id="main">

        <section>
            <!-- 1. Reklam alanı -->
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12">
                        <!-- <div class="ads-img"><a href="#" target="_blank"><img src="<?=$dataHOTEL->website?>/assets/img/ads/936x50.jpg"></a></div> -->
                        <?php $langFind=array_filter($dataLANG, array(new FilterPagesToLangCode($langURL), 'langFind'));
                        $langFind = array_values($langFind); ?>
                        <?php $today = new DateTime(); $popupInfo=array_filter(($langFind[0]->popup), array(new FilterPagesToLangCode($today,'1'), 'popupSelect'));?>
                            <?php if(!empty($popupInfo)){ ?>
                                <div class="ads-img">
                                        <img src="<?=$imagesLink?>popup/<?=end($popupInfo)->imageName ?>" alt="<?=$seoData->imagetag?>">
                                </div>
                            <?php } ?>
                                    
                    </div>
                </div>
            </div>

           
            <div class="container" data-aos="fade-up">
                <div class="row">
                     <!-- Slider -->
                    <div class="col-12 col-lg-8">
                    <?php $blogPages=array_filter($dataPAGES, array(new FilterPagesToLangCode('blog'), 'blogPageFilter')); 
                        $blogPages= array_slice($blogPages, 0, 5);
                    ?>
                    
                        <div class="swiper bannerSlider" id="bannerSlider">
                            <div class="swiper-wrapper">
                                <?php foreach($blogPages as $blog){ ?>
                                    <?php $bContent=array_filter($blog->htmlcontent, array(new FilterPagesToLangCode($langURL), 'langFindBlog')); 
                                    $bContent = array_values($bContent);
                                    // echo($bContent[0]->contentListLang) ;
                                    preg_match('/<img[^>]+src="([^">]+)"/', $bContent[0]->contentListLang, $matches);
                                    if (!empty($matches[1])) {
                                        $firstImageSrc = $matches[1];
                                    } 
                                    ?>
                                        <div class="swiper-slide">
                                        <?php $bLink=array_filter($blog->link, array(new FilterPagesToLangCode($langURL), 'langFindBlog')); 
                                            $bLink = array_values($bLink);
                                            ?>
                                            <a href="<?=$bLink[0]->langlink?>"><img src="<?=$firstImageSrc?>" alt="<?=$seoData->imagetag?>">
                                                <div class="banner-info">
                                                    <div class="text-spot">
                                                    <?php $bPagename=array_filter($blog->pagename, array(new FilterPagesToLangCode($langURL), 'langFindBlog')); 
                                                    $bPagename = array_values($bPagename);
                                                    ?>
                                                    <h2><?=$bPagename[0]->langpagename?></h2>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                <?php } ?>
                                <!-- <div class="swiper-slide"><img
                                        src="<?=$dataHOTEL->website?>/assets/img/1/ANTALYA-HAVALIMANINDA-6-AYDA-145-MILYON-YOLCU-TRAFIGI.png"
                                        alt="">
                                    <div class="banner-info">
                                        <div class="text-spot">
                                            <h2>Manşet Haber Başlığı</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide"><img src="<?=$dataHOTEL->website?>/assets/img/1/DHMI-DERNEKLERI.png" alt="">
                                    <div class="banner-info">
                                        <div class="text-spot">
                                            <h2>Manşet Haber Başlığı</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide"><img
                                        src="<?=$dataHOTEL->website?>/assets/img/1/EFES-DENEYIM-MUZESI-BASARISINI-EFES-ANTIK-KENTINDE-KUTLADI.png"
                                        alt="">
                                    <div class="banner-info">
                                        <div class="text-spot">
                                            <h2>Manşet Haber Başlığı</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide"><img
                                        src="<?=$dataHOTEL->website?>/assets/img/1/HULL-CITY-SUMMER-TOUR-2024-ICIN-TURKIYEYE-GELIYOR.png" alt="">
                                    <div class="banner-info">
                                        <div class="text-spot">
                                            <h2>Manşet Haber Başlığı</h2>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                            <div class="custom-swiper-button-next">
                                <span class="bi-chevron-right"></span>
                            </div>
                            <div class="custom-swiper-button-prev">
                                <span class="bi-chevron-left"></span>
                            </div>

                            <div class="swiper-pagination bannerSlider"></div>
                        </div>
                    </div>



                    <div class="col-12 col-lg-4">
                        <!-- 2. Reklam alanı -->
                        <?php $popupInfo=array_filter(($langFind[0]->popup), array(new FilterPagesToLangCode($today,'2'), 'popupSelect'));?>
                        <?php if(!empty($popupInfo)){ ?>
                        <div class="ads-img"><img src="<?=$imagesLink?>popup/<?=end($popupInfo)->imageName ?>" alt="<?=$seoData->imagetag?>"></div>
                        <?php } ?>
                        <div class="post-entry-1">
                            <a href="#"><img src="<?=$dataHOTEL->website?>/assets/img/1/GRANADA-585x390.png" alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Güncel</span> <span class="mx-1">&bullet;</span>
                                <span>8 Temmuz 2024</span>
                            </div>
                            <h2><a href="#">Granada Luxury Red Resort Açıldı</a></h2>
                        </div>
                    </div>



                    <!-- 3. reklam alanı -->
                    <div class="container" data-aos="fade-up">
                    <?php $popupInfo=array_filter(($langFind[0]->popup), array(new FilterPagesToLangCode($today,'2'), 'popupSelect'));?>
                    <div class="row">
                            <?php if(!empty($popupInfo[count($popupInfo)-2])){ ?>
                            <div class="col-12 col-md-6">
                                <div class="ads-img mt-4"><img src="<?=$imagesLink?>popup/<?=($popupInfo[count($popupInfo)-2])->imageName ?>" alt="<?=$seoData->imagetag?>"></div>
                            </div>
                            <?php } ?>
                            <?php if(!empty(end($popupInfo))){ ?>
                            <div class="col-12 col-md-6">
                                <div class="ads-img mt-4"><img src="<?=$imagesLink?>popup/<?=end($popupInfo)->imageName ?>" alt="<?=$seoData->imagetag?>"></div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
        </section>



        <section id="posts" class="posts">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="post-entry-1 lg">
                            <a href="#"><img src="<?=$dataHOTEL->website?>/assets/img/1/COSMOS-MOONLIGHTTAN-KABOTAJ-BAYRAMI-MESAJI.png" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Turizm</span> <span class="mx-1">&bullet;</span>
                                <span>9 Temmuz
                                    2024</span>
                            </div>
                            <h2><a href="#">Cosmos Moonlight Kabotaj Bayramı Mesajı</a></h2>
                            <p class="mb-4 d-block text-limit-news-50">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Vero
                                temporibus
                                repudiandae, inventore pariatur numquam cumque possimus exercitationem?</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="<?=$dataHOTEL->website?>/assets/img/person-1.jpg" alt="" class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Yazar Ad Soyad</h3>
                                </div>
                            </div>
                        </div>

                        <div class="post-entry-1 lg">
                            <a href="#"><img src="<?=$dataHOTEL->website?>/assets/img/1/TURIZMDE-KREDI-BORCLARI-ARTIYOR.png" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Turizm</span> <span class="mx-1">&bullet;</span>
                                <span>9 Temmuz
                                    2024</span>
                            </div>
                            <h2><a href="#">Turizmde Kredi Borçları Artıyor!</a></h2>
                            <p class="mb-4 d-block text-limit-news-50">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Vero
                                temporibus
                                repudiandae, inventore pariatur numquam cumque possimus exercitationem?</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="<?=$dataHOTEL->website?>/assets/img/person-1.jpg" alt="" class="img-fluid"></div>
                                <div class="name">
                                    <h3 class="m-0 p-0">Yazar Ad Soyad</h3>
                                </div>
                            </div>
                        </div>
                        <!-- 4. Reklam Alanı -->
                        <?php $popupInfo=array_filter(($langFind[0]->popup), array(new FilterPagesToLangCode($today,'5'), 'popupSelect'));?>
                        <?php if(!empty($popupInfo)){ ?>
                            <div class="ads-img mt-4"><img src="<?=$imagesLink?>popup/<?=end($popupInfo)->imageName ?>" alt="<?=$seoData->imagetag?>"></div>
                        <?php } ?>

                    </div>

                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                    <a href="#"><img src="<?=$dataHOTEL->website?>/assets/img/1/SEYAHAT-VERILERI-585x390.png" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Turizm</span> <span
                                            class="mx-1">&bullet;</span> <span>8
                                            Temmuz 2024</span></div>
                                    <h2><a href="#">Seyahat Verileri</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                        exercitationem magni
                                        voluptates dolore.</p>
                                </div>
                                <div class="post-entry-1">
                                    <a href="#"><img
                                            src="<?=$dataHOTEL->website?>/assets/img/1/EFES-DENEYIM-MUZESI-BASARISINI-EFES-ANTIK-KENTINDE-KUTLADI-585x390.png"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Aktüel</span> <span
                                            class="mx-1">&bullet;</span> <span>8
                                            Temmuz 2024</span></div>
                                    <h2><a href="#">Efes Deneyim Müzesi Başarısını Efes Antik Kendinde Kutladı</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                        exercitationem magni
                                        voluptates dolore.</p>
                                </div>
                                <div class="post-entry-1">
                                    <a href="#"><img src="<?=$dataHOTEL->website?>/assets/img/1/ALKOL-ZAMLARI-DUDAK-UCUKLATIYOR.png" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Aktüel</span> <span
                                            class="mx-1">&bullet;</span> <span>11
                                            Temmuz 2024</span></div>
                                    <h2><a href="#">Alkol Zamları Dudak Uçuklatıyor</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                        exercitationem magni
                                        voluptates dolore.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                    <a href="#"><img
                                            src="<?=$dataHOTEL->website?>/assets/img/1/ANTALYA-HAVALIMANINDA-6-AYDA-145-MILYON-YOLCU-TRAFIGI-585x390.png"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Güncel</span> <span
                                            class="mx-1">&bullet;</span> <span>9
                                            Temmuz 2024</span></div>
                                    <h2><a href="#">Antalya Havalimanında Yolcu Trafiği</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                        exercitationem magni
                                        voluptates dolore.</p>
                                </div>
                                <div class="post-entry-1">
                                    <a href="#"><img src="<?=$dataHOTEL->website?>/assets/img/1/DHMI-DERNEKLERI-585x390.png" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Güncel</span> <span
                                            class="mx-1">&bullet;</span> <span>8
                                            Temmuz 2024</span></div>
                                    <h2><a href="#">DHMI Dernekleri Toplantısı</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                        exercitationem magni
                                        voluptates dolore.</p>
                                </div>
                                <div class="post-entry-1">
                                    <a href="#"><img src="<?=$dataHOTEL->website?>/assets/img/1/AHMET-METIN-GENC-1-585x390.png" alt=""
                                            class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">Güncel</span> <span
                                            class="mx-1">&bullet;</span> <span>10
                                            Temmuz 2024</span></div>
                                    <h2><a href="#">Trabzon Sağlık Turizminin Gözdesi Olacak</a></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat
                                        exercitationem magni
                                        voluptates dolore.</p>
                                </div>
                            </div>


                            <div class="col-lg-4">

                                <div class="trending">
                                    <h3 class="color-red">Son Okunan Haberler</h3>
                                    <ul class="trending-post">
                                        <li>
                                            <a href="#">
                                                <span class="number">1</span>
                                                <h3>Dünya Otel Haritasında Türkiye 12. Sırada!</h3>
                                                <span>5 Temmuz 2024</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="number">2</span>
                                                <h3>Hilton Otelleri’nin Sahibi, Servetinin Yüzde 97’sini Bağışladı</h3>
                                                <span>5 Temmuz 2024</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="number">3</span>
                                                <h3>Dünyanın en büyük 10 özel otel zinciri</h3>
                                                <span>5 Temmuz 2024</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="number">4</span>
                                                <h3>DÜNYA 2015’TE NEDEN ÇEŞME’Yİ KONUŞACAK ?</h3>
                                                <span>5 Temmuz 2024</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="number">5</span>
                                                <h3>Türk Otelciden “Her Şey Dahil Otellerde Alkollü İçki” Açıklaması
                                                </h3>
                                                <span>5 Temmuz 2024</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="number">6</span>
                                                <h3>Antalya Havalimanında Yolcu Trafiği</h3>
                                                <span>5 Temmuz 2024</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <?php $popupInfo=array_filter(($langFind[0]->popup), array(new FilterPagesToLangCode($today,'5'), 'popupSelect'));?>
                                <?php if(!empty($popupInfo)){ ?>
                                <div class="post-entry-1 lg mt-2">
                                    <img src="<?=$imagesLink?>popup/<?=end($popupInfo)->imageName ?>" alt="<?=$seoData->imagetag?>" class="img-fluid">
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-center border-top border-bottom my-4">
                    <div class="custom-pagination">

                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#" class="next"><span class="bi-arrow-right"></span></a>
                    </div>
                </div>
            </div>
            </div>
        </section>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8" data-aos="fade-in">
                        <div class="swiper adsSlider mb-5" id="adsSlider">
                            <?php $popupInfo=array_filter(($langFind[0]->popup), array(new FilterPagesToLangCode($today,'2'), 'popupSelect'));?>
                            <?php if(!empty($popupInfo)){ ?>
                                <div class="swiper-wrapper">
                                    <?php foreach($popupInfo as $item) { ?>
                                    <div class="swiper-slide"><img src="<?=$imagesLink?>popup/<?=($item)->imageName ?>" alt="<?=$seoData->imagetag?>"></div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <div class="custom-swiper-button-next">
                                <span class="bi-chevron-right"></span>
                            </div>
                            <div class="custom-swiper-button-prev">
                                <span class="bi-chevron-left"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4" data-aos="fade-in">

                        <div class="aside-block">
                            <h3 class="aside-title">Gm Talks <img src="<?=$dataHOTEL->website?>/assets/img/1/gm-kategori-logo.jpg" alt=""></h3>
                            <div class="video-post">
                                <a href="https://youtu.be/7TNtLSlkMO4" class="glightbox link-video">
                                    <span class="bi-play-fill"></span>
                                    <img src="https://i.ytimg.com/vi/7TNtLSlkMO4/maxresdefault.jpg" alt=""
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <section>
            <div class="container-md" data-aos="fade-in">
                <div class="ads-img"><a href="#" target="_blank"><img src="<?=$dataHOTEL->website?>/assets/img/1/slider-dergi.png"></a>
                </div>
            </div>
        </section>

    </main>


    <?php include 'inc/footer.php' ?>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <script src="<?=$dataHOTEL->website?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?=$dataHOTEL->website?>/assets/vendor/aos/aos.js"></script>


    <script src="<?=$dataHOTEL->website?>/assets/js/main.js"></script>


    </body>

</html>