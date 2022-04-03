<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Fontfaces CSS-->
    <link href="../assests/css/font-face.css" rel="stylesheet" media="all">


    <link rel="stylesheet" type="text/css" href="../assests/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../assests/css/media-query.css" />
    <link href="../assests/css/theme.css" rel="stylesheet" media="all">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS,  scroll    -->

    <script src="../assests/js/jquery-3.6.0.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--scroll  -->


    <title>بروفايل 1</title>
    <style>
        body {
            background-color: #f5f7fa;
        }
        
        .card.map-card .living-coral {
            background-color: #fa7268;
        }
        
        .card.map-card .living-coral-text {
            color: #fa7268;
        }
        
        .card.map-card .table th {
            width: 2rem;
        }
        
        .card.map-card .pt-3-5 {
            padding-top: 1.25rem;
        }
        
        .card.map-card .card-body {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 20%;
            overflow: hidden;
            background-color: transparent;
            -webkit-transition: all 1s;
            -o-transition: all 1s;
            transition: all 1s;
            -webkit-border-radius: 0 !important;
            border-radius: 0 !important;
        }
        
        .card.map-card .card-body.closed {
            top: 100%;
            height: 7.5rem;
            margin-top: -7.5rem;
        }
        
        .card.map-card .map-container {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }
        
        .card.map-card .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
        
        .card.map-card .button .btn-floating {
            margin-top: -1.5rem;
        }
    </style>
</head>

