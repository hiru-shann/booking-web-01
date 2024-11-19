<?php
    include "../includes/header.php";
?>
<section class="container sec-hotel-p">
    <div class="container-fluid" aria-label="breadcrum">
        <ol class="breadcrumb mb-2">
          <li class="breadcrumb-item"><a href="#" class="text-dark  hover-underline">United States</a></li>
          <li class="breadcrumb-item"><a href="#" class="text-dark  hover-underline">Illinois (IL)</a></li>
          <li class="breadcrumb-item"><a href="#" class="text-dark  hover-underline">Chicago</a></li>
          <li class="breadcrumb-item"><a href="#" class="text-dark  hover-underline">Chicago Restaurants</a></li>
          <li class="breadcrumb-item active" aria-current="page">Oriole</li>
        </ol>
    </div>

    <div class="container-fluid hotel-p-d1 row "> 
        <h2 class="hotel-p-h col-sm-6">Oriole <span class="unclaimed">Unclaimed</span></h2> 
        <div class="hotel-save-button-d col d-flex justify-content-end align-items-center">
            <button class="hotel-button">
                <img src="../assets/icons/share.png" alt="" class="img-hotel-i-share">
            </button>
            <button class="hotel-button">
                <img src="../assets/icons/heart.png" alt="" class="img-save">
                save
            </button>          
        </div>
    </div>

    <div class="container-fluid mb-5">
        <div class="ratings me-3 mb-1 fw-normal">
            <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                <circle cx="9" cy="9" r="9" />
            </svg>
            <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                <circle cx="9" cy="9" r="9" />
            </svg>
            <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                <circle cx="9" cy="9" r="9" />
            </svg>
            <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                <circle cx="9" cy="9" r="9" />
            </svg>
            <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                <circle cx="9" cy="9" r="9" />
            </svg>
    
           <span class="fw-bold">175 reviews</span> | 
           <span class="fw-bold">#53</span> 
           <span>of 8,549 Restaurants in Chicago</span> | 
           <span>$$$$,American,Gluten free options</span>
        </div>

        <div class="fw-normal fs-6">
            <span>
                <i class="bi bi-geo-alt"></i>
                661 W. Walnut St., Chicago, IL 60661 |
            </span>
            <span>
                <i class="bi bi-telephone"></i> 
                +1 312-877-5899 |
            </span>
            <span>
                <i class="bi bi-laptop"></i>
                + Add website |
            </span>
            <span >
                <i class="bi bi-pen"></i>
                Write a Review |
            </span>
            <span class="fw-bold me-2">
                <i class="bi bi-clock"></i>
                Closed now  
            </span>
            <span >
                See all hours 
                <i class="bi bi-info-circle"></i> |
            </span>
            <span>
                <img src="" alt="" class="img-hotel-span-icon"> 
                Improve this listing |
            </span>
        </div>
        <div>
            <span class="text-danger">
                <i class="bi bi-flower3"></i>
                <i class="bi bi-flower3"></i>
                MICHELIN
            </span>
        </div>

    </div>


  

    <div class="container-fluid row hotel-p-d3  mb-4">


        <div id="carousel-img" class="slide col-sm-8 carousel hotel-p-d-1 position-relative" data-bs-ride="carousel">
            <div class="carousel-inner mb-3">
                        
                <div class="  carousel-item active ">
                    <img src="../assets/imeges/hotel4.jpeg" alt="Large Image" class="img-fluid object-fit-cover rounded img-hotel-01 d-block mt-5  w-100 "> 

                </div>
                
                <div class=" carousel-item  ">
                    <img src="../assets/imeges/hotel2.jpeg" alt="Large Image" class="img-fluid object-fit-cover rounded img-hotel-01 d-block mt-5  w-100">
                   
                </div>

                <div class="  carousel-item ">
                    <img src="../assets/imeges/hotel4.jpeg" alt="Large Image" class="img-fluid object-fit-cover rounded img-hotel-01 d-block mt-5  w-100 "> 
                   
                </div>
                
                <div class=" carousel-item  ">
                    <img src="../assets/imeges/hotel1.jpeg" alt="Large Image" class="img-fluid object-fit-cover rounded img-hotel-01 d-block mt-5  w-100">
                   
                </div>

                <div class=" carousel-item  ">
                    <img src="../assets/imeges/hotel2.jpeg" alt="Large Image" class="img-fluid object-fit-cover rounded img-hotel-01 d-block mt-5  w-100">
                   
                </div>

                <div class=" bottom-0 mt-5 start-0 p-2 text-white text-overlay position-relative img-div-html">
                    <span>342</span> <!-- Icon or text here -->
                </div>

            </div>
             <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-img" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-img" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
      

        <!-- Right Column with Stacked Images -->
        <div class="col-sm-4 d-flex flex-column hotel-p-d-2">

            <div class=" position-relative">
                <img src="../assets/imeges/hotel4.jpeg" alt="Interior" class="img-fluid object-fit-cover rounded img-hotel-02">
                <div class=" bottom-0 start-0 p-2 text-white ">
                    <span>Interior</span>
                    <span class="badge bg-secondary">18</span>
                </div>
            </div>

            <div class=" position-relative">
                <img src="../assets/imeges/hotel4.jpeg" alt="Food" class="img-fluid object-fit-cover rounded img-hotel-02">
                <div class="  bottom-0 start-0 p-2 text-white ">
                    <span>Food</span> 
                    <span class="badge bg-secondary">286</span>
                </div>
            </div>

            <div class="position-relative">
                <img src="../assets/imeges/hotel4.jpeg" alt="Menu" class="img-fluid object-fit-cover rounded img-hotel-02">
                <div class="  bottom-0 start-0 p-2 text-white ">
                    <span>Menu</span> 
                    <span class="badge bg-secondary">4</span>
                </div>
            </div>
        </div>      
    </div>

    
    <div class="container-fluid hotel-p-d4 row mb-4">
        <div class="col-md-4 mb-3 mb-sm-0">
            <div class="card h-100">
                <div class="card-body align">
                    <h5 class="card-title fw-bold">Ratings and reviews</h5>

                    <div class="div-grid-hotel-1 mb-3 d-flex align-items-center ">
                        <span class="fs-4 fw-bold me-1 ">5.0 </span>
                        <div class="d-flex mt-1 me-1">
                            <svg width="20" height="20" fill="#006400">
                                <circle cx="9" cy="9" r="9"></circle>
                            </svg>
                            <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                                <circle cx="9" cy="9" r="9" />
                            </svg>
                            <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                                <circle cx="9" cy="9" r="9" />
                            </svg>
                            <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                                <circle cx="9" cy="9" r="9" />
                            </svg>
                            <svg width="20" height="20" fill="#006400"> <!-- Dark green color code -->
                                <circle cx="9" cy="9" r="9" />
                            </svg>
                        </div>
                        <span class="fw-bold custom-hover custom-styles" >175 reviews</span>
                   </div>

                   <div class="mb-3">
                        <div class="custom-hover">
                            <span class="fw-bold">#53</span> 
                            <span >of 8,549 Restaurants in Chicago</span>
                        </div>
                       
                   </div>

                   <div >
                        <span class="text-danger ms-4 p-3">MICHELIN</span>
                   </div>
                   <div class=" mb-5 ">
                        <i class="bi bi-flower3 text-danger"></i>
                        <i class="bi bi-flower3 text-danger"></i>
                        <span class=" fw-light text-dotted-underline ">View more on MICHELIN Guide</span>
                   </div>
                   <div class="border-top">
                        <h6 class="mt-4 fw-bold">
                        RATINGS 
                        </h6>
                        <div class="div-hotel-grid-span-1 d-flex  justify-content-between align-items-center mb-3">
                            <span class="me-4">
                                <img src="../assets/icons/restaurant.png" alt="" class="ing-food-hotel-grid-icon">
                                Food
                            </span>
                            <div class="d-flex">
                                <svg width="20" height="20" fill="#006400">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                                <svg width="20" height="20" fill="#006400">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                                <svg width="20" height="20" fill="#006400">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                                <svg width="20" height="20" fill="#006400">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                                <svg width="20" height="20" fill="#006400">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="div-hotel-grid-span-1  d-flex justify-content-between align-items-center mb-3">
                            <span>
                                <i class="fa-solid fa-bell-concierge"></i> 
                                Servise
                            </span>

                            <div class="d-flex ">
                                <svg width="20" height="20" fill="#006400" class=" mt-n-2">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                                <svg width="20" height="20" fill="#006400" class=" mt-n-2">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                                <svg width="20" height="20" fill="#006400" class=" mt-n-2">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                                <svg width="20" height="20" fill="#006400" class=" mt-n-2">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                                <svg width="20" height="20" fill="#006400" class=" mt-n-2">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                            </div>
                            
                        
                        </div>
                        <div class="div-hotel-grid-span-1 d-flex justify-content-between align-items-center">
                            <span >
                                <i class="fa-solid fa-wallet"></i>
                                Value
                            </span>
                            <div class="d-flex">
                                <svg width="20" height="20" fill="#006400">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                                <svg width="20" height="20" fill="#006400">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                                <svg width="20" height="20" fill="#006400">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                                <svg width="20" height="20" fill="#006400">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                                <svg width="20" height="20" fill="#006400">
                                    <circle cx="9" cy="9" r="9"></circle>
                                </svg>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3 mb-sm-0">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Details</h5>
                    <h6>CUISINES</h6>
                    <p class="card-text">American</p>
                    <h6>Special Diets</h6>
                    <p class="card-text">Gluten free options</p>
                    <h6>Meals</h6>
                    <p class="card-text">Dinner</p>
                    <a href="#" class="text-dark">View all details</a>
                    <p class="card-text">features</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Location and contact</h5>
                    <img src="../assets/imeges/map.PNG" alt="map" class="map-img rounded">
                    <div class="d-flex flex-column gap-3 mt-3">
                        <span class="">
                        <i class="bi bi-geo-alt-fill"></i>
                            <a href="#" class="text-decoration-none text-dark custom-hover">661 W. Walnut St., Chicago, IL 60661</a>
                        </span>
                        <span class="">
                            <i class="bi bi-buildings-fill"></i>
                            Fulton River District
                        </span>
                        <span class="">
                            <i class="bi bi-envelope-fill"></i>
                            <a href="#" class="text-decoration-none text-dark custom-hover">Email</a>
                        </span>
                        <span class="">
                            <i class="bi bi-telephone-fill"></i>
                            <a href="#" class="text-decoration-none text-dark custom-hover">+1 312-877-5899</a>
                        </span>
                        <span class="">
                            <a href="#" class="text-decoration-none text-dark custom-hover custom-styles fw-bold">Improve this listing</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 h-100 bg-primary">efefsfsdfsdf</div>

</section>


<?php
    include "../includes/footer.php";
?>