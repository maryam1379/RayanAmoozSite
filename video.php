<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="maryam shirmohammadi">
    <link rel="shortcut icon" type="image/x-icon" href="http://www.upsara.com/images/n777323_.ico" title="Favicon" />
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <title>فیلم آموزشی | رایان آموز</title>
</head>
<body dir="rtl">
    <style>
    #a1,#a2,#a3,#a4{
        display: none;
        }</style>
    <div class="ghalebasli">

 <header>   
  <!--******************منو تبلت و گوشی****************-->
  <div id="menubar1"> <button onclick="btnmenu()" id="btnmenubar1" class=" fas fa-bars    btnmenu1"></button><button id="btnmenuclose1" style="display: none;" onclick="btnmenuclose()" class=" fas fa-times    btnmenu1"></button></div>
  <div id="boxmenubar1">
      <a class="a-list-menubar1" href="index.php">  <button class="btn-list-menubar1">خانه</button> </a>
      <a class="a-list-menubar1" onclick="btnlistmenu1()"> <button class="btn-list-menubar1"> آموزشHTML</button><button id="baz1"  class=" fas fa-chevron-down btn-list-menubar1"></button><button id="basteh1" style="display: none;"  class=" fas fa-chevron-up btn-list-menubar1"></button> </a>
          <div id="div-list-zirmenu1">
              <a class="a-list-menubar1 btn-list-menubar1" href="moarefihtml.html"> معرفیHTML</a>
              <a class="a-list-menubar1 btn-list-menubar1" href="sakhtar.html">ساختار صفحات HTML </a> 
              <a class="a-list-menubar1 btn-list-menubar1" href="sefatha.html">صفت ها در HTML </a> 
              <a class="a-list-menubar1 btn-list-menubar1" href="ghalebbandi.html"> قالب بندی متن </a> 
              <a class="a-list-menubar1 btn-list-menubar1" href="linkeha.html">لینک ها در HTML </a>
              <a class="a-list-menubar1 btn-list-menubar1" href="image.html"> کاربا تصاویر </a> 
              <a class="a-list-menubar1 btn-list-menubar1" href="listha.html"> لیست ها در HTML </a>
              <a class="a-list-menubar1 btn-list-menubar1" href="table.html"> کار با جداول </a> 
              <a class="a-list-menubar1 btn-list-menubar1" href="form.html"> فرم ها در HTML </a>  
          </div>
      <a class="a-list-menubar1" onclick="btnlistmenu2()">  <button class="btn-list-menubar1"> آموزش CSS</button><button id="baz2"  class=" fas fa-chevron-down btn-list-menubar1"></button><button id="basteh2" style="display: none;"  class=" fas fa-chevron-up btn-list-menubar1"></button> </a>
          <div id="div-list-zirmenu2">
              <a class="a-list-menubar1 btn-list-menubar1" href="moarefiCSS.html">معرفی CSS</a>
               <a class="a-list-menubar1 btn-list-menubar1" href="style.html"> استایل عناصردرCSS</a>
  
          </div>
      <a class="a-list-menubar1" onclick="btnlistmenu3()">  <button class="btn-list-menubar1">آموزش PHP</button><button id="baz3"  class=" fas fa-chevron-down btn-list-menubar1"></button><button id="basteh3" style="display: none;"  class=" fas fa-chevron-up btn-list-menubar1"></button> </a>
          <div id="div-list-zirmenu3">
              <a class="a-list-menubar1 btn-list-menubar1" href="moarefiPHP.html">معرفی PHP</a>
              <a class="a-list-menubar1 btn-list-menubar1" href="amalgar.html">عملگرها </a>
              <a class="a-list-menubar1 btn-list-menubar1" href="arayeh.html">آرایه ها </a>
              <a class="a-list-menubar1 btn-list-menubar1" href="sakhtarcontroli.html">ساختارهای کنترلی</a>
              <a class="a-list-menubar1 btn-list-menubar1" href="tavabe.html">کار با توابع</a>
              <a class="a-list-menubar1 btn-list-menubar1" href="formPHP.html">کار با فرم ها در PHP</a>
              <a class="a-list-menubar1 btn-list-menubar1" href="moarefiDataBase.html">معرفی DataBase</a>     
             </div>
      <a class="a-list-menubar1" href="darbarema.html">  <button class="btn-list-menubar1"> درباره ما</button> </a>
      <a class="a-list-menubar1" href="ertebatbama.php">  <button class="btn-list-menubar1"> ارتباط با ما</button> </a>
  
  
  </div>
      <!--**********************************-->    <div  class="div_header_bac">
        <div class=" btnMember"  >
            <button onclick="myFunction()"  class="fas fa-search  btnsearch"></button>
              <input dir="rtl"  type="text" id="myInput"  placeholder="جستجو... " title="Type in a name">
    </div> 
        <img class="img_logo" src="pic/logo1.png" alt="logo RayanAmooz">
        <!--                 کادر موارد سرچ شده-->
        <div id="myULdiv" >
            <button onclick="myclose()" class="far fa-1x fa-window-close      btn-myUL"> </button>
           <br> <p id="message"> موردی یافت نشد!</p>
        <ul id="myUL">
            <li><a href="moarefihtml.html"> معرفیHTML</a></li>
            <li><a href="moarefihtml.html#a1"> HTMLچیست ؟</a></li>
            <li><a href="moarefihtml.html#a2">مفهوم تگ هاي HTML</a></li>
            <li><a href="moarefihtml.html#a3">نوشتن کدهاي  HTMLبا ویرایشگرهاي متنی</a></li>

            <li><a href="sakhtar.html">ساختار صفحات HTML </a></li>
            <li><a href="sakhtar.html#a1"> ساختار صفحاتHTML</a></li>
            <li><a href="sakhtar.html#a2"> مرحله اول: باز کردن ویرایشگر متنیNotepad   </a></li>
            <li><a href="sakhtar.htmla3">  مرحله دوم: نوشتن کدهايHTML</a></li>
            <li><a href="sakhtar.html#a4"> مرحله سوم: ذخیره صفحه HTML</a></li>
            <li><a href="sakhtar.html#a5">مرحله چهارم: مشاهده صفحه  HTMLدر مرورگر</a></li>
            <li><a href="sakhtar.html#a6">  چگونه سورس کد یک صفحه  HTMLرا مشاهده کنیم؟</a></li>

            <li><a href="sefatha.html">صفت ها در HTML </a> </li>
            <li><a href="sefatha.html#a1"> آشنایی با ویژگی ها یا صفات تگ هاي HTML</a> </li>
           
            <li><a href="ghalebbandi.html"> قالب بندی متن </a> </li>
            <li><a href="ghalebbandi.html#a1"> HTML در(Heading) عناوین</a> </li>
            <li><a href="ghalebbandi.html#a2">پاراگراف  (P)درHTML </a> </li>
            <li><a href="ghalebbandi.html#a3">بدنه (body) در HTML </a> </li>
            <li><a href="ghalebbandi.html#a4"> جداکننده افقی (hr)درHTML</a> </li>
            <li><a href="ghalebbandi.html#a5">  المان یا تگ &#8249;head>درHTML    </a> </li>
            <li><a href="ghalebbandi.html#a6">  المان یا تگ عنوان (title)درHTML </a> </li>
            <li><a href="ghalebbandi.html#a7">   المان یا تگ &#8249;meta>درHTML</a> </li>
            <li><a href="ghalebbandi.html#a8">   المان یا تگ &#8249;style>درHTML  </a> </li>
            <li><a href="ghalebbandi.html#a9">    تگ &#8249;br>شکستن خط درHTML </a></li>
            <li><a href="ghalebbandi.html#a10">  المان یا تگ &#8249;pre>در  (HTML)پیش فرمت شده </a> </li>

            <li><a href="linkeha.html">لینک ها در HTML </a></li>
            <li><a href="linkeha.html#a1"> هایپرلینک ها در HTML  </a></li>
            <li><a href="linkeha.html#a2">   انواع لینک  (link)در html </a></li>
            <li><a href="linkeha.html#a3">   آشنایی با نحو (سینتکس) لینک ها در HTML </a></li>
            <li><a href="linkeha.html#a4">  لینک هاي محلی درHTML  </a></li>
            <li><a href="linkeha.html#a5"> رنگ هاي لینک درHTML  </a></li>
            <li><a href="linkeha.html#a6">  خاصیت  targetدر لینک هايHTML  </a></li>
            <li><a href="linkeha.html#a7">   تصاویر به عنوان لینک درHTML </a></li>
            <li><a href="linkeha.html#a8">    ایجاد یکBookmark  در HTML   </a></li>
           
            <li><a class="a_zirmenu" href="image.html"> کاربا تصاویر </a></li>
            <li><a class="a_zirmenu" href="image.html#a1"> نحوه (سینتکس) استفاده از تصاویر درHTML   </a></li>
            <li><a class="a_zirmenu" href="image.html#a2">  صفت alt </a></li>
            <li><a class="a_zirmenu" href="image.html#a3"> صفحه خوان هايHTML  </a></li>
            <li><a class="a_zirmenu" href="image.html#a4">  اندازه ي تصاویر – طول و عرض </a></li>
            <li><a class="a_zirmenu" href="image.html#a5">   تصاویر در یک فولدر مشخص </a></li>
            <li><a class="a_zirmenu" href="image.html#a6">  تصویر روي سروري دیگر  </a></li>
            <li><a class="a_zirmenu" href="image.html#a7">  تصاویر متحرک  </a></li>

            <li><a href="listha.html"> لیست ها در HTML </a></li>
            <li><a href="listha.html#a1"> لیست هاي ترتیبی و غیر ترتیبی  </a></li>
            <li><a href="listha.html#a2">  لیست غیر ترتیبی درHTML </a></li>
            <li><a href="listha.html#a3">   خاصیت  list-style-typeدر لیست ها  </a></li>
            <li><a href="listha.html#a4"> لیست هاي ترتیبی درHTML  </a></li>
            <li><a href="listha.html#a5">   خاصیت  typeدر لیست هاي ترتیبی   </a></li>
            <li><a href="listha.html#a6">   لیست هاي توضیحی درHTML </a></li>
            <li><a href="listha.html#a7">   لیست ها تودرتو درHTML  </a></li>
            <li><a href="listha.html#a8">     لیست هاي افقی درHTML </a></li>
            
            <li><a href="table.html"> کار با جداول </a> </li>
            <li><a href="table.html#a1"> مثالی از یک جدول درHTML</a> </li>
            <li><a href="table.html#a2">   تعریف یک جدول درHTML  </a></li>
            <li><a href="table.html#a3">      اضافه کردن  borderبه جدول </a> </li>
            <li><a href="table.html#a4">خاصیت border-collapse    جداول   </a> </li>
            <li><a href="table.html#a5">  اضافه کردن  paddingبه سلول هاي جدول  </a> </li>
            <li><a href="table.html#a6">    ترازبندي سرتیتر ها در جداول  </a> </li>
            <li><a href="table.html#a7">    استفاده از  border-spacingدر جداول  </a></li>
            <li><a href="table.html#a8">    استفاده از صفت  colspanدر جداول </a> </li>
            <li><a href="table.html#a9">  استفاده از صفت  rowspanدر جداول  </a> </li>
            <li><a href="table.html#a10">     اضافه کردن  captionبه جدول </a> </li>
            <li><a href="table.html#a11">    یک استایل خاص براي یک جدول   </a> </li>

            <li><a href="form.html"> فرم ها در HTML </a> </li>
            <li><a href="form.html#a1">  نمونه اي از یک فرم   </a> </li>
            <li><a href="form.html#a2">       عنصر &#8249;form> </a> </li>
            <li><a href="form.html#a3">   عنصر &#8249;input>    </a> </li>
            <li><a href="form.html#a4">   ورودي متن(Text input)    </a> </li>
            <li><a href="form.html#a5">       ورودي هاي رادیو باتن (Radio Button)  </a> </li>
            <li><a href="form.html#a7">   صفت Action    </a> </li>
            <li><a href="form.html#a8">  صفت Method   </a> </li>
            <li><a href="form.html#a9">   چه موقع از  GETاستفاده کنیم؟    </a> </li>
            <li><a href="form.html#a10">    چه موقع از  POSTاستفاده کنیم؟   </a> </li>
            <li><a href="form.html#a6">    عنصر  Submitدر فرم    </a> </li>
            <li><a href="form.html#a11">  صفت Name    </a> </li>
            <li><a href="form.html#a12">   گروه بندي فرم ها با استفاده از تگ &#8249;fieldset>   </a> </li>

            <li><a href="moarefiCSS.html">معرفی CSS</a></li>
            <li><a href="moarefiCSS.html#a1">     CSSچیست؟ </a></li>
            <li><a href="moarefiCSS.html#a2">        قواعد نوشتاري زبانCSS   </a></li>
            <li><a href="moarefiCSS.html#a3">  قواعد دستور زبان CSS   </a></li>
            <li><a href="moarefiCSS.html#a4">   id  و  Class  در CSS     </a></li>
            <li><a href="moarefiCSS.html#a5">    اعمال دستورات فقط بر روي یک عنصر واحد توسطid   </a></li>
            <li><a href="moarefiCSS.html#a6">  اعمال دستورات بر روي یک گروه از عناصر توسطClass   </a></li>
            <li><a href="moarefiCSS.html#a7">   ویژگی هايid    </a></li>
            <li><a href="moarefiCSS.html#a8">     ویژگی هايclass  </a></li>
            <li><a href="moarefiCSS.html#a9">  کدهاي  CSSرا کجا بنویسیم؟   </a></li>
            <li><a href="moarefiCSS.html#a10"> External style sheet یا شیوه نامه خارجی</a></li>
            <li><a href="moarefiCSS.html#a11">   Internal Style Sheet یا شیوه نامه داخلی    </a></li>
            <li><a href="moarefiCSS.html#a12">  Inline Styleیا شیوه نامه ي درون خطی   </a></li>
            
            <li><a href="style.html"> استایل عناصردرCSS</a></li>
            <li><a href="style.html#a1">   استایل پس زمینه ها   </a></li>
            <li><a href="style.html#a2">    Background Color  </a></li>
            <li><a href="style.html#a3">  استفاده از تصویر براي پس زمینه  ( background-image)   </a></li>
            <li><a href="style.html#a4">  تکرار تصویر پس زمینه در محور افقی و عمودي ( Background-repeat)   </a></li>
            <li><a href="style.html#a5">    تعیین موقعیت مکانی تصویر در پس زمینه ( background-position)  </a></li>
            <li><a href="style.html#a6">    ثابت و یا قابل اسکرول بودن تصویر پس زمینه( background-attachment)  </a></li>
            <li><a href="style.html#a7"> استایل فونت ها در  Color :CSS       </a></li>
            
            <li><a href="moarefiPHP.html">معرفی PHP</a></li>
            <li><a href="moarefiPHP.html#a1">    معرفی مختصرPHP  </a></li>
            <li><a href="moarefiPHP.html#a2">   معرفی ابزارها و تکنولوژي هاي طراحی وب و جایگاه php   </a></li>
            <li><a href="moarefiPHP.html#a3">    ایجاد اولین پروژه  </a></li>
            <li><a href="moarefiPHP.html#a4">   قواعد کلی برنامه نویسی به زبان php  </a></li>
            <li><a href="moarefiPHP.html#a5">  معرفی انواع داده ها در  PHPبه همراه توضیح و مثال </a></li>
            <li><a href="moarefiPHP.html#a6">    متغیر رشته اي (string) </a></li>
            <li><a href="moarefiPHP.html#a7"> متغیر عدد صحیح (Integer )  </a></li>
            <li><a href="moarefiPHP.html#a8">  متغیر عددي اعشاري (Float)    </a></li>
            <li><a href="moarefiPHP.html#a9">   متغیر درست یا غلط  (Boolean) </a></li>
            <li><a href="moarefiPHP.html#a10">  متغیر آرایه (Array)  </a></li>
            <li><a href="moarefiPHP.html#a11">   متغیر شی گونه (Object )  </a></li>
            <li><a href="moarefiPHP.html#a12">  مقدار NULL   </a></li>
            <li><a href="moarefiPHP.html#a13">     داده مرجع (Resource)  </a></li>
            
            <li><a href="amalgar.html">عملگرها </a></li>
            <li><a href="amalgar.html#a1">  عملگرها درphp  </a></li>
            <li><a href="amalgar.html#a2">  1)  عملگرهاي محاسباتی  </a></li>
            <li><a href="amalgar.html#a3">    2)  عملگرهاي نسبت دهی یا انتساب  </a></li>
            <li><a href="amalgar.html#a4">  3)  عملگرهاي افزایشی و کاهشی     </a></li>
            <li><a href="amalgar.html#a5"> 4)    عملگرهاي مقایسه اي   </a></li>
            <li><a href="amalgar.html#a6">  5)   عملگرهاي منطقی   </a></li>
            <li><a href="amalgar.html#a7">  استفاده از عملگر سه گانه    </a></li>
            <li><a href="amalgar.html#a8">   تقدم عملگرها </a></li>
            
            <li><a href="arayeh.html">آرایه ها</a></li>
            <li><a href="arayeh.html#a1">  آرایه ها درPHP </a></li>
            <li><a href="arayeh.html#a2"> آرایه عددي </a></li>
            <li><a href="arayeh.html#a3"> آرایه هاي انجمنی  </a></li>
            <li><a href="arayeh.html#a4">  آرایه هاي چند بعدي </a></li>
            <li><a href="arayeh.html#a5">  مرتب کردن آرایه ها درPHP </a></li>
            <li><a href="arayeh.html#a6">  برگرداندن تعداد عناصر یک آرایه </a></li>

            <li><a href="sakhtarcontroli.html">ساختارهای کنترلی </a></li>
            <li><a href="sakhtarcontroli.html#a1"> منظور از ساختار کنترلی چیست؟  </a></li>
            <li><a href="sakhtarcontroli.html#a2"> ساختارif  </a></li>
            <li><a href="sakhtarcontroli.html#a3"> ساختارelse  </a></li>
            <li><a href="sakhtarcontroli.html#a4">  ساختارElse If  </a></li>
            <li><a href="sakhtarcontroli.html#a5">  ساختارSwitch  </a></li>
            <li><a href="sakhtarcontroli.html#a6">  حلقه ها  </a></li>
            <li><a href="sakhtarcontroli.html#a7"> حلقه While </a></li>
            <li><a href="sakhtarcontroli.html#a8">  حلقه Do-While   </a></li>
            <li><a href="sakhtarcontroli.html#a9"> حلقهFor  </a></li>
            <li><a href="sakhtarcontroli.html#a10"> ساختار foreach  </a></li>

            <li><a href="tavabe.html">کار با توابع</a></li>
            <li><a href="tavabe.html#a1"> کار با توابع درphp   </a></li>
            <li><a href="tavabe.html#a2"> تابع (Function) چیست و چه کاربردي دارد؟  </a></li>
            <li><a href="tavabe.html#a3">   شیوه نگارش  (syntax)تابع درphp  </a></li>
            <li><a href="tavabe.html#a4">   فراخوانی تابع در PHP </a></li>
            <li><a href="tavabe.html#a5">  آرگومان  (argument)تابع </a></li>
            <li><a href="tavabe.html#a6">    تعریف توابع پیچیده درphp </a></li>
            <li><a href="tavabe.html#a7">  توابع درونیphp </a></li>
            
            <li><a href="formPHP.html">کار با فرم ها در PHP</a></li>
            <li><a href="formPHP.html#a1">   فرم ها در PHP  </a></li>
            <li><a href="formPHP.html#a2">  فرم چگونه مقادیر را خوانده و به صفحه مقصد ارسال می کند  </a></li>
            <li><a href="formPHP.html#a3">  متد  GETدر مقابلPOST    </a></li>
            <li><a href="formPHP.html#a4">   چه موقع از  GETاستفاده کنیم؟   </a></li>
            <li><a href="formPHP.html#a5">  چه موقع از  POSTاستفاده کنیم؟   </a></li>
            
            <li><a href="moarefiDataBase.html">معرفی DataBase</a></li>
            <li><a href="moarefiDataBase.html#a1">    معرفی دیتابیس رابطه ايmysql    </a></li>
            <li><a href="moarefiDataBase.html#a2">    MySQLچیست و چه کاربردي دارد؟   </a></li>
            <li><a href="moarefiDataBase.html#a3">  ساختار کلی و نحوه دسته بندي اطلاعات در پایگاه داده    </a></li>
            <li><a href="moarefiDataBase.html#a4">  مدیریت پایگاه داده  MySQLباphpMyAdmin    </a></li>
            <li><a href="moarefiDataBase.html#a5">   ارتباط  PHPبا پایگاه دادهMySQL     </a></li>
            <li><a href="moarefiDataBase.html#a6">   مرحله اول : ایجاد پایگاه داده  MySQLبا استفاده از phpmyadmin       </a></li>
            <li><a href="moarefiDataBase.html#a7">    مرحله دوم : مهمترین توابع و دستورات کدنویسی ارتباط  MYSQLبا PHP     </a></li>
            
            <li><a href="darbarema.html">درباره ما</a></li>
            <li><a href="ertebatbama.php">ارتباط با ما</a></li>

            <li><a href="member.php">عضویت / ورود</a></li>

            <li><a href="index.php#video1">فیلم </a></li>
            
          </ul>
        </div>
    <!--  *************  منو   *************  -->
   
    ‍‍‍‍‍‍<div class="div_menu">
        <a class="a_menu" href="index.php"> <button  class="btn_menu "> خانه</button></a>
                 <div class="dropdown">
        <a class="a_menu" href=""> <button class="btn_menu"> آموزشHTML</button></a>
                    <div class="drop_content">
                        <br>
                    <a class="a_zirmenu" href="moarefihtml.html"> معرفیHTML</a>
                    <a class="a_zirmenu" href="sakhtar.html">ساختار صفحات HTML </a> 
                    <a class="a_zirmenu" href="sefatha.html">صفت ها در HTML </a> 
                    <a class="a_zirmenu" href="ghalebbandi.html"> قالب بندی متن </a> 
                    <a class="a_zirmenu" href="linkeha.html">لینک ها در HTML </a>
                    <a class="a_zirmenu" href="image.html"> کاربا تصاویر </a> 
                    <a class="a_zirmenu" href="listha.html"> لیست ها در HTML </a>
                    <a class="a_zirmenu" href="table.html"> کار با جداول </a> 
                    <a class="a_zirmenu" href="form.html"> فرم ها در HTML </a> 
                    </div>
                 </div>
                 <div class="dropdown">
         <a class="a_menu" href="">  <button class="btn_menu">آموزش CSS</button></a>
         <div class="drop_content">
            <br>
                      <a class="a_zirmenu" href="moarefiCSS.html">معرفی CSS</a>
                      <a class="a_zirmenu" href="style.html"> استایل عناصردرCSS</a>
        </div>
    </div>
                 <div class="dropdown">
         <a class="a_menu" href=""> <button class="btn_menu"> آموزش PHP</button></a>
         <div class="drop_content">
            <br>
                      <a class="a_zirmenu" href="moarefiPHP.html">معرفی PHP</a>
                      <a class="a_zirmenu" href="amalgar.html">عملگرها </a>
                      <a class="a_zirmenu" href="arayeh.html">آرایه ها </a>
                      <a class="a_zirmenu" href="sakhtarcontroli.html">ساختارهای کنترلی</a>
                      <a class="a_zirmenu" href="tavabe.html">کار با توابع</a>
                      <a class="a_zirmenu" href="formPHP.html">کار با فرم ها در PHP</a>
                      <a class="a_zirmenu" href="moarefiDataBase.html">معرفی DataBase</a>
        </div>
                 </div>
         <a class="a_menu" href="darbarema.html"> <button class="btn_menu"> درباره ما</button></a>
         <a class="a_menu" href="ertebatbama.php"> <button class="btn_menu"> ارتباط با ما</button></a>
   </div>
 </header>
