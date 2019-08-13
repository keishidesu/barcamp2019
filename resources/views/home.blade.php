<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BarCamp Cyberjaya 2019</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
  <link href="img/favicon.ico" rel="shortcut icon">
  <meta charset="UTF-8">
  <meta content="BarCamp Cyberjaya 2019" property="og:title">
  <meta content="https://www.barcampcyberjaya.org/" property="og:url">
  <meta content="https://www.barcampcyberjaya.org/img/opengraphimg.jpg" property="og:image">
  <meta content="BarCamp is a user-generated unconference focused around technology. They are open, participatory workshop-events, the content of which is provided by participants. Happening on 5th August 2017." property="og:description">
  <meta name="theme-color" content="#07223D">
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Event",
      "name": "BarCamp Cyberjaya 2017",
      "startDate" : "2017-08-05T09:00+0800",
      "endDate" : "2017-08-05T18:00+0800",
      "url" : "https://www.barcampcyberjaya.org/",
      "location" : {
        "@type" : "Place",
        "sameAs" : "http://fci.mmu.edu.my",
        "name" : "Faculty of Computing & Informatics",
        "address" : "Multimedia University, Persiaran Multimedia, 63100 Cyberjaya, Selangor"
      },
      "description": "Unconference that focuses on technology, programming, and entrepreneurship.",
      "image": "https://www.barcampcyberjaya.org/img/opengraphimg.jpg"
    }
  </script>
  <script src="js/smooth-scroll.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>

