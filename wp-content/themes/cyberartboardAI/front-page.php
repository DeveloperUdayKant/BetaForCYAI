
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/wp-content/themes/cyberartboardAI/bottom-logo.png" type="image/x-icon">
    <title>Cyber ARTBoard Ai Technology</title>
    <link rel="stylesheet" href="/wp-content/themes/cyberartboardAI/updatedstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .aibox{
            margin-left:150px;
            margin-right:150px;
        }
        .top-left-logo{
            width: 300px;
            height: 40px;
        }
        .left-logo{
            width: 180px;
            height: 40px;
            /* filter: drop-shadow(2px 1px 2px black); */
        }
        .transition-container {
            display: flex;
            flex-direction: column;
            align-items: flex-end; /* Align text to the right */
            overflow: hidden;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /*font-weight: bolder;*/
            font-size: 35px;
            position: absolute;
            top: 120px;
            }

            .moving-text {
            animation: slideRightToLeft 1s linear forwards; /* Removed infinite loop */
            white-space: nowrap;
            line-height: 1;
            margin: 0; 
            color:#61677A;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }


            @keyframes slideRightToLeft {
                0% {
                    transform: translateX(100%);
                }
                100% {
                    transform: translateX(0%);
                }
            }

            .span-a{
                text-decoration:  none;
                color: black;
            }
            .span-img:hover{
                filter: drop-shadow(1px 1px 2px #f26522);
            }
            .span-a:hover{
                border-bottom-width: 2px;
                border-bottom-style: solid;
                border-bottom-color: #f26522;
                color: #f26522;
            }
            .t-i{
                margin: 10px;
            }
            .p-text{
                padding-left: 10px;
                font-family: Poppins, sans-serif;
                font-size: 1.2rem;
                position: relative;
                top: -10px;
                color:#61677A;
                font-weight: bold;
            }
            .p-text:hover{
                color:#f26522;
            }
            .bottom-text{
                float: right;
                position: relative;
                top: -90px;
                right: 20px;
            }
            .h1-text{
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                text-transform: uppercase;
                font-weight:lighter;
                width: 100%;
                font-size: 52px;
                color: #61677A;
            }
            .h1-p1-text{
                text-transform: uppercase;
                margin-top: 18px;
                font-family: Poppins, sans-serif;
                position: relative;
                top: -30px;
                color: #61677A;
            }
            .postElement{
                position:relative;
                top:0px;
                padding:0px;
            }
            .popup {
                display: none;
                position: fixed;
                top: 50%;
                left: 20%;
                transform: translate(-18%, -50%);
                background-color: white;
                padding: 10px;
                width:80%;
                height:700px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
                z-index: 1000;
              }
              #popup-iframe{
                  width:100%;
                  height:650px;
                  margin:5px;
                  padding:10px;
              }
              .closepopup{
                  float:right;
                  border-radius:50%;
                  /*padding:10px;*/
                  height:30px;
                  width:30px;
                  font-size: large;
                  line-height: 10px;
                  border-style:none;
              }
              .closepopup:hover{
                  background-color:#f26522;
                  color:white;
              }
              
             * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
::-webkit-scrollbar{
        width:10px;
    }
    ::-webkit-scrollbar-track{
        background: #2E4053;
        border-radius: 50px;
    }
    ::-webkit-scrollbar-thumb{
        background: #F0F3F4;
        border-radius: 50px;
    }
/* Center align content */
.center {
    text-align: center;
}

/* Grid container */
.grid-container {
    margin: 0 auto;
    padding: 20px;
    /* background-color: #27374D; */
}

/* Grid label */
.grid-label {
    font-size: 24px;
    margin-left: -250px;
}

/* Image grid */
.image-grid {
    display: inline-grid;
    grid-template-columns: repeat(8, 15fr);
    grid-gap: 5px;
    margin-top:-30px;
}

/* Grid item */
.grid-item {
    position: relative;
    overflow: hidden;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: transform 0.3s;
    /* box-shadow: 2px 2px 2px black; */
}
.grid-item:hover {
    transform: scale(1.1); 
    z-index:990;
}

/* Grid image */
.grid-image {
    display: block;
    width: 100%;
    height: auto;
}

/* Pagination container */
.pagination-container {
    margin-top: 20px;
}

/* Pagination links */
.pagination {
    display: flex;
    /*justify-content: center;*/
    justify-content: right;
    align-items: center;
}

.pagination a {
    padding: 5px 10px;
    margin: 0 5px;
    border: 1px solid #ddd;
    border-radius: 3px;
    text-decoration: none;
    color: coral;
}

.pagination a.active {
    background-color: #007bff;
    color: #fff;
}
.modal-contenti {
    display: block;
    margin: auto;
    max-width: 100%;
    max-height: 100%;
}
.modal-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black */
    z-index: 1000; /* Ensure it's on top of everything */
    overflow: auto;
    padding-top: 100px;
}