<div class="div-main-aside">
<main>
<!--               قسمت تبلیغات            -->
  <div class="div-aside" style="float: left;">
     <a id="alink" href="https://www.sarabara.com/">
     <img class="linktabligh" id="imgtabligh" src="pic/1.png" alt="تبلیغات"></a>
     <a id="alink2" href="https://www.sarabara.com/shop/?_sale=1&_per_page=48&_sort=random">
     <img style="margin-top: 10px;"  class="linktabligh" id="imgtabligh1" src="pic/1.jpg" alt="تبلیغات"></a>
 <br>
     </div> 
<?php  
 $s=$_REQUEST['varname'];
 if($s=="1"){ echo "<style>#a1{display: block;}</style>"; }
 else if($s=="2"){ echo "<style>#a2{display: block;}</style>"; }
 else if($s=="3"){ echo "<style>#a3{display: block;}</style>"; }
 else if($s=="4"){ echo "<style>#a4{display: block;}</style>"; }
?>
<div style="float: right;">
    <h3 id="a1">  ساخت فرم</h3> 
    <div id="a1" class="div-video">
       <video controls  class="video1"  poster="pic/videoForm1.png">
           <source src="video/v1.mp4" type="video/mp4" >
         </video>
    </div>
    <h3 id="a2">  ساخت button  زیبا</h3>
    <div id="a2" class="div-video">
       <video controls  class="video1"  poster="pic/videoForm2.jpg">
           <source src="video/v2.mp4" type="video/mp4" >
         </video>
    </div>
    <h3 id="a3">ساخت منو</h3>
    <div  id="a3" class="div-video">
       <video controls  class="video1"  poster="pic/videoForm3.jpg">
           <source src="video/v3.mp4" type="video/mp4" >
         </video>
    </div>
    <h3 id="a4">  ساخت اسلایدشو </h3>
    <div id="a4" class="div-video">
       <video controls  class="video1"  poster="pic/videoForm4.png">
           <source src="video/v4.mp4" type="video/mp4" >
         </video>
    </div>
