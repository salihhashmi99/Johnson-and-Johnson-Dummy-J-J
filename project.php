<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">

  <title>Homepage | Johnson & Johnson</title>
  <link rel="icon" href="data/head.png">

  <!-- Boxicons CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>
<!--php for images-->
<?php

$con=mysqli_connect("localhost","root","","project");
if(mysqli_connect_errno()){
    echo "ran into a problem";
}
?>
<?php
$query=$con->prepare("SELeCT path FROM images WHERE id=5");
$query->execute();
$result=$query->get_result();
$row=$result->fetch_assoc();
?>
<!--Styling for Slider-->

<body>

  <div id="main_container">
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bxl-c-plus-plus icon'><img src="<?php echo $row['path']; ?>" alt=""></i>
        <div class="logo_name"></div>

        <i class='bx bx-menu' id="btn"></i>
      </div>
      <ul class="nav-list">
        <li>
          <i class='bx bx-search'></i>
          <input type="text" placeholder="Search...">
          <span class="tooltip">Search</span>
        </li>

        <div>
          <a href="#">
            <img src="data\flag.png" alt="error" id="flag">
          </a>
        </div>

        <li>
          <a href="project.php">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
 
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="products.html">
            <i class='bx bxs-box'></i>
            <span class="links_name">Products</span>
          </a>
          <span class="tooltip">Products</span>
        </li>
        <li>
          <a href="caring&living.html">
            <i class='bx bx-heart-circle'></i>
            <span class="links_name">Caring & Giving</span>
          </a>
          <span class="tooltip">Caring & Giving</span>
        </li>
        <li>
          <a href="personal_stories.html">
            <i class='bx bx-medal'></i>
            <span class="links_name">Personal Stories</span>
          </a>
          <span class="tooltip">Personal Stories </span>
        </li>
        <div>
          <a href="#">
            <img src="data\heart.gif" alt="" id="heart">
          </a>
        </div>
      </ul>
      <!--Java Script code side menu-->
      <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");
        closeBtn.addEventListener("click", () => {
          sidebar.classList.toggle("open");
          menuBtnChange();//calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
          sidebar.classList.toggle("open");
          menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
          if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the icons class
          } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");//replacing the icons class
          }
        }
      </script>
      <!--popup HTML-->
      <footer>
        <div class="container">
          <img src="data/cross.png" alt="" class="close">
          <p>This site uses cookies as described in our <a href="#" id="cockies">Cookie Policy</a>.
            Please click the "Accept"<br>
            button or continue to use our site if you agree to our use of cookies.</p>
          <a href="#"><button type="button">Accept</button></a>
        </div>
      </footer>
      <!--Popup script-->
      <script src="popup.js"></script>
    </div>
    <!-- Other Section code-->
    <section class="home-section">

      <!--head Heading-->
      <div class="text_div">
        <p id="text">Johnson & Johnson Announces Plans to Separate Consumer Health Business<a href="#" id="learn">Learn
            More</a></p>
      </div>

      <!--Slider-->
      <!--image 1 php-->
      <?php
$query=$con->prepare("SELeCT path FROM images WHERE id=6");
$query->execute();
$result=$query->get_result();
$row=$result->fetch_assoc();
?>
      <div class="slides-container">
        <div class="slide-image">
          <img src="<?php echo $row['path']; ?>" alt="" />
          <a href="#">
            <div class="slider_txt_div">

              <p>4 Things to Know About RSV in <br> the Time of COVID-19</p>
          </a>
        </div>
        <div class="read_div">
          <a href="#">

            <span class="read_txt">Read the Story <i class="fas fa-chevron-circle-right"></i></span>
          </a>
        </div>
      </div>

      <div class="slide-image">
         <!--image 2 php-->
      <?php
