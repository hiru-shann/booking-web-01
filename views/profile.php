<?php
include "../includes/header.php";
?>


<div class="profile-cover-imaege-div mt-5 ">
    <img src="../assets/imeges/profile-icon-1.jpg" alt="" class="profile-img-1 mt-5 ">
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
        <div class="prop-details-d col-sm-4">
            <div class="card p-4">
                <h1 class="custom-card-profile-css fw-bold">Your Achievements</h1>
                <span class="fs-6">Start sharing to unlock</span>
                <button class="">
                    <i class="fa-light fa-lock"></i>
                    <span class="">Write your first review</span>
                    <span class="">Unlorck review milestones</span>
                </button>
                <button class="">
                    <i class="fa-light fa-lock"></i>
                    <span class="">Uploard your first photo</span>
                    <span class="">Unlock photo milestones</span>
                </button>
                <button class="bg-dark">View all</button>
            </div>
            <div class="card"></div>
            <div class="card"></div>
        </div>

        <div class="prop-details-d col-sm-8">
            

        </div>
        
    </div>
   
</section>



<?php
include "../includes/footer.php";
?>