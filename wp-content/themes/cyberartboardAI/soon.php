<style>
        @import url("https://fonts.googleapis.com/css?family=Raleway&display=swap");
        html,
        body {
            padding: 0;
            margin: 0;
            position: relative;
            /* background: url("https://images.unsplash.com/photo-1569973560851-8c4563f4c3c8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80") */
                /* no-repeat center center; */
            background-size: cover;
            height: 100vh;
            font-family: "Raleway", sans-serif;
            overflow-y: hidden;
        }
        .cy-content1 {
            max-width: 650px;
            margin: 0 auto;
            top: 35%;
            position: relative;
            h1 {
                line-height: 1.5;
                color: white;
                font-weight: 300;
                text-align: center;
                font-size: 3rem;
                text-shadow: 0 2px 5px black;
            }
        }

        /* PRELOADER CSS */
        .cy-page-loader{
            width: 100%;
            height: 100vh;
            position: absolute;
            background: transparent;
            z-index: 1000;
            .cy-txt{
                color: #666;
                text-align: center;
                top: 40%;
                position: relative;
                text-transform: uppercase;
                letter-spacing: 0.3rem;
                font-weight: bold;
                line-height: 1.5;
            }
        }

        /* CY-SPINNER ANIMATION */
        .cy-spinner {
            position: relative;
            top: 35%;
            width: 80px;
            height: 80px;
            margin: 0 auto;
            background-color: #f26522;
            border-radius: 100%;
            -webkit-animation: cy-sk-scaleout 0.8s infinite ease-in-out;
            animation: cy-sk-scaleout 0.8s infinite ease-in-out;
        }

        @-webkit-keyframes cy-sk-scaleout {
        0% { -webkit-transform: scale(0) }
        100% {
            -webkit-transform: scale(0.8);
            opacity: 0;
        }
        }

        @keyframes cy-sk-scaleout {
        0% { 
            -webkit-transform: scale(0);
            transform: scale(0);
        } 100% {
            -webkit-transform: scale(1.0);
            transform: scale(1.0);
            opacity: 0;
        }
        }
        .logo-container {
            position: fixed;
            bottom: 0px;
            right: 10px;
            transform: translateY(-50%);
            width: 100px; 
            background-color: #ffffff; 
            /* filter: drop-shadow(02px 02px 02px black); */
            z-index: 1000; 
            }

            .logo-container a img {
            display: block;
            max-width: 100%;
            height: auto;
            filter: drop-shadow(02px 02px 02px black);
            }
            .logo-container a img:hover{
                filter: drop-shadow(02px 02px 02px coral);
            }

            .content {
            margin-top: 0px; /* Adjust this margin to prevent content from being obscured by the logo */
            padding: 20px;
            }
    </style>
    <div class="cy-page-loader">
        <div class="cy-spinner"></div>
        <div class="cy-txt">Coming Soon</div>
    </div>
    <div class="logo-container">
        <a href="https://www.cyberartboard.com/" target="_blank"><img src="bottom-logo.png" alt="Logo"></a>
    </div>
    <script>
        $(window).on('load',function(){
            setTimeout(function(){ // allowing 3 secs to fade out loader
            $('.cy-page-loader').fadeIn('slow');
            },3500);
        });
    </script>