<?php 
require 'inc/header.php';
require 'order.php';
?>
<style>
/* My css */
#countdown{
    text-align:center;
}
#countdown li {
    display: inline-block;
    color:white;
    font-size: 1.5em;
    list-style-type: none;
    padding: 1em;
    text-transform: uppercase;
  }
  
  #countdown li span {
    display: block;
    margin-bottom: 15px;
    color:whitesmoke;
    font-size: 3rem;
  }
input, .arabic-font{
font-family: 'Cairo', sans-serif;
}
.arab-font{	
    font-family: 'Cairo', sans-serif !important;
}
.order-form label {
    color:white;
    float:right;
    margin-bottom: 10px;
    font-weight: 500;
    font-style: 'lato',sans-serif;
}.order-form button{
    width:200px;
    height:50px;
    padding:5px 2px;
    font-family: 'lato',sans-serif;
    font-weight: 700;
    font-size:25px;
    color:white;
    background-color: #1e364e;
    border: 1px solid white;
    border-radius: 5px;
}.order-form button:hover{
    color:#1e364e;
    background-color: white;
    border: 1px solid #1e364e;
}
::placeholder {
    color: #555 !important;
    font-size: 0.9em;
    opacity:0.5;
}.order-form option{
    color: #555 !important;
    font-size: 0.9em;
    opacity:0.5;
}
.alert li {
    color:red;
    font-size:15px;
    font-weight: 400;
    font-family: 'lato',sans-serif;
    list-style: circle;
    display: block;
}.alert{
    background-color: white;
    height:auto;
    width:100%;
}

  
/* End of my css */
</style>
<body data-gr-c-s-loaded="true" dir="rtl">
<div class="main_wrapper">
    <section class="b1">
        <div class="b1-bot">
            <div class="zag">
                    <h2 class="center arabic-font"></h2>
                    <div class="best arabic-font"></div></div>
                    <!-- W3s -->
                <div class="container countdown-container ">
                    <div id="countdown">
                      <ul >
                        <!-- <li style="display:inline;font-size: 13px; line-height: 13px;">
                            <span style="font-size: 43px; line-height: 9px;" id="days"></span>days
                        </li> -->
                        <li >
                            <span class="arabic-font" id="hours"></span>ساعة 
                        </li>
                        <li >
                            <span class="arabic-font" id="minutes"></span>دقيقة
                        </li>
                        <li >
                            <span class="arabic-font" id="seconds"></span>تانية
                        </li>
                      </ul>
                    </div>
                    
                  </div>
                <!-- end w3c -->
                <a class="button-m arab-font" data-ga-on="click" data-ga-settings='{"category":"Order Now","action":"Tap","label":"Second button"}'  href="#checkout" > اشتري الأن</a>
                <p class="products_count arab-font">لا يوجد سوى <span>28</span> قطعة في المخزون</p>
        </div>
    </section>
    <!-- end section 1 -->
        <h2 class="title_blue arab-font">حول المنتج</h2>
    <!-- start section 2 -->
    <section class="">
        <p class="justify arabic-font">خزانة الأحدية الأكثر طلبا فالمغرب، بعد ما العديد من الزبناء قاموا بتجربتها، هناك من أخد التانية، و هناك من أوصى بها لصيدقه أو صديقته، هذه الخزانة لها مزايا عديدة مايجعلها دو جودة عالية، من بينها :</p>
        <ul class="list-group list-group-flush">
        <li class="list-group-item arab-font">✅ هيكل حديدي غير قابل للصدأ Acier inoxydable، مع ثوب سميك و ذو جودة عالية  </li>
        <li class="list-group-item arab-font">✅ سهلة التركيب (نقدم لزبنائنا ڤيديو لطريقة التركيب من الألف الى الياء في حالة وجود صعوبة للتركيب )  </li>
        <li class="list-group-item arab-font">✅ التوصيل المجاني في جميع أنحاء المغرب</li>
        <li class="list-group-item arab-font"></li>
        <li class="list-group-item arab-font"></li>
        </ul>
    </section>
    <section>
        <div class="wi100" >
            <img src="img/b-rev.jpg" alt="detox">
        </div>
    </section>
    <section class="b2">
        <div >
            <div class="zag">
                    <h2 class="center arabic-font"></h2>
                    <div class="best arabic-font"></div></div>
                <div class="price">
                    <div class="old arabic-font"><div>
                    </div>
                    </div>
                    <div class="sale center arab-font">
                    </div>
                    <div class="new arabic-font"><div>
                            
                        </div>
                    </div>
                </div>
                <!-- form end -->
                <section id="checkout" class="container">
                <form class="order-form"  method="POST">
                    <div class="form-group">
                      <label for="inputName">الاسم :</label>
                      <input type="text" class="form-control" id="inputName" name="inputName" placeholder="الاسم" value="<?php if(!empty($_POST['submit'])){echo $nom;} ?>">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">العنوان :</label>
                      <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="العنوان" value="<?php if(!empty($_POST['submit'])){echo $adresse;} ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputPhone">رقم الهاتف :</label>
                        <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="0622334455" value="<?php if(!empty($_POST['submit'])){echo $_POST['inputPhone'];} ?>">
                    </div>
                    <div id="price" class="form-group">
                        <label for="inputSize">عدد الارفف ؟</label>
                        <select v-model="selected" class="form-control" name="size">
                            <option v-for="option in options" v-bind:value="option.value">
                                {{ option.text }}
                            </option>
                        </select>
                        <div style="width:100%;height:auto;border:1px solid white;border-radius:5px;" class="mt-3">
                            <h2 style="font-weight:bold;font-size:20px;font-family:'cairo';" class="text-center mt-2 mb-2"><span style="font-weight:bold;font-size:20px;font-family:'cairo';" class="pr-3 pl-3 mt-5" >الثمن : </span>{{ selected }} </h2>
                        </div>
                    </div>
                    <button type="submit" name = "submit" value = "Submit" class="btn btn-primary">اطلب الآن</button>
                    <?php if(count($erreurs) != 0): ?>
                        <div  class="alert alert-danger mt-3 text-right">
                                <?php require 'erreur.php' ;?> 
                        </div>
                    <?php endif ?>
                    
                    
                  </form>
                  <div class="whatsapp mt-4"><span style="font-family:'cairo';font-size:18px;font-weight:500;color:white;letter-spacing:1px;">للطلب عبر الواتساب :</span><a href="https://wa.me/212642313353" style="font-weight:500;letter-spacing:1.5px;">&nbsp;&nbsp;0642313353&nbsp;&nbsp;</a></div>
                </section>
            <!-- form end -->
            <div style="height:50px;"></div>
        </div>
    </section>
    <script>
    new Vue({
        el: '#price',
        data: {
          selected: 'المرجو اختيار عدد الارفف',
          options: [
            { text: '5 أرفف', value: '199 درهم' },
            { text: '7 أرفف', value: '249 درهم' },
            { text: '9 أرفف', value: '279 درهم' }
          ]
        }
      })
</script>
 <!-- Start Script  -->
        <script type="text/javascript" src="js/TimeCircles.js"></script>
        <script type="text/javascript" src="js/init.js"></script>
        <script type="text/javascript" src="js/countdown.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>


</div>

</body>