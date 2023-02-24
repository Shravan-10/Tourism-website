                                                    <!-- Om Shri Ganeshah Namah -->
<?php 
session_start();
include 'Project_DB_Query.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incedible tourism</title>
    <link rel="stylesheet" href="CSS/index.css"> <!--Css Style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/media.css"><!--  media css -->
    <!-- fevicon of site -->
    <link rel="icon" type="image/x-icon" href="./images/Logo_Final.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="js/index.js"></script>
</head>
<body>
     <!-- header section  starts -->
    <section id="header">
    <div class="container">
        <div class="nav" id="nav-bar">
            <div class="logo">
                <img src="images/Logo_Final.jpg" alt="">
            </div>
            <div class="nav_list" id="nav_list">
                <ul id="nav_inner">
                    <li><a href="#Animate_section"><i class="fa-sharp fa-solid fa-house-user"></i>Home</a></li>
                    <li><a href="#footer_section"><i class="fa-solid fa-blog"></i>Blogs</a></li>
                    <li><a href="#" ><i class="fa-sharp fa-solid fa-server"></i>Services</a>  
                    <div id="service"> 
                      <ul>
                        <li><a href="#TravelGuide_section"><i class="fa-solid fa-globe"></i>Travel Agents and Guidelines</a></li>
                        <!-- <li><a href="#"><i class="fa-sharp fa-solid fa-hotel"></i>Hotels & Restaurents</a></li> -->
                        <li><a href="Weather/index.html"><i class="fa-solid fa-sun"></i>Weather Fobcast</a></li>
                        <li><a href="Reservation.php" target="_blank"><i class="fa-solid fa-train"></i>IRCTC tour Package</a></li>
                        <li><a href="Give_feedback.php" target="_blank"><i class="fa-solid fa-comments"></i>Feedback & Experiance</a></li>
                     </ul>
                    </div>
                    </li>
                    <li  ><a href="#"id="LogIn"><i class="fa-sharp fa-solid fa-address-card"></i>Log in <span id="Active"></span> </a>
                      <div id="userLog">
                         <ul>
                            <li><a href="Register.php" target="_blank"><i class="fa-solid fa-user"></i>User Register?</a></li>
                            <li><a href="" onclick="LogOut_session()"><i class="fa-solid fa-right-to-bracket"></i>Log Out</a></li>                 
                        </ul>
                      </div>
                   </li>
                </ul>
            </div>
            <div class="sidebar">
                <!-- <div class="hamBurger_box"> -->
                    <i class="fa-solid fa-bars" id="open" onclick="navOpen()"></i>
                <!-- </div> -->
               <!-- <div class="crox_box"> -->
                    <i class="fa-solid fa-xmark" id="close" onclick="navClose()"></i>
                <!-- </div> -->
            </div>
        </div>     
    </div>
    </section>
  <!-- header section  Ends -->
  <!-- Banner-section  -->
  <section id="banner">
       <div class="container">
           <div id="banner_box" class="Banner_parent">
              <div class="in_box">
                 <img src="images/backimag.jpg" alt="" srcset="">
                 <div class="content_box">
                     <h1>Get Away On this Weekend</h1>
                     <P>MUST VISIT DESTINATION</P>
                 </div>
              </div>
              <div class="in_box">
                 <img src="https://cdn.pixabay.com/photo/2016/10/17/19/31/india-1748445__340.jpg" alt="" srcset="">
                 <div class="content_box">
                     <h1>Get Away On this Weekend</h1>
                     <P>MUST VISIT DESTINATION</P>
                 </div>
              </div>
              <div class="in_box">
                 <img src="images/travelPlan.jpg" alt="" srcset="">
                 <div class="content_box">
                     <h1>Get Away On this Weekend</h1>
                     <P>MUST VISIT DESTINATION</P>
                 </div>
              </div>
              <div class="in_box">
                 <img src="images/temple-975324__340.jpg" alt="" srcset="">
                 <div class="content_box">
                     <h1>Get Away On this Weekend</h1>
                     <P>MUST VISIT DESTINATION</P>
                 </div>
              </div>
              <div class="in_box">
                 <img src="images/himalayas-4404708__340.jpg" alt="" srcset="">
                 <div class="content_box">
                     <h1>Get Away On this Weekend</h1>
                     <P>MUST VISIT DESTINATION</P>
                 </div>
              </div>
           </div>
       </div>
  </section>

  <!-- Banner-section  Ends-->
  <!-- Heritage Section Starts  -->
  <section id="Heritage_section">
     <div class="container">
        <div id="haritage_box">
           <h1 class="head">Royal Rendevouz</h1>
           <p class="para">Palaces, forts, museums and art galleries invite you to revel in the heart of history</p>
           <div class="heri_container">
               <div class="heri_box1">
                   <div class="heri_subBox">
                    <img src="images/ancient.jpg" alt="">
                    <div class="heriText">
                        <h3>Ancient Heritage</h3>     
                    </div>
                   </div>
                   <div class="heri_subBox">
                    <img src="images//fort.jpg" alt="" srcset="">
                    <div class="heriText">
                        <h3>Forts & Places</h3>     
                    </div>
                   </div>
               </div>
               <div class="heri_box_mid">
                <img src="images/museum.jpg" alt="">
                <div class="heriText">
                        <h3>Museums</h3>     
                    </div>
               </div>
               <div class="heri_box1">
                   <div class="heri_subBox">
                    <img src="images/architecture.jpg" alt="">
                    <div class="heriText">
                        <h3>Rock Archietecture</h3>     
                    </div>
                   </div>
                   <div class="heri_subBox">
                    <img src="images/artGallry.jpg" alt="">
                    <div class="heriText">
                        <h3>Art Gallery</h3>     
                    </div>
                   </div>
               </div>
           </div>
        </div>
        <!-- Slider in Heritage Section starts -->
        <div id="heritage_slider">
            <h1 class="head">Popular Heritage Destinations In India</h1>
            <div class="sliderBox" data-flickity='{"cellAlign": "left", "contain": true,"wrapAround": true,"pageDots": false}'>
                <div class="slideSub_box" >
                <div class="slideImg">
                    <img src="images/Delhi.jpeg" alt="">
                </div>
                <div class="slideText">
                    <h2>Delhi</h2>
                    <p>With Old Monument and busy neighbourhoods subtly merging with..</p>
                </div>
                </div>
                <div class="slideSub_box">
                <div class="slideImg">
                    <img src="images/Ahemdabad.jpeg" alt="">
                </div>
                <div class="slideText">
                    <h2>Ahemdabad</h2>
                    <p>Declared as India's First UNESCO heritage City Ahemdabad</p>
                </div>
                </div>
                <div class="slideSub_box">
                <div class="slideImg">
                    <img src="images/madurai.jpeg" alt="">
                </div>
                <div class="slideText">
                    <h2>Madurai</h2>
                    <p>One of the oldest Living cities.Madurai holds the soul of tamil.</p>
                </div>
                </div>
                <div class="slideSub_box">
                <div class="slideImg">
                    <img src="images/varansi.jpeg" alt="">
                </div>
                <div class="slideText">
                    <h2>Varanasi</h2>
                    <p>One the oldest living Inhabitations of the world, The sacred city</p>
                </div>
                </div>
                <div class="slideSub_box">
                <div class="slideImg">
                    <img src="images/udaipur.jpeg" alt="">
                </div>
                <div class="slideText">
                    <h2>Udaipur</h2>
                    <p>Popularily known as the city of lakes Serens Udaipur is the crowning..</p>
                </div>
                </div>
                <div class="slideSub_box">
                <div class="slideImg">
                    <img src="images/hampi.jpeg" alt="">
                </div>
                <div class="slideText">
                    <h2>Hampi</h2>
                    <p>A legendry lost city that was one the powerhouse of an ancient.</p>
                </div>
                </div>
                <div class="slideSub_box">
                <div class="slideImg">
                    <img src="images/jodhpur.jpeg" alt="">
                </div>
                <div class="slideText">
                    <h2>Jodhpur</h2>
                    <p>With a Sea of sapphire blue painted houses and gaurded by the...</p>
                </div>
                </div>
                <?php 
                 $sql = "SELECT *FROM heritage_slider";
                 $query = mysqli_query($conn,$sql);
                    while($result = mysqli_fetch_assoc($query)){
                 ?>
                 <?php 
                 echo '<div class="slideSub_box">';
                 echo  '<div class="slideImg">'; ?>
                    <img src="<?php echo $result['image'];?>" alt="">
                <?php 
                echo '</div>';
                echo '<div class="slideText">';
                ?>
                <h2><?php echo $result['head'] ?></h2>
                <p><?php echo $result['para']; ?></p>
                <?php 
                echo '</div>';
                echo '</div>';
                    }
                    ?>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        </div>
         <!-- Slider in Heritage Section starts -->
        </div>
  </section>
  <!-- Banner-section  END-->
  <!-- Wild life section STARTS -->
  <section id="wildlife_section">
    <div class="container">
        <div id="Wild_box">
        <h4>DISCOVER THE WILD</h4>
        <h2>India Wild life holidays</h2>
        <p>India is the richest land in terms of dense greens, forests, vegetations and exotic wildlife. Enjoy Jungle/Jeep Safaris in various wildlife sanctuaries and National Parks and visit the rarest of animal/plant species.</p>
        <div id="wild_container">
            <div class="wild_con1">
                <div class="wild_box_loc">
                    <img src="images/south_india.jpg" alt="South india wild tour">
                    <div class="boxText">
                       South India
                    </div>
                </div>
                <div class="wild_box_loc">
                    <img src="images/north_india.jpg" alt="">
                    <div class="boxText">
                       North India
                    </div>
                </div>
                <div class="wild_box_loc">
                    <img src="images/central_india.jpg" alt="">
                    <div class="boxText">
                       Central India
                    </div>
                </div>
                <div class="wild_box_loc">
                    <img src="images/eastern_india.jpg" alt="">
                    <div class="boxText">
                       Eastern India
                    </div>
                </div>
            </div>
            <div class="wild_con2">
                <h3>MOST VISITED</h3>
                <h1>India wild life Santuaries</h1>
                <div class="wild_subcon">
                    <div class="wild_supcon">
                        <img src="images/ranthambore.jpg" alt="">
                        <div class="boxText">
                        Ranthambore
                    </div>
                    </div>
                    <div class="wild_supcon">
                        <img src="images/Corbett.jpg" alt="">
                        <div class="boxText">
                        Corbett
                    </div>
                    </div> 
                </div>
            </div>
        </div>
        </div>
    </div>
  </section>
    <!-- Wild life section Ends -->
    <!-- Culture-section Starts -->
    <section id="Culture_section">
        <div class="container">
            <h1>Celebrte With Us</h1>
            <p>As you travel through the country, be a part of our festivals and feasts</p>
            <div id="culture_container"data-flickity='{"cellAlign": "left", "contain": true,"wrapAround": true,"pageDots": false}'>
                <div class="Cul_box">
                    <div class="Cul_img">
                        <img src="images/Dekho apna_Desh.jpeg" alt="">
                    </div>
                    <div class="CulText">
                        <h3>DEKHO APNA DESH</h3>
                        <p><span>Year 2023 </span><br><br><span>1..</span></p>
                    </div>
                </div>
                <div class="Cul_box">
                    <div class="Cul_img">
                        <img src="images/Shivratri.jpg" alt="">
                    </div>
                    <div class="CulText">
                        <h3>Shiv Ratri</h3>
                        <p>Saturday, 18 February<br><span>Maha Shivratri 2023</span></p>
                    </div>
                </div>
                <div class="Cul_box">
                    <div class="Cul_img">
                        <img src="images/RathYatra.jpeg" alt="">
                    </div>
                    <div class="CulText">
                        <h3>RathYatra</h3>
                        <p>Tuesday, 20 June <br><span>RathYatra 2023 </span></p>
                    </div>
                </div>
                <div class="Cul_box">
                    <div class="Cul_img">
                        <img src="images/Rakshabandhan.jpeg" alt="">
                    </div>
                    <div class="CulText">
                        <h3>Rakshabandhan</h3>
                        <p>Wednesday, 30 August <br><span>Raksha Bandhan 2023 </span></p>

                    </div>
                </div>
                <div class="Cul_box">
                    <div class="Cul_img">
                        <img src="images/independenceDay.jpeg" alt="">
                    </div>
                    <div class="CulText">
                        <h3>independence Day</h3>
                        <p>Wednesday, 30 August <br><span>Indian Independence Day 2023 </span></p>
                    </div>
                </div>
                <div class="Cul_box">
                    <div class="Cul_img">
                        <img src="images/Onam.jpeg" alt="">
                    </div>
                    <div class="CulText">
                        <h3>Onam</h3>
                        <p>Sunday, 20 August <br><span>To</span><br> Thursday, 31 August<br><span>Onam 2023 </span></p>
                    </div>
                </div>
                <div class="Cul_box">
                    <div class="Cul_img">
                        <img src="images/Ganesh Chaturthi.jpeg" alt="">
                    </div>
                    <div class="CulText">
                        <h3>Ganesh Chaturthi</h3>
                        <p>Tuesday, 19 September <br><span>Ganesh Chaturthi 2023</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- Culture-section Ends -->
   <!-- Animation-setion starts -->
   <section id="Animate_section">
     <div class="container">
        <div class="animation_box">
           <div class="Inner_animate">
              <h2>Welcome To INDIA</h2>
              <h1>Do Come & Visit <span>..</span></h1>
              <h3>INDIA once is not enough</h3>
              <button class="btn1"><a href="#">Learn More</a></button>
              <button class="btn1"><a href="Register.php" target="_blank">Sign Up here</a></button>
           </div>
        </div>
     </div>
   </section>
    <!-- Animation-setion ENDS -->
    <!-- Tour_Section Starts -->
    <section id="tour_section">
    <div class="container">
       <div class="tour_container">
           <div class="tour_box">
              <div class="tour_text">
                 <h2>A QUICK ESCAPE</h2>
                 <h1>Short Break India Tours</h1>
                 <p>Winter destinations in India are best suited for snowy vacations, honeymoon tours and the best of adventure sports. The chilly winters offer...</p>
                 <ul>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Winter Destinations</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Rural Retreats</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Desert Experiences</a></li>
                 </ul>
              </div>
              <div class="tour_img">
                  <img src="http://www.incredibleindia-tourism.org/images/tours/short_break_india_tours.jpg" alt="">
              </div>
           </div> 
           <div class="tour_box">
              <div class="tour_text">
                 <h2>SAILING ON THE WAVES</h2>
                 <h1>India Cruises Tours</h1>
                 <p>The entire India is full of lively rivers, cascading waterfalls, serene backwaters...</p>
                 <ul>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Kerala Backwater Houseboat Cruise</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Rural Retreats</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Sunderban Cruise</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Ganges Cruise</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Assam Bengal Brahmaputra Cruises / Rhino Cruise</a></li>
                 </ul>
              </div>
              <div class="tour_img">
                  <img src="http://www.incredibleindia-tourism.org/images/tours/Curise_india_tour.jpg" alt="">
              </div>
           </div> 
           <div class="tour_box">
               <div class="tour_img">
                   <img src="http://www.incredibleindia-tourism.org/images/tours/india_adventure_tours.jpg" alt="">
               </div>
              <div class="tour_text">
                 <h2>A LUXURIOUS STAY</h2>
                 <h1>India Hotels & Resorts</h1>
                 <p>Every prominent tourist destination in India is dotted with a number of accommodation units to facilitate the tourists. The stay options vary from star rated luxurious...</p>
                 <ul>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>South India</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Central India</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>North & Western India</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Eastern India</a></li>
                 </ul>
              </div>
           </div> 
           <div class="tour_box">
               <div class="tour_img">
                   <img src="http://www.incredibleindia-tourism.org/images/tours/india_hotels_and_resorts.jpg" alt="">
               </div>
              <div class="tour_text">
                 <h2>THRILLING ENGAGEMENTS</h2>
                 <h1>India Adventure Tours</h1>
                 <p>If adventure and thrill is your cup of tea, India is an ideal place suiting your requirements. India, being a land of geographical diversities, offers a wide range of adventure...</p>
                 <ul>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>White Water Rafting</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Skiing</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Scuba Diving and Snorkeling</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Mahaseer Fishing</a></li>
                 </ul>
              </div>
           </div> 
       </div>
    </div>
    </section>
    <!-- Tour_Section Ends -->
    
    <!-- Travel Guidelines Section  -->
      <div id="TravelGuide_section">
        <div class="container">
            <div class="Guideline_box">
                <h1>Travel Guidelines </h1>
                <div class="guide_box">
                    <h2>Transportation Safety tips :</h2>
                    <ul>
                        <li>While traveling you should always keep in mind certain transportation safety tips as well:- Always choose the safest mode of transport for traveling. Do check its previous safety track record.</li>
                        <li>Be mindful of other passengers traveling with you and never hesitate to report any suspicious act to the concerned authorities.</li>
                        <li>Never share cab or taxi with strangers. As carjacking is the biggest threat for a traveler.</li>
                        <li>While traveling by flight, always pay attention to the preflight briefing about closest emergency exit door, fastening your seat belts properly, applying oxygen masks and other important details to be followed in case of emergency.</li>
                        <li>Do not ignore all significant details provided by flight attendant. They are prime source of aid in case of emergency and unexpected turbulence.</li>
                        <li>Wear money belts, hidden neck and waist pouches, hidden pocket wallets and zippered compartments under your clothes to avoid pick pocketing.</li>
                    </ul>
                </div>
                <button type ="button" onclick="show();">Read More..</button>
                <div class="guide_box2" id="guide_box2">
                    <h2>HOTEL SAFETY TIPS :</h2>   
                    <ul>
                        <li>Choosing the safest accommodation at an unknown place could be a biggest concern for you. Therefore be aware of certain tips while choosing a safest hotel for your self.</li>
                        <li>Never hesitate to choose the best and safest hotel in town.</li>   
                        <li>Always carry all the important documents with you while going out of your hotel room.</li> 
                        <li>Prefer to keep your important luggage at receptions locker.</li>              
                        <li>Double check window and door locks before leaving the hotel room.</li>  
                        <li>Get well versed with emergency exits, fire escapes, emergency stairwells to be used in case of emergency.</li>      
                        <li>To make most out of your trip these basic general safety tips can prove to be very helpful.</li>      
                     </ul>
                </div>

            </div>
        </div>
      </div>
    <!-- Travel Guidelines Ends -->

    <!-- Customer Feedaback Section Starts-->
     <section id="feedback_section">
        <div class="container">
            <h1>TESTIMONIALS</h1>
            <p>See what people are saying</p>
            <div class="slide" data-flickity='{"cellAlign": "left", "contain": true,"wrapAround": true,"pageDots": false}'>
            <div class="feedback_box">
                <div class="Cimg_box">
                <i class="fa-solid fa-quote-left"></i>
                <div class="img">
                    <img src="images/jhon.png" alt="">
                </div>
                </div>
                <div class="content_feed">
                    <h3>John Issac/Photographer</h3>
                    <p> I have travelled to more than 125 countries in the last 40 odd years working for the United Nations as a photojournalist and after my retirement, as a freelance photographer. When I make presentations, people ask me which one is my favorite country for photography. Without a doubt it is India. Not because I am from India, but because it is the truth. From state to state the languages are different and so are the cultures. Kashmir is my favorite destination.</p>
                </div>
            </div>
            <div class="feedback_box">
                <div class="Cimg_box">
                <i class="fa-solid fa-quote-left"></i>
                <div class="img">
                    <img src="images/manu.png" alt="">
                </div>
                </div>
                <div class="content_feed">
                    <h3>Mr. Manu Feidel, Celebrity Chef</h3>
                    <p>  India is a brilliant, dynamic and colourful country to shoot in, and the people and stories are always diverse and interesting. We always enjoy visiting, as it is unlike any country, and after shooting there twice, we have now established good relationships and contacts, to navigate such a large country and the logistics that come with working across many states and authorities.</p>  
                </div>
            </div>
            <?php
              $sql = "SELECT *FROM Feedback";
              $run = mysqli_query($conn,$sql);
              while($result = mysqli_fetch_assoc($run)){
            ?>
            <?php
             echo '<div class="feedback_box">';
             echo '<div class="Cimg_box">';
             echo ' <i class="fa-solid fa-quote-left"></i>';
             echo '  <div class="img">';?>
                    <img src="<?php echo $result['Cimg'];?>" alt="">
            <?php
              echo '</div>';
              echo '</div>';
              echo '<div class="content_feed">';?>
                    <h3><?php echo $result['Cname'];?></h3>
                    <p><?php echo $result['Cmessage'];?></p>  
             <?php
             echo '</div>';
             echo '</div>'; }?>
        </div>
     </section>
    <!-- Customer Feedaback Section Ends-->

    <!-- Footer section Starts -->
    <section id="footer_section">
     <div class="container">
       <div class="footer_container">
       <div class="footer_box1">
        <h2>WHY US</h2>
        <h1>Incredible India Holiday</h1>
        <p>To make your Incredible India Holidays a celebration, allow us to serve you with tailor-made India Tour Packages encompassing all the regions of India for tourists of every interest. Awarded with the prestigious National Tourism Award as the Best India Tour Operator for excellence in India Tourism Industry, we have been providing top of the line professional india travel services since the year 1998. We have always endeavored to make our guest's India Tour a memorable and pleasurable affair.</p>
       </div>
       <div class="footer_box2">
        <h2>QUICK</h2>
        <h1>Menu</h1>
        <ul>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Goa Tour</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Kerala Tours Packages</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>All India Tour Packages</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Golden Triangle Tour</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Luxury Trains India</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-angle-right"></i>Incredible India Travel</a></li>
                 </ul>
       </div>
       <div class="footer_logo">
          <img src="images/Logo_Final.jpg" alt="">
          <p>Website made By @Shravan_Kumar_Gupta</p>
       </div>
       </div>
       <div class="footer_links">
         <p>HOME | SOUTH INDIA | NORTH INDIA | NORTH EAST INDIA | WEST/CENTRAL INDIA | TRAVEL ENQUIRY | TRAVEL TOOLS | CONTACT US | ARTICLES |TERMS & CONDITIONS | PRIVACY POLICY</p>
       </div>
       <div id="Footer_Guilde">
          <p id="Footer_para"></p>
       </div>
     </div>
    </section>
    <!-- Footer section ENDs -->



















                                               <!-- Slider Section -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script>
    // $('.Banner_parent').slick();
    $('.Banner_parent').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true
});
// $('.main-carousel').flickity({
//   // options
//   cellAlign: 'left',
//   contain: true
// });
 </script>
                                         <!-- Slider Section End-->

                                          <!--  Javascript Section -->
            <script>
                //       if(isset($_SESSION['AdminId'])){
                //          echo '<script>';
                //          echo 'document.getElementById("LogIn").innerHtml = "$_SESSION["AdminId"]" ';     
                //  
                var a = document.getElementById('LogIn');
                var session = "<?php echo $_SESSION["AdminId"]; ?>";
                console.log(session);
                if(session != ""){
                a.innerHTML="<?php echo $_SESSION["AdminId"]; ?>";
                a.style.color="red"; 
                alert("Welcome !");
                }    
                else{
                    a.innerHTML="Log In";  
                }            
                function LogOut_session(){
                    alert("You are logged Out!");
                    <?php 
                       session_destroy();
                    ?>
                     a.innerHTML="Log In";  
                }  
            </script>
             <!-- Read More Button  -->
             <script>
                function show(){
                    alert("hello motto");
                    var Read = document.getElementById("guide_box2");
                    Read.style.display="block";
                }
             </script>
</body>
</html>   


