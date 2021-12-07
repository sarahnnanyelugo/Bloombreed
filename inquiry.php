<!DOCTYPE html>
<html lang="en" >
<?php
if (isset($_GET['success'])){
    $success = $_GET['success'];
}

if (isset($_GET['error'])){
    $error = $_GET['error'];
}

?>




    <head>
        <title>
            BloomBreed School
        </title>
        <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="Assets/icofont/icofont.min.css" rel="stylesheet">
        <link href="Assets/css/bloombreed.css" rel="stylesheet" type="text/css">
        <link href="Assets/fontawesome-free-5.15.3-web/css/fontawesome.min.css" rel="stylesheet">
        <!-- <link href="Assets/css/radialMenu.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="Assets/css/animate.css">
    
    
        <meta charset="UTF-8">
        <meta name="description" content="Honouring our heritage. Inspiring Bright Futures
        ,
        Baskel Road, Off Port harcourt /Aba Expressway, After eleme junction Port Harcourt (boarding).,
        Opposite NTA, Off NTA-Chuba Road, Port Harcourt(day), https://bloombreedschools.org/index.html">
        <meta name="keywords" content="Bloombreed schools, Bloombreed education, bloombreed academic, bloombreed hostel, Bloombreed school life,
        Bloombreed principal, Bloombreed boarding, school high, school, Bloombreed portal, junior school, eyfs, top schools in Nigeria, Top schools in Portharcourt,
        best boarding schools, best high schools, education, department of education, edu, education portal, schooleducation, eduscol
        soe, private school, higher education, education nationale, shoe department, unified, board of education, education department, education board
        times higher education, special education, education gazette, charter schools near me, education definition, education system
        directorate of education, school education department">
        <meta name="author" content="Educare">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="Assets/img/favicon.png">
    
        <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
        <script src="Assets/js/jquery-3-5.min.js"></script>
        <script src="Assets/js/popper.min.js"></script>
        <script src="Assets/js/bootstrap.min.js"></script>
        <script src="Assets/js/smtp.js"></script>
        <script src="Assets/js/jquery2.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!---the script above is for contacts-->

    
    </head>






<body>
    <div class="container-fluid">

<!--divfor side nav-->
      <div class="sidenavright">
        <a href="#about" class="btn btn-sm" style="background-color:rgb(179,43,49);" id="searchButton"><i class="icofont-ui-search"></i><br>Search</a>
        <a href="https://bloombreedschools.educare.school/enquiry" target="_blank" class="btn btn-sm" style="background-color:rgb(179,43,49);"><i class="icofont-question-circle"></i><br>Inquire</a>
        <a href="http://bloombreedschools.educare.school/admission-form" target="_blank" class="btn btn-sm" style="background-color:rgb(179,43,49);"><i class="icofont-drawing-tablet"></i><br>Apply</a>
        <a href="inquiry.html" class="btn btn-sm" style="background-color:rgb(179,43,49);"><i class="icofont-location-pin"></i><br>visit us</a>
      </div>
<!--end of side nav-->

        <div class="row" w3-include-html="Navbar.html"></div>

      <div class="row " width="100%">
        <img src="Assets/img/gallery.png" width="100%" class="slidmargin">


      </div>


<div class="row" style="background-color:rgb(247,249,250); margin-bottom:80px; padding-bottom:80px">
    <div class="col-md-12 flexy">
        <div class="col-md-2 table websidenav" style="margin-left:60px">
            <ul>

                <li><a href="index.html">HOME</a></li>
                <li><a href="gallery2.html" class="activenav">CONTACT US</a></li>
                <li><a href="gallery2.html" >NEWS AND EVENTS</a></li>

            </ul>


        </div>

        <div class="col-md-10" style="top:50px">
            <small class="heading">INQUIRY</small>
            <h2 class="heading2"><span style="border-bottom:solid 2px rgb(237,165,0)">CONTACT</span> US</h2>
            <?php
            if ($success != '' || $success != null){
                echo '<div class="col-md-12 col-12 "><span class="text-success">'.$success.'</span></div><br>';
            }

            if ($error != '' || $error != null){
                echo '<div class="col-md-4 col-12 "><span class="text-danger">'.$error.'</span></div><br>';
            }

            $success = $error = null;
            ?>

            <form action="mailer.php" method="post">

            <div class="row">
                <div class="col-md-12 flexy">
                  <div class="col-md-4 col-12" style="background-color :rgb(241, 237, 237); ">
                      <span><i class="icofont-location-pin"></i></span>
                      <h6 style="font-weight:bolder">Boarding School</h6>


                      <p style="color: rgb(53, 53, 75);">
                        Baskel Road, Off Port harcourt /Aba Expressway, After eleme junction Port Harcourt
