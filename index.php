<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>umaytech</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/fontiran.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/slider.css">
    <!--<link href="css/responsive.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src = "http://maps.googleapis.com/maps/api/js"></script>
    <script src="js/scrollit.min.js" type="text/javascript"></script>
    <script src="js/sweetalert.min.js"></script>

    <?php
    if($m==1)
    {

    ?>
    <script>swal("متشکریم", "پیام شما دریافت شد. به زودی با شما تماس گرفته می شود", "success");</script>
    <?php
    }
    elseif($m==2)
    {
    ?>
    <script>swal("متاسفیم", "خطایی رخ داده است! لطفا دوباره تلاش نمایید", "error");</script>
    <?php
    }
    elseif($m==3)
    {
    ?>
    <script>swal("اخطار", "لطفا تمامی اطلاعات خواسته شده را وارد نمایید", "warning");</script>
    <?php
    }
    ?>

    <script>
       function loadMap() {       
          var mapOptions = {
             center:new google.maps.LatLng(38.067390, 46.324883),
             zoom:18,
             mapTypeId:google.maps.MapTypeId.ROADMAP
          };                      
          var map = new google.maps.Map(document.getElementById("mymap"),mapOptions);
       }
       google.maps.event.addDomListener(window, 'load', loadMap);
    </script>

    <script>
        $(function(){
            $.scrollIt();
        });
    </script>

 
   

</head>
<body>
<div class="rtl">
<div class="first">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark  bg-dark">

            <a class="navbar-brand" href="#">اومای تک</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-5">
                    <li class="nav-item ">
                        <a  data-scroll-nav="0" class="nav-link" href="#" >صفحه اصلی <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll-nav="1" class="nav-link" href="#" >خدمات </a>
                    </li>

                    <li class="nav-item">
                        <a  data-scroll-nav="2" class="nav-link" href="#">وبلاگ</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll-nav="3" class="nav-link" href="#">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll-nav="4" class="nav-link" href="#">تماس با ما</a>
                    </li>
                </ul>

            </div>
    </nav>



    <div data-scroll-index="0" class="main" >
        
        <div class="opacity">
            <a href=""><img src="image/UmayTech.Co-min.png"/></a>
            <h3 class="title title1">کسب و کار خود را رونق دهید</h3>
            <h4 class="title title2">طراحی وب سایت های خلاقانه خود را به ما بسپارید</h4>

        </div>
    </div>
</div>



<div data-scroll-index="1" class="services" >

    <h2>خدمات اومای تک</h2>
    <p>اومای تک شرکت فنی مهندسی کامپیوتری است که با ارائه خدمات کامپیوتری سعی در رونق و بهبود کسب وکار شما دارد.</p>
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">

                    <img src="image/design.svg" alt="طراحی وب سایت" style="width:100%">
                    <div class="caption">
                        <p><b>طراحی و توسعه وب سایت های  تخصصی موردنظرشما</b></p>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="image/mobile.svg" alt="طراحی اپلیکیشن" style="width:100%">
                    <div class="caption">
                        <p><b>طراحی انواع اپلیکیشن های کاربردی و ربات های تلگرامی</b></p>

                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="image/book.svg" alt="تولیدمحتوا" style="width:100%">
                    <div class="caption">
                        <p><b>تولید محتوای تخصصی برای سایت   و صفحه های مجازی</b></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<br><br><br>


