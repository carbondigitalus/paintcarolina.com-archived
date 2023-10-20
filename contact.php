<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="UTF-8">
    <title>Paint Carolina</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo file_get_contents("html/_styles.html"); ?>
    <?php echo file_get_contents("html/_analytics.html"); ?>

</head>

<body>
    <div class="preloader">
        <div class="p-wrapper">
            <div class="spinner">
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
            </div>
        </div>
    </div>

  <?php echo file_get_contents("html/_header.html"); ?>

<!--About Us-Hero Section-->
<section class="service-area-blue">
    <div class="container">
        <div class="row">
            <h1 class="wow zoomIn" data-wow-delay=".5s">Contact Us</h1>
        </div>
    </div>
</section>
<!--/About Us-Hero Section-->

<!--Contact Us Section-->
<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-contact blue">
                    <span class="flaticon-envelope bg-envelope"></span>
                    <div class="sc-icon-inner">
                        <span class="flaticon-envelope"></span>
                    </div>
                    <h5>Email Us:</h5>
                    <p><a href="mailto:info@paintcarolina.com">info@paintcarolina.com</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-contact blue">
                    <span class="flaticon-phone bg-phone"></span>
                    <div class="sc-icon-inner">
                        <span class="flaticon-phone"></span>
                    </div>
                    <h5>Call Us</h5>
                    <p><a href="tel:910-899-6794">(910) 899-6794</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-contact blue">
                    <span class="flaticon-placeholder bg-placeholder"></span>
                    <div class="sc-icon-inner">
                        <span class="flaticon-placeholder"></span>
                    </div>
                    <h5>Our Areas</h5>
                    <p>Wilmington, NC</p>
                    <p>Shallotte, NC</p>
                    <p>Myrtle Beach, SC</p>
                </div>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="message">
                    <h1>Drop Us A Message Now:</h1>

                </div>
                <div class="message-box">
                    <form class="cf" method="post" action="assets/php/mail.php" id="cf">

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Your Name*</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Your Name Here">

                            </div>

                            <div class="form-group col-md-6">
                                <label>Email Address*</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email Address Here">

                            </div>
                            <div class="form-group col-md-6">
                                <label>Subject Line*</label>
                                <input type="text" class="form-control" id="subjectName" name="subjectName" placeholder="Subject Of Massage">

                            </div>

                            <div class="form-group col-md-6">
                                <label>Telephone Number*</label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number">

                            </div>
                            <div class="form-group col-md-12">
                                <label>Your Message</label>
                                <textarea rows="6" class="form-control" id="msg" name="msg" placeholder="Write Your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <button type="submit" id="submit" name="submit" class="cf-btn btn btn-dark">Send Now</button>
                                </div>

                            </div>
                            <div class="col-md-12 text-center">
                                <div class="cf-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Contact Us Section-->

<?php echo file_get_contents("html/_footer.html"); ?>

<?php echo file_get_contents("html/_scripts.html"); ?>

</body>

</html>