$query=$con->prepare("SELeCT path FROM images WHERE id=7");
$query->execute();
$result=$query->get_result();
$row=$result->fetch_assoc();
?>
        <img src="<?php echo $row['path']; ?>" alt="" />

        <div class="slider_txt_div">
          <p>This Ring May Just Help Protect Women Against HIV</p></a>
        </div>
        <div class="read_div">
          <a href="#">

            <span class="read_txt">Read the Story <i class="fas fa-chevron-circle-right"></i></span>

          </a>
        </div>


      </div>

      <div class="slide-image">
         <!--image 3 php-->
      <?php
$query=$con->prepare("SELeCT path FROM images WHERE id=8");
$query->execute();
$result=$query->get_result();
$row=$result->fetch_assoc();
?>
        <img src="<?php echo $row['path']; ?>" alt="" />

        <div class="slider_txt_div">

          <p>How Johnson & Johnson is Working to Create a Healthier Planet</p></a>
        </div>
        <div class="read_div">
          <a href="#">

            <span class="read_txt">Read the Story <i class="fas fa-chevron-circle-right"></i></span>

          </a>
        </div>

      </div>
      <div class="slide-image">
         <!--image 4 php-->
      <?php
$query=$con->prepare("SELeCT path FROM images WHERE id=8");
$query->execute();
$result=$query->get_result();
$row=$result->fetch_assoc();
?>
        <img src="<?php echo $row['path']; ?>" alt="" />

        <div class="slider_txt_div">

          <p>5 Ways Johnson & Johnson is Helping Build a World of Well</p></a>
        </div>
        <div class="read_div">
          <a href="#">

            <span class="read_txt">Read the Story <i class="fas fa-chevron-circle-right"></i></span>

          </a>
        </div>


      </div>
      <div class="slide-image">
         <!--image 5 php-->
      <?php
$query=$con->prepare("SELeCT path FROM images WHERE id=9");
$query->execute();
$result=$query->get_result();
$row=$result->fetch_assoc();
?>
        <img src="<?php echo $row['path']; ?>" alt="" />


        <div class="slider_txt_div">

          <p>"Our Goal Is to Prevent Lung Cancer from Happening in the First Place"</p></a>
        </div>
        <div class="read_div">
          <a href="#">
            <span class="read_txt">Read the Story <i class="fas fa-chevron-circle-right"></i></span>
          </a>
        </div>
      </div>
  </div>

  <div class="navigation-dots"></div>