<br><br>Tel: +234 703 904 7680

                      </p>

                      </div>


                      <div class="col-md-4 col-12 "><input type="email" class="form-control" name="email" placeholder="Email*"></div>
                      <div class="col-md-4 col-12 forminquire"> <input type="tel" class="form-control" name="phone" placeholder="Phone*">
                      </div>

                  </div>


                </div>

                <div class="row">



                    <div class="col-md-12 flexy">
                      <div class="col-md-4 ">&nbsp;</div>
                        <div class="col-md-4 col-12 forminquire" style="margin-top:-55px !important"><input type="text" class="form-control" name="name" placeholder="Name*"></div>
                        <div class="col-md-4 col-12 forminquire" style="margin-top:-55px !important"><input type="text" class="form-control" name="subject" placeholder="Subject*">
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 flexy">
                      <div class="col-md-4 col-12" style="background-color :rgb(241, 237, 237); ">
                        <span><i class="icofont-location-pin"></i></span>

<h6  style="color: rgb(53, 53, 75); font-weight:bolder">Day School</h6>
                          <p >
                            Opposite NTA, Off NTA-Chuba Road, Port Harcourt<br><br>
                            Tel: +234 703 904 7680
                          </p>
                          </div>

                              <div class="col-md-8">
                                      <textarea name="message" class="form-control" rows="6" placeholder="Message*"></textarea>
          

                              </div>




                    </div>

                </div>

              <!-- </form> -->
                <div class="row">
                    <div class="col-md-12" style="display:flex; margin-top:25px; ">
                      <div class="col-md-4" style="background-color: rgb(36,43,105); color:white; margin-right:30px" id="follow"><h6  style="font-size:10px; font-weight:bolder; margin-top:20px">FOLLOW US</h6>
                        <ul class="list-unstyled list-inline" >
                            <li class="list-inline-item"><img src="Assets/img/facebook.svg" height="30px"></li>
                            <li class="list-inline-item"><img src="Assets/img/IG.svg" height="30px"></li>
                            <li class="list-inline-item"><img src="Assets/img/linkdin.svg" height="30px"></li>

                        
                        </ul></div>
                        <!-- <form action="?" method="POST"> -->
                          <div id="html_element"></div>
                          <br>
                        <input type="submit" value="Submit" style="color:rgb(179,43,49)">
                    </div>
                </div>
                        </form>
                        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
                            async defer>
                        </script>
                    </div>
                    <!-- <div class="col-md-2" style="margin-top:20px"><button onclick="sendMail()" class="btn btn-primary" style="background-color: rgb(36,43,105); font-weight:bolder">SEND MESSAGE</button></div> -->


                </div>


        </div>

    </div>
</div>
<div class="row">
  <div class="col-md-12 col-12" style="margin-top:30px"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6685.9931317194705!2d7.0834201599008795!3d4.852938093386116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069d2a0bb89f8e5%3A0xd761137fcefb79bf!2sBLOOMBREED%20HIGH%20SCHOOL!5e0!3m2!1sen!2sng!4v1638237574480!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
</div>
<div class="row" >
    <div class="col-md-12" id="join13">
        <div class="col-md-12 flexy" >
            <div class="col-md-5">&nbsp;</div>
         <h4 ><em>Join Us</em></h4>
        </div>


    <div class="row col-md-12 flexy"  >
        <div class="col-md-1">&nbsp;</div>
        <a href="inquiry.html" class="btn btn-lg  col-md-3 b">INQUIRE</a>
    <a href="http://bloombreedschools.educare.school/admission-form" target="_blank" class="btn btn-lg col-md-3 b"> APPLY</a>
    <a href="inquiry.html" class="btn btn-lg join col-md-3 b">VISIT US</a>

    </div>

    </div>
    </div>



      <div  w3-include-html="footer.html"></div>
      </div><!--container-fluid-->


      <script src="Assets/js/custom.js"></script>
      <script type="text/javascript">
        var onloadCallback = function() {
          grecaptcha.render('html_element', {
            'sitekey' : '6LcS8YEdAAAAAMbiXKA5y1WAouYJjlg73n80SUmq'
          });
        };
      </script>
      </body>


      </html>
