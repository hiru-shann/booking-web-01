<?php
include "../includes/header.php";
?>


<div class="profile-cover-imaege-div mt-5 position-relative">
    <img src="../assets/imeges/profile-icon-1.jpg" alt="" class="profile-img-1 mt-5 ">
    <button class="border-0 position-absolute top-50 start-50 ">
        <i class="fa-regular fa-image me-2"></i>
        <span class="">Add cover photo</span>
    </button>
</div>

<section class="container main-profile-div  position-relative   mb-4">
    
    <div class="card  p-4 bg-white rounded ">
        <div class="row p-2 mb-2">
                <div class="col-sm-2 ">
                    <img src="../assets/imeges/profile-icon-2.jpg" alt="" class="profile-img-2 rounded-circle">
                </div>
                <div class="container col-sm-6 mt-1 mt-n5">
                    <h1 class="display-6 fw-bold h1">tharu</h1>
                    <span class="span1">@44tharinduh</span>
                    <div class="mt-3 fs-5">
                        <div class="row fw-bold ">
                            <span class="col-sm-4">Contributions</span>
                            <span class="col-sm-4">Followers</span>
                            <span class="col-sm-4">Following</span>
                        </div>
                        <div class="row ms-0">
                            <span class="col-sm-4">0</span>
                            <span class="col-sm-4">0</span>
                            <span class="col-sm-4">0</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex justify-content-end align-items-start me-4 p-2 ">
                    <button class="p-1 bg-light rounded">
                        <span class=" border-end border-dark border-2 px-3">Edit profile</span>
                        <i class="bi bi-gear p-2"></i>

                </button>
                </div> 
            </div>

            <div class="row p-2 ms-0 d-block">
                <span class="cursor-pointer">Activity feed</span>
                <span class="cursor-pointer">Trips</span>
                <span class="cursor-pointer">Photos</span>
                <span class="cursor-pointer">Reviews</span>
                <span class="cursor-pointer">Forums</span>
                <span class="cursor-pointer">Travel map</span>
            </div>
    </div>


   
</section>

<section class="container">
    <div class="row row-p-r">
        <div class="prop-details-d1 col-sm-3 ">
           <div class="d-grid gap-3">
                <div class="card p-4">
                    <h1 class="custom-card-profile-css fw-bold">Your Achievements</h1>
                    <span class="mb-2">Start sharing to unlock</span>
                    <button class="border-dark mb-2 rounded bg-white border-1 p-2 d-flex align-items-center justify-content-center gap-2" >
                        <i class="fa fa-lock "></i>
                        <span class=" ms-2">
                            <span class="fw-medium">Write your first reviews</span>
                            <small class="d-block me-2">Unlorck review milestones</small>
                        </span>                    
                    </button>
                    <button class="border-dark mb-2 rounded bg-white border-1 p-2 d-flex align-items-center justify-content-center gap-2" >
                        <i class="fa fa-lock ms-2"></i>
                        <span class=" ms-1">
                            <span class="fw-medium">Uploard your first photo</span>
                            <small class="d-block me-4 ms-1">Unlock photo milestones</small>
                        </span>                    
                    </button>
                    <button class="bg-black w-100 rounded-pill border-0 py-2 text-white fs-6">View all</button>
                </div>
                <div class="card p-4">
                    <div class="row g-2 pb-4">
                        <h5 class="">Intro</h5>
                        <span class="">
                            <i class="fa-solid fa-location-dot ms-2 me-1"></i>
                            <span class="">Wennappuwa, Sri Lanka</span>
                        </span>
                        <span class="">
                            <i class="fa-regular fa-calendar-days ms-2 me-1"></i>
                            <span class="">Joined in Nov 2024</span>
                        </span>
                        <span class="">
                            <button class="outline-0 border-0 bg-white">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                            <span class="">Add a website</span>
                        </span>
                        <span class="">
                            <button class="border-0 outline-0 bg-white">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                            <span class="">Write some details about yourself</span>
                        </span>
                    </div>
                </div>
                <div class="card p-4 mb-3">
                    <div class="row gap-3 ">
                        <h5 class="">Share your travel advice</h5>
                        <button class="border-0 bg-white d-flex justify-content-start align-items-center">
                            <i class="fa-solid fa-camera  me-2"></i>
                            <span class="">Post photos</span>
                        </button>
                        <button class="border-0 bg-white d-flex justify-content-start align-items-center">
                            <i class="fa-solid fa-pen-to-square me-2"></i>
                            <span class="">Write review</span>
                        </button>

                    </div>
                    

                </div>
           </div>
        </div>

        <div class="prop-details-d2 col-sm-9 mb-3">
            <div class="card p-4 h-100">
                <h4 class="">Fill Out Your Profile</h4>
                <span class="">Add photos and info to your profile so people can find you easily and get to know you better!</span>
            </div>
        </div>
        
    </div>
   
</section>



<?php
include "../includes/footer.php";
?>