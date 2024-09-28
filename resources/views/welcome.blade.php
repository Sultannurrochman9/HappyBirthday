<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Happy Birthday</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');

        // Function to check login credentials
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');

        // Function to check login credentials
        function checkCredentials(event) {
            event.preventDefault();  // Prevent the default form submission
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            if (username === 'SephyWira' && password === 'happybirthday') {
                document.getElementById('login-form').style.display = 'none';

                // Add fade-in effect and remove blur
                document.getElementById('page').classList.add('fade-in');
                document.getElementById('page').classList.remove('blurred');

                // Play background music
                document.getElementById('background-music').play();
            } else {
                alert('Incorrect username or password. Please try again.');
                document.getElementById('username').value = '';
                document.getElementById('password').value = '';
            }
        }
    </script>    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <style>
         /* Styles for login overlay */
         #login-form {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .form-container {
            background: #fff;
            padding: 2rem;
            border-radius: 0.5rem;
            max-width: 400px;
            width: 100%;
        }
        .form-control {
            border-radius: 0.5rem;
        }
        .btn-custom {
            border-radius: 50px;
            padding: 0.75rem 2rem; /* Adjust padding to make the button larger */
            font-size: 1.125rem; /* Increase font size */
            line-height: 1.5; /* Ensure text is centered vertically */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #page {
            opacity: 1;
            filter: blur(10px); /* Initial blur effect */
            transition: opacity 1s ease-in-out, filter 1s ease-in-out; /* Smooth fade-in and blur removal */
        }
        #page.fade-in {
            opacity: 1; /* Fade in */
            filter: blur(0); /* Remove blur */
        }
        .blurred {
            opacity: 0;
        }
    </style>
</head>
<body id="top">
    <!-- Login Form -->
    <div id="login-form">
        <div class="form-container">
            <form onsubmit="checkCredentials(event)">
                <div id="error-message" class="text-center error-message fs-5 text-danger mb-4"></div>
                <h2 class="text-center mb-4">Please Log In</h2>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" class="form-control form-control-lg" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control form-control-lg" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-custom w-100 fs-4"><strong>Login</strong></button>
            </form>
        </div>
    </div>
    <!-- Background Music -->
    <audio id="background-music" loop>
        <source src="music\Rex Orange County - Happiness (Official Audio).mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">
        <!-- # site header 
        ================================================== -->
        <!-- <header class="s-header">

            <div class="row s-header__inner width-sixteen-col">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="index.html">
                            <img src="images/logo.svg" alt="Homepage">
                        </a>
                    </div>
                </div> 
            </div> 
        </header> 
 -->

        <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">

               <section class="s-pageheader pageheader">
                    <div class="row">
                        <div class="column xl-12">
                            <h1 class="page-title">
                            <span class="page-title__small-type mb-5" style="font-size: 34px;">Hi, Sephyyy...</span>
                                Happy Birthday
                            </h1>
                            
                        </div>
                    </div>
               </section> <!-- end pageheader --> 

               <section class="s-pagecontent pagecontent">

                    <div class="row pageintro">
                        <div class="column xl-6 lg-12">
                            <h2 class="text-display-title">Some Wishes and Hopes for You</h2>
                        </div>
                        <div class="column xl-6 lg-12 u-flexitem-x-right">
                            <p class="lead">
                            Selamat Ulang Tahun. Semoga di hari spesial Sepi ini, Sepii mendapatkan semua kebahagiaan, kesehatan, dan kesuksesan yang diimpikan. Semoga Sepii terus dikelilingi oleh orang-orang yang peduli dan mendukung Sepii di setiap langkah atau pilihan yang Sepii ambil.
