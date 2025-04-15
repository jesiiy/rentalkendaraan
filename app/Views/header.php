<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Pink Panther Rentals</title>
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/style.css')?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?=base_url('assets/css/responsive.css')?>">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?=base_url('assets/css/jquery.mCustomScrollbar.min.css')?>">
      <!-- FontAwesome -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <style>
         .logo {
            width: 80px; /* Sesuaikan ukuran logo */
            height: 80px;
            border-radius: 50%; /* Membuatnya bulat */
            object-fit: cover;
         }
      </style>
      <!-- Google Translate script -->
      <script type="text/javascript">
         function googleTranslateElementInit() {
            new google.translate.TranslateElement({
               pageLanguage: 'en',
               includedLanguages: 'en,id', // Add languages you want to support here
               layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
         }
      </script>
      <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   </head>
   <body>
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="index.html">
                  <img src="<?=base_url('img/logopink2.jpg')?>" class="logo" alt="Pink Panther Rentals Logo">
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="dashboard">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="rent">Rent</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="sewa">Form Sewa</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contactus">Contact Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="historysewa">History</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="login">Logout</a>
                     </li>
                     <div id="google_translate_element"></div>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
<div class="ms-4">
    <div id="google_translate_element"></div> <!-- Auto-Translate Dropdown -->
</div>      <!-- header section end -->
   </body>
</html>

<script >
   var timeout = 300;
   setTimeout(function() {
      window.location.href ="<?=site_url('home/logout')?>";
   }, timeout * 1000);
</script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'id'}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
