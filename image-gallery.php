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
    <link rel="stylesheet" href="css/lightbox.min.css">
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
                        <h3>Image Gallery</h3>

                        <nav aria-label="breadcrumb" class="mt-4">
                            <ol class="bg-transparent breadcrumb banner__breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== End of Banner =============== -->
    
    <!-- Gallery Section -->
    <div class="gallery my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-6 mx-auto mb-4">
                   <a href="img/gallery1.jpeg" data-lightbox="image-gallery">
                        <img src="img/gallery1.jpeg" alt="" class="gallery__img">
                   </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 mx-auto mb-4">
                   <a href="img/gallery2.jpeg" data-lightbox="image-gallery">
                        <img src="img/gallery2.jpeg" alt="" class="gallery__img">
                   </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 mx-auto mb-4">
                   <a href="img/gallery3.jpeg" data-lightbox="image-gallery">
                        <img src="img/gallery3.jpeg" alt="" class="gallery__img">
                   </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 mx-auto mb-4">
                   <a href="img/gallery4.jpeg" data-lightbox="image-gallery">
                        <img src="img/gallery4.jpeg" alt="" class="gallery__img">
                   </a>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 mx-auto mb-4">
                   <a href="img/gallery5.jpeg" data-lightbox="image-gallery">
                        <img src="img/gallery5.jpeg" alt="" class="gallery__img">
                   </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 mx-auto mb-4">
                   <a href="img/gallery6.jpeg" data-lightbox="image-gallery">
                        <img src="img/gallery6.jpeg" alt="" class="gallery__img">
                   </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 mx-auto mb-4">
                   <a href="img/gallery7.jpeg" data-lightbox="image-gallery">
                        <img src="img/gallery7.jpeg" alt="" class="gallery__img">
                   </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 mx-auto mb-4">
                   <a href="img/gallery8.jpg" data-lightbox="image-gallery">
                        <img src="img/gallery8.jpg" alt="" class="gallery__img">
                   </a>
                </div>

                <!-- Load More -->

                <div class="col-lg-3 col-md-4 col-xs-6 mx-auto mb-4">
                   <a href="img/gallery9.jpeg" data-lightbox="image-gallery">
                        <img src="img/gallery9.jpeg" alt="" class="gallery__img">
                   </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 mx-auto mb-4">
                   <a href="img/gallery10.jpeg" data-lightbox="image-gallery">
                        <img src="img/gallery10.jpeg" alt="" class="gallery__img">
                   </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 mx-auto mb-4">
                   <a href="img/gallery11.jpeg" data-lightbox="image-gallery">
                        <img src="img/gallery11.jpeg" alt="" class="gallery__img">
                   </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 mx-auto mb-4">
                   <a href="img/gallery12.jpeg" data-lightbox="image-gallery">
                        <img src="img/gallery12.jpeg" alt="" class="gallery__img">
                   </a>
                </div>


            </div>
        </div>
    </div>
    <!-- End of Gallery Section -->
    
    
    <!-- =============== Footer =============== -->
    <?php include "./partials/footer.php" ?>
    <!-- =============== End of Footer =============== -->

    <a href="#" class="scrollToTop">
        <i class="fas fa-chevron-up"></i>
    </a>
    
    <!-- JS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/script.js"></script>
    <script>
         lightbox.option({
            'disableScrolling': true
        })
    </script>
</body>
</html>