<!--SLIDER 1 JAVA SCRIPT CODE-->
  <script src="slider.js"></script>


  <!--Meet some people text-->
  <div id="meettxt_div">

    <h3 id="meet_txt">Meet Some of the People Working to Create a World of Well</h3>
  </div>
  <!--1st three images div-->
  <div id="three_img_div">
    <a href="#">
      <div class="div"> <img src="data\img1.jfif" alt="">
        Jeff's Story: "I'm Developing <br> New Cancer Treatments"</div>
    </a>
    <a href="#">
      <div class="div"><img src="data\img2.jfif" alt="">
        Desi's Story: "I'm Improving <br> Knee-Replacement Surgeries"</div>
    </a>
    <a href="#">
      <div class="div"><img src="data\img3.jfif" alt="">
        Jaclyn's Story: "I'm Innovating <br> Myopia Treatments for Kids"</div>
    </a>
  </div>
  <!--pull virus imageas div-->
  <div id="pull_virus_div">
    <div id="pullimg">

    </div>
    <div id="innovation">
      <a href="#" class="innovation_txt">INNOVATION</a>
    </div>
    <div id="ways_div">
      <a href="#" id="3ways">
        <h3 id="txt_3ways">3 Innovative Ways Researchers Are <br> Rethinking How We Combat the Flu</h3>
      </a>
    </div>
    <a href="#">
      <div id="health_wellness">
        <img src="data\health&wellness.jfif" alt=""><br>
        <a href="#" class="health_txt">HEALTH & WELLNESS</a><br>
        <a href="#">How to Advocate for Yourself at <br> the Dermatologist</a>
      </div>
    </a>
  </div>

  <!--three images with red title-->
  <div id="div_3img">
    <a href="#">
      <div class="div"> <img src="data\virus.jfif" alt="">
    </a>
    <a href="#" class="innovation_txt">INNOVATION</a><br>
    <a href="#" class="txt_3imgs"> How Your Own DNA Could <br> Someday Save Your Vision</a>
  </div>
  <a href="#">
    <div class="div"><img src="data\scope.jfif" alt="">
  </a>
  <a href="#" class="innovation_txt">INNOVATION</a><br>
  <a href="#" class="txt_3imgs"> The Next Frontier of Prostate <br> Cancer Care</a></div>
  <a href="#">
    <div class="div"><img src="data\ofc.jfif" alt="">
  </a>
  <a href="#" class="innovation_txt">CARING & GIVING</a><br>
  <a href="#" class="txt_3imgs">3 Ways Johnson & Johnson Is <br> Proud to Support People With <br> Diverse Abilities</a>
  </div>
  </div>

  <!--slider 2-->
  <div id="slider">
    <input type="radio" name="slider" id="slide1" checked>
    <input type="radio" name="slider" id="slide2">
    <input type="radio" name="slider" id="slide3">
    <input type="radio" name="slider" id="slide4">
    <div id="slides">
      <div id="overflow">
        <div class="inner">
          <div class="slide slide_1">
            <div class="slide-content">
              <h2>Johnson & Johnson Launches a Health Equity <br> </h2>
              <h2 class="line2">Innovation Challenge in 6 U.S. Cities</h2>
            </div>
          </div>

          <div class="slide slide_2">
            <div class="slide-content">
              <h2>"I've Learned I Don't Have to Apologize for</h2>
              <h2 class="line2"> My Psoriasis"</h2>
            </div>
          </div>

          <div class="slide slide_3">
            <div class="slide-content">
              <h2>How Johnson & Johnson Is Supporting the </h2>
              <h2 class="line2"> Next Great Leaders in Mental Health</h2>
            </div>
          </div>

          <div class="slide slide_4">
            <div class="slide-content">
              <h2>The Next Frontier of Prostate Cancer Care</h2>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="controls">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
    </div>

    <div id="bullets">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
    </div>
  </div>
  <!--Slider 2 javascript code-->

  <!--3 round pics-->
  <div class="roundpic_div">

    <div class="round_img"><a href="#"><img src="data/smile.jfif" alt=""></a>
      <h5><a href="#"> 5 Ways Johnson & Johnson Is Working to Improve the Well-Being of the World by 2025</a></h5>
      <h6><a href="#">Read the Story</a></h6>
      <a href="#"><i class="fas fa-chevron-circle-right"></i></a>
    </div>

    <div class="round_img"><a href="#"><img src="data/virus.jfif" alt=""></a>
      <h5><a href="#"> Curing Cancer From Within: The Promise of Cell Therapy</a></h5>
      <h6><a href="#">Read the Story</a></h6>
      <a href="#"><i class="fas fa-chevron-circle-right" id="img2_next"></i></a>
    </div>

    <div class="round_img"><a href="#"><img src="data/mask.jfif" alt=""></a>
      <h5><a href="#">The Double Pandemic: How COVID-19 Is Bringing to Light Health Inequities That Have Long Been a
          Problem in</a></h5>
      <h6><a href="#">Read the Story</a></h6>
      <a href="#"><i class="fas fa-chevron-circle-right" id="img3_next"></i></a>
    </div>
  </div>

  <!--what u are taling AND FACT div-->
  <div id="fact">
    <div id="talking_div">
      <div id="talk_logo_div">
        <img src="data/talk.png" alt="">
        <p>What You're Talking About</p>
      </div>

      <!--For pic 1 -->
      <div class="pic_txt_div">
        <a href="#">
          <img src="data/1.jfif" alt=""></a>
        <a href="#" class="txts">3 Ways Johnson & Johnson <br> Is Proud to Support People With <br> Diverse
          Abilities</a>
        <a href="#" class="likes">1,059 Likes</a>
        <a href="#" class="icon_likes"><i class="fas fa-chevron-circle-right"></i></a>
      </div>

      <div class="pic_txt_div">
        <a href="#">
          <img src="data/2.jfif" alt=""></a>
        <a href="#" class="txts">6 Latest Facts About <br> Johnson & Johnson's <br> Ebola Vaccine</a>
        <a href="#" class="likes">797 Likes</a>
        <a href="#" class="icon_likes"><i class="fas fa-chevron-circle-right"></i></a>
      </div>

      <div class="pic_txt_div">
        <a href="#">
          <img src="data/32.png" alt=""></a>
        <a href="#" class="txts" id="txt3">How Drones Are Being <br> Used to Deliver Lifesaving <br> HIV Drugs to Remote
          <br> Areas of the World</a>
        <a href="#" class="likes">94 Likes</a>
        <a href="#" class="icon_likes"><i class="fas fa-chevron-circle-right"></i></a>
      </div>

      <div class="pic_txt_div">
        <a href="#">
          <img src="data/4.jfif" alt=""></a>
        <a href="#" class="txts">This Ring May Just Help <br> Protect Women Against <br> HIV</a>
        <a href="#" class="likes">52 Likes</a>
        <a href="#" class="icon_likes"><i class="fas fa-chevron-circle-right"></i></a>
      </div>
    </div>

    <div id="factimg_div">
      <img src="data/back.jfif" alt="" id="back_img">
      <img src="data/facts-logo.svg" alt="" class="jandj">
      <h5 id="fact_txt">Fact</h5>
      <p id="can_txt">Can you guess which <br> vintage Johnson & <br> Johnson product <br> adorned festive holiday <br>
        packages
        nearly 100 <br> years ago?</p>
      <a href="#" id="tellme">Tell Me More <i class="fas fa-chevron-circle-right"></i></a>
    </div>
  </div>

  <!--Recent Johnson & Johnson text and 3 images-->
  <div>
    <div id="recent_txt">
      <h3>Recent Johnson & Johnson Initiatives in the Spotlight</h3>
    </div>
    <div id="long_txt">
      <p>Learn more about the company’s latest groundbreaking programs, game-changing innovations and global
        partnerships—all aimed at helping change the trajectory of health for humanity.</p>
    </div>

    <div id="three_img_div" class="images3">
      <a href="#">
        <div class="div"><img src="data/inj.jfif" alt="">
          Check Out Up-to-Date Info <br> About Johnson & Johnson's <br> Janssen COVID-19 Vaccine</div>
      </a>
      <a href="#">
        <div class="div"><img src="data/bed.jfif" alt="">
          How the Johnson & Johnson <br> Center for Health Worker <br> Innovation Is Supporting Those <br> Delivering
          Care on the Front <br> Lines</div>
      </a>
      <a href="#">
        <div class="div"><img src="data/inj2.jfif" alt="">
          How Johnson & Johnson Is <br> Supporting Communities in the <br> Fight Against Ebola</div>
      </a>
    </div>
    <!--Scroll to top-->
    <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
  </div>

  <!--Quick Links-->
  <div class="main_div_links">
    <div id="quiclinks_main_div">

      <div class="quick_links_sub_div">1`
        <h3>QUICK LINKS</h3>
        <ul class="ul">
          <a href="#">
            <li>Letest News</li>
          </a>
          <a href="#">
            <li>About J&J</li>
          </a>
          <a href="#">
            <li>Legal Notice</li>
          </a>
          <a href="#">
            <li>Employees</li>
          </a>
          <a href="#">
            <li>Contact Us</li>
          </a>
        </ul>
      </div>

      <div class="quick_links_sub_div">
        <ul class="ul" id="ul2">
          <a href="#">
            <li>
              Careers</li>
          </a>
          <a href="#">
            <li>
              Media Center</li>
          </a>
          <a href="#">
            <li>
              Products</li>
          </a>
          <a href="#">
            <li>
              Procurement</li>
          </a>
          <a href="#">
            <li>
              Credo Integrity Line</li>
          </a>
        </ul>
      </div>

      <div class="quick_links_sub_div">
        <ul class="ul" id="ul3">
          <a href="#">
            <li>
              Privacy Policy</li>
          </a>
          <a href="#">
            <li>
              Cookie Policy</li>
          </a>
          <a href="#">
            <li>
              Investors</li>
          </a>
          <a href="#">
            <li>
              Our Societal Impact</li>
          </a>
        </ul>
      </div>

      <div class="quick_links_sub_div" id="div4">
        <h3>MORE FROM JOHNSON & JOHNSON</h3>

        <div class="pics_div">
          <a href="#"><img src="data/divp1.jfif" alt=""></a>
          <a href="#" class="name">Janssen</a>
          <p>Pharmaceutical Companies of Johnson & Johnson</p>
        </div>

        <div class="pics_div">
          <a href="#"><img src="data/divp2.jfif" alt=""></a>
          <a href="#" class="name" id="textforimg2">Johnson & Johnson Medical <br> Devices Companies
          </a>
          <p id="pdiv2">Reimagining the Way Healthcare Is Delivered</p>
        </div>

        <div class="pics_div">
          <a href="#"><img src="data/divp3.png" alt=""></a>
          <a href="#" class="name" id="txt3div">Johnson & Johnson Consumer <br> Health
            Johnson</a>
          <p id="pdiv3">Meeting the Personal Care and Wellness Needs of Consumers </p>
        </div>

        <div class="pics_div">
          <a href="#"><img src="data/divp4.png" alt=""></a>
          <a href="#" class="name" id="txt4div">
            Our Consumer Safety and Care <br> Commitment</a>
          <p id="pdiv4">Your Safety Is Our Priority</p>
        </div>

        <div class="pics_div">
          <a href="#"><img src="data/divp5.png" alt=""></a>
          <a href="#" class="name">
            Johnson & Johnson Innovation</a>
          <p>Advancing New Healthcare Solutions Through Collaboration</p>
        </div>

        <div class="pics_div">
          <a href="#"><img src="data/divp16.jfif" alt=""></a>
          <a href="#" class="name">
            Johnson & Johnson Our Story
          </a>
          <p>Learn About the Company's Rich Heritage at Our Digital Museum</p>
        </div>

        <!--Falow us div-->
        <div id="FOLOW_DIV">
          <h3>FOLLOW US</h3>
          <div id="social_icon">
            <a href="#" id="fb"> <i class="fab fa-facebook-square"></i></a>
            <a href="#" id="insta"><i class="fab fa-instagram-square"></i></a>
            <a href="#" id="linkdin"><i class="fab fa-linkedin"></i></a>
            <a href="#" id="twiter"><i class="fab fa-twitter-square"></i></a>
            <a href="#" id="utube"><i class="fab fa-youtube-square" ></i></a>
          </div>
        </div>

        <!--Straignt line div-->
        <div id="straighnt_line">
          <img src="data/line.png" alt="">
        </div>
        
        <!--for line below text-->
        <div id="linebelow_txt">
          <p>
            This site is governed solely by applicable U.S. laws and governmental regulations. Please see our <a href="#"> Privacy
            Policy</a>. Use of this site constitutes your consent to application of such laws and regulations and to our
            <a href="#"> Privacy Policy.</a> Your use of the information on this site is subject to the terms of our <a href="#">Legal Notice</a>. You
            should view the <a href="#">News </a>section and the most recent SEC Filings in the <a href="#"> Investor</a> section in order to receive the
            most current information made available by Johnson & Johnson Services, Inc.<a href="#">  Contact Us</a>  with any questions or
            search this site for more information. <br>
            <p id="donot_txt"><a href="#">Do Not Sell My Personal Information </a></p>
          </p>
        </div>
      </div>
    </div>
  </div>
  
  <!--Last Div-->
  <div id="rights_div">
   <img src="data/jandj.svg" alt="">
   <p>All contents © Copyright Johnson & Johnson Services, Inc.1997-2021. All Rights Reserved.</p>
  </div>
  
  </section>
</body>
</html>