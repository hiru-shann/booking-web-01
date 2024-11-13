<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../includes/style.css" />
    <link rel="stylesheet" href="../includes/myResponsive.css">
    <title>Booking System</title>

</head>

<body>

    <section class=" section1 section1-i"  id="mainheader">
        <nav class="navbar navbar-expand-sm nav1">
            <div class="container-fluid div-1 ">
                <a class="navbar-brand logo1" href="../views/index.php"><img src ="../assets/imeges/logo2.png"
                alt="Your Booking Site Logo" class="img-fluid logoimg"> <!-- Adjust width as needed --></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="../views/index.php">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="mynavbar" >

                    <form class="searchf">
                            <div class="search-1">
                                <button class="search-button1" type="button" >
                                <img src="../assets/icons/search.png" class="search-icon1">
                                </button>
                                <input class="search-input1" type="text" placeholder="Search...." >
                            </div>
                    </form>
                
                    <div class="collapse navbar-collapse nav-2">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                    <a type="button" class="nav-hnames">Discover</a>
                            </li>
                            <li class="nav-item">
                                    <a type="button" class="nav-hnames">Tips</a>
                            </li>
                            <li class="nav-item" >
                                    <a type="button" class="nav-hnames">Review</a>
                            </li>
                        </ul>
                    </div>

                    <div class="currency-d" >
                        <button class="btn icon" type="button">
                            <i class="bi bi-globe2"></i>
                        </button>
                        <div class="line"></div>
                        <div class="currency-n">
                            <a class="currency-nhtml">USD</a>
                        </div>
                    </div>

                    <div class="profile-icon d-flex justify-content-center align-items-center ">
                        <a href="../views/profile.php" class="profile-page-a">
                            <i class="bi bi-person-circle"></i>
                        </a>
                    </div>

                    <div class="sing-b-l">
                        <button type="submit" id="sing-b" class ="btn btn-success sing-b d-none" id="singin" onclick="singin()" >sing in</button>
                    </div>

                </div>

            </div>
        </nav>

        <div class= "new-bottem-bar-d">
            <ul class="nav-bottem-barul">
                <li class="nav-bottem-barli">
                    <a class="nav-bottem-barali" href="../views/hotels.php">Hotels</a>
                </li>
                <li class="nav-bottem-barli">
                    <a class="nav-bottem-barali" href="../views/vaccations.php">Vacctions</a>
                </li>
                <li class="nav-bottem-barli">
                    <a class="nav-bottem-barali" href="../views/resturents.php">Resturents</a>
                </li>
                <li class="nav-bottem-barli">
                    <a class="nav-bottem-barali" href="../views/flight.php" >flights</a>
                </li>
                <li class="nav-bottem-barli">
                    <a class="nav-bottem-barali" href="../views/rentalCars.php">Rental Cars</a>
                </li>
                <li class="nav-bottem-barli">
                    <a class="nav-bottem-barali" href="../views/curies.php">Cruises</a>
                </li>
                <li class="nav-bottem-barli">
                    <a class="nav-bottem-barali" href="../views/forms.php">Forms</a>
                </li>
                <li class="nav-bottem-barli">
                    <a class="nav-bottem-barali" href="../views/thingToDo.php">Things To Do</a>
                </li>
            </ul>
        </div>
    </section>
 
    

    <section class="sectionmain-d" id="sectionmain-d">
        <section class="section2 " id="nav-2" >
            <nav class="navbar navbar-expand-sm nav-2i  ">
                <div class="container-fluid div-2">
                    <div class="div-nav-logo">
                        <a class="navbar-brand logo1" href="../views/index.php"><img src="../assets/imeges/logo2.png"
                                alt="Your Booking Site Logo" class="img-fluid logoimgi"> <!-- Adjust width as needed --></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="../views/index.php">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse nav-2id">
                        <ul class="navbar-nav me-autoi">
                            <li class="nav-item">
                                <a type="button" class="nav-hnames ">Discover</a>
                            </li>
                            <li class="nav-item">
                                <a type="button" class="nav-hnames ">Tips</a>
                            </li>
                            <li class="nav-item">
                                <a type="button" class="nav-hnames ">Review</a>
                            </li>
                            <li class="nav-item">
                                <a type="button" class="nav-hnames ">More</a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-continer">
                        <div class="currency-d ">
                            <button class="btn icon" type="button">
                                <i class="bi bi-globe2"></i>
                            </button>
                            <div class="line"></div>
                            <div class="currency-n">
                                <a class="currency-nhtml currency-nhtmli">USD</a>
                            </div>
                        </div>

                        <div class="profile-icon d-flex justify-content-center align-items-center ">
                        <a href="../views/profile.php" class="profile-page-a">
                            <i class="bi bi-person-circle"></i>
                        </a>
                        </div>

                        <div class="sing-b-l">
                            <button type="submit" id="sing-b" class="btn btn-success sing-b d-none" id="singin" onclick="singin()">sing in</button>
                        </div>
                    </div>
                </div>
            </nav>
        </section>

        <section class="nav-b-i2">
            <h1 class="headin-i">Where to?</h1>

            <div class="new-bottem-bar-d index-top-d">
                <ul class="nav-bottem-barul index-top-d-ul">
                    <li class="nav-bottem-barli">
                        <a class="nav-bottem-barali head-down-i-c" href="#"><img src="../assets/icons/home.png" class="index-img-i">
                        Search All
                        </a>
                    </li>
                    <li class="nav-bottem-barli">
                    <a class="nav-bottem-barali head-down-i-c" href="#"><img src="../assets/icons/sunset.png" class="index-img-i">
                        vaccations
                        </a>
                    </li>
                    <li class="nav-bottem-barli">
                    <a class="nav-bottem-barali head-down-i-c" href="#"><img src="../assets/icons/double-bed.png" class="index-img-i">
                        Hotels
                        </a>
                       
                    </li>
                    <li class="nav-bottem-barli">
                    <a class="nav-bottem-barali head-down-i-c" href="#"><img src="../assets/icons/cutlery.png" class="index-img-i">
                        Resturents
                        </a>
                    </li>
                    <li class="nav-bottem-barli">
                        <a class="nav-bottem-barali head-down-i-c" href="#"><img src="../assets/icons/airplane.png" class="index-img-i">
                        flights
                        </a>
                    </li>
                    <li class="nav-bottem-barli">
                        <a class="nav-bottem-barali head-down-i-c" href="#"><img src="../assets/icons/neural.png" class="index-img-i">
                        Things To Do
                        </a>
                    </li>

                </ul>
            </div>

            <form class="searchf-2 searchf3">
                <div class="search-2">
                    <button class="search-button1" type="button">
                        <img src="../assets/icons/search.png" class="search-icon1">
                    </button>
                    <input class="search-input2" type="text" placeholder="Search....">
                </div>

                <div class="find-div">
                    <button class="find-button">Search</button>
                </div>
            </form>
        </section>
    </section>

    <main>

    <section class="main-i-d">

        <div class="search-all">
            <img src="../assets/imeges/indeximg1.jpg">
            <div class="index-d-i-2">
                <div class="div-index-span-1"> 
                    <span>
                        Discover your perfect getaway,
                        <br>
                        planned in seconds!
                    </span> 
                    <br> 
                    <span> 
                        Get a custom-made itinerary filled with ideas
                        <br>
                        for your next adventure.
                    </span>
                    <br>
                    <button class="btn-tryi">
                        <a class="aib" href="#">
                            Try it
                        </a>
                    </button>
                </div> 

                <img src="../assets/imeges/indeximg1.jpg">

            </div>

        </div>

        <div class="container-fluid vacation">

            <div class="hotes-index-dv">
                <div class="imagegrid-index">
                    <div>
                        <h4 class="helitei">Dream Your Next Trip</h4>
                    </div>
                    <div class="image-gridi">
                        
                        <div class="grid-itemi">
                            <h4 class="headerindex-img-topic">dfgfsdfs</h4>
                            <img src="../assets/imeges/imgvac1.jpg" alt="img">
                            <img  class="icon-index" src="../assets/icons/heart.png" alt="icon">
                        </div>
                        <div class="grid-itemi">
                            <h4 class="headerindex-img-topic" >sdfsdfsdfd</h4>
                            <img src="../assets/imeges/imgvac2.jpg" alt="img">
                            <img  class="icon-index" src="../assets/icons/heart.png" alt="icon">
                        </div>
                        <div class="grid-itemi">
                            <h4 class="headerindex-img-topic" >fdsfsdfsdsdf</h4>
                            <img src="../assets/imeges/imgvac3.jpg" alt="img">
                            <img  class="icon-index" src="../assets/icons/heart.png" alt="icon">
                        </div>
                        <div class="grid-itemi">
                            <h4 class="headerindex-img-topic" >sdfsdsdfsd</h4>
                            <img src="../assets/imeges/imgvac4.jpg" alt="img">
                            <img  class="icon-index" src="../assets/icons/heart.png" alt="icon">
                        </div>
                        <div class="grid-itemi">
                            <h4 class="headerindex-img-topic" >fsdfsdfsd</h4>
                            <img src="../assets/imeges/imgvac5.jpg" alt="img">
                            <img  class="icon-index" src="../assets/icons/heart.png" alt="icon">
                        </div>
                        
                    </div>
                </div>

                <!-- Embed the Pexels video -->
                <video controls autoplay muted loop class="video" >
                    <source src="../assets/imeges/video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

        </div>

        <div class="container-fluid resturent">
      
            <div class="row my-2 row-index" style="margin-top: 20px !important;">
                <div class="col-12 ">
                    <h4 class="">Treat yourself to an award-winning meal</h4>
                    <p class="index-resturent">2024’s Travelers’ Choice Awards Best of the Best Restaurants</p>
                </div>
            </div>
            <div class="row my-2 row-index1">
                <div class="col-12 col-md-3 d-flex justify-content-around    ">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  d-flex justify-content-around   ">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  d-flex justify-content-around  ">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  d-flex justify-content-around  ">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-2 row-index" >
                <div class="col-12  ">
                    <h4 class="">Treat yourself to an award-winning meal</h4>
                    <p class="index-resturent">2024’s Travelers’ Choice Awards Best of the Best Restaurants</p>
                </div>
            </div>
            <div class="row my-2 pb-3 row-index1">
                <div class="col-12 col-md-3  d-flex justify-content-around    ">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  d-flex justify-content-around   ">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  d-flex justify-content-around  ">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  d-flex justify-content-around  ">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid resturent  hotels">
      
            <div class="row my-2 pt-4 row-index" style="margin-top: 20px !important;">
                <div class="col-12  ">
                    <h4 class="">Treat yourself to an award-winning meal</h4>
                    <p class="index-resturent">2024’s Travelers’ Choice Awards Best of the Best Restaurants</p>
                </div>
            </div>
            <div class="row my-2 row-index2 ">
                <div class="col-12 col-md-4 d-flex justify-content-around    ">
                    <div class="card mx-5  border-0" >
                        <div class=" imagediv"></div>
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4  d-flex justify-content-around   ">
                    <div class="card mx-5  border-0" >
                        <div class=" imagediv"></div>
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4  d-flex justify-content-around  ">
                    <div class="card mx-5  border-0" >
                        <div class=" imagediv"></div>
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-2 row-index" style="margin-top: 60px !important;">
                <div class="col-12  ">
                    <h4 class="">Treat yourself to an award-winning meal</h4>
                    <p class="index-resturent">2024’s Travelers’ Choice Awards Best of the Best Restaurants</p>
                </div>
            </div>
            <div class="row my-2 row-index1">
                <div class="col-12 col-md-3 d-flex justify-content-around    ">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  d-flex justify-content-around   ">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  d-flex justify-content-around  ">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  d-flex justify-content-around  ">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/imeges/hotel1.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flight">

        </div>

        <div class="things-to-do">

        </div>

    </section>

    </main>
    <?php 
    include "../includes/function.php";
    include "../includes/popup.php";
    ?>
</body>

</html>