</div>
    
</main>
</div>
<!--************ قسمت footer ************-->
<footer>
    <div class="div-footer-box">
        <div class="div-footer">
            <img class="icon" src="pic/email.png" alt="">
            <p>rayanamooz@gmail.com </p>
        </div>
        <div class="div-footer">
            <img class="icon" src="pic/phone.png" alt=""><br>
            <p>11111111 - 021</p>
        </div>
        <div class="div-footer">
            <img class="icon" src="pic/map.png" alt=""><br>
          <p>  آدرس : خیابان ...</p>
        </div>
        <br>
        <div >
            <p class="div-footer-text" >سایت رایان آموز، يک سايت علمی، آموزشی درباره طراحی وب است. آموزش ها و مثال های این سایت بطور مداوم بازبینی می شوند اما اگر به خطا یا لینک معیوبی برخورد کردید، لطفاً آنرا از طریق "ارتباط با ما" گزارش دهید. هر گونه کپی برداری از مطالب اين سايت، پیگرد قانونی خواهد داشت.</p>
            
            <div class="div-footer-text2" >
                مارا در شبکه های اجتماعی دنبال کنید
              <br>  <button  class=" fab fa-facebook-f     btnicon"onclick="location.href='https:www.facebook.com/rayka.maryam'" ></button>
                <button  class=" fab fa-instagram     btnicon" onclick="location.href='https:/www.instagram.com/p/CKCiXqYAu9H/?igshid=19qtxhquyuee5'" ></button>
                <button  class=" fab fa-telegram-plane      btnicon" onclick="location.href='https:/t.me/joinchat/TCsC5PwqtSBEVM5c'" ></button>
            </div>
    </div>
    </div>
    </footer>
