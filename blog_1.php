<?php include 'code.php' ?>
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GM Turizm Dergisi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


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

        <section class="single-post-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 post-content" data-aos="fade-up">

                        <div class="single-post">
                        <?php $bPagename=array_filter($activePage->pagename, array(new FilterPagesToLangCode($langURL), 'langFindBlog')); 
                                $bPagename = array_values($bPagename);
                                ?>
                            <div class="post-meta"><span class="date"><?=$activePage->category?></span> <span class="mx-1">&bullet;</span>
                                <span><?php $date=DateTime::createFromFormat('Y/m/d', $activePage->date); echo $date->format('d/m/Y')?></span>
                            </div>
                            <h1 class="mb-2"><?=$bPagename[0]->langpagename?></h1>
                            <?php $bContent=array_filter($activePage->htmlcontent, array(new FilterPagesToLangCode($langURL), 'langFindBlog')); 
                               $bContent=array_values($bContent);?>
                                <?=($bContent[0]->contentListLang) ?>

                            <div class="comment d-flex mb-4 mt-4">
                                <!-- <div class="flex-shrink-0">
                                    <div class="avatar avatar-sm rounded-circle">
                                        <img class="avatar-img" src="<?=$dataHOTEL->website?>/assets/img/person-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div> -->
                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                    <div class="comment-meta d-flex align-items-baseline">
                                     <span>Yazar:&nbsp;</span><h6 class="me-3"><?=$activePage->author?></h6>

                                    </div>
                                    <!-- <div class="comment-body">
                                        <a href="#">haber@gm-center.com</a>
                                    </div> -->
                                </div><!-- End Single Post Content -->

                            </div>
                        </div>

                        <div class="row">
                        <?php $blogPreview=array_filter($dataPAGES, array(new FilterPagesToLangCode('blog'), 'blogPageFilter'));
                            $blogPreview= array_filter($blogPreview,function($item) use ($activePage){
                                return $item->order==((int)$activePage->order)-1;
                            });
                            $blogPreview = reset($blogPreview);
                            if($blogPreview){
                                $PreviewPageContent=array_filter($blogPreview->htmlcontent, array(new FilterPagesToLangCode($langURL), 'langFindBlog'));
                                $PreviewPageContent = reset($PreviewPageContent);
                                preg_match('/<img[^>]+src="([^">]+)"/', $PreviewPageContent->contentListLang, $matches);
                                    if (!empty($matches[1])) {
                                        $firstImageSrc = $matches[1];
                                    } 
                                $PreviewPageName=array_filter($blogPreview->pagename, array(new FilterPagesToLangCode($langURL), 'langFindBlog'));
                                $PreviewPageName = reset($PreviewPageName);
                                $PreviewLink=array_filter($blogPreview->link, array(new FilterPagesToLangCode($langURL), 'langFindBlog'));
                                $PreviewLink = reset($PreviewLink);
                            }
                        ?>

                        <?php $blogNext=array_filter($dataPAGES, array(new FilterPagesToLangCode('blog'), 'blogPageFilter'));
                            $blogNext= array_filter($blogNext,function($item) use ($activePage){
                                return $item->order==((int)$activePage->order)+1;
                            });
                            $blogNext = reset($blogNext);
                            if($blogNext){
                                $nextPageContent=array_filter($blogNext->htmlcontent, array(new FilterPagesToLangCode($langURL), 'langFindBlog'));
                                $nextPageContent = reset($nextPageContent);
                                preg_match('/<img[^>]+src="([^">]+)"/', $nextPageContent->contentListLang, $matches);
                                    if (!empty($matches[1])) {
                                        $firstImageSrcNext = $matches[1];
                                    } 
                                $nextPageName=array_filter($blogNext->pagename, array(new FilterPagesToLangCode($langURL), 'langFindBlog'));
                                $nextPageName = reset($nextPageName);
                                $nextLink=array_filter($blogNext->link, array(new FilterPagesToLangCode($langURL), 'langFindBlog'));
                                $nextLink = reset($nextLink);
                            }
                        ?>
                         <?php  if($blogPreview){ ?>
                            <div class="col-md-6 mt-4" data-aos="fade-up">

                                <a href="<?=$PreviewLink->langlink?>" class="d-flex align-items-center">
                                    <img src="<?=$firstImageSrc?>" alt="<?=$seoData->imagetag?>" class="img-fluid mx-4" width="150">
                                    <div>
                                        <div class="post-meta d-block"><span class="date"><span
                                                    class="bi-arrow-left"></span> Önceki Haber</span></div>
                                        <h5><?=$PreviewPageName->langpagename?></h5>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                            <?php  if($blogNext){ ?>
                            <div class="col-md-6 mt-4" data-aos="fade-up">

                                <a href="<?=$nextLink->langlink?>" class="d-flex align-items-center">
                                    <img src="<?=$firstImageSrcNext?>" alt=""
                                        class="img-fluid mx-4" width="150">
                                    <div>
                                        <div class="post-meta d-block"><span class="date"><span
                                                    class="bi-arrow-right"></span> Sonraki Haber</span></div>
                                        <h5><?=$nextPageName->langpagename?></h5>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <!-- ======= Sidebar ======= -->
                        <div class="aside-block">

                            <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-popular" type="button" role="tab"
                                        aria-controls="pills-popular" aria-selected="true">En Çok Okunanlar</button>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending"
                    aria-selected="false">Trending</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest"
                    type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest</button>
                </li> -->
                            </ul>

                            <div class="tab-content" id="pills-tabContent">

                                <!-- Popular -->
                                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                                    aria-labelledby="pills-popular-tab">
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Turizm</span> <span
                                                class="mx-1">&bullet;</span>
                                            <span>10 Temmuz 2024</span>
                                        </div>
                                        <h2 class="mb-2"><a href="#">Örnek Haber Başlığı</a>
                                        </h2>
                                        <span class="author mb-3 d-block">Yazar Ad Soyad</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Turizm</span> <span
                                                class="mx-1">&bullet;</span>
                                            <span>10 Temmuz 2024</span>
                                        </div>
                                        <h2 class="mb-2"><a href="#">Örnek Haber Başlığı</a></h2>
                                        <span class="author mb-3 d-block">Yazar Ad Soyad</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Turizm</span> <span
                                                class="mx-1">&bullet;</span>
                                            <span>10 Temmuz 2024</span>
                                        </div>
                                        <h2 class="mb-2"><a href="#">Örnek Haber Başlığı</a></h2>
                                        <span class="author mb-3 d-block">Yazar Ad Soyad</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Turizm</span> <span
                                                class="mx-1">&bullet;</span>
                                            <span>10 Temmuz 2024</span>
                                        </div>
                                        <h2 class="mb-2"><a href="#">Örnek Haber Başlığı</a></h2>
                                        <span class="author mb-3 d-block">Yazar Ad Soyad</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Turizm</span> <span
                                                class="mx-1">&bullet;</span>
                                            <span>10 Temmuz 2024</span>
                                        </div>
                                        <h2 class="mb-2"><a href="#">Örnek Haber Başlığı</a></h2>
                                        <span class="author mb-3 d-block">Yazar Ad Soyad</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Turizm</span> <span
                                                class="mx-1">&bullet;</span>
                                            <span>10 Temmuz 2024</span>
                                        </div>
                                        <h2 class="mb-2"><a href="#">Örnek Haber Başlığı</a></h2>
                                        <span class="author mb-3 d-block">Yazar Ad Soyad</span>
                                    </div>
                                </div>

                            </div>
                        </div>

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