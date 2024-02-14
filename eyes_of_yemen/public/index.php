<?php
require('../includes/header.php');

?>
<!-- button for direct you  to booking  page -->
    <div class="btnscroll">
        <a href="booking.php" id="btnscroll"><img src="../images/plane-btn.webp" alt="planeicon">احجز شحنتك</a>
    </div>

<!-- start navbar -->
<?php
require('../includes/navbar.php');
?>
    <!-- end navigationbar -->

   
    <!-- start section one   (animation image ) -->
    <div class="section_one " >
        
        <div class="child one" id="divone">
            <img src="../images/ship.webp" alt="ship">
            <div class="words_section_one">
            <h1 class="noc">عيون اليمن</h1>
            <p>للشحن الدولي السريع</p>
            </div>
            </div>
    </div>

    <!-- start section two (features) -->
    <div class="section_two ">


        <div class="parent">
       <h1><span class="noc">عيون اليمن ؟ </span> لماذا</h1>
            
            <div class="child one">
                <img src="../images/box.webp" alt="box">

                <h2>سلامه البضائع</h2>
                <p>اتباع اجراءات الامن و السلامة </p>
            </div>

            <div class="child two">
                <img src="../images/price.webp" alt="price">
                <h2>افضل سعر</h2>
                <p>تقديم افضل سعر  مناسب لخدمتك</p>
            </div>
       
           
            <div class="child three ">
                <img src="../images/fast-delivring.webp" alt="fast_deliviring">
                <h2>سهوله الوصول</h2>
                <p>تقديم طرق اسهل و حلول مرنة</p>

            </div>
            <div class="child four">
                <img src="../images/credibilty.webp" alt="credibility">
                <h2>الثقة</h2>
                <p>الثقة في الاتفاق مع عملائنا</p>
            </div>
        </div>
    </div>
    <!-- end section two -->
    <!-- start section three (shipping services) -->
    <div class="section_three " id="services">
        
        <div class="parent">
            <h1> خدمات <span class="noc">عيون اليمن </span></h1>
            <img src="../images/containers-sec_3.webp" alt="containers">
            <!-- services -->
               <div class="boxes">
            <div class="box one hideboxes">
                <h2>الشحن الجوي</h2>
              <p>الشحن الجوي من اكثر الطرق موثوقيه في شحن البضائع وتلتزم الشركه بالمعايير العالميه من اجل سلامه البضائع من حيث التغليف و التخزين ووضع علامات الشحن علي البضائع لضمان عدم حدوث اي ضرر وتدعم الشركه امكانيه الشحن الكلي و الشحن الجزئي</p>
            </div>
            <div class="box two hideboxes">
                <h2>الشحن البحري</h2>
                <p>الخيار الاكثر شعبيه لشحن البضائع علي الصعيد  الدولي و تحرص الشركه علي كافه معايير الامن و السلامه للشحنه من حيث التغليف و التخزين وتقدم اسعار اكثر فعاليه وتدعم الشركه امكانيه الشحن الكلي و الشحن الجزئي</p>
            </div>
            <div class="box three hideboxes">
                <h2>التخزين و التغليف</h2>
                <p>تتبع الشركه معايير السلامه التي تهدف الي الحفاظ علي سلامه الشحنه من حيث استخدام صناديق من الكرتون المقوي و استخدام اشرطه التغليف اللاصق ووضع ملصقات تشمل معلومات العبوه واستخدام مواد تعبئه و تغليف عاليه الجوده</p>
            </div>

        </div> 
        </div>
    </div>
    <!-- end section three  -->
    <!-- start section four  -->
    <div class="section_four " id="aboutcompany">
        <div class="title">
        <h1>للتجاره والشحن الدولي </h1>
        <span class="noc">عيون اليمن </span>
    </div>
        <p>عيون اليمن هي شركه تجاريه تعمل في مجالات عديده منها تجاره الجمله والتوزيع من الشركات الرائده في مجال الشحن الدولي والجوي والبحري والشحن السريع وبفريق عمل متكامل نفخر بتقديم خدمات مميزه لرجال الاعمال و خدمات الاستثمار العقاري (بناء - تشييد - شراء - بيع - تشطيبات) </p>
    </div>
    <!-- end section four -->
    <!-- start section five  (contact Us)-->
    <div class="section_five " id="contact">
        <h1>تواصل بنا</h1>
          <div class="contact_parent">

            <div class="address">
                <img src="../images/address.webp" alt="address">
                <h2>العنوان</h2>
                <p>القاهرة - الجيزة - 432شارع الملك فيصل - محطه العشرين بجوار خبازينو</p>
            </div>

            <div class="email">
                <img src="../images/email.webp" alt="email">
                <h2>البريد الالكتروني</h2>
                <p>info@eyesofyemen-eg.com </p>
            </div>

            <div class="call">
                <img src="../images/call.webp" alt="call">
                <h2>الهاتف</h2>
                <span>02 01070873268</span>
                <span>02 01145952505</span>
            </div>

          </div>
    </div>
    <!-- end section five (contact Us) -->
    <!-- start section six (booking) -->
    <div class="section_six">

        <div class="right_side">
            <h1 class="noc">عيون اليمن</h1>
            <p>شحنتك رايحه بأمان</p>
             <span>02 01070873268</span>
                <span>02 01145952505</span>
            <img src="../images/booking.webp" alt="booking" >
            <img src="../images/logo.webp" alt="logo" id="logo">

        </div>
        <div class="left_side">
            <h1>بادر بحجز شحنتك</h1>
            <a href="booking.php">احجز الآن</a>
        </div>  
    </div>
    <!-- end section six (booking) -->

    <!-- line to disprate between section six and footer -->
    <div class="line"></div>

<!-- start footer -->
<footer>
        <div class="parent">
            <div class="child one">
                <img src="../images/logo.webp" alt="logo">
                <h1 class="noc">عيون اليمن</h1>
            <p>شحنتك رايحه بأمان</p>
            </div>

            <div class="child two">
                <h1>تواصل معنا</h1>
                <div class="contact_1">
                    <img src="../images/call.webp" alt="call">
                    <span>02 01070873268</span>
                </div>
                <div class="contact_2">
                    <img src="../images/call.webp" alt="call">
                <span>02 01145952505</span>
                    </div>
                    <div class="address">
                <img src="../images/email.webp" alt="address">
                    <p>info@eyesofyemen-eg.com</p>
                </div>

        <div class="social_icon">
                <a href="https://www.facebook.com/Euonalyemen8" target="_blank"><img src="../images/facebook.webp" alt="facebook"></a> 
                    <a href="https://www.instagram.com/eyun_alyemen/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><img src="../images/instagram.webp" alt="instagram"></a>
                </div>
            </div>

            <div class="child three">
                <h1>ساعات العمل</h1>
                <h3>أيام العمل</h3>
                <div class="working">
                    <p>من السبت الي الخميس<br>
                من 11 صباحا حتى 7 مساءا</p>
                <img src="../images/work.webp" alt="work">
                </div>
                <h3>الاجازات</h3>
                <div class="vaction">
                    <p>الجمعه</p>
                    <img src="../images/vaction.webp" alt="vaction">
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <script src="../js/main.js"></script>
    
</body>
</html>
