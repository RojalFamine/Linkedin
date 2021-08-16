<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="instyle.css" />
    <link rel="stylesheet" href="style.css" />

  </head>
  <body>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <?php include_once "functions.php";?>
    <?php include "header.php"?>
    <div class="ad-cont">
      <a href="#" class="my-ad-link">Lorem Ipsum is simply -</a>
      <p>Dummy text of the printing and typesetting industry.</p>
      <span>Ad</span><a href="#" class="ad_more_link"><img src="fonts/more.svg" alt="more"></a>
    </div>
    <div class="main-content">
      <div class="page-head container">
        <div class="head-background"></div>
        <div class="head-content">
          <div class="head-left">
            <div class="left-first-row">
              <div class="head-prof-pic-back">
                <div class="head-prof-pic"></div>
              </div>
              <div class="head-prof-info">
                <span class="head-prof-name">Profile name</span>
                <div class="prof-small-info">
                  <span>Industry</span>
                  <img class="dot" src="fonts/dot.svg" alt="">
                  <span>City, State</span>
                  <img class="dot" src="fonts/dot.svg" alt="">
                  <span>623 flollowers</span>
                </div>
              </div>
            </div>
            
            <a href="#" class="go-to-site">
              Visit website 
              <svg viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 8V11C10 11.2652 9.89464 11.5196 9.70711 11.7071C9.51957 11.8946 9.26522 12 9 12H1C0.734784 12 0.48043 11.8946 0.292893 11.7071C0.105357 11.5196 0 11.2652 0 11V3C0 2.73478 0.105357 2.48043 0.292893 2.29289C0.48043 2.10536 0.734784 2 1 2H4V4H2V10H8V8H10ZM11 0H6V2H8.67L4 6.67L5.33 8L10 3.33V6H12V1C12 0.734784 11.8946 0.48043 11.7071 0.292893C11.5196 0.105357 11.2652 0 11 0Z" fill="white"/>
              </svg>
            </a>
          </div>
          <div class="head-right">
            <div class="first-row">
              <a href="#" class="prof-follow-link"><img src="cont/check.svg" alt="">Following</a><a href="#" class="follow-more-link"><img src="fonts/more.svg" alt="more"></a>
            </div>
            <div class="second-row">
              <div class="prof-pic-circle1"></div>
              <div class="prof-pic-circle2"></div>
              <div class="prof-pic-circle3"></div>
              <span class="connections">John & 12 other connections work here</span>
            </div>
            <a href="#" class="third-row">See all 79 employees on LinkedIn</a>
          </div>
        </div>
      </div>
      <div class="page-cont container">
        <div class="left-side-bar"><?php include "left-side-menu.php"?></div>
        <div class="middle-content" id="tabs">
          <div class="middle-top">
            <nav class="middle-nav" >
              <ul>
                <li><a href="#tabs-1" class="post-item active">All</a></li>
                <li><a href="#tabs-2" class="post-item">Images</a></li>
                <li><a href="#tabs-3" class="post-item">Documents</a></li>
                <li><a href="#tabs-4" class="post-item">Videos</a></li>
              </ul>
            </nav>
            <div class="sort">
              <span>Sort by:</span>
              <span class="sort-type">Top<i class="icon-arrow"></i></span>
            </div>
          </div>
          <div class="middle-posts">
            <div class="all-posts" id="tabs-1">
              <?php include "post.php"?>
              <?php include "post.php"?>
              <?php include "post-doc.php"?>
              <?php include "post-doc.php"?>
              <?php include "post-vid.php"?>
              <?php include "post-vid.php"?>
            </div>
            <div class="images-posts" id="tabs-2">
              <?php include "post.php"?>
              <?php include "post.php"?>
              <?php include "post.php"?>
            </div>
            <div class="documents-posts" id="tabs-3">
              <?php include "post-doc.php"?>
              <?php include "post-doc.php"?>
              <?php include "post-doc.php"?>
            </div>
            <div class="videos-posts" id="tabs-4">
              <?php include "post-vid.php"?>
              <?php include "post-vid.php"?>
              <?php include "post-vid.php"?>
            </div>
          </div>

        </div>
        <div class="right-sidebar">
          <div class="right-sidebar-ad">
            <div class="ad-notice1">Ad<img class="more" src="fonts/more.svg" alt="more"></div>
            <div class="ad-text1">Get the latest jobs and industry news</div>
            <div class="ad-imgs">
              <div class="ad-prof-pic"></div>
              <img src="cont/blank.png" alt="">
            </div>
            <div class="ad-text2">Name, explore relevant opportunities with</div>
            <div class="ad-name">Name</div>
            <a href="#" class="ad-follow">Follow</a>
          </div>
          <div class="sim-pages">
            <div class="sim-header">Similar pages</div>
            <div class="sim-prof">
              <img src="cont/sim-prof.png" alt="">
              <div class="sim-right">
                <div class="sim-desc">
                  <div class="sim-name">Name</div>
                  <div class="industry">Industry</div>
                </div>
                <a href="#">+ Follow</a>
              </div>
            </div>
            <div class="sim-prof">
              <img src="cont/sim-prof.png" alt="">
              <div class="sim-right">
                <div class="sim-desc">
                  <div class="sim-name">Name</div>
                  <div class="industry">Industry</div>
                </div>
                <a href="#">+ Follow</a>
              </div>
            </div>
            <div class="sim-prof">
              <img src="cont/sim-prof.png" alt="">
              <div class="sim-right">
                <div class="sim-desc">
                  <div class="sim-name">Name</div>
                  <div class="industry">Industry</div>
                </div>
                <a href="#">+ Follow</a>
              </div>
            </div>
            <a href="#" class="show">Show more <img src="cont/down.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>