</div>


<!--     کدهای جاوااسکریپت -->
<script>
        /**************منو تبلت و گوشی******************/
        function  btnmenuclose(){
        document.getElementById('btnmenubar1').style.display="block";
    document.getElementById('btnmenuclose1').style.display="none";
    document.getElementById('boxmenubar1').style.display="none";
    }
function btnmenu(){
if(document.getElementById('boxmenubar1').style.display!=="block"){
    document.getElementById('boxmenubar1').style.display="block";
    document.getElementById('btnmenubar1').style.display="none";
    document.getElementById('btnmenuclose1').style.display="block";
}
else{
    document.getElementById('boxmenubar1').style.display="none";
    document.getElementById('btnmenubar1').style.display="block";
    document.getElementById('btnmenuclose1').style.display="none";

}
}
function btnlistmenu1(){
    if(document.getElementById('div-list-zirmenu1').style.display!=="block"){
        document.getElementById('div-list-zirmenu1').style.display="block";
        document.getElementById('basteh1').style.display="inline";
       document.getElementById('baz1').style.display="none";

    }
    else  {   
        document.getElementById('div-list-zirmenu1').style.display="none";
        document.getElementById('basteh1').style.display="none";
       document.getElementById('baz1').style.display="inline";
    }
}
function btnlistmenu2(){
    if(document.getElementById('div-list-zirmenu2').style.display!=="block"){
        document.getElementById('div-list-zirmenu2').style.display="block";
        document.getElementById('basteh2').style.display="inline";
       document.getElementById('baz2').style.display="none";
    }
    else {
            document.getElementById('div-list-zirmenu2').style.display="none";
            document.getElementById('basteh2').style.display="none";
       document.getElementById('baz2').style.display="inline";
    }
}
function btnlistmenu3(){
    if(document.getElementById('div-list-zirmenu3').style.display!=="block"){
        document.getElementById('div-list-zirmenu3').style.display="block";
        document.getElementById('basteh3').style.display="inline";
       document.getElementById('baz3').style.display="none";
    }
    else  {
           document.getElementById('div-list-zirmenu3').style.display="none";
           document.getElementById('basteh3').style.display="none";
       document.getElementById('baz3').style.display="inline";
    }
}
  // ******************** قسمت تبلیغات******************************
  var i=1;
