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
        
        <div>
          <input type="text" placeholder="user name">
          <input type="password" placeholder="password">
        </div>
          <button class="btn btn-success btns">Sing in</button>
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
         <form>
          <lable>First Name</lable>
            <input type="text" placeholder="First Name" class="inputr" required>
          <lable>Last Name</lable>
            <input type="text" placeholder="Last Name" class="inputr" required>
          <lable>User Name</lable>
            <input type="text" placeholder="User Name" class="inputr" required>
          <lable>Country</lable>
            <input type="text" placeholder="Country" class="inputr" required>
          <lable>Phone Number</lable>
          <input type="number" placeholder="Number" class="inputr" required>
          <lable>Email</lable>
            <input type="Email" placeholder="Email" class="inputr" required>
          <lable>Password</lable>
            <input type="password" placeholder="Password" class="inputr" required>
          <lable>Reapeat Password</lable>
            <input type="password" placeholder="Reapet Password" class="inputr" required>
           

          </form>
        </div>
          <button class="btn btn-success btns">Sing up</button>
          <button class="btn btn-danger btns3">Back</button>
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
