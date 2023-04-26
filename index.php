<?php

$conn = mysqli_connect('localhost', 'root', '', 'remine_template') or die('connection failed');

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $someText = mysqli_real_escape_string($conn, $_POST['someText']);

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, subject, someText) VALUES('$name','$email','$subject','$someText')") or die('query failed');

    if ($insert) {
        $message[] = 'Query Send Successfully';
    } else {
        $message[] = 'Query failed';
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Remine India Private Limited</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!--navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white" data-aos="fade-down">
        <div class="container">
            <a class="navbar-brand" href="#">Remine India</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--hero-->
    <section id="home" class="bg-cover hero-section" style="background-image: url(img/cover_1.jpg);">
        <div class="overlay"></div>
        <div class="container text-white text-center">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4" data-aos="zoom-in">Recycling e-Waste and Li Batteries by<br>
                        Remine India Private Limited</h1>
                    <p class="my-4" data-aos="fade-up">Lithium Battery & E-Waste (Electronic Waste) Recycling Industry. Battery Recycling as a Business. <br>
                        Electronic Waste Management, Disposal and Recycling</p>
                    <a href="#" data-aos="fade-up" class="btn btn-main">Get started</a>
                </div>
            </div>
        </div>
    </section>

    <!--services-->
    <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 section-intro text-center" data-aos="fade-up">
                    <h1>Our Services</h1>
                    <div class="divider"></div>
                    <p>Electronic waste, or e-waste, is a term for electronic products that have become unwanted, non-working or obsolete,
                        <br> and have essentially reached the end of their useful life.
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="service">
                        <div class="service-img">
                            <img src="img/image_1.jpg" alt="">
                            <div class="icon"><i class="icon-browser"></i></div>
                        </div>
                        <h5 class="mt-5 pt-4">Buy-back offers for customers</h5>
                        <p>Electronics waste, commonly known as e-scrap and e-waste, is the trash we generate from surplus,
                            broken and obsolete electronic devices.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="service">
                        <div class="service-img">
                            <img src="img/image_3.jpg" alt="">
                            <div class="icon"><i class="icon-bargraph"></i></div>
                        </div>
                        <h5 class="mt-5 pt-4">Creating new jobs</h5>
                        <p>E-waste has a lot of recoverable and valuable resources like plastics, gold, copper, aluminum, and iron. </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="service">
                        <div class="service-img">
                            <img src="img/image_2.jpg" alt="">
                            <div class="icon"><i class="icon-camera"></i></div>
                        </div>
                        <h5 class="mt-5 pt-4">Energy efficiency</h5>
                        <p>To preserve our natural resources, all e-waste should be recycled and reused instead of dumped into landfills.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--about-->
    <section id="about" class="bg-cover" style="background-image: url(img/cover_3.jpg);">
        <div class="overlay"></div>
        <div class="container text-white text-center">
            <div class="row">
                <div class="col-12 section-intro text-center" data-aos="fade-up">
                    <h1>Watch our video</h1>
                    <div class="divider"></div>
                    <p>Recycling e-waste can create jobs for people involved in professional refurbishing and recycling. <br>
                        It can create new markets for materials and components.
                    </p>
                    <a href="#" class="video-btn"><i class='bx bx-play'></i></a>
                </div>
            </div>
        </div>
    </section>

    <!--features-->
    <section id="features" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 section-intro text-center" data-aos="fade-up">
                    <div class="divider"></div>
                    <p>Electronic waste, or e-waste, is a term for electronic products that have become unwanted, non-working or obsolete, <br>
                        and have essentially reached the end of their useful life
                    </p>
                </div>
            </div>
            <div class="row gx-4 gy-5">
                <div class="col-md-4 feature" data-aos="fade-up">
                    <div class="icon"><i class="icon-tools"></i></div>
                    <h5 class="mt-4 mb-3">E-Waste Recycling</h5>
                    <p>The energy cost involved in e-waste recycling is comparatively less than the cost involved in mining and processing of new materials from soil.</p>
                </div>
                <div class="col-md-4 feature" data-aos="fade-up">
                    <div class="icon"><i class="icon-browser"></i></div>
                    <h5 class="mt-4 mb-3">Lithium Battery</h5>
                    <p> Depending on the design and chemical compounds used, lithium cells can produce voltages from 1.5 V to about 3.7 V.</p>
                </div>
                <div class="col-md-4 feature" data-aos="fade-up">
                    <div class="icon"><i class="icon-calendar"></i></div>
                    <h5 class="mt-4 mb-3">Tags</h5>
                    <p>Cell Phone Lithium Battery Batteries of all types are useful because they allow us to store energy for use whenever it is needed.</p>
                </div>
                <div class="col-md-4 feature" data-aos="fade-up">
                    <div class="icon"><i class="icon-camera"></i></div>
                    <h5 class="mt-4 mb-3">Low Maintenance</h5>
                    <p>Lithium Ion (Li-Ion) battery is a rechargeable battery with twice the energy capacity of a Nickel-Cadmium battery and greater stability and safety.</p>
                </div>
                <div class="col-md-4 feature" data-aos="fade-up">
                    <div class="icon"><i class="icon-scissors"></i></div>
                    <h5 class="mt-4 mb-3">Variety of Types Available</h5>
                    <p>LiIon batteries use a liquid lithium-based material for one of their electrodes. </p>
                </div>
                <div class="col-md-4 feature" data-aos="fade-up">
                    <div class="icon"><i class="icon-strategy"></i></div>
                    <h5 class="mt-4 mb-3">Market Outlook</h5>
                    <p>These batteries provide the highest energy density per weight and are mostly used in cellular phones, notebook computers, and hybrid automobiles.</p>
                </div>
            </div>
        </div>
    </section>

    <!--counters-->
    <section class="bg-cover" style="background-image: url(img/cover_2.jpg);">
        <div class="overlay"></div>
        <div class="container text-white text-center">
            <div class="row gy-4" data-aos="fade-up">
                <div class="col-md-3">
                    <i class="icon-trophy h1"></i>
                    <h1 class="mt-3 mb-2">45,00</h1>
                    <p>Awards Won</p>
                </div>
                <div class="col-md-3">
                    <i class="icon-camera h1"></i>
                    <h1 class="mt-3 mb-2">120k</h1>
                    <p>Pictures Taken</p>
                </div>
                <div class="col-md-3">
                    <i class="icon-happy h1"></i>
                    <h1 class="mt-3 mb-2">30M+</h1>
                    <p>Happy Clients</p>
                </div>
                <div class="col-md-3">
                    <i class="icon-paintbrush h1"></i>
                    <h1 class="mt-3 mb-2">4,005</h1>
                    <p>News Post</p>
                </div>
            </div>
        </div>
    </section>

    <!--reviews-->
    <section id="reviews" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 section-intro text-center">
                    <h1>Our Testimonials</h1>
                    <div class="divider"></div>
                    <p>Recycling e-waste can create jobs for people involved in professional refurbishing and recycling. <br>
                        It can create new markets for materials and components.
                    </p>
                </div>
            </div>
            <div class="row g-4 text-start">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="review p-4">
                        <div class="person">
                            <img src="img/avatar_1.jpg" alt="">
                            <div class="text ms-3">
                                <h6 class="mb-0">Ganesh Kumar</h6>
                                <small>Dehradun</small>
                            </div>
                        </div>
                        <p class="pt-4">Some rechargeable cells need to be primed when they receive their first charge. There is no requirement for this with lithium ion cells and batteries.</p>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <div class="review p-4">
                        <div class="person">
                            <img src="img/avatar_2.jpg" alt="">
                            <div class="text ms-3">
                                <h6 class="mb-0">Siddharth Raj</h6>
                                <small>Bihar</small>
                            </div>
                        </div>
                        <p class="pt-4">Some rechargeable cells need to be primed when they receive their first charge. There is no requirement for this with lithium ion cells and batteries.</p>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <div class="review p-4">
                        <div class="person">
                            <img src="img/avatar_3.jpg" alt="">
                            <div class="text ms-3">
                                <h6 class="mb-0">Aman Khan</h6>
                                <small>Surat</small>
                            </div>
                        </div>
                        <p class="pt-4">Some rechargeable cells need to be primed when they receive their first charge. There is no requirement for this with lithium ion cells and batteries.</p>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <div class="review p-4">
                        <div class="person">
                            <img src="img/avatar_2.jpg" alt="">
                            <div class="text ms-3">
                                <h6 class="mb-0">Ujjwal Singh</h6>
                                <small>Pune</small>
                            </div>
                        </div>
                        <p class="pt-4">Some rechargeable cells need to be primed when they receive their first charge. There is no requirement for this with lithium ion cells and batteries.</p>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <div class="review p-4">
                        <div class="person">
                            <img src="img/avatar_1.jpg" alt="">
                            <div class="text ms-3">
                                <h6 class="mb-0">Subham Singh</h6>
                                <small>Delhi</small>
                            </div>
                        </div>
                        <p class="pt-4">Some rechargeable cells need to be primed when they receive their first charge. There is no requirement for this with lithium ion cells and batteries.</p>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up">
                    <div class="review p-4">
                        <div class="person">
                            <img src="img/avatar_3.jpg" alt="">
                            <div class="text ms-3">
                                <h6 class="mb-0">Akash Yadav</h6>
                                <small>Kolkata</small>
                            </div>
                        </div>
                        <p class="pt-4">Some rechargeable cells need to be primed when they receive their first charge. There is no requirement for this with lithium ion cells and batteries.</p>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--blog-->
    <section id="blog" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 section-intro text-center" data-aos="fade-up">
                    <h1>Our Blog Posts</h1>
                    <div class="divider"></div>
                    <p>Electronic waste, or e-waste, is a term for electronic products that have become unwanted, non-working or obsolete, <br>
                        and have essentially reached the end of their useful life
                    </p>
                </div>
            </div>
            <div class="row text-start">
                <div class="col-md-4" data-aos="fade-up">
                    <img src="img/blog_post1.jpg" alt="">
                    <div class="mt-4">
                        <h5 class="mt-1 mb-2"><a href="#">High Energy Density</a></h5>
                        <p>The much greater energy density is one of the chief advantages of a lithium ion battery or cell.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <img src="img/blog_post2.jpg" alt="">
                    <div class="mt-4">
                        <h5 class="mt-1 mb-2"><a href="#">Self-Discharge</a></h5>
                        <p> One issue with batteries and ells is that they lose their charge over time. </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up">
                    <img src="img/blog_post3.jpg" alt="">
                    <div class="mt-4">
                        <h5 class="mt-1 mb-2"><a href="#">No Requirement for Priming</a></h5>
                        <p>Some rechargeable cells need to be primed when they receive their first charge. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--contact-->
    <section id="contact" class="bg-cover text-white" style="background-image: url(img/cover_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 section-intro text-center" data-aos="fade-up">
                    <h1>Get in touch</h1>
                    <div class="divider"></div>
                    <p>Electronic waste, or e-waste, is a term for electronic products that have become unwanted, non-working or obsolete, <br>
                        and have essentially reached the end of their useful life
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto" data-aos="fade-up">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="row g-4">

                        <?php
                        if (isset($message)) {
                            foreach ($message as $message) {
                                echo '<p class="message">' . $message . '</p>';
                            }
                        }
                        ?>
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Full name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="someText" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="text-center">
                        <input type="submit" value="Send Message" name="submit" class="btn btn-main">
                            <!-- <button class="btn btn-main" type="submit">Send Message</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->
    <footer class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">Copyright © 2023. Designed By Ganesh Kumar (Remine India Pvt. Ltd.)</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div>
                        <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-dribbble'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-github'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/app.js"></script>
</body>

</html>