/* Close button style */
.modal-overlay .close {
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 30px;
    color: white;
    cursor: pointer;
}
.test{
    color:blue;
    font-size:small;
}

/* Responsive adjustments */
@media screen and (max-width: 600px) {
    .image-grid {
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    }
}
    </style>
</head>
<body>
    <div class="aibox">
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;<img src="/wp-content/uploads/2023/05/Cyber-logo-1.png" class="top-left-logo" style="display: inline-block;">
    <div style="display: inline-block;">
    <img src="/wp-content/themes/cyberartboardAI/Petern 1.png" class="left-logo">
    </div>
    <div style="display: inline-block;">
        <div class="transition-container" style="margin-top: -120px!important;">
            <h1 class="moving-text" style="font-weight:lighter!important;">UNLE<b style="color: #f26522;font-weight:bold;">A</b>SH YOUR </h1>
            <h1 class="moving-text" style="font-weight:lighter!important;">IMAGINAT<b style="color: #f26522;font-weight:bold;">i</b>ON WITH </h1>
            <h1 class="moving-text" style="font-weight:lighter!important;">CUTTING-EDGE </h1>
            <h1 class="moving-text" style="font-weight:lighter!important;"><b style="color: black;">TECHNOLOGY</b> </h1>
          </div>
    </div>
    <div class="t-i">
        <span><a href="#" class="span-a" onclick="openPopup('/wp-content/themes/cyberartboardAI/ailogin.php')" ><img class="span-img" src="/wp-content/uploads/2023/05/Icon-40X40.png" width="40" height="40"><p style="display: inline-block;" class="p-text">Log in or Create a New Account</p></a></span><br>
        <span><a href="#" class="span-a" onclick="openPopup('/wp-content/themes/cyberartboardAI/soon.php')"><img class="span-img" src="/wp-content/uploads/2023/05/My-Documents.png" width="40" height="40"><p style="display: inline-block;" class="p-text">My Documents</p></a></span><br>
        <span><a href="#" class="span-a" onclick="openPopup('/wp-content/themes/cyberartboardAI/designtemplates.php')"><img class="span-img" src="/wp-content/uploads/2023/05/Design-Templates.png" width="40" height="40"><p style="display: inline-block;" class="p-text">Design Templates</p></a></span><br>
        <span><a href="#" class="span-a" onclick="openPopup('/wp-content/themes/cyberartboardAI/designurown.php')"><img class="span-img" src="/wp-content/uploads/2023/05/Design-your-Own.png" width="40" height="40"><p style="display: inline-block;" class="p-text">Design Your Own</p></a></span><br>
        <span><a href="#" class="span-a" onclick="openPopup('/wp-content/themes/cyberartboardAI/soon.php')"><img class="span-img" src="/wp-content/uploads/2023/05/FAQ.png" width="40" height="40"><p style="display: inline-block;" class="p-text">FAQ</p></a></span><br>
        <span><a href="#" class="span-a" onclick="openPopup('/wp-content/themes/cyberartboardAI/soon.php')"><img class="span-img" src="/wp-content/uploads/2023/05/Chat.png" width="40" height="40"><p style="display: inline-block;" class="p-text"></p></a></span>
    </div>
    <div class="bottom-text">
        <h1 class="h1-text">
            Design your own uniforms
        </h1>
        <p class="h1-p1-text">
            schoolwear, corporate uniforms, workwear, events, promotional items and more ...
        </p>
    </div>
  <hr width="100%" style="margin-top:-2px;">
<div class="postElement">
<?PHP
    include('resultpost.php');
?>
</div>
    <div id="myModali" class="modali">
    <div class="modal-overlay" id="modalOverlay">
        <span class="close" onclick="closeModal()">&times;</span>
        <img id="modalImgi" class="modal-contenti">
    </div>
