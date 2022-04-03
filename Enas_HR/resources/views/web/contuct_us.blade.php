<?php
include "header.blade.php"; ?>



<!-- Container (Contact Section) -->
<section id="contact" class="container-fluid ">

    <div class="row ">
        <div class="col-md-6 col-sm-12 ">
            <img class="mb-4 img-fluid " src="assests/imges/contuct_us.svg " alt=" ">
        </div>
        <div class="col-md-6 col-sm-12 ">

            <h3 class="text-center ">تواصل معنا</h3>
            <p class="text-center "><em>نحن نحب ان تشاركنا اراءك وتتواصل معنا</em></p>

            <div class="row ">

                <div class="col-md-8 ">
                    <div class="row mr-0">

                        <div class="col-sm-6 form-group ">
                            <input class="form-control " id="email " name="email " placeholder="الإيميل " type="email " required>
                        </div>
                        <div class=" col-sm-6 form-group ">
                            <input class="form-control " id="name " name="name " placeholder="الاسم " type="text " required>
                        </div>
                    </div>
                    <textarea class="form-control " id="comments " name="comments " placeholder="التعليق " rows="5 "></textarea>
                    <br>
                    <div class="row ">
                        <div class="  col-md-12  ">
                            <button class=" w-100 btn btn-lg" type="submit">ارسال</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <p><span class="glyphicon glyphicon-map-marker "></span>اليمن \صنعاء</p>
                    <p><span class="glyphicon glyphicon-phone "></span>الرقم : 777777777+967 </p>
                    <p><span class="glyphicon glyphicon-envelope "></span> الإيميل: mail@mail.com </p>
                </div>
            </div>
            <br>

        </div>
    </div>
</section>

<footer class="container-fluid ">
    <div class="row ">

        <div class=" col-md-4  col-sm-12 ">
            <a href="../index.html "><img class="mb-2 " src="assests/imges/human-resources.png " alt=" "></a>
            <small class="d-block mb-3 text-muted ">©2022</small>
        </div>
        <div id="call " class=" col-md-4  col-sm-12  ">
            <h5>التواصل الإجتماعي</h5>


            <a href="# "><img src="assests/imges/facebook.png " class="callUs " alt="facebook " height="20px " width="20px; "></a>
            <a href="# "><img src="assests/imges/inestgram.png " class="callUs " alt="inestgram " height="10px " width="10px; "></a>
            <a href="# "><img src="assests/imges/twiter.png " class="callUs " alt="twiter " height="10px " width="10px; "></a>


        </div>
        <div class="col-md-4  col-sm-12  ">

            <h5>انظم الى نشرتنا البريدية</h5>
            <div class="send ">
                <input type="email " name="email " placeholder="ادخل بريدك الإلكتروني ">
                <svg class="email-icon " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 24 24 " width="24 " height="24 ">
                    <path fill="none " d="M0 0h24v24H0z " />
                    <path d="M18 8h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h2V7a6 6 0 1 1 12 0v1zm-7 7.732V18h2v-2.268a2 2 0 1 0-2 0zM16 8V7a4 4 0 1 0-8 0v1h8z " />
                </svg>
                <button type="submit " name="submit "> اشتراك</button>



            </div>

        </div>

    </div>
    <?php
    include "footer.blade.php"; ?>