var id=setInterval(frome , 4000);
function frome(){
   if(i==3){ i=0;}
   else{i++; document.getElementById('imgtabligh').src="pic/"+i+".png";
   if(i==1){        document.getElementById('alink').href="https://www.sarabara.com/";}
  }
  if(i==2){      document.getElementById('alink').href="https://www.dolichi.com/41-%DA%A9%D9%81%D8%B4-%D9%85%D8%B1%D8%AF%D8%A7%D9%86%D9%87";}
  if(i==3){       document.getElementById('alink').href="https://www.modiseh.com/campaign/summer/sun-safety";}
}


var i1=1;
var id1=setInterval(frome2 , 4000);
function frome2(){
   if(i1==3){ i1=0;}
   else{i1++;   document.getElementById('imgtabligh1').src="pic/"+i1+".jpg";
   if(i1==1){ document.getElementById('alink2').href="https://www.sarabara.com/shop/?_sale=1&_per_page=48&_sort=random";} }
   if(i1==2){ document.getElementById('alink2').href="https://www.digikala.com/landings/digiplus-birthday/?&promo_name=%D8%B4%DA%AF%D9%81%D8%AA+%D8%A7%D9%86%DA%AF%DB%8C%D8%B2+%D9%87%D8%A7%DB%8C+%D8%AF%DB%8C%D8%AC%DB%8C+%D9%BE%D9%84%D8%A7%D8%B3&promo_position=home_left_banner_bottom&promo_creative=77993&bCode=77993";}
   if(i1==3){document.getElementById('alink2').href="https://www.digikala.com/product-list/plp_8081307/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%A7%D9%85%D9%88&promo_position=home_slider_new&promo_creative=77917&bCode=77917";
}}
/***** search*************/
function myclose(){
    document.getElementById('myULdiv').style.display="none";
}
function myFunction() {
    document.getElementById('myULdiv').style.display="inline";
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    var num1=0;
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
num1++;
        } else {
            li[i].style.display = "none"; 
        }

    }
    if(num1==0){    document.getElementById('message').style.display="inline";} else{    document.getElementById('message').style.display="none";}
}
</script>
</body>
</html>