<body>
  <!-- navigation -->
  <nav class="page_scroll">
    <div class="drawer">
      <div class="drawer-container">
        <a data-scroll href="#home" onClick="toggleDrawer()">Home</a>
        <a data-scroll href="#about" onClick="toggleDrawer()">About</a>
        <a data-scroll href="#venue" onClick="toggleDrawer()">Venue</a>
        <a data-scroll href="#faq" onClick="toggleDrawer()">FAQ</a>

        <a data-scroll href="#proposed-talks" onClick="toggleDrawer()">Call for Speakers</a>
        <a data-scroll href="#sponsors" onClick="toggleDrawer()">Call for Sponsor</a>
        <a data-scroll href="#exhibitors" onClick="toggleDrawer()">Call for Exhibitors</a>
        <a data-scroll href="#agenda" onClick="toggleDrawer()">BarCamp`19 Sponsors</a>
        <!-- <a data-scroll href="#sponsors" onClick="toggleDrawer()">Past Sponsors</a> -->
        <!-- <a href="https://barcamp-cyberjaya-2017.eventbrite.com/?aff=website" target="_blank" onClick="toggleDrawer()" rel="noopener">Register</a> -->
      </div>
      <div class="scrim" onClick="toggleDrawer()"></div>
    </div>
    <div class="nav-bar">
      <ul id="nav">
        <li id="nav-home">
          <a data-scroll href="#home">HOME</a>
        </li>
        <li id="nav-about">
          <a data-scroll href="#about">ABOUT</a>
        </li>
        <li id="nav-venue">
          <a data-scroll href="#venue">VENUE</a>
        </li>
        <li id="nav-faq">
          <a data-scroll href="#faq">FAQ</a>
        </li>
        <li id="nav-proposed-talks">
          <a data-scroll href="#proposed-talks">CALL FOR SPEAKERS</a>
        </li>
        <li id="nav-sponsor-us">
          <a data-scroll href="#sponsor-us">CALL FOR SPONSORS</a>
        </li>
        <li id="nav-exhibitors">
          <a data-scroll href="#exhibitors">CALL FOR EXHIBITORS</a>
        </li>
        <li id="nav-exhibitors">
          <a data-scroll href="#sponsors">BARCAMP`19 SPONSORS</a>
        </li>
        <!-- <li id="nav-sponsor">
          <a data-scroll href="#sponsors">PAST SPONSORS</a>
        </li> -->
        <!-- <li id="nav-agenda">
          <a data-scroll href="#agenda">AGENDA</a>
        </li>  -->
        
        
        
        <!-- <li id="nav-register">
          <a href="https://barcamp-cyberjaya-2017.eventbrite.com/?aff=website" target="_blank" rel="noopener" class="border-btn">REGISTER</a>
        </li> -->
      </ul>
    </div>
    <div class="nav-bar-mobile">
      <svg onClick="toggleDrawer()" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet">
        <g>
          <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" fill="#FFF"></path>
        </g>
      </svg>
    </div>
  </nav>

  <div class="header">
    <ul id="countdown-wrapper" >
        <div class="title">
          <!-- <h1>BarCamp Cyberjaya</h1> -->
          <img src="img/barcamp-logo.png">
          <h3>
            <ul>
              <li>Date: 17th August 2019</li>
              <li>Time: 12.00 - 7.00 p.m</li>
              <li>Venue: Multipurpose Hall, Multimedia University</li>
            </ul>
          </h3>
        </div>
        <div class="wrap"> 
  
          <div class="countdown">
          <div class="bloc-time days" data-init-value="0">
            <span class="count-title">DAYS</span>
  
            <div class="figure hours hours-1">
            <span class="top">0</span>
            <span class="top-back">
              <span>0</span>
            </span>
            <span class="bottom">0</span>
            <span class="bottom-back">
              <span>0</span>
            </span>
            </div>
  
            <div class="figure hours hours-2">
            <span class="top">0</span>
            <span class="top-back">
              <span>0</span>
            </span>
            <span class="bottom">0</span>
            <span class="bottom-back">
              <span>0</span>
            </span>
            </div>
          </div>
  
          <div class="bloc-time hours" data-init-value="0">
            <span class="count-title">HOURS</span>
  
            <div class="figure min min-1">
            <span class="top">0</span>
            <span class="top-back">
              <span>0</span>
            </span>
            <span class="bottom">0</span>
            <span class="bottom-back">
              <span>0</span>
            </span>        
            </div>
  
            <div class="figure min min-2">
            <span class="top">0</span>
            <span class="top-back">
              <span>0</span>
            </span>
            <span class="bottom">0</span>
            <span class="bottom-back">
              <span>0</span>
            </span>
            </div>
          </div>
  
          <div class="bloc-time min" data-init-value="0">
            <span class="count-title">MINUTES</span>
  
            <div class="figure sec sec-1">
            <span class="top">0</span>
            <span class="top-back">
              <span>0</span>
            </span>
            <span class="bottom">0</span>
            <span class="bottom-back">
              <span>0</span>
            </span>          
            </div>
  
            <div class="figure sec sec-2">
            <span class="top">0</span>
            <span class="top-back">
              <span>0</span>
            </span>
            <span class="bottom">0</span>
            <span class="bottom-back">
              <span>0</span>
            </span>
            </div>
          </div>
  
          <div class="bloc-time sec" data-init-value="0">
            <span class="count-title">SECONDS</span>
  
            <div class="figure sec sec-1">
            <span class="top">0</span>
            <span class="top-back">
              <span>0</span>
            </span>
            <span class="bottom">0</span>
            <span class="bottom-back">
              <span>0</span>
            </span>          
            </div>
  
            <div class="figure sec sec-2">
            <span class="top">0</span>
            <span class="top-back">
              <span>0</span>
            </span>
            <span class="bottom">0</span>
            <span class="bottom-back">
              <span>0</span>
            </span>
            </div>
          </div>
          </div>
        </div>
        </ul>

        <!--REGISTER-->
        <a href="https://www.eventbrite.com/e/barcamp-cyberjaya-2019-tickets-64921018514" target="_blank"><button class="btn btn-light register">GET TICKETS</button></a>

        <div id="slogan" class="row">
          <div class="quoteslide">
            <div class="quote show">"The term 'BarCamp' has nothing to do with alcohol but everything to do with high spirits - a spirit of sharing ideas in a free and fun environment." - Outlook Business</div>
            <div class="quote">"A gathering of folk who, in one way or another, aim to make the world a better place." - Dr Koh Niak Wu</div>
            <div class="quote">"Barcamp Cyberjaya its one amazing adhoc event where we see young mind share their idea and get it feedback with industry fellow." - Mr. Curry Khoo</div>
          </div>
        </div>
  </div>
  <!-- home -->
  <!-- <div id="home" >
    <div id="bclogo">
      <picture>
        <source media="(max-width: 900px)" srcset="img/cover-2.png">
        <img src="img/cover-2 img.png" alt="homepage"/>
      </picture>
    </div>

    countdown
    <ul id="countdown-wrapper">
      <div class="wrap">  
        <h1 class="countdown-title hidden-xl-down">BarCamp Cyberjaya x Jumpstart Program</h1>
        <h1 class="countdown-title hidden-xl-up">BarCamp Cyberjaya</h1>

        <div class="countdown">
        <div class="bloc-time days" data-init-value="0">
          <span class="count-title">DAYS</span>

          <div class="figure hours hours-1">
          <span class="top">0</span>
          <span class="top-back">
            <span>0</span>
          </span>
          <span class="bottom">0</span>
          <span class="bottom-back">
            <span>0</span>
          </span>
          </div>

          <div class="figure hours hours-2">
          <span class="top">0</span>
          <span class="top-back">
            <span>0</span>
          </span>
          <span class="bottom">0</span>
          <span class="bottom-back">
            <span>0</span>
          </span>
          </div>
        </div>

        <div class="bloc-time hours" data-init-value="0">
          <span class="count-title">HOURS</span>

          <div class="figure min min-1">
          <span class="top">0</span>
          <span class="top-back">
            <span>0</span>
          </span>
          <span class="bottom">0</span>
          <span class="bottom-back">
            <span>0</span>
          </span>        
          </div>

          <div class="figure min min-2">
          <span class="top">0</span>
          <span class="top-back">
            <span>0</span>
          </span>
          <span class="bottom">0</span>
          <span class="bottom-back">
            <span>0</span>
          </span>
          </div>
        </div>

        <div class="bloc-time min" data-init-value="0">
          <span class="count-title">MINUTES</span>

          <div class="figure sec sec-1">
          <span class="top">0</span>
          <span class="top-back">
            <span>0</span>
          </span>
          <span class="bottom">0</span>
          <span class="bottom-back">
            <span>0</span>
          </span>          
          </div>

          <div class="figure sec sec-2">
          <span class="top">0</span>
          <span class="top-back">
            <span>0</span>
          </span>
          <span class="bottom">0</span>
          <span class="bottom-back">
            <span>0</span>
          </span>
          </div>
        </div>

        <div class="bloc-time sec" data-init-value="0">
          <span class="count-title">SECONDS</span>

          <div class="figure sec sec-1">
          <span class="top">0</span>
          <span class="top-back">
            <span>0</span>
          </span>
          <span class="bottom">0</span>
          <span class="bottom-back">
            <span>0</span>
          </span>          
          </div>

          <div class="figure sec sec-2">
          <span class="top">0</span>
          <span class="top-back">
            <span>0</span>
          </span>
          <span class="bottom">0</span>
          <span class="bottom-back">
            <span>0</span>
          </span>
          </div>
        </div>
        </div>
      </div>
      </ul>
    quoteslide    
    <div id="slogan" class="row">
      <div class="quoteslide">
        <div class="quote show">"The term 'BarCamp' has nothing to do with alcohol but everything to do with high spirits - a spirit of sharing ideas in a free and fun environment." - Outlook Business</div>
        <div class="quote">"A gathering of folk who, in one way or another, aim to make the world a better place." - Dr Koh Niak Wu</div>
        <div class="quote">"Barcamp Cyberjaya its one amazing adhoc event where we see young mind share their idea and get it feedback with industry fellow." - Mr. Curry Khoo</div>
      </div>
    </div>

    <div id="button" class="row">
      <a href="https://barcamp-cyberjaya-2017.eventbrite.com/?aff=website" target="_blank" rel="noopener" class="button">REGISTER</a>
    </div>
  </div> -->

  <!-- about -->
  <div id="about" class="container white-container">
    <div class="row">     
      <h1 class="description">Unlike typical conferences, BarCamp has no preset of speakers. BarCamp is a user-generated conference that brings people together to share their passion!</h1>
    </div>

      <div class="row">
        <div class="two-column">
          <p><h3>You can choose to be an audience or speaker</h3>
          <span class="sub">You are welcome to share your knowledge or experiences. Speakers are encouraged to talk about technology, entrepreneurship, education or any other topics as long as it does not touch sensitive topics like politics and religions.</span></p>
          
          <p><h3>You can choose who get to speak</h3>
          <span class="sub">Voting session will be held for proposed topics.</span>
          <br><br>
          <span class="sub">That means, the speaker lineup is generated by everyone who comes(including you) on that day itself. We can't wait to see what everyone will share and learn in this BarCamp!</span>
          </p>
          

          <p><h3>You can choose which talks to attend</h3>
          <span class="sub">Multiple talks will be held on the same timetrack, choose the one that you like! You are encouraged to leave the session quietly if you would like to exit a talk at any time.</span></p>

        </div>

        <div class="two-column">
          <p><h3>Talks Awards</h3>
          <span class="sub">Cash voucher will be given out for the top 3 speakers! Not a competition but this is to encourage participants to demonstrate their best presentation and impromptu skills!</span></p>

          <p><h3>Boardgames</h3>
          <span class="sub">None of the talks interest you? Stay in the lobby and play boardgames!</span></p>

          <p><h3>No worry about money</h3>
          <span class="sub">Registration is FREE! Lunch, tea-time and water are provided! Tshirt will be given to those who registered earlier!</span></p>  

          <p><h3>What is more?</h3>
          <span class="sub">There is LUCKYDRAW for participants this year! Arduino Beginner Kits and power banks will be given out!</span></p>
        </div>
      </div>

      <div>
        
      </div>

  </div>

  <!-- venue -->
  <div id="venue" class="container">
    <div class="row">
      <h1>Venue</h1>
      <div id="maps"><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1EmRllrGBXXlx38W93HtaWxILN7vyF_KS" width="640" height="480"></iframe></div>
    </div>
  </div>

  <div id="how-to" class="container white-container">
    <div class="row">
      <h1>How to Get to MMU</h1>
      <div id="public" class="two-column">
        <h2>Public Transport</h2>
        <ol>
          <li>Take KLIA Transit to <b>Putrajaya/Cyberjaya</b> station.</li>
          <li>Take taxi to Multimedia University Faculty of Computing and Informatics, or</li>
          <li>Take the bus Nadi Putra 520 to MMU.</li>
        </ol>
      </div>
      <div id="driving" class="two-column">
        <h2>Driving</h2>
        <ol>
          <li>Just find MMU Cyberjaya on your navigation app.</li>
          <li>Once you are inside there will be road signs showing you where to park!</li>
        </ol>
      </div>
    </div>
  </div>

  <!-- past barcamp photos -->
  <div id="past" class="container">
    <div class="slides">
      <div class="image show"></div>
      <div class="image"></div>
      <div class="image"></div>
      <div class="image"></div>
      <div class="image"></div>
      <div class="image"></div>
      <div class="image"></div>
      <div class="image"></div>
      <a class="hover" href="http://bit.ly/bcpastphotos" target="_blank" rel="noopener">PAST BARCAMP CYBERJAYA</a>
    </div>
  </div>

  <!-- faq -->
  <div id="faq" class="container white-container">
    <div class="row">
      <h1>Frequently Asked Questions</h1>
      <h2 class="highlight">What can we talk about in BarCamp?</h2>
      <p>Speakers are encouraged to conduct sessions that are related to technology, entrepreneurship, and education (because we are
        in a university in Cyberjaya right?). But, you can also talk about any other topics that you like, as long as other
        participants vote on it.</p>
      <p>Speakers should refrain from touching on sensitive topics such as politics and religions.</p>
      
      <h2 class="highlight">How many tracks are there, and how long is each session?</h2>
      <p>There will be a varying number of simultaneous tracks. Each session will be roughly 45 minutes long.</p>
      
      <h2 class="highlight">What are the themes for this year?</h2>
      <p>There are a few focus topics this year, namely:</p>
      <ul>
        <li>Machine Learning</li>
        <li>Web</li>
        <li>AR/MR/VR</li>
        <li>Blockchain</li>
        <li>Cloud</li>
        <li>Mobile Application</li>
        <li>DevOps</li>
        <li>IoT</li>
      </ul>
      <p>Don't worry if your talk doesn't fall into any of these categories, you can still propose a talk and we'll leave the participants to vote on it!</p>

      <h2 class="highlight">What equipments are provided and what do I need to bring?</h2>
      <p>Each MMU FCI classroom is equipped with:</p>
      <ul>
        <li>VGA Projector</li>
        <li>Wi-Fi Access Point</li>
        <li>Power socket</li>
        <li>Whiteboard and markers</li>
      </ul>
      <p>If your device (such as MacBook or iPads) does not have VGA output, please bring your own VGA adapter.</p>
      
      <h2 class="highlight">What about food?</h2>
      <p>There will be free lunch provided. Also, if you signed up as a vegan, we will do our best to cater to your needs.</p>
    </div>
  </div>

  <!--Call for speakers-->
  <div id="proposed-talks" class="container">
    <div class="row">
      <h1>Call for Speakers</h1>
      <p>Come share your awesome ideas with us. We welcome all topics related to technology and the web. Refer to our <a href="#faq">FAQ</a> for more details about submitting a talk.</p>
      <form id="speaker-form" class="flex" name="speaker-form">
        <input class="input" type="text" name="name" placeholder="Full Name" required>
        <input class="input" type="text" name="id-number" placeholder="IC/Passport Number" required>
        <input class="input" type="text" name="background" placeholder="Speaker Profile/Background Details" required>
        <input class="input" type="text" name="title" placeholder="Title of Talk" required>
        <div>
          <select class="input" name="category" required>
            <option value="" disabled selected>Select Talk Category</option>
            <option value="Machine Learning">Machine Learning</option>
            <option value="Web">Web</option>
            <option value="AR/MR/VR">AR/MR/VR</option>
            <option value="Blockchain">Blockchain</option>
            <option value="Cloud">Cloud</option>
            <option value="Mobile Application">Mobile Application</option>
            <option value="DevOps">DevOps</option>
            <option value="IoT">IoT</option>
            <option value="Others" onclick="showOthers()">Others</option>
          </select>
        </div>
        <div class="others">Other Category: <input type="text" class="input" name="other-category" placeholder="Please Specify Category of Talk"></div>
        <textarea class="input" name="description" placeholder="Description of Talk" required></textarea></br>
        <input class="input" type="text" name="contact" placeholder="Email">
        <input class="input" type="text" name="diet" placeholder="Dietary Restriction, If Any." required>
        <input class="input" type="text" name="tshirt" placeholder="T-shirt Size" required>

        <button class="btn btn-light" type="submit" name="submit" id="submit">Submit</button>
        <p class="success-message-speaker"></p>
        <p class="small center">View proposed talks 👇</p>
      </form>
      <a href="/login" target="_blank" rel="noopener"><button class="btn btn-light btn-sm">View proposed topics</button></a>
    </div>
  </div>

  <!--Sponsor us-->
  <div id="sponsor-us" class="container white-container">
    <div class="row">
      <h1>Call for Sponsors</h1>
      <p>Since BarCamp Cyberjaya is free for everyone, we need your help to make it
        possible. We have come a long way, but we still need your support. Your
        generous contribution will help us extend our mission to empower students
        and young professionals through technology.
        <br><br>
        BarCamp Cyberjaya is an opportunity to showcase your company’s products and
        services, attract young talents and increase market share.
      </p>
      <div class="center">
        <button class="btn btn-dark btn-download btn-sm" ><a href="/SponsorhipProposal_BarCampCyberjaya.pdf" download>Sponsorship Proposal</a></button>
        <br>
        Have any inquiries? Drop us an email to <a href="mailto:itsoc.mmu@gmail.com">itsoc.mmu@gmail.com</a>
      </div>
    </div>
  </div>

  <!--Call for exhibitors-->
  <div id="exhibitors" class="container">
    <div class="row">
      <h1>Call for Exhibitors</h1>
      <p>Have something that you would like to share to the world? Showcase your next big idea and innovation at BarCamp Cyberjaya.</p>
      <form id="exhibitor-form" class="flex" name="exhibitor-form">
        <input class="input" type="text" name="name" placeholder="Full Name" required>
        <input class="input" type="text" name="id-number" placeholder="IC/Passport Number" required>
        <input class="input" type="text" name="organization" placeholder="University/Organization" required>
        <input class="input" type="text" name="contact" placeholder="Contact Number" required>
        <input class="input" type="text" name="email" placeholder="Email" required>
        <input class="input" type="text" name="diet" placeholder="Dietary Restriction, If Any." required>
        <input class="input" type="text" name="tshirt" placeholder="T-shirt Size" required>
        <input class="input" type="text" name="project-name" placeholder="Project Name" required>
        <input class="input" type="text" name="project-desc" placeholder="Project Description" required>
        <input class="input" type="text" name="project-link" placeholder="Project Link" required>
        <div>
          <select class="input" name="purpose" required>
            <option value="" disabled selected>What Are You Looking For?</option>
            <option value="Exposure">Exposure</option>
            <option value="Business Opportunity">Business Opportunity</option>
            <option value="Others" onclick="showOthers1()">Others</option>
          </select>
        </div>
        <div class="others">Others: <input type="text" class="input" name="other-purpose" placeholder="Please Specify"></div>
        <button class="btn btn-light" type="submit" name="submit" id="submit">Submit</button>
        <p class="success-message-exhibitor"></p>
        <div class="center">
          <button class="btn btn-dark btn-download btn-sm" ><a href="/Code Of Conduct.pdf" download>Code of Conduct</a></button>
        
        </div>
      </form>
    </div>
  </div>


  <!-- sponsors & partners -->
  <div id="sponsors" class="container white-container">
    <!-- sponsor title -->
    <div class="row">
      <h1>BarCamp`19 Sponsors</h1>
    </div>
    <!-- sponsors logo -->
    <div class="row logo-list">
      <!-- PLATINUM -->
      <!-- Binary.com -->
      <div class="logo">
        <a href="https://www.binary.com" target="_blank" rel="noopener"><img src="img/binary.com.png"/></a>
      </div>
      <!-- Joget -->
      <div class="logo">
        <a href="https://www.joget.org/" target="_blank" rel="noopener"><img src="img/joget.png"/></a>
      </div>
    </div>
    <div class="row logo-list">
      <!--GOLD-->
      <!--Pixl8-->
      <div class="logo">
        <a href="https://www.pixl8.co.uk/" target="_blank" rel="noopener"><img src="img/pixl8.png"></a>
      </div>
      <!--RunCloud-->
      <div class="logo">
          <a href="https://runcloud.io/" target="_blank" rel="noopener"><img src="img/runcloud.png"></a>
      </div>
    </div>
    <!-- partner title -->
    <!-- <div class="row">
      <h1 class="title">Media Partners</h1>
    </div>
    partners logo
    <div class="row logo-list">
      <div class="logo">
        <a href="http://radio.mmu.edu.my/" target="_blank" rel="noopener"><img src="img/radiommu.png"/></a>
      </div>
    </div> -->
  </div>

  <footer class="white-container-container">
    <div class="row">
      <div class="center">
        Organised by <b><a href="https://www.itsociety.rocks/" target="_blank" rel="noopener">IT Society MMU Cyberjaya</a></b>
      </div>
    </div>
  </footer>

  <script src="js/exhibitor-form.js"></script>
  <script src="js/speaker-form.js"></script>

  <script>
    const others = Array.from(document.querySelectorAll('.others'));

    function showOthers(){
      others[0].style.display = 'block';
    }

    function showOthers1(){
      others[1].style.display = 'block';
    }
  
  </script>
  <script type="text/javascript">
    var slides = document.querySelectorAll('.slides .image');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide, 2000);
    var map;

    function nextSlide() {
      slides[currentSlide].className = 'image';
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].className = 'image show';
    }

    var quoteslide = document.querySelectorAll('.quoteslide .quote');
    var qcurrentSlide = 0;
    var qslideInterval = setInterval(nextQuoteSlide, 4000);
    var qmap;

    function nextQuoteSlide() {
      quoteslide[qcurrentSlide].className = 'quote';
      qcurrentSlide = (qcurrentSlide + 1) % quoteslide.length;
      quoteslide[qcurrentSlide].className = 'quote show';
    }

    function toggleDrawer() {
      document.querySelector('.drawer').classList.toggle('show')
    }

    smoothScroll.init();
  </script>
  
  <!-- Live Chat Widget -->
  <script data-align="right" data-overlay="false" id="keyreply-script" src="//keyreply.com/chat/widget.js" data-color="#E4392B" data-apps="JTdCJTIyZmFjZWJvb2slMjI6JTIyMjA2MzIyODQ5NDEyNTQ2JTIyLCUyMmVtYWlsJTIyOiUyMml0c29jLm1tdUBnbWFpbC5jb20lMjIlN0Q="></script>
  <script type="text/javascript" src="js/countdown.js"></script>

</body>
</html>