<body>

    <!-- start container nav -->
    <div class="container">
        <nav id="navbar" class="navbar  fixed-top navbar-expand-md navbar-light  navbar-right mt-0 ">
            <!--  navbar-expand-md مهم لعرض مكونات المنيو في الشاشات الكبيرة والمتوسطة-->
            <!--navbar-light مهن لعرض اقونة  البرقر في الشاشات الصغيرة -->
            <!-- bg-light للخلفية الرمادي بدل الديفولت سوداء     / navbar-right اتجاه المنيو-->

            <a class="navbar-brand" href="../index.html">
                <img class="img-responsive" src="../assests/imges/human-resources.png ">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- burger icon only in mobil   -->

            <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link" href="../index.html"> <i class="material-icons float-right  &#xf0c8;" style='background-color: #FCC01A;'></i> الرئيسية
                        </a>
                    </li>
                    <!-- in <svg>  you can change color   fill="currentColor"    fill="#e63916"   currentColor mains baisk color of div -->
                    <li class="nav-item ">
                        <a class="nav-link  active" href="jobs.html"> <i class="material-icons float-right  &#xf0c8;" style='background-color: #FCC01A;'></i> الوظائف
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="our_serveces.html"> <i class="material-icons float-right  &#xf0c8;" style='background-color: #FCC01A;'></i>خدماتنا
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="our_parteners.html"> <i class="material-icons float-right  &#xf0c8;" style='background-color: #FCC01A;'></i> شركاءنا
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about_us.html"> <i class="material-icons float-right  &#xf0c8;" style='background-color: #FCC01A;'></i> من نحن </a>
                    </li>


                    <li class="nav-item ">
                        <a class="nav-link" href="contuct_us.html"><i class='material-icons  float-right  &#xf0c8;' style='background-color: #FCC01A;'></i> تواصل معنا </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="login.html"> <i class="material-icons float-right  &#xf0c8;" style='background-color: #FCC01A;'></i> تسجيل الدخول
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="register.html"> <i class="material-icons float-right  &#xf0c8;" style='background-color: #FCC01A;'></i> انشاء حساب
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../assests/imges/boy.png " alt="mdo " width="32 " height="32 " class="rounded-circle ">
                        </a>
                        <ul class="dropdown-menu bg-light  ">
                            <li><a class="dropdown-item text-dark " href="main-dashboard.html">الصفحة الشخصية</a></li>
                            <li>
                                <a class="dropdown-item text-dark " href="my_cv.html">سيرتي الذاتية</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider ">
                            </li>
                            <li>
                                <!-- تبرمج لدعم لغتين -->
                                <a class=" dropdown-item text-dark " id="Language " ype="submit "> English</a>
                            </li>
                            <li><a class="dropdown-item text-dark" href="../index.html">خروج</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


        </nav>
    </div>
    <!-- / -->
    <br>
    <br>
    <div class="container-fluid">
        <div class="row d-flex">
            <div class=" d-flex">
                <form action="#">
                    <!-- Single Field Item Start  -->
                    <div class="single-field-item keyword">
                        <label for="keyword">البحث بشكل عام </label>
                        <input id="keyword" placeholder="بحث" name="keyword" type="text">
                    </div>
                    <!-- Single Field Item End  -->
                    <!-- Single Field Item Start  -->
                    <div class="single-field-item keyword">
                        <label for="keyword"> البحث بحسب المدينة</label>
                        <input id="keyword" placeholder="المدينة" name="keyword" type="text">
                    </div>
                    <!-- Single Field Item End  -->
                    <!-- Single Field Item Start  -->
                    <div class="single-field-item location">
                        <label for="location"> البحث بحسب اسم الشركة</label>
                        <input id="location" class="input-field input-field-location" placeholder="الشركة" name="location" type="text">
                    </div>
                    <!-- Single Field Item End  -->
                    <div class="submit-btn">
                        <button class="btn" type="submit">البحث</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section class="row d-flex  mx-auto my-5" style="max-width: 23rem;">

        <div class="card map-card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="../assests/imges/job1.svg" class="img-fluid" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>

            <div class="card-body closed px-0">
                <div class="button px-2 mt-3">
                    <a class="btn btn-floating btn-lg living-coral text-white float-end" style="margin-right: .75rem;"><i
              class="fas fa-bicycle"></i></a>
                </div>
                <div class="bg-white px-4 pb-4 pt-3-5">
                    <h5 class="card-title h5 living-coral-text">شركة هائل سعيد انعم</h5>
                    <div class="d-flex justify-content-between living-coral-text">
                        <h6 class="card-subtitle font-weight-light">مطور فلاتر</h6>
                        <h6 class="font-small font-weight-light mt-n1">دوام كامل</h6>
                    </div>
                    <div class="d-flex justify-content-between living-coral-text">
                        <h5 class="card-subtitle font-weight-light">الدولة والمدينة</h5>
                        <h6 class="font-small font-weight-light mt-n1">اليمن - تعز</h6>

                    </div>
                    <hr>
                    <div class="d-flex justify-content-between living-coral-text">
                        <h5 class="card-subtitle font-weight-light">مواصفات المتقدم</h5>
                        <h6 class="font-small font-weight-light mt-n1">مطور محترف و خبرة عامين على الاقل في تطوير التطبيقات</h6>

                    </div>
                    <hr>
                    <div class=" mb-15 d-flex justify-content-between living-coral-text">
                        <div>
                            <img src="../assests/imges/heart-fill.svg" alt="mdo " width="32 " height="32 " class="rounded-circle ">
                            <p class="pb-15">اضافة للمفظلة </p>
                        </div>

                        <div>
                            <img src="../assests/imges/eye-fill.svg " alt="mdo " width="32 " height="32 " class="rounded-circle ">
                            <a href="jops_detaiels.html">
                                <p class="pb-15">المزيد</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </div>
    <div class="container">
        <section class="mx-auto my-5" style="max-width: 23rem;">

            <div class="card map-card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="../assests/imges/job1.svg" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>

                <div class="card-body closed px-0">
                    <div class="button px-2 mt-3">
                        <a class="btn btn-floating btn-lg living-coral text-white float-end" style="margin-right: .75rem;"><i
              class="fas fa-bicycle"></i></a>
                    </div>
                    <div class="bg-white px-4 pb-4 pt-3-5">
                        <h5 class="card-title h5 living-coral-text">شركة هائل سعيد انعم</h5>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h6 class="card-subtitle font-weight-light">مطور فلاتر</h6>
                            <h6 class="font-small font-weight-light mt-n1">دوام كامل</h6>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h5 class="card-subtitle font-weight-light">مواصفات المتقدم</h5>
                            <h6 class="font-small font-weight-light mt-n1">مطور محترف و خبرة عامين على الاقل في تطوير التطبيقات</h6>

                        </div>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h5 class="card-subtitle font-weight-light">الدولة والمدينة</h5>
                            <h6 class="font-small font-weight-light mt-n1">اليمن - تعز</h6>

                        </div>
                        <hr>
                        <div class=" mb-15 d-flex justify-content-between living-coral-text">
                            <div>
                                <img src="../assests/imges/heart-fill.svg" alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">اضافة للمفظلة </p>
                            </div>

                            <div>
                                <img src="../assests/imges/eye-fill.svg " alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">المزيد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <div class="container">
        <section class="mx-auto my-5" style="max-width: 23rem;">

            <div class="card map-card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="../assests/imges/job1.svg" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>

                <div class="card-body closed px-0">
                    <div class="button px-2 mt-3">
                        <a class="btn btn-floating btn-lg living-coral text-white float-end" style="margin-right: .75rem;"><i
              class="fas fa-bicycle"></i></a>
                    </div>
                    <div class="bg-white px-4 pb-4 pt-3-5">
                        <h5 class="card-title h5 living-coral-text">شركة هائل سعيد انعم</h5>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h6 class="card-subtitle font-weight-light">مطور فلاتر</h6>
                            <h6 class="font-small font-weight-light mt-n1">دوام كامل</h6>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h5 class="card-subtitle font-weight-light">مواصفات المتقدم</h5>
                            <h6 class="font-small font-weight-light mt-n1">مطور محترف و خبرة عامين على الاقل في تطوير التطبيقات</h6>

                        </div>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h5 class="card-subtitle font-weight-light">الدولة والمدينة</h5>
                            <h6 class="font-small font-weight-light mt-n1">اليمن - تعز</h6>

                        </div>
                        <hr>
                        <div class=" mb-15 d-flex justify-content-between living-coral-text">
                            <div>
                                <img src="../assests/imges/heart-fill.svg" alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">اضافة للمفظلة </p>
                            </div>

                            <div>
                                <img src="../assests/imges/eye-fill.svg " alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">المزيد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>
    <div class="container">
        <section class="mx-auto my-5" style="max-width: 23rem;">

            <div class="card map-card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="../assests/imges/job1.svg" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>

                <div class="card-body closed px-0">
                    <div class="button px-2 mt-3">
                        <a class="btn btn-floating btn-lg living-coral text-white float-end" style="margin-right: .75rem;"><i
              class="fas fa-bicycle"></i></a>
                    </div>
                    <div class="bg-white px-4 pb-4 pt-3-5">
                        <h5 class="card-title h5 living-coral-text">شركة هائل سعيد انعم</h5>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h6 class="card-subtitle font-weight-light">مطور فلاتر</h6>
                            <h6 class="font-small font-weight-light mt-n1">دوام كامل</h6>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h5 class="card-subtitle font-weight-light">مواصفات المتقدم</h5>
                            <h6 class="font-small font-weight-light mt-n1">مطور محترف و خبرة عامين على الاقل في تطوير التطبيقات</h6>

                        </div>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h5 class="card-subtitle font-weight-light">الدولة والمدينة</h5>
                            <h6 class="font-small font-weight-light mt-n1">اليمن - تعز</h6>

                        </div>
                        <hr>
                        <div class=" mb-15 d-flex justify-content-between living-coral-text">
                            <div>
                                <img src="../assests/imges/heart-fill.svg" alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">اضافة للمفظلة </p>
                            </div>

                            <div>
                                <img src="../assests/imges/eye-fill.svg " alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">المزيد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <div class="container">
        <section class="mx-auto my-5" style="max-width: 23rem;">

            <div class="card map-card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="../assests/imges/job1.svg" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>

                <div class="card-body closed px-0">
                    <div class="button px-2 mt-3">
                        <a class="btn btn-floating btn-lg living-coral text-white float-end" style="margin-right: .75rem;"><i
              class="fas fa-bicycle"></i></a>
                    </div>
                    <div class="bg-white px-4 pb-4 pt-3-5">
                        <h5 class="card-title h5 living-coral-text">شركة هائل سعيد انعم</h5>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h6 class="card-subtitle font-weight-light">مطور فلاتر</h6>
                            <h6 class="font-small font-weight-light mt-n1">دوام كامل</h6>
                        </div>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h5 class="card-subtitle font-weight-light">الدولة والمدينة</h5>
                            <h6 class="font-small font-weight-light mt-n1">اليمن - تعز</h6>

                        </div>
                        <hr>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h5 class="card-subtitle font-weight-light">مواصفات المتقدم</h5>
                            <h6 class="font-small font-weight-light mt-n1">مطور محترف و خبرة عامين على الاقل في تطوير التطبيقات</h6>

                        </div>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h5 class="card-subtitle font-weight-light">الدولة والمدينة</h5>
                            <h6 class="font-small font-weight-light mt-n1">اليمن - تعز</h6>

                        </div>
                        <hr>
                        <div class=" mb-15 d-flex justify-content-between living-coral-text">
                            <div>
                                <img src="../assests/imges/heart-fill.svg" alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">اضافة للمفظلة </p>
                            </div>

                            <div>
                                <img src="../assests/imges/eye-fill.svg " alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">المزيد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <div class="container">
        <section class="mx-auto my-5" style="max-width: 23rem;">

            <div class="card map-card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="../assests/imges/job1.svg" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>

                <div class="card-body closed px-0">
                    <div class="button px-2 mt-3">
                        <a class="btn btn-floating btn-lg living-coral text-white float-end" style="margin-right: .75rem;"><i
              class="fas fa-bicycle"></i></a>
                    </div>
                    <div class="bg-white px-4 pb-4 pt-3-5">
                        <h5 class="card-title h5 living-coral-text">شركة هائل سعيد انعم</h5>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h6 class="card-subtitle font-weight-light">مطور فلاتر</h6>
                            <h6 class="font-small font-weight-light mt-n1">دوام كامل</h6>
                        </div>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h5 class="card-subtitle font-weight-light">الدولة والمدينة</h5>
                            <h6 class="font-small font-weight-light mt-n1">اليمن - تعز</h6>

                        </div>
                        <hr>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h5 class="card-subtitle font-weight-light">مواصفات المتقدم</h5>
                            <h6 class="font-small font-weight-light mt-n1">مطور محترف و خبرة عامين على الاقل في تطوير التطبيقات</h6>

                        </div>
                        <hr>
                        <div class=" mb-15 d-flex justify-content-between living-coral-text">
                            <div>
                                <img src="../assests/imges/heart-fill.svg" alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">اضافة للمفظلة </p>
                            </div>

                            <div>
                                <img src="../assests/imges/eye-fill.svg " alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">المزيد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <div class="container">
        <section class="mx-auto my-5" style="max-width: 23rem;">

            <div class="card map-card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="../assests/imges/job1.svg" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>

                <div class="card-body closed px-0">
                    <div class="button px-2 mt-3">
                        <a class="btn btn-floating btn-lg living-coral text-white float-end" style="margin-right: .75rem;"><i
              class="fas fa-bicycle"></i></a>
                    </div>
                    <div class="bg-white px-4 pb-4 pt-3-5">
                        <h5 class="card-title h5 living-coral-text">شركة هائل سعيد انعم</h5>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h6 class="card-subtitle font-weight-light">مطور فلاتر</h6>
                            <h6 class="font-small font-weight-light mt-n1">دوام كامل</h6>
                        </div>

                        <hr>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h5 class="card-subtitle font-weight-light">مواصفات المتقدم</h5>
                            <h6 class="font-small font-weight-light mt-n1">مطور محترف و خبرة عامين على الاقل في تطوير التطبيقات</h6>

                        </div>
                        <hr>
                        <div class=" mb-15 d-flex justify-content-between living-coral-text">
                            <div>
                                <img src="../assests/imges/heart-fill.svg" alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">اضافة للمفظلة </p>
                            </div>

                            <div>
                                <img src="../assests/imges/eye-fill.svg " alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">المزيد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <div class="container">
        <section class="mx-auto my-5" style="max-width: 23rem;">

            <div class="card map-card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="../assests/imges/job1.svg" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>

                <div class="card-body closed px-0">
                    <div class="button px-2 mt-3">
                        <a class="btn btn-floating btn-lg living-coral text-white float-end" style="margin-right: .75rem;"><i
              class="fas fa-bicycle"></i></a>
                    </div>
                    <div class="bg-white px-4 pb-4 pt-3-5">
                        <h5 class="card-title h5 living-coral-text">شركة هائل سعيد انعم</h5>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h6 class="card-subtitle font-weight-light">مطور فلاتر</h6>
                            <h6 class="font-small font-weight-light mt-n1">دوام كامل</h6>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between living-coral-text">
                            <h5 class="card-subtitle font-weight-light">مواصفات المتقدم</h5>
                            <h6 class="font-small font-weight-light mt-n1">مطور محترف و خبرة عامين على الاقل في تطوير التطبيقات</h6>

                        </div>
                        <hr>
                        <div class=" mb-15 d-flex justify-content-between living-coral-text">
                            <div>
                                <img src="../assests/imges/heart-fill.svg" alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">اضافة للمفظلة </p>
                            </div>

                            <div>
                                <img src="../assests/imges/eye-fill.svg " alt="mdo " width="32 " height="32 " class="rounded-circle ">
                                <p class="pb-15">المزيد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>


    <footer class="container-fluid ">
        <div class="row ">

            <div class=" col-md-4  col-sm-12  ">
                <a href="../index.html"><img class="mb-2 " src="../assests/imges/human-resources.png  " alt=" "></a>
                <small class="d-block mb-3 text-muted ">©2022</small>
            </div>
            <div class=" col-md-4  col-sm-12  ">
                <h5>التواصل الإجتماعي</h5>


                <a href="# "><img src="../assests/imges/facebook.png " class="callUs " alt="facebook " height="20px " width="20px; "></a>
                <a href="# "><img src="../assests/imges/inestgram.png " class="callUs " alt="inestgram " height="10px " width="10px; "></a>
                <a href="# "><img src="../assests/imges/twiter.png " class="callUs " alt="twiter " height="10px " width="10px; "></a>


            </div>
            <div class="col-md-4  col-sm-12 ">

                <h5>انظم الى نشرتنا البريدية</h5>
                <div class="send ">
                    <input type="email " name="email " placeholder="ادخل بريدك الإلكتروني ">
                    <svg class="email-icon " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 24 24 " width="24 " height="24 ">
                                        <path fill="none " d="M0 0h24v24H0z " />
                                        <path
                                            d="M18 8h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h2V7a6 6 0 1 1 12 0v1zm-7 7.732V18h2v-2.268a2 2 0 1 0-2 0zM16 8V7a4 4 0 1 0-8 0v1h8z " />
                                    </svg>
                    <button type="submit " name="submit "> اشتراك</button>



                </div>

            </div>

            <div class="grad ">

            </div>
            <a href="../index.html "> <span class="EnasHR ">EnasHR-Ye</span></a>
    </footer>
    </div>

</body>
<script>
    const card = document.querySelector('.map-card');
    const cardBody = card.querySelector('.card-body')

    card.addEventListener('click', () => {
        cardBody.classList.toggle('closed')
    })
</script>

</html> cardBody.classList.toggle('closed') })
</script>

</html>

</html>