<div class="advice">
    <div class="opacity2">

    </div>
    <div class="container">
        <div class="row">

            <div class="txt">
                <p>برای مشاوره و سفارش خود فرم زیر را پر کنید گروه اومای تک به زودی با شما تماس خواهند گرفت.</p>
                <br>
                      <!-- Button to Open the Modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                          ثبت نام
                      </button>
                                  
                      <!-- The Modal -->
                      <div class="modal" id="myModal">
                        <div class="modal-dialog">
                        <div class="modal-content">
                                        
                         <!-- Modal Header -->
                        <div class="modal-header">
                         <h4 class="modal-title">فرم ثبت نام</h4>
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
                                          
                          <!-- Modal body -->
                          <div class="modal-body">
                            <form method="post" action="check.php">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">نام و نام خانوادگی:</label>
                                    <input type="text" name="name" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-num" class="col-form-label">شماره موبایل:</label>
                                    <input type="tel" name="phone"  pattern="[0]{1}[0-9]{10}" class="form-control" id="recipient-num" required>
                                </div>
                                <div class="form-group">
                                     <label for="recipient-email" class="col-form-label">ایمیل:</label>
                                     <input type="email" name="email" class="form-control" id="recipient-email" required>
                                </div>
                                                                  
                                <div class="form-group">
                                   <label for="message-text" class="col-form-label">پیام:</label>
                                   <textarea name="message" class="form-control" id="message-text" required></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="submit" class="btn btn-success" data-dismiss="modal">تایید</button>
                                </div>
                            </form>
                                            
                            </div>
                                          
                            <!-- Modal footer -->

                        </div>
                        </div>
                      </div>
                     
        </div>
                          
    </div>
    </div>
</div>



<div data-scroll-index="3" class="workers">
    
        <h2>نمونه  کار </h2>
    <br>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-50" src="image/roya.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>roya hasani</h5>
                    <p>designer</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-50" src="image/maryam.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>maryam alizadeh</h5>
                    <p>back-end developer</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-50" src="image/sanaz.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>sanaz hassanzadeh</h5>
                    <p>front-end developer</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-50" src="image/mahdan.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>mahdiye piri</h5>
                    <p>front-end developer</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          
            <img src="image/arrowhead-thin-outline-to-the-left.png" alt="prev-arrow">
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <img src="image/arrow-point-to-right.png"/>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div data-scroll-index="2" class="blog">
       <h2>پست های وبلاگ</h2><br>
        <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-xs-6 col-sm-6">
                    <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="card-link">ادامه مطلب</a>
                              
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="card-link">ادامه مطلب</a>
                              
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="card-link">ادامه مطلب</a>
                              
                            </div>
                        </div>
                </div>
            </div>
            <a href="#" class="btn more"> پست های بیشتر</a>
           
        </div>
    </div>
    <div class="container">
        <h2>اعضای تیم ما</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 co-xs-12 persons"><img  src="image/sanaz.jpg" alt="sanaz"><a href="#">ساناز حسن زاده</a></div>
            <div class="col-lg-3 col-md-6 col-sm-6 co-xs-12 persons"   ><img src="image/mahdan.jpg" alt="mahdiye"><a href="">مهدیه پیری</a></div>
            <div  class="col-lg-3 col-md-6 col-sm-6 co-xs-12 persons"><img  src="image/roya.jpg" alt="roya"><a href="">رویا حسنی</a></div>
            <div class="col-lg-3 col-md-6 col-sm-6 co-xs-12 persons"><img  src="image/maryam.jpg" alt="maryam"><a href="">مریم علیزاده</a></div>
        </div>

    </div>
         
<div data-scroll-index="4" class="end">
    <div class="opacity4">
      <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="connection">
                   <h2 >راه های ارتباطی</h2>
                   <h2>اومای تک</h2>
                    <p>ادرس:تبریز - خیابان ابرسان - پشت قنادی ایوبی - ساختمان امید - طبقه شش غربی</p><br>
                    <p>تلفن تماس:09148508682</p><br>
                    <p>ایمیل:umaytech@gmail.com</p><br>

                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <br><br><br>
             <div id="mymap" style="height:350px; border-radius: 20px;"></div>
              <br>
            </div>
            
        </div>

          <div class="socials">
              <a class="social" href="#"><i class="fa fa-instagram"></i></a>
              <a class="social" href="#"><i class="fa fa-telegram"></i></a>
              <a class="social" href="#"><i class="fa fa-google"></i></a>
          </div>

      </div>
    </div>
     
</div>

<footer>
    <p class="copyright"><span>&copy;</span>کلیه حقوق این وب سایت متعلق به شرکت اومای تک می باشد </p>

</footer>

     
</div>
</div>

</body>

</html>