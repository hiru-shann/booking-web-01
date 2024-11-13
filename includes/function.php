<script>

var myModal = null;
var myModal2 = null;

function singin() {

    // Show the modal using Bootstrap's modal method
    console.log("btn clicked")
    var myModal = new bootstrap.Modal(document.getElementById('signIn'));
    myModal.show();

}


function singup() {

  // Hide the 'signIn' modal if it's open
        var signInModalElement = document.getElementById('signIn');
        var signUpModalElement = document.getElementById('singUp');

        // Check if the 'signIn' modal is visible
        if (signInModalElement.classList.contains('show')) {
            var myModal = bootstrap.Modal.getInstance(signInModalElement);
            if (myModal) {
                myModal.hide();
            }
        }

    // Show the modal using Bootstrap's modal method
    console.log("btn clicked")
    var myModal2 = new bootstrap.Modal(document.getElementById('singUp'));
    myModal2.show();

    //interpace changing
    

}




// document.addEventListener("DOMContentLoaded", function() {
//     const navbar = document.querySelector('.section2');
//     const scrollContainer = document.querySelector('.sectionmain-d'); // Adjusted target

//     scrollContainer.addEventListener('scroll', function() { // Scroll event on the main container
//         if (scrollContainer.scrollTop > 0) {
//             navbar.classList.add('scrolled');
//         } else {
//             navbar.classList.remove('scrolled');
//         }
//     });
// });

// window.addEventListener('scroll', function() {
//     const navbar = document.querySelector('.section2');
//     if (window.scrollY > 0) {
//         navbar.classList.add('scrolled');
//     } else {
//         navbar.classList.remove('scrolled');
//     }
// });


// document.addEventListener("DOMContentLoaded", function () {
//     const nav1 = document.querySelector(".sectionmain-d");
//     const nav2 = document.querySelector("#mainheader");

//     // Initially hide nav2 and show nav1
//     nav1.classList.add('visible');
//     nav2.classList.add('hidden');

//     window.addEventListener("scroll", function () {
//         if (window.scrollY > 180) {  // Adjust the scroll distance as needed
//             nav1.classList.remove('visible');
//             nav1.classList.add('hidden');
//             nav2.classList.remove('hidden');
//             nav2.classList.add('visible');
//         } else {
//             nav1.classList.remove('hidden');
//             nav1.classList.add('visible');
//             nav2.classList.remove('visible');
//             nav2.classList.add('hidden');
//         }
//     });
// });




document.addEventListener("DOMContentLoaded", function () {
    const nav1 = document.querySelector("#nav-2");
    const nav2 = document.querySelector("#mainheader");

    // Initially, hide nav2 and show nav1
    nav2.style.display = "none";
    

    window.addEventListener("scroll", function () {
        if (window.scrollY <= 140) {  // Adjust 100 to the desired scroll distance
            nav1.style.display = "block";
            nav2.style.display = "none";
        }

        else{
            nav1.style.display = "none";
            nav2.style.display = "block";
            
        }
        
    });
});


// // Select the main and small navigation elements
// const mainNav = document.getElementById("mainNav");
// const smallNav = document.getElementById("smallNav");

// // Track the last scroll position
// let lastScrollY = window.scrollY;

// window.addEventListener("scroll", () => {
//     if (window.scrollY > lastScrollY) {
//         // User is scrolling down, hide mainNav and show smallNav
//         mainNav.style.top = "-100px";  // Hide the mainNav
//         smallNav.style.display = "block"; // Show smallNav
//     } else {
//         // User is scrolling up, show mainNav and hide smallNav
//         mainNav.style.top = "0";
//         smallNav.style.display = "none";
//     }
//     // Update the last scroll position
//     lastScrollY = window.scrollY;
// });


// document.addEventListener("DOMContentLoaded", function () {
//     const header = document.getElementById("mainHeader");

//     window.addEventListener("scroll", function () {
//         if (window.scrollY > 100) {
//             header.classList.add("visible");
//         } else {
//             header.classList.remove("visible");
//         }
//     });
// });


//   // Wait until the page is fully loaded
//   document.addEventListener("DOMContentLoaded", function() {
//         const header = document.querySelector("header");
//         const sectionMain = document.getElementById("sectionmain-d");
//         let lastScrollPosition = window.pageYOffset; // Track last scroll position

//         window.addEventListener("scroll", function() {
//             let currentScrollPosition = window.pageYOffset;

//             if (currentScrollPosition > 100 && currentScrollPosition < lastScrollPosition) {
//                 // Scrolled up past 100px
//                 header.style.display = "block";     // Show header
//                 sectionMain.style.display = "none"; // Hide sectionmain-d
//             } else if (currentScrollPosition > 100 && currentScrollPosition > lastScrollPosition) {
//                 // Scrolled down past 100px
//                 header.style.display = "none";      // Hide header
//                 sectionMain.style.display = "block"; // Show sectionmain-d
//             }
//             lastScrollPosition = currentScrollPosition; // Update last scroll position
//         });
//     });


//   // JavaScript to handle the scroll behavior
//   let lastScrollTop = 0;
//     const header = document.getElementById("main-header");
//     const mainSection = document.getElementById("sectionmain-d");

//     // Hide the header initially
//     header.style.display = 'none';

    // window.addEventListener("scroll", function() {
    //     const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    //     // Show the header when scrolling up and hide when scrolling down
    //     if (scrollTop > lastScrollTop && scrollTop > 100) {
    //         header.style.display = 'none'; // Hide header when scrolling down
    //         mainSection.style.display = 'block'; // Show main section
    //     } else if (scrollTop < lastScrollTop && scrollTop < 100) {
    //         header.style.display = 'block'; // Show header when scrolling up
    //         mainSection.style.display = 'none'; // Hide main section
    //     }

    //     lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
    // });




</script>


