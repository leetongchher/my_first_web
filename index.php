<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5794840617.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</head>
<body>
  <nav>
    <div class="nav-bar">
        <i class='bx bx-menu sidebarOpen' ></i>
        <span class="logo navLogo"><a href="#">Welcome</a></span>

        <div class="menu">
            <div class="logo-toggle">
                <span class="logo"><a href="#">Codepen</a></span>
                <i class='bx bx-x siderbarClose'></i>
            </div>

            <ul class="nav-links">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </div>

        <div class="darkLight-searchBox">
            <div class="dark-light">
              <i class='bx bx-moon moon'><iconify-icon icon="bx:moon"></iconify-icon></i>
              <i class='bx bx-sun sun'><iconify-icon icon="bx:sun"></iconify-icon></i>
            </div>

            <div class="searchBox">
               <div class="searchToggle">
                <i class='bx bx-x cancel'><iconify-icon icon="bx:x"></iconify-icon></i>
                <i class='bx bx-search search'><iconify-icon icon="bx:search"></iconify-icon></i>
               </div>

                <div class="search-field">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search'><iconify-icon icon="bx:search"></iconify-icon></i>
                </div>
            </div>
        </div>
    </div>
</nav>
    <div class="center-col">
        <img class="profile" src="images/user.JPG" alt="">
        <h1 class="heading" id="headingText">"Good Morning" From Lee Tongchher</h1>
        <p class="paragraph">សូមស្វាគមន៍មកកាន់គេហទំព័ររបស់ខ្ញុំបាទ ខ្ញុំបាទជានិសិស្សសិក្សានៅសាកលវិទ្យាល័យ សៅស៍អ៊ីសថ៍អេយសៀជំនាយព័ត៌មានវិទ្យា។</p>
        <div class="img">
            <div class="center gallery">
              <img class="image" src="images/school1.jpg" alt="">
              <img class="image" src="images/pic3.jpg" alt="">
          </div>
        </div>
        <p class="paragraph">ខ្ញុំបាទបញ្ចាប់ការសិក្សានៅវិទ្យាល័យក្នុងឆ្នាំ២០១៩។</p>
        <div class="img">
          <div class="center gallery">
            <img class="image" src="images/school1.jpg" alt="">
            <img class="image" src="images/pic3.jpg" alt="">
        </div>
      </div>
        <h1 class="heading underline">Something you need to know</h1>
        <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <div class="img">
          <div class="center gallery">
            <img class="image" src="images/school1.jpg" alt="">
            <img class="image" src="images/pic3.jpg" alt="">
        </div>
      </div>
    </div>
    <!-- Other Products -->
    <div>
      <h3>Our Services</h3>
      <div>
        <slot>
        </slot>
      </div>
    </div>
    <a class="btn btn-primary" href="#" role="button">Build apps faster on one trusted platform
      <div class="text small">
        <h1>Build apps faster on one trusted platform</h1>
        <p>Discover how to build and automate solutions that deliver success now with Salesforce Customer 360</p>
        <div>
          <dix-button>
            <!-- #shadow-root (open) -->
            <button>Learn more</button>
            "Lern more"
          </dix-button>
        </div>
      </div>
    </a>
      <footer>
        <section class="footer">
          <div class="brand">
            <div class="h5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
      <path fill="#F2C855" d="M3.671 2.832H3.67a.855.855 0 0 0-.854.859V16.57c0 .472.386.858.86.859 1.999.005 5.348.421 7.658 2.839V6.79c0-.16-.04-.31-.118-.435C9.32 3.3 5.675 2.837 3.671 2.832ZM21.185 16.57V3.69a.855.855 0 0 0-.854-.859h-.002c-2.004.005-5.648.469-7.544 3.523a.823.823 0 0 0-.118.435v13.477c2.31-2.418 5.66-2.835 7.659-2.84a.862.862 0 0 0 .86-.858Z"/>
      <path fill="#F2C855" d="M23.141 5.802h-.622V16.57a2.197 2.197 0 0 1-2.19 2.192c-1.696.004-4.492.336-6.472 2.21 3.425-.839 7.035-.294 9.092.175A.857.857 0 0 0 24 20.31V6.661a.86.86 0 0 0-.859-.859ZM1.481 16.57V5.801H.86a.86.86 0 0 0-.86.86v13.648a.857.857 0 0 0 1.05.837c2.058-.47 5.668-1.014 9.093-.176-1.98-1.873-4.776-2.205-6.472-2.209a2.197 2.197 0 0 1-2.19-2.192Z"/>
    </svg>
     Read me.</div>
            <p>General Science is a group of subjects Physics, Chemistry, Biology,Life Science</p>
            <div class="social">
              <a href="#twitter" class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="none" viewBox="0 0 20 16">
                  <path fill="#F2C855" d="M6.038 16c7.246 0 11.208-6.155 11.208-11.492 0-.175-.003-.35-.011-.523A8.127 8.127 0 0 0 19.2 1.894a7.702 7.702 0 0 1-2.262.636A4.038 4.038 0 0 0 18.67.296c-.773.47-1.62.802-2.501.98A3.89 3.89 0 0 0 13.293 0c-2.175 0-3.94 1.809-3.94 4.039 0 .317.035.625.103.92C6.182 4.792 3.28 3.184 1.336.74a4.107 4.107 0 0 0-.533 2.03c0 1.402.695 2.639 1.753 3.363a3.837 3.837 0 0 1-1.784-.505v.051c0 1.956 1.357 3.59 3.16 3.96a3.853 3.853 0 0 1-1.78.069c.502 1.605 1.956 2.773 3.68 2.805A7.78 7.78 0 0 1 0 14.185 10.951 10.951 0 0 0 6.038 16"/>
                </svg>
              </a>
              <a href="https://web.facebook.com/ly.tongchher.50" class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" fill="none" viewBox="0 0 11 20">
                  <path fill="#F2C855" d="m10.009 11.249.555-3.618h-3.47V5.284c0-.99.484-1.955 2.04-1.955h1.577V.244S9.28 0 7.907 0c-2.858 0-4.73 1.733-4.73 4.871v2.76H0v3.618h3.178V20h3.91v-8.751h2.92Z"/>
                </svg>
              </a>
              <a href="https://www.youtube.com/channel/UC-_oimwgml0BNiEur9VANtg" class="social-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" fill="none" viewBox="0 0 18 14">
                  <path fill="#F2C855" d="m9.37 13.043-3.6-.066c-1.166-.023-2.334.023-3.477-.215C.554 12.407.43 10.666.303 9.205a24.955 24.955 0 0 1 .225-6.181c.19-1.143.934-1.825 2.086-1.899C6.5.855 10.413.888 14.29 1.013c.41.012.822.075 1.226.147 1.994.349 2.042 2.322 2.172 3.984a22.587 22.587 0 0 1-.172 5.032c-.198 1.38-.576 2.538-2.172 2.65-2 .146-3.953.263-5.957.226 0-.009-.012-.009-.018-.009ZM7.254 9.55c1.506-.865 2.984-1.716 4.482-2.575-1.51-.865-2.984-1.716-4.482-2.575v5.15Z"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="about">
            <div class="h5">About Us</div>
            <a href="#">Address</a>
            <a href="#">Community update</a>
            <a href="#">Press Kit</a>
            <a href="#">Contact Us</a>
          </div>
          <div class="subjects">
            <div class="h5">Subjects</div>
            <a href="#">English</a>
            <a href="#">Math</a>
            <a href="#">Science</a>
            <a href="#">Social Sceince</a>
          </div>
          <div class="product">
            <div class="h5">Product</div>
            <a href="#">Pricing</a>
            <a href="#">Enterprice</a>
            <a href="#">Integrate</a>
            <a href="#">What’s New</a>
          </div>
          <div class="subscribe">
            <div class="h5">Subscribe Now</div>
            <div class="newsletter">
              <input type="email" name="email" placeholder="Email Address">
              <button type="submit" name="submit">Send</button>
            </div>
          </div>
        </section>
    
        <section class="copyright">
          <p><span>©</span> 2022 Lee Tongchher | University South Eath Asian</p>
          <p>
            <a href="#privacy">Privacy</a>
            |
            <a href="#terms">Terms & Conditions</a>
            |
            <a href="#security">Security & Privacy by Taqwah Digital</a>
          </p>
        </section>
      </footer>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>
<?php  
$user = $_POST["u"];
$pass = $_POST["p"];
if ($user == "admin" && $pass == "123") {
  echo "Login Successfully";
}else{
  echo "Login Fail!!";
}
?>