</div>
<script>
// Get the modal element
var modal = document.getElementById("myModali");
// Get the modal content
var modalImg = document.getElementById("modalImgi");

// Get the image container
var imageContainer = document.getElementsByClassName("image-grid")[0];

// Attach a click event listener to the image container
imageContainer.addEventListener("click", function (event) {
    // Check if the clicked element is an image
    if (event.target.classList.contains("grid-image")) {
        openModal(event.target.src);
    }
});

// Get the close button and attach click event listener
var closeBtn = document.querySelector(".modal-overlay .close");
closeBtn.addEventListener("click", function () {
    closeModal();
});

// Close the modal when clicking outside the image
window.addEventListener("click", function (event) {
    if (event.target == modal) {
        closeModal();
    }
});

// Function to open the modal
function openModal(src) {
    modalImg.src = src;
    var modalOverlay = document.getElementById("modalOverlay"); // Define the variable here
    modalOverlay.style.display = "block";
}

// Function to close the modal
function closeModal() {
    var modalOverlay = document.getElementById("modalOverlay"); // Define the variable here
    modalOverlay.style.display = "none";
}

</script>


    <!-- Popup container -->
  <div class="popup" id="popup">
    <button class="closepopup" id="closeButton" onclick="closePopup()">X</button>
    <iframe id="popup-iframe" src="" frameborder="0" ></iframe>
  </div>
  <script>
    const popup = document.getElementById('popup');
    const popupIframe = document.getElementById('popup-iframe');

    // Function to open the popup with the specified URL
    function openPopup(url) {
      popupIframe.src = url;
      popup.style.display = 'block';
    }

    // Function to close the popup and reset the iframe source
    function closePopup() {
      popupIframe.src = '';
      popup.style.display = 'none';
    }
  </script>
  </div>
    <footer class="footer">
  	 <div class="containers">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>THE ICONIC</h4>
				
  	 			<ul>
					  <li><a href="#">About Us</a></li>
					  <li><a href="#">Acknowledge of country</a></li>
					  <li><a href="#">Affiliates</a></li>
					  <li><a href="#">Partnerships</a></li>
					  <li><a href="#">Influencers</a></li>
					  <li><a href="#">Press</a></li>
					  <li><a href="#">Careers</a></li>  
					  <li><a href="#">Terms & Conditions</a></li>
					  <li><a href="#">Privacy policy</a></li>
					  <li><a href="#">Coupons</a></li>
					  <li><a href="#">People Planet Positive</a></li>
					  <li><a href="#">UNiDAYS</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4> HELP & SUPPORT</h4>
  	 			<ul>
  	 			  <li><a href="#">FAQs & Contact</a></li>
				  <li><a href="#">Delivery</a></li>
				  <li><a href="#">Returns</a></li>
				  <li><a href="#">Size Guide</a></li>
				  <li><a href="#">Gift Cards</a></li>
				  <li><a href="#">Fashion Glossary</a></li>
				  <li><a href="#">Products Ideas</a></li>  
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>FOLLOW US</h4>
  	 			<ul>
                    <li><a class="fab fa-instagram" href="#">&nbsp;&nbsp;Instagram</a></li>
                    <li><a class="fab fa-facebook" href="#">&nbsp;&nbsp;Facebook</a></li>          
                    <li><a class="fab fa-twitter" href="#">&nbsp;&nbsp;Twitter</a></li>
                    <li><a class="fab fa-pinterest" href="#">&nbsp;&nbsp;Pinterest</a></li>
                    <li><a class="fab fa-youtube" href="#">&nbsp;&nbsp;Youtube</a></li>
                </ul>
  	 		</div>
  	 		<div class="footer-col-form">
  	 			<h4>STAY IN TOUCH</h4>
				 <p>Sign up to THE ICONIC News for your $20 voucher.*</p>
  	 			<div class="stay__connect">
  	 				<form>
					  <select>
					  <option>Women</option>
					  <option>Men</option>					  
					  </select>
					  <input type="email" id="email" name="email" placeholder="Enter your email address">
					  <input type="submit">
					
				  </form>
  	 			</div>
				<p>* 20% voucher for new sign  ups only.</p>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
  
</body>
</html>
