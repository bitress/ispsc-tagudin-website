<?php

    include_once __DIR__ . '/ispsc-api/init.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Cyanne Justin Vega">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/favicon/site.webmanifest">
  <title>Home | ISPSC Tagudin</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet"
    type="text/css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
</head>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0"
    nonce="JtPIZXCo"></script>

  <header class="masthead">

    <div class="header-masthead">
      <div class="row">

        <div class="col-8">
          <div class="logo">
            <div class="image-logo">
              <img src="assets/img/ispsc_logo.png" class="logo">
            </div>

            <div class="text-logo">
              <div id="agency-heading">Republic of the Philippines</div>
              <div id="agency-name">Ilocos Sur Polytechnic State College</div>
              <div id="agency-tagline">Tagudin Campus | Tagudin, Ilocos Sur</div>
            </div>
          </div>
        </div>


        <div class="col-4">
          <div id="pst-container">
            <div>Philippine Standard Time:</div>
            <div id="pst-time">
              <a href="#" style="text-decoration: none; color: inherit !important;"></a>
            </div>
          </div>
        </div>
      </div>

    </div>


    <nav>
      <div id="hamburger" class="hamburger-menu">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <ul class="nav-link">
        <li><a href="index.php">Home</a></li>
        <li>About ISPSC
          <ul class="sub-menu">
            <li><a href="about.html">About</a></li>
            <li><a href="mission-and-vision.html">Mission & Vision</a></li>
            <li><a href="hymn.html">Hymn</a></li>
          </ul>
        </li>
        <li><a href="course-offered.html">What We Offer</a</li>
        <li>Be an ISPSCian
          <ul class="sub-menu">
            <li><a href="admission.html">Admission Requirements</a></li>
            <li><a href="procedure-for-enrollment.html">Procedure for Enrollment</a></li>

          </ul>
        </li>
        <li><a href="contacts.html">Contacts</a></li>
      </ul>
    </nav>

  </header>



  <div class="row">

    <div class="col-12">

      <div class="carousel">
        <ul class="slides">
          <input type="radio" name="radio-buttons" id="img-1" checked />
          <li class="slide-container">
            <div class="slide-image">
              <img src="assets/img/banner/1.png">
            </div>
            <div class="carousel-controls">
              <label for="img-3" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-2" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <input type="radio" name="radio-buttons" id="img-2" />
          <li class="slide-container">
            <div class="slide-image">
              <img src="assets/img/banner/2.png">
            </div>
            <div class="carousel-controls">
              <label for="img-1" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-3" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
          <input type="radio" name="radio-buttons" id="img-3" />
          <li class="slide-container">
            <div class="slide-image">
              <img src="assets/img/banner/3.png">
            </div>
            <div class="carousel-controls">
              <label for="img-2" class="prev-slide">
                <span>&lsaquo;</span>
              </label>
              <label for="img-1" class="next-slide">
                <span>&rsaquo;</span>
              </label>
            </div>
          </li>
        </ul>
      </div>
      

    </div>
  </div>


  <div class="container">
    <div class="row">

        <div class="col-4">
          <div class="section">
            <div class="card">
              <h3>Announcements</h3>
              <ul id="announcements">
              </ul>
            </div>
  
            <div class="card">
              <h3>Quick Links</h3>
              <ul>
                <li><a target="_blank" href="https://www.ispsctagudin.info/student-portal/"><i class="far fa-browser"></i>
                  Student Portal</a></li>
                <li><a target="_blank" href="https://www.ispsctagudin.info/library/"><i class="far fa-books"></i>
                    eLibrary</a></li>
              </ul>
            </div>
  
            <div class="card">
              <h3>School Calendar</h3>
              <div class="yt-embed">
                <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=UTC&showNav=1&showTitle=0&src=OWRmYmVmZDAwY2JhMTM3MTJjNGQ3NzA3ZDA4YjE0ZGU1MDU4ZTI3OTk5NjQ2YWIyOWY5OTg0MTc2OTdlODExNUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%234285F4" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
              </div>
            </div>
  
  
            <div class="card" id="ssc-fb">
              <h3>Ammuyo: SSC FB Page</h3>
              <div class="fb-page" data-href="https://www.facebook.com/ssctagudin" data-tabs="timeline" data-width="500"
                data-adapt-container-width="true" data-height="" data-small-header="false"
                data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/ssctagudin" class="fb-xfbml-parse-ignore">
                  <a href="https://www.facebook.com/ssctagudin"></a>
                </blockquote>
              </div>
            </div>
          </div>
        </div>


        

      <div class="col-8">
        <div class="container hero">
          <h3>Welcome to <span style="color: var(--maroon);">Ilocos Sur Polytechnic State College</span></h3>
          <div class="hero-content">
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fssctagudin%2Fvideos%2F1366186200979346%2F&show_text=false&width=560&t=0"  style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
              <p><span>Welcome Back, Panthers!</span> <br>
                “𝐓𝐡𝐞 𝐬𝐭𝐚𝐫𝐭 𝐨𝐟 𝐬𝐨𝐦𝐞𝐭𝐡𝐢𝐧𝐠 𝐧𝐞𝐰 𝐛𝐫𝐢𝐧𝐠𝐬 "The vacay era has finally ended as we welcome the fresh start of our learning journey. Welcome back, ISPSCians!" The vacay era has finally ended as we welcome the fresh start of our learning journey. Welcome back, ISPSCians! oray for another academic year that awaits to showcase our wit and perseverance.
              </p>
          </div>      
        </div>
        <div class="container">
          <div class="row">

              <div class="col-12">
                
              </div>
              <div class="container hero">
                <h3>School News</h3>

                  <?php
                  $news_obj = new News();
                  $per_page = 5;
                  $total_news = count($news_obj->fetchNews());
                  $total_pages = ceil($total_news / $per_page);

                  if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                      $current_page = max(1, min($total_pages, $_GET['page']));
                  } else {
                      $current_page = 1;
                  }

                  $start = ($current_page - 1) * $per_page;
                  $news = array_slice($news_obj->fetchNews(), $start, $per_page);

                  foreach ($news as $row):
                      ?>
                      <div class="blog">
                          <div class="blog-content">
                              <h4><a href="news.php?id=<?= $row['news_id'] ?>"><?= htmlentities($row['news_title']) ?></a></h4>
                              <p <?= (!empty($row["news_image"])) ? 'class="inline-content"' : ""; ?>>
                                  <?php if (!empty($row['news_image'])): ?>
                                      <img class="blog-image" src="<?= $row['news_image'] ?>" alt="">
                                  <?php endif; ?>
                                  <?= ($row['news_content']) ?>
                              </p>
                              <p style="float: right"><i class="fal fa-calendar"></i> <?= date("F j, Y", strtotime($row['date_posted'])); ?></p>
                          </div>
                      </div>
                  <?php endforeach; ?>

                  <div class="container">
                      <ul class="pagination">
                          <?php if ($current_page > 1): ?>
                              <li><a href="index.php?page=<?= $current_page - 1 ?>" class="page-link">Prev</a></li>
                          <?php endif; ?>

                          <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                              <li><a href="index.php?page=<?= $i ?>" class="page-link <?= ($i === $current_page) ? 'active' : '' ?>"><?= $i ?></a></li>
                          <?php endfor; ?>

                          <?php if ($current_page < $total_pages): ?>
                              <li><a href="index.php?page=<?= $current_page + 1 ?>" class="page-link">Next</a></li>
                          <?php endif; ?>
                      </ul>
                  </div>


              </div>
            
          </div>
        </div>

      </div>


    </div>
  </div>


  <footer class="footer">
   
  
    <div class="row">
      <div class="col-4">
        <div class="footer-logo">
          <img src="assets/img/ispsc_logo.png" class="footer-logo-image" alt="ISPSC Logo">
          <p>Ilocos Sur Polytechnic State College <br>Tagudin Campus</p>
        </div>
      </div>
  
      <div class="col-4">
        <div class="footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="course-offered.html">Programs</a></li>
            <li><a href="admission.html">Admissions</a></li>
            <li><a href="contacts.html">Contact Us</a></li>
          </ul>
        </div>
      </div>
  
      <div class="col-4">
        <div class="footer-links">
          <h4>Contact Us</h4>
          <ul>
            <li>Email: <a href="mailto:ispsctagudin@yahoo.com">ispsctagudin@yahoo.com</a></li>
            <li>Phone: 077-674-1474</li>
            <li>Address: Quirino, Tagudin, Ilocos Sur</li>
          </ul>
        
        </div>
      </div>
    </div>


    <div class="marquee-container">
      <marquee id="footer-marquee" width="100%" behavior="right" scrollamount="10">Imagine studying at ISPSC</marquee>
    </div>
  
    <div class="copyright">
      &copy; 2023 Ilocos Sur Polytechnic State College
    </div>

  </footer>
  

  <script src="assets/js/index.js"></script>

</body>

</html>