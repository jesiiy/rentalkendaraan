<div class="container">
        <!-- Google Map Embed -->
        <div class="google-map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127642.58739207363!2d103.95160625947456!3d1.1331282469309987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9893e60c3f43b%3A0x30a9b5b8918412f!2sBukit%20Permata%2C%20Batam!5e0!3m2!1sen!2sid!4v1708350000000!5m2!1sen!2sid" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>     
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="contact_main">
                     <h1 class="contact_taital">Contact Us</h1>
                     <form action="/action_page.php">
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Name" name="Name">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Email" name="Name">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                        </div>
                        <div class="form-group">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        </div>
                     </form>
                     <div class="main_bt"><a href="#">SEND</a></div>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <span class="padding_left_10 active"><i class="fa fa-map-marker" aria-hidden="true"></i></span>Making this the first true</a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="padding_left_10"><i class="fa fa-phone" aria-hidden="true"></i></span>Call : +62 82392916473
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="padding_left_10"><i class="fa fa-envelope" aria-hidden="true"></i></span>Email : pinkpantherrent@gmail.com
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="mail_main">
                     <h3 class="newsletter_text">Newsletter</h3>
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="Enter Your Email"></textarea>
                        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                     </div>
                  </div>
                  <div class="footer_social_icon">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
 <style>
        /* Reset margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Kontainer utama */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        /* Google Map Styling */
        .google-map {
            width: 100%;
            max-width: 100%;
            height: 450px; /* Sesuaikan tinggi sesuai kebutuhan */
            overflow: hidden;
            position: relative;
            border-radius: 10px; /* Opsional: Agar sudutnya membulat */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
        }

        .google-map iframe {
            width: 100%;
            height: 100%;
            border: none;
            display: block;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
            .google-map {
                height: 350px;
            }
        }
    </style>
</head>
<body>
