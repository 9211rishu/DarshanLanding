<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="resources/css/tailwind.min.css" />
    <link rel="stylesheet" href="resources/css/style.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="resources/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="resources/favicons/favicon-16x16.png" />
    <link rel="manifest" href="resources/favicons/site.webmanifest" />
    <link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="shortcut icon" href="resources/favicons/favicon.ico" />
    <meta name="msapplication-TileColor" content="#9F7AEA" />
    <meta name="msapplication-config" content="resources/favicons/browserconfig.xml" />
    <meta name="theme-color" content="#ffffff" />
    <title>Darshan G Violinist</title>
  </head>

  <body>
    <header class="text-gray-700 body-font focus:outline-none">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="logo-box flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="./">
          <img class="logo" src="resources/img/logo200x200.png" />
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
          <a href="#about" class="mr-5 hover:text-gray-900">About</a>
          <a href="#features" class="mr-5 hover:text-gray-900">Features</a>
          <a href="#testimonials" class="mr-5 hover:text-gray-900">Testimonials</a>
          <a href="#contact" class="mr-5 hover:text-gray-900">Contact</a>
        </nav>
        <a href="https://www.youtube.com/DarshanGViolinist?sub_confirmation=1" target="_blank">
          <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">
            SUBSCRIBE
          </button>
        </a>
      </div>
    </header>
    <section class="text-gray-700 body-font focus:outline-none">
      <div class="container mx-auto flex px-5 py-12 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
          <img class="object-cover object-center rounded" alt="hero" src="resources/img/hero.jpg" />
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
          <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
            Darshan Singh Sur <br class="hidden lg:inline-block" />
            Violinist, Composer, Instructor
          </h1>
          <p class="mb-8 leading-relaxed">
            A violinist who got the touch of perfection in fusion and in Indian Classical Instrumental Music as well. On the way of massive performances towards classical and fusion one after the other.
          </p>
          <div class="flex justify-center">
            <a href="#contact">
              <button class="inline-flex text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded text-lg">
                Contact
              </button>
            </a>
            <a href="https://www.youtube.com/DarshanGViolinist?sub_confirmation=1" target="_blank">
              <button class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg">
                Subscribe
              </button>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="text-gray-700 body-font focus:outline-none" id="about">
      <div class="container px-5 py-24 mx-auto flex flex-col">
      <!-- <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="resources/img/banner.jpg" />
        </div> -->
        <div class="carousel"
          data-flickity='{ "wrapAround": true ,"autoPlay": true, "imagesLoaded": true, "lazyLoad":true}'>
          <div class="carousel-cell">
            <img src="resources/img/banner-01.jpg" alt="banner 01">
          </div>
          <div class="carousel-cell">
            <img src="resources/img/banner-02.jpg" alt="banner 02">
          </div>
          <div class="carousel-cell">
            <img src="resources/img/banner-03.jpg" alt="banner 03">
          </div>
          <div class="carousel-cell">
            <img src="resources/img/banner-04.jpg" alt="banner 04">
          </div>
          <div class="carousel-cell">
            <img src="resources/img/banner-05.jpg" alt="banner 05">
          </div>
        </div>
        <div class="lg:w-4/6 mx-auto">
          <div class="flex flex-col sm:flex-row mt-10">
            <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
              <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
              <div class="flex flex-col items-center text-center justify-center">
                <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">
                  Darshan G Violinist
                </h2>
                <div class="w-12 h-1 bg-purple-500 rounded mt-2 mb-4"></div>
                <p class="text-base text-gray-600">
                  His resemblance with the perfection towards music prior towards resemblance of his Gurus Pt. Joi Srivastava & Sharat Chandra Srivastava, more even his initiative of his sharing stages with fellow musicians of the genres
                  flowing through the crux of Pop,Jazz,Folk is simply accountable.
                </p>
              </div>
            </div>
            <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-300 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
              <p class="leading-relaxed text-lg mb-4">
                Darshan Singh Sur is one of those prominent musician of India who got no family aspects from shades of musical background. Darshan Singh Sur's mysterious journey of music got evoked from his break through out of the passion
                to which he observed after his graduation at the age of 22. Only after his real time approval of passion and tendency to achieve success through of his hardships. He has wiped of ample of solo replicas in most of all major
                cities of India and captivated his magic in many other countries as well on a long running span of time from now. He is not so far from the tagline of a maestro of strings now. for what he will be known as soon as in every
                corner of the world. His adorable nature towards livings and eternal aspects of life makes him much more prominent with his on going carrier towards music.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr />
    <section class="text-gray-700 body-font focus:outline-none" id="cta">
      <div class="container px-5 py-24 mx-auto flex items-center md:flex-row flex-col">
        <div class="flex flex-col md:pr-10 md:mb-0 mb-6 pr-0 w-full md:w-auto md:text-left text-center">
          <h2 class="text-xs text-purple-500 tracking-widest font-medium title-font mb-1">
            YOUTUBE
          </h2>
          <h1 class="md:text-3xl text-2xl font-medium title-font text-gray-900">
            Rapidly Growing Channel on YouTube
          </h1>
        </div>
        <div class="flex md:ml-auto md:mr-0 mx-auto items-center flex-shrink-0">
          <a href="https://www.youtube.com/DarshanGViolinist?sub_confirmation=1" target="_blank">
            <button class="bg-gray-200 inline-flex py-3 px-5 rounded-lg items-center hover:bg-gray-300 focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 575 512">
                <path
                  d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
                ></path>
              </svg>
              <span class="ml-4 flex items-start flex-col leading-none">
                <span class="text-xs text-gray-600 mb-1">SUBSCRIBE ON</span>
                <span class="title-font font-medium">YouTube</span>
              </span>
            </button>
          </a>
        </div>
      </div>
    </section>
    <hr />
    <section class="text-gray-700 body-font focus:outline-none" id="features">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
            A Big Number Everywhere
          </h1>
        </div>
        <?php
          $youtube_subscribers = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UCOUV5tSpM1YaETUer4EG2fQ&key=AIzaSyBeSrs7CYtIIbAqvdoyZphZ7hi7hstBZ8A');
          $youtube_api_response = json_decode($youtube_subscribers, true );
          $subscribers_count = intval($youtube_api_response['items'][0]['statistics']['subscriberCount']);
          $views_count = intval($youtube_api_response['items'][0]['statistics']['viewCount']);
          $videos_count = intval($youtube_api_response['items'][0]['statistics']['videoCount']);
        ?>
        <div class="flex flex-wrap -m-4 text-center">
          <div class="p-4 md:w-1/3 sm:w-full w-full">
            <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-purple-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 600 512">
                <path
                  d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
                ></path>
              </svg>
              <h2 class="title-font font-medium text-3xl text-gray-900">
              <?php
                echo $views_count;
              ?>
              </h2>
              <p class="leading-relaxed">Views</p>
            </div>
          </div>
          <div class="p-4 md:w-1/3 sm:w-full w-full">
            <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-purple-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
              </svg>
              <h2 class="title-font font-medium text-3xl text-gray-900">
                <?php
                  echo $subscribers_count;
                ?>
              </h2>
              <p class="leading-relaxed">Subscribers</p>
            </div>
          </div>
          <div class="p-4 md:w-1/3 sm:w-full w-full">
            <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-purple-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 32 32">
                <path d="M18.565 15.733l-3.594-1.677c-0.314-0.146-0.571 0.018-0.571 0.365v3.158c0 0.347 0.258 0.51 0.571 0.365l3.592-1.677c0.315-0.147 0.315-0.387 0.002-0.534zM16 0.64c-8.483 0-15.36 6.877-15.36 15.36s6.877 15.36 15.36 15.36 15.36-6.877 15.36-15.36-6.877-15.36-15.36-15.36zM16 22.24c-7.862 0-8-0.709-8-6.24s0.138-6.24 8-6.24 8 0.709 8 6.24-0.138 6.24-8 6.24z"></path>
              </svg>
              <h2 class="title-font font-medium text-3xl text-gray-900">
              <?php
                echo $videos_count;
              ?>
              </h2>
              <p class="leading-relaxed">Videos</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr />
    <section class="text-gray-700 body-font focus:outline-none" id="testimonials">
      <div class="container px-5 py-24 mx-auto">
        <div class="carousel"
          data-flickity='{ "wrapAround": true ,"autoPlay": true, "imagesLoaded": true, "lazyLoad":true}'>
          <div class="carousel-cell">
            <img src="resources/img/t1.jpg" alt="banner 01">
          </div>
          <div class="carousel-cell">
            <img src="resources/img/t2.jpg" alt="banner 02">
          </div>
          <div class="carousel-cell">
            <img src="resources/img/t3.jpg" alt="banner 03">
          </div>
          <div class="carousel-cell">
            <img src="resources/img/t4.jpg" alt="banner 04">
          </div>
          <div class="carousel-cell">
            <img src="resources/img/t5.jpg" alt="banner 05">
          </div>
        </div>
      </div>
    </section>
    <hr />
    <section class="text-gray-700 body-font relative focus:outline-none" id="contact">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
            Contact Us
          </h1>
        </div>
        <?php
          $nameErr = $emailErr = $phoneErr = $messageErr = NULL;
          $name = $email = $phone = $message = "";
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
              $nameErr = "Name is required";
            } else {
              $name = test_input($_POST["name"]);
              if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
              }
            }
            if (empty($_POST["email"])) {
              $emailErr = "Email is required";
            } else {
              $email = test_input($_POST["email"]);
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Please check your email";
              }
            }
            if (empty($_POST["phone"])) {
              $phoneErr = "Phone number is required";
            } else {
              $phone = test_input($_POST["phone"]);
              if (!preg_match("/^[0-9]{10}+$/",$phone)) {
                $phoneErr = "Please enter 10 digit valid phone number";
              }
            }
            if (empty($_POST["message"])) {
              $messageErr = "Message is required";
            } else {
              $message = test_input($_POST["message"]);
            }
          }
          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#contact">
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
              <div class="p-2 w-1/3">
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-purple-500 text-base px-4 py-2" placeholder="Name" type="text" name="name" id="name" value="<?php echo $name; ?>"/>
                <p class="error"> <?php echo $nameErr ?> </p>
              </div>
              <div class="p-2 w-1/3">
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-purple-500 text-base px-4 py-2" placeholder="Email" type="email" name="email" id="email" value="<?php echo $email; ?>"/>
                <p class="error"> <?php echo $emailErr ?> </p>
              </div>
              <div class="p-2 w-1/3">
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-purple-500 text-base px-4 py-2" placeholder="Phone No." type="tel" name="phone" id="phone" value="<?php echo $phone; ?>"/>
                <p class="error"> <?php echo $phoneErr ?> </p>
              </div>
              <div class="p-2 w-full">
                <textarea class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-purple-500 text-base px-4 py-2 resize-none block" placeholder="Message" name="message" id="message"><?php echo $message; ?></textarea>
                <p class="error"> <?php echo $messageErr ?> </p>
              </div>
              <div class="p-2 w-full">
                <button type="submit" name="submit" class="flex mx-auto text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg">
                  Send
                </button>
                <?php 
                  if(isset($_POST['submit'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $message = $_POST['message'];
                    
                    $to = "darshan.violin@gmail.com";
                    $headers = "From: Admin";
                    $subject = "Response From Darshan G Violinist";
                    $message = "New query from ".$name.". \n His phone number is ".$phone.", email is ".$email.", and message is ".$message.".";
                    if(empty($name) or empty($email) or empty($phone) or empty($message)){
                      echo "<p class='text-center error'>* Fill the required details!</p>";
                    }elseif(isset($nameErr) or isset($phoneErr) or isset($pinErr) or isset($messageErr)){
                      echo "<p class='text-center error'>* Please check your entries!</p>";
                      $nameErr = $phoneErr = $pinErr = $messageErr = NULL;
                    }else{
                      if(mail($to, $subject, $message, $headers)){
                        echo "<p class='text-center text-light success'>* Thankyou for your enquiry. We will get in touch as soon as possible!</p> <?php";
                      }else{
                        echo "<p class='text-center text-light error'>* Something went wrong. Please Mail Us!</p>";
                      }
                    }
                  }
                ?>
              </div>
              <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                <a href="mailto:darshan.violin@gmail.com" class="text-purple-500">darshan.violin@gmail.com</a>
                <br />
                <span class="inline-flex">
                  <a href="https://www.facebook.com/darshangviolinist/" target="_blank" class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                  </a>
                  <a href="https://www.instagram.com/darshangviolinist/" target="_blank" class="ml-4 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                  </a>
                  <a href="https://www.youtube.com/DarshanGViolinist" target="_blank" class="ml-4 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 575 512">
                      <path
                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
                      ></path>
                    </svg>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <footer class="text-gray-700 body-font focus:outline-none">
      <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <span class="ml-3 text-xl">Darshan G Violinist</span>
        </a>
        <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
          &copy; 2020 All Rights Reserved
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
          <a href="https://www.facebook.com/darshangviolinist/" target="_blank" class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a href="https://www.instagram.com/darshangviolinist/" target="_blank" class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a href="https://www.youtube.com/DarshanGViolinist" target="_blank" class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 575 512">
              <path
                stroke="none"
                d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
              ></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="resources/js/flickity.pkgd.min.js"></script>
    <script src="resources/js/script.js"></script>
  </body>
</html>