<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;600;700;800&family=Raleway:wght@500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sumeru Overseas Pvt. Ltd. | Our Team</title>
</head>
<body>
    
    <!-- =============== Header =============== -->
    <?php include "./partials/header.php" ?>
    <!-- =============== End of Header =============== -->
    
    <!-- =============== Banner =============== -->
    <div class="banner">
        <div class="breadcrumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center banner__heading">
                        <h3>Contact us</h3>

                        <nav aria-label="breadcrumb" class="mt-4">
                            <ol class="bg-transparent breadcrumb banner__breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== End of Banner =============== -->
    
    <!-- =============== Main =============== -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="mb-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact__head">
                        <h3>Request a Contact us</h3>
                        <p>If you are near you can visit us else write to us here.</p>
                        
                        <div class="contact__icon">
                            <div class="contact__icon--inner">
                                <h5>Location :</h5>                           
                                <a href="#"><i class="fas fa-pencil-alt"></i><span>Post Box No. 2093</span></a>
                                <a href="#"><i class="fas fa-map"></i><span>Maharaigunj, Chahrapath, Kathmandu</span></a>
                                <a href="#"><i class="fas fa-phone-alt"></i><span>+977- 01 4720022, 4720866 </span></a>
                                <a href="#"><i class="fas fa-envelope"></i><span>sumeruover@gmail.com</span></a>
                                <a href="#"><i class="fas fa-info-circle"></i><span> Regd. No 164523/073/074</span></a>
                                <a href="#"><i class="fas fa-info-circle"></i><span> Licence no. 1360/074/075</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <form id="contact__form" action="/" class="contact__form">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" id="Name" maxlength="150" name="Name" placeholder="Please enter your name" required="" type="text" value="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" id="Phonenumber" maxlength="150" name="Phonenumber" placeholder="Please enter your phone no" type="text" value="">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input class="form-control" id="Subject" maxlength="500" name="Subject" placeholder="Please enter your message subject" type="text" value="">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input class="form-control" id="Subject" maxlength="500" name="Subject" placeholder="Please enter your message subject" type="text" value="">
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" cols="20" id="Message" maxlength="500" name="Message" placeholder="Write your message" required="" rows="5" type="text"></textarea>
                            </div>

                            <div class="mt-5 text-center col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" id="submit" class="contact__btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End of Form -->
            </div>
        </div>
    </section>
    <!-- =============== End of Main =============== -->

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.335717352235!2d85.31331521490071!3d27.676016982804903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19cc9d586481%3A0x75686fe802adc1c1!2sSUMERU%20Saving%20and%20Credit%20co%20operative%20limited!5e0!3m2!1sen!2snp!4v1627198114375!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    
    <!-- =============== Footer =============== -->
    <?php include "./partials/footer.php" ?>
    <!-- =============== End of Footer =============== -->

    <a href="#" class="scrollToTop">
        <i class="fas fa-chevron-up"></i>
    </a>
    
    <!-- JS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