Tetap jadi Sepii yang luar biasa, dengan semua kebaikan dan keceriaan yang Sepiii bawa untuk semua orang. Semoga tahun ini membawa banyak kesempatan baru, pengalaman berharga, dan pencapaian yang membuat Sepii menjadi orang yang paling bahagia dan paling beruntung di dunia.

                            </p>
                        </div>                       
                    </div> <!-- end pageintro -->   
                    

                    <div class="row pagemedia">
    <div class="col-12 col-md-8 col-lg-6 mx-auto"> <!-- Atur ukuran kolom agar tidak terlalu besar di layar besar -->
        <figure class="page-media text-center"> <!-- Gunakan text-center agar gambar berada di tengah -->
            <img 
                src="images/thumbs/about/sephy1.jpeg" 
                alt="Sephy" 
                class="img-fluid" 
                style="max-width: 100%; height: auto;" 
            >
        </figure>
    </div>
</div> <!-- end pagemedia -->

                    <div class="row width-narrower pagemain">
                        <div class="column xl-12"> 

                            <h2>Is It Conffesion?</h2>
                            <p>
                            Mungkin, gua mau ngomong sesuatu juga sep. Gua mungkin mau minta maaf dulu sep, gua minta maaf kalo memang sering ganggu sepii kayak chat2 sepii terus. Tapi ya mungkin baru itu effort yang bisa gua tunjukkan, minta maaf juga karena mungkin dulu kita sempat dekat tapi jadi jauh. Mungkin itu karena faktor sakit hati yang belum selesai di smp dan  mungkin karena gua trauma, gua takut sakit hati ketika sepii hilang ga bales chat, atau ga ngechat, jadi ketika sepii emg blm bales chat gua yang ngerasa keknya dia mau ngejauh, jadi gua duluan yang ngambil step awal buat nyoba ngejauh, karena gamau sakit hati lagi. Apalagi emg kita waktu itu baru ketemu sekali dan sepii pindah, jadi gua sendiri belum paham banget sama sepii. Tapi itu bener2 salah gua karena blm selesai sama masa lalu gua sep. Maaf yaa..
                            <br>
                            <br>
                            Sekarang bisa dibilang gua interest sama sepii. Gatau kenapa, mungkin awalnya karena pas bener2 hectic banget sama tubes-tubes, dan mulai chat sepii, pas itu juga mulai ngerasa ternyata punya seseorang yang ada buat denger keluh kesah atau cerita kita itu enak banget ya. Mulai dari situ makanya gua coba-coba chat sepii, dan terus nyoba nungguin sepii juga. Jadi gua mau minta maaf juga kalau itu justru bikin sepii risih. Karena setiap chat/reply IG sepii, yang dipikirin kayak sepii tuh risih ga yaa atau kebanyakan ngechat tktnya malah sepii nya ngejauh gitu.
                            </p>

                            <!-- <h2 class="u-add-bottom">My Values & Beliefs</h2> -->

                            <!-- <div class="grid-list-items list-items">
                                <div class="grid-list-items__item list-items__item u-remove-bottom">
                                    <div class="list-items__item-header">
                                        <h6 class="list-items__item-small-title">Consectetur</h6>
                                    </div>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia accusamus consectetur adipisicing elit excepturi corrupti 
                                    nam quae exercitationem cupiditate, provident ipsa delectus vero possimus reprehenderit quas ut officiis tempora voluptatum 
                                    quibusdam consectetur commodi.
                                    </p>
                                </div>
                                <div class="grid-list-items__item list-items__item u-remove-bottom">
                                    <div class="list-items__item-header">
                                        <h6 class="list-items__item-small-title">Adipisicing</h6>
                                    </div>
                                    <p> 
                                    Molestias, autem impedit culpa dolores excepturi, quidem unde ducimus, rerum commodi deserunt earum, minus voluptatum.
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe doloremque provident quas quae exercitationem laboriosam.
                                    </p>
                                </div>
                                <div class="grid-list-items__item list-items__item u-remove-bottom">
                                    <div class="list-items__item-header">
                                        <h6 class="list-items__item-small-title">Doloremque</h6>
                                    </div>
                                    <p>
                                    Mollitia accusamus consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisicing elit excepturi corrupti 
                                    nam quae exercitationem cupiditate, provident ipsa delectus vero possimus reprehenderit quas ut officiis tempora voluptatum 
                                    quibusdam consectetur commodi!
                                    </p>
                                </div>
                                <div class="grid-list-items__item list-items__item u-remove-bottom">
                                    <div class="list-items__item-header">
                                        <h6 class="list-items__item-small-title">Assumenda</h6>
                                    </div>
                                    <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe doloremque provident quas quae exercitationem laboriosam. 
                                    Molestias, autem? Impedit culpa dolores excepturi, quidem unde ducimus, rerum commodi deserunt earum, minus voluptatum?
                                    </p>
                                </div>
                            </div> grid-list-items -->

                            <h2>Should I Keep Waiting?</h2>
                            <p>
                            Jujur, sekarang emang masih berharap kalau ada kesempatan buat bisa deket sama sepii. Mungkin emang gua yang terlalu banyak berharap sampai nungguin sepii. Tapi gua happy, gua happy bisa nunggu, chattan, bahkan bisa sampai main bareng lu kemarin. 
                            </p>

                            <p>
                            Maaf ya sepp, gua juga gatau kenapa harus nungguin selama ini. Kayaknya memang karena ego gua yang terlalu besar, dan impact yang gua dapet pas chattan sama sepii emang senyaman dan setenang itu. Gua seneng bisa chattan sama sepii sampai saat ini, makasihh banyakk yaa sepp, udah jadi seseorang yang pernah ada pas emg gua lagi bener2 capek, penat, pusing waktu itu. Mungkin sepii ga sadar, tapi gua seneng hehehehe.
                            </p>                   

                        </div> <!-- end grid-block-->
                    </div> <!-- end pagemain -->

               </section> <!-- pagecontent -->

               <section class="s-testimonials">

                    <div class="s-testimonials__header row row-x-center text-center">
                        <div class="column xl-8 lg-12">
        
                            <p class="text-pretitle">
                            Wishes
                            </p>
                            <h3>
                            All of Wishes
                            </h3>                        
        
                        </div>
                    </div> <!--end s-testimonials__header -->

                    <div class="row s-testimonials__content">
                        <div class="column xl-12 testimonials">

                            <div class="swiper-container testimonials__slider page-slider">

                                <div class="swiper-wrapper">
                                    <div class="testimonials__slide swiper-slide">
                                        <p>
                                        Selamattt ulang tahuuunnn sepiii temanku yg paling independent women!😖🫶 
                                        semoga dimudahkan perjalanan karir nya, dilancarkan rezekinyaa, dikuatkan kesehatan mental dan kebahagiaannyaa😗🫵 semoga bisa jajanin kita rumah.
                                        <br>Serta mulia sep, semoga hal-hal baik menyertai luuu🫶🫶😵‍💫💓
                                        </p>
                                        <div class="testimonials__author">
                                            <img src="images/avatars/nadia.jpeg" alt="Author image" class="testimonials__avatar">
                                            <cite class="testimonials__cite">
                                                <strong>Nadia</strong>
                                                <span>Temen Si Paling Keren</span>
                                            </cite>
                                        </div>
                                    </div>
                                    <div class="testimonials__slide swiper-slide">
                                        <p>Happy Birthayy sepoyyy, semoga di umur yg baru ini semua yang diharapkan segera disegerakan, 
                                            sehat badan dan pikiran, happy terus bcs YOLO friend🤘🏻 once again happy birthday💕
                                        </p>
                                        <div class="testimonials__author">
                                            <img src="images/avatars/bimbim.jpeg" alt="Author image" class="testimonials__avatar">
                                            <cite class="testimonials__cite">
                                                <strong>Bimbim</strong>
                                                <span>Teman Si Paling Baik</span>
                                            </cite>
                                        </div>
                                    </div>
                                    <div class="testimonials__slide swiper-slide">
                                        <p>
                                        Happy Birthday to you!!!<br>
                                        Selamat ulang tahun yach sep. Semoga panjang umur, sehat selalu, 
                                        kurang2 in deh hiling nya skripsi an yu sep dikerjain 😬. Semoga tahun ini bisa cepet2 lulus dari esgul ya wkwk
                                        </p>
                                        <div class="testimonials__author">
                                            <img src="images/avatars/alya1.jpeg" alt="Author image" class="testimonials__avatar">
                                            <cite class="testimonials__cite">
                                                <strong>Alya</strong>
                                                <span>Teman si Paling Cantik</span>
                                            </cite>
                                        </div>
                                    </div>
                                    <div class="testimonials__slide swiper-slide">
                                        <p>
                                        Selamat gws kesepian❗❗ wish dari gua ialah.....🥁🥁🥁 makin banyak yh dollar dollar luwh🫵🏻🥵🥵 biar bisa beliin anak anak highton bmw😙💃🏻
                                        </p>
                                        <div class="testimonials__author">
                                            <img src="images/avatars/angel.jpeg" alt="Author image" class="testimonials__avatar">
                                            <cite class="testimonials__cite">
                                                <strong>Angel</strong>
                                                <span>Temen si Paling Kece</span>
                                            </cite>
                                        </div>
                                    </div> 
                                </div> <!-- end swiper-wrapper --> 

                                <div class="swiper-pagination"></div>

                            </div> <!--end testimonials__slider --> 

                        </div> <!-- testimonials -->
                    </div> <!--end s-testimonials__content -->

               </section> <!-- end s-testimonials -->

        </section> <!-- s-content-->

        <!-- # cta
        ================================================== -->
        <section id="cta" class="s-cta">

            <div class="row row-x-center text-center">
                <div class="column xl-8 lg-12">

                    <div class="s-cta__content">
                        <h2 class="text-display-title">
                        Get started with our conversation today.
                        </h2>
                        <p class="lead">
                        So, ya jadi mungkin itu aja yang mau gua bilang hehehe. Mungkin ini juga bisa jadi kali terkahir gua buat nunggu kesempatan dari sepii hehehe. Karena gua gamau gangguin sepii terus2an, gua juga takut sakit hati karena terlalu lama nunggu, tapi lupa ada kemungkinan sepii milih jalan lain. Yaa mungkin kalo emang sepii mau ngasih kesempatan kedua, sepii mungkin boleh chat ke WA, tinggal klik aja ini hehehehe (itung2 dapet nomor sepii kan). Tapi kalo emang belum bisa ngasih kesempatan, chat lwt Line saja seperti biasa hehehehe. Gitu deh. Sekali lagi selamat ulang tahun, semoga tahun ini jadii tahun yang sangatttttt sepiii inginkan, baik itu untuk kesuksesan sepii, kebahagiaan sepii, bahkan kebahagiaan sepii dengan temen2 terdekat sepii. Babayyyyy~
                        </p>
                        <a href="#" class="btn btn--primary">Klikkk Dibawah Ini Nih</a>
                    </div>

                </div>
            </div>
            <div class="text-center">
                <div class="btn mt-30 p-3" style="border-radius: 12px; overflow: hidden; width: 100px; height: 100px;">
                    <a href="https://line.me/ti/p/zTKQDhD82t" target="_blank">
                        <img src="images/line (1).png" alt="Line Logo" style="width: 100%; height: 100%; object-fit: cover;">
                    </a>                  
                </div>
                <div class="btn mt-30 p-3" style="border-radius: 12px; overflow: hidden; width: 100px; height: 100px;">
                    <a href="https://wa.me/6282258630915" target="_blank">
                        <img src="images/wa.png" alt="WA Logo" style="width: 100%; height: 100%; object-fit: cover;">
                    </a>               
                </div>                    
            </div>
        </section> <!-- end s-cta -->

    </div> <!-- end page-wrap -->

    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>