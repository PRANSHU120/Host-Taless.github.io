
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOST-TALES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7861db6e11.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <header id="home">
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom fixed-top px-4">
            <div class="container-fluid">
                <a class="navbar-brand fs-2" href="">HOST<span class="text-warning">-TALES</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5  text-center">
                        <li class="nav-item">
                            <a class="nav-link active text-warning" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#PGroom">PG Rooms</a></li>
                                <li><a class="dropdown-item" href="#boyshostel">Boys Hostels</a></li>
                                <li><a class="dropdown-item" href="#girlshostel">Girls Hostels</a></li>
                                <li><a class="dropdown-item" href="#flat">Flats</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#services">Mess</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-warning">Host Property</button>
                </div>
            </div>
        </nav>



        <!--corsel-->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/s2.jpg" class="d-block w-100" alt="first Slider">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>HOST<span class="text-warning">-TALES</span></h5>
                        <p class="text-dark">All in all it felt like a home away from home.</p>
                        <p><a href="#contact">More Info</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/s1.jpg" class="d-block w-100" alt="second Slider">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>HOST<span class="text-warning">-TALES</span></h5>
                        <p class="text-dark">Reach for those good memories, you can't get them back but you can live to
                            make new good memories
                        <p>
                        <p><a href="#contact">More Info</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/a.PNG" class="d-block w-100" alt="third Slider">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>HOST<span class="text-warning">-TALES</span></h5>
                        <p class="text-dark">A Comfort Zone is a Beautiful Place but Nothing Ever Grows There</p>
                        <p><a href="#contact">More Info</a></p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <!--about us-->
    <section class="about my-5" id="about">
        <div class="container-fluid">
            <div class="text-center my-5">
                <h1 data-aos="fade-up" data-aos-offset="200">About <span class="text-warning"> Us</span> </h1>
                <hr / class="w-25 m-auto">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-12" data-aos="zoom-in" data-aos-offset="200">
                        <h1>What <span class="text-warning">We Do ?</span> </h1>


                        <p class="p-2">Host-Tales understands that shifting to a new city is not so easy, nor ending a
                            massive amount of money and energy in searching for accommodation such as Rooms, Houses,
                            Hostels, PGs and also buying daily required products.
                            So we decided to come up with a platform that includes all the options that could help you
                            settle in a new city most simply and quickly, i.e., rental services, bulk food order, and a
                            platform to search for best and appropriate accommodation to stay.

                        </p>
                        <button type="button" class="btn btn-warning mb-5">Know More

                        </button>

                        <div class="accordion" id="accordionExample" data-aos="fade-right" data-aos-offset="200">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button bg-warning text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        WHY CHOOSE US?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Host-Tales understands that unnecessary costs of buying new and high-value
                                        products aren't the best investment option. So we decided to come up with a more
                                        comfortable solution instead. A rental service that helps you explore a world of
                                        possibilities.
                                        A platform which is purely made out of mankind to help unknown's in the city
                                        with an aim to become a solution for all your problems, hassle, and issues.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button bg-warning text-white collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        WE DELIVER QUALITY
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        No Brokerage from Tenant's
                                        No Commission in Hostel/PG admission
                                        No Commission on Rooms/House Rent Service
                                        Reasonable Rental Rates
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button bg-warning text-white collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        WE ARE PASIONATE
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We provide mattresses on rent, air cooler on rent, and heater on rent at a very
                                        pocket-friendly price. With our assured quality and prompt services, you can say
                                        goodbye to all the hassles that come with buying and say hello to convenience.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-end">
                        <img src="images/p1.jpg" class="img-fluid" class="img-thumbnail" width="600px" height="400px"
                            data-aos="fade-up-right" data-aos-offset="200">


                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--services-->

    <section class="services py-5 bg-light">
        <div class="container my-5">
            <div class="text-center">
                <h1>Our<span class="text-warning"> Services</span> </h1>
                <hr / class="w-25 m-auto">
            </div>
            <br>
            <!------PG Rooms------------->
            <div class="text-left" id="PGroom">
                <h1>PG<span class="text-warning"> Rooms</span> </h1>
                <hr / class="w-215 m-auto">
            </div>
            <br>
            <!------------------1st card-------->
            <div class="row" data-aos="zoom-in-up" data-aos-offset="200">
                <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                    <div class="card">
                        <img src="images/kdk.jpg" alt="Denim Jeans" style="width:100%">
                        <h5>Mauli Building</h5>
                        <p class="price">RS-2000</p>
                        <p>Mauli Apartment Plot-185 Police Nager.</p>
                        <p><button>Book</button></p>
                    </div>
                </div>


                <!---------------2nd card----->

                <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                    <div class="card">
                        <img src="images/kdk.jpg" alt="Denim Jeans" style="width:100%">
                        <h5>Demo Building</h5>
                        <p class="price">RS-1500</p>
                        <p>demo address </p>
                        <p><button>Book</button></p>
                    </div>
                </div>


                <!-- 3 card              -->
                <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                    <div class="card">
                        <img src="images/kdk.jpg" alt="Denim Jeans" style="width:100%">
                        <h5>shiv Building</h5>
                        <p class="price">RS-1000</p>
                        <p>Some text about the jeans..</p>
                        <p><button>Book</button></p>
                    </div>

                </div>
            </div>

            <!-----------boys hostel-------->
            <br>
            <br>
            <div class="text-left" id="boyshostel">
                <h1>Boys<span class="text-warning"> Hostels</span> </h1>
                <hr / class="w-215 m-auto">
            </div>
            <br>
            <!------------------1st card-------->
            <div class="row" data-aos="zoom-in-up" data-aos-offset="200">
                <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                    <div class="card">
                        <img src="images/staywell1.jpg" alt="Denim Jeans" style="width:100%">
                        <h5>Stay Well Boys Hostel</h5>
                        <p class="price">RS-3000</p>
                        <p>Plot no.1 Police Nager, Nagpur</p>
                        <p><button>Book</button></p>
                    </div>
                </div>


                <!---------------2nd card----->

                <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                    <div class="card">
                        <img src="images/kdk.jpg" alt="Denim Jeans" style="width:100%">
                        <h5>Deo Boys Hostel</h5>
                        <p class="price">RS-2500</p>
                        <p>4242+CQW Police Nager Nagpur</p>
                        <p><button>Book</button></p>
                    </div>
                </div>


                <!-- 3 card              -->
                <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                    <div class="card">
                        <img src="images/kdk.jpg" alt="Denim Jeans" style="width:100%">
                        <h5>Aqua Boys Hostel</h5>
                        <p class="price">RS-1500</p>
                        <p>Tea Point Nagpur</p>
                        <p><button>Book</button></p>
                    </div>

                </div>
            </div>

            <!-----------Girls hostel-------->
            <br>
            <br>
            <div class="text-left" id="girlshostel">
                <h1>Girls<span class="text-warning"> Hostels</span> </h1>
                <hr / class="w-215 m-auto">
            </div>
            <br>
            <!------------------1st card-------->
            <div class="row" data-aos="zoom-in-up" data-aos-offset="200">
                <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                    <div class="card">
                        <img src="images/kdk.jpg" alt="Denim Jeans" style="width:100%">
                        <h5>Ashirwad Girls Hostel</h5>
                        <p class="price">RS-3000</p>
                        <p>Plot no.56/57/58, Lokmanya Nager Nagpur</p>
                        <p><button>Book</button></p>
                    </div>
                </div>


                <!---------------2nd card----->

                <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                    <div class="card">
                        <img src="images/kdk.jpg" alt="Denim Jeans" style="width:100%">
                        <h5>KDK Girls Hostel</h5>
                        <p class="price">RS-3500</p>
                        <p>Police Nager Nagpur</p>
                        <p><button>Book</button></p>
                    </div>
                </div>


                <!-- 3 card              -->
                <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                    <div class="card">
                        <img src="images/kdk.jpg" alt="Denim Jeans" style="width:100%">
                        <h5>Raggi Girls Hostel</h5>
                        <p class="price">RS-2500</p>
                        <p>CRPF Gate no-3 Police Nager Nagpur</p>
                        <p><button>Book</button></p>
                    </div>

                </div>
            </div>

            <!--------------Flats--------------->
            <br>
            <br>
            <div class="text-left" id="flat">
                <h1>Flat<span class="text-warning">s</span> </h1>
                <hr / class="w-215 m-auto">
            </div>
            <br>
            <!------------------1st card-------->
            <div class="row" data-aos="zoom-in-up" data-aos-offset="200">
                <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                    <div class="card">
                        <img src="images/kdk.jpg" alt="Denim Jeans" style="width:100%">
                        <h5>Flat</h5>
                        <p class="price">RS-7000</p>
                        <p>Some text about the </p>
                        <p><button>Book</button></p>
                    </div>
                </div>


                <!---------------2nd card----->

                <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                    <div class="card">
                        <img src="images/kdk.jpg" alt="Denim Jeans" style="width:100%">
                        <h5>flat</h5>
                        <p class="price">RS-8000</p>
                        <p>Some text about the jeans..</p>
                        <p><button>Book</button></p>
                    </div>
                </div>


                <!-- 3 card              -->
                <div class="col-sm-12 col-md-4 col-lg-4 col-12">
                    <div class="card">
                        <img src="images/kdk.jpg" alt="Denim Jeans" style="width:100%">
                        <h5>Tailored Jeans</h5>
                        <p class="price">RS-9000</p>
                        <p>Some text about the </p>
                        <p><button>Book</button></p>
                    </div>

                </div>
            </div>




    </section>
    <!--Our features-->
    <section class="team my-5 text-center" id="team">

        <div class="container my-5">
            <div class="text-center">
                <h1>Our<span class="text-warning"> Features</span> </h1>
                <hr / class="w-25 m-auto">
            </div>
            <div class="row">

                <div class="col-sm-12 col-md-4 col-lg-4 col-12" data-aos="zoom-in-up" data-aos-offset="200">
                    <div class="card-body">
                        <i class="fas fa-broom bg-warning p-2 text-white round mb-2"></i>
                        <h5 class="card-title mt-4">CLEANESS</h5>
                        
                        <a href="#" class="btn btn-warning">Read More</a>

                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 col-12" data-aos="zoom-in-up" data-aos-offset="200">
                    <div class="card-body">
                        <i class="fas fa-utensils bg-warning p-2 text-white round mb-2"></i>
                        <h5 class="card-title mt-4 ">MESS</h5>
                      
                        <a href="#" class="btn btn-warning">Read More</a>

                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 col-12" data-aos="zoom-in-right" data-aos-offset="200">
                    <div class="card-body">
                        <i class="fas fa-university bg-warning p-2 text-white round mb-2"></i>
                        <h5 class="card-title mt-4">NEAR COLLEGES</h5>
                        
                        <a href="#" class="btn btn-warning">Read More</a>

                    </div>
                </div>




            </div>

    </section>
    <!--Contact us-->

    <section class="contact py-5" id="contact">
        <div class="container">
            <div class="text-center my-5">
                <h1>Feel Free<span class="text-warning"> to Connect</span> </h1>
                <hr / class="w-25 m-auto">
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-12" data-aos="fade-up-left" data-aos-offset="200">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inmobilepunumber4" class="form-label">Mobile Number</label>
                            <input type="mobilenumber" class="form-control" id="inputmobilenumber4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-12 m-auto text-end p-4" data-aos="fade-up-right"
                    data-aos-offset="200">
                    <img src="images/contactus.jpg" class="img-fluid img-thumnail p-2" alt="">
                </div>
            </div>
            </form>


        </div>

    </section>

    <!--MAP-->
    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
            <!--map-->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3714.3851433380396!2d79.91686921441384!3d21.41410147988854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2b04d46413b1bf%3A0xc7edf3bab168f8f6!2sStation%20Road%2C%20Tirora%2C%20Maharashtra%20441911!5e0!3m2!1sen!2sin!4v1631633598275!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1 bg-warning" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1 bg-warning" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1 bg-warning" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1 bg-warning" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1 bg-warning" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                <!-- Github -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1 bg-warning" href="#!" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->


        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgb(255, 208, 0);">
            © 2021 Copyright:
            <a class="text-dark" href="www.HOST-TALES.com">HOST-TALES.com</a>
        </div>
        <!-- Copyright -->
    </footer>















    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>




</body>

</html>