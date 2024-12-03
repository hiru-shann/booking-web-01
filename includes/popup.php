

<!-- sign in -->
<!-- Modal -->
<div class="modal fade" id="signIn" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content popups">
      <div class="mdiv-h">
        <button type="button" class="close cbx" data-bs-dismiss="modal">&times;</button>

        <img src="../assets/imeges/logo3.png" alt="" class="img-login-short-logo ">
        <h4 class="fw-bold fs-4 mb-4">
          <span class="d-block">Sign in to unlock the</span>
          <span class="d-block">best of BookMyJourney.</span>
        </h4>
        
        <div class="">
          <form action="../includes/signIn.php" method="POST" class="d-grid" style="row-gap: 20px;">
            <input type="text" name="user_name" placeholder="user name" required>
            <input type="password" name="password" placeholder="password" required>
            <button class="btn btn-success btns" type="submit" style="margin-top: -2px;">Sing in</button>
           
          </form>
        </div>
        
          <p>Don't have an account? <a onclick="singup()">Sign up</a> now to unlock exclusive deals!</p>

          <div class="social-login">
              <button class="social-button">
                  <img src="../assets/icons/google-icon.png" alt="Google" class="social-icon"> Google
              </button>
              <button class="social-button">
                  <img src="../assets/icons/facebook-icon.png" alt="Facebook" class="social-icon"> Facebook
              </button>
              <button class="social-button">
                  <img src="../assets/icons/apple-icon.png" alt="Apple" class="social-icon"> Apple
              </button>
              <button class="social-button">
                  <img src="../assets/icons/mail-icon.png" alt="Apple" class="social-icon">Email
              </button>
          </div>

          <h5>Get ready to:</h5>
          <ul>
            <li>Enjoy extra savings through rewards from our partner sites!</li>
            <li>Effortlessly pick up your search on any device, anytime.</li>
          </ul>

      </div>

      <div class="mdiv-p">
          <img src="../assets/imeges/mv.png">
      </div>

    </div>
  </div>
</div>


<!-- sign up -->

<div class="modal fade" id="singUp" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content popups  popups2">
      <div class="mdiv-h">
        <button type="button" class="close cbx" data-bs-dismiss="modal">&times;</button>
        
        <img src="../assets/imeges/logo3.png" alt="" class="img-login-short-logo ">
        <h4 class="fw-bold fs-4 mb-4">
          <span class="d-block">Sing up to unlock the</span>
          <span class="d-block">best of BookMyJourney.</span>
        </h4>
        
        <div class="dr">
         <form method="POST" action="../includes/signUp.php">

      
          <lable>First Name</lable>
            <input type="text" name="first_name" placeholder="First Name" class="inputr" required value="">
          <lable>Last Name</lable>
            <input type="text" name="last_name" placeholder="Last Name" class="inputr" required value="">
          <lable>User Name</lable>
            <input type="text" name="user_name" placeholder="User Name" class="inputr" required value="">
          <lable>Address</lable>
            <input type="text" name="address" placeholder="Address" class="inputr" required value="">
          <lable>Phone Number</lable>
            <input type="number" name="phone_number" placeholder="Number" class="inputr" required value="">
          <lable>Email</lable>
            <input type="Email" name="email" placeholder="Email" class="inputr" required value="">
          <lable>Password</lable>
            <input type="password" name="password" placeholder="Password" class="inputr" required value="">
          <lable>Reapeat Password</lable>
            <input type="password" name="r_password" placeholder="Reapet Password" class="inputr" required value="">

          <button type="submit" name="submit" class="btn btn-success btns">Sing up</button>
          </form>
        </div>
          <button class="btn btn-danger btns3" data-bs-dismiss="modal" name="back">Back</button>
      </div>

      <div class="mdiv-p">
          <img src="../assets/imeges/mv.png">
      </div>
    </div>
  </div>
</div>


 <!-- search popup -->

 <div class="modal fade ms-n5" id="searchp" role="dialog">
 <div class="modal-dialog " tabindex="-1">
    <div class="modal-content searchPop">
      <div class="modal-header mdsh">
        <form class="searchf">
            <div class="search-1">
                <button class="search-button1" type="button" id="Search" onclick="openSearchModal()" >
                <img src="../assets/icons/search.png" class="search-icon1">
                </button>
                <input class="search-input1" type="text" placeholder="Search...." id="Search" onclick="openSearchModal()" >
            </div>
        </form>
      </div>
      <div class="modal-footer mdsp">
        sdfsdjgfsd
      </div>
    </div>
  </div>
 </div>



