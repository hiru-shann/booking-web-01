<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../includes/style.css" />
    <link rel="stylesheet" href="../includes/myResponsive.css">
    <title>Booking System</title>

</head>

<body>
    <section class="section1"  id="main-header">
        <nav class="navbar navbar-expand-sm nav1 ">
            <div class="container-fluid div-1 ">

                <a class="navbar-brand logo1" href="../views/index.php"><img src ="../assets/imeges/logo2.png"
                alt="Your Booking Site Logo" class="img-fluid logoimg"> <!-- Adjust width as needed --></a>
             

                 <!-- Hamburger Icon (for small screens) -->
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="mynavbar" >

                    <form class="searchf">
                        <div class="search-1">
                            <button class="search-button1" type="button" data-bs-toggle="modal" data-bs-target="#searchp" >
                            <img src="../assets/icons/search.png" class="search-icon1">
                            </button>
                            <input class="search-input1" type="text" placeholder="Search...." data-bs-toggle="modal" data-bs-target="#searchp" >
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

                    <div class="profile-icon d-flex justify-content-center align-items-center">
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
                    <a class="nav-bottem-barali" href="../views/vaccations.php">Vacations</a>
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

    
    <main>


