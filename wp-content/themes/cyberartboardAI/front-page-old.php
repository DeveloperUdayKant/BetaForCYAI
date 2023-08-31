 <?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cyberartboardAI App
 */
 get_header(); ?>
 
<header>
    <div class="container__logo">
      <img src="/wp-content/uploads/2023/05/Cyber-logo-1.png" width="35%" height=auto/>
    </div>
</header>

<div class="container__content">
    <div class="container__content__img">
        <img src="/wp-content/uploads/2023/05/Clip-art-top-2.png" width="48%" height=auto />
    </div>
</div>
<section>
    <navbar>
        <div class="navbar__icon">
           <ul>
            <li><a href="#"><img src="/wp-content/uploads/2023/05/Icon-40X40.png"/>Log in or Create a New Account</a></li>
            <li><a href="#"><img src="/wp-content/uploads/2023/05/My-Documents.png"/>My Documents</a></li>
            <li><a href="#" class="btn btn-open"><img src="/wp-content/uploads/2023/05/Design-Templates.png"/>Design Templates</a></li>
            <!--<li><a href="wp-content/themes/cyberartboardAI/designyourown.php" class="btn btn-openowndesign"><img src="/wp-content/uploads/2023/05/Design-your-Own.png"/>Design Your Own | Dall-E </a></li>-->
            <li><a href="wp-content/themes/cyberartboardAI/stableDesignOwn.php" class="btn btn-openowndesign"><img src="/wp-content/uploads/2023/05/Design-your-Own.png"/>Design Your Own | Stable Diffusion</a></li>
            <li><a href="#"><img src="/wp-content/uploads/2023/05/FAQ.png"/>FAQ</a></li>
            <li><a href="#"><img src="/wp-content/uploads/2023/05/Chat.png"/></a></li>
           </ul>
        </div>
        <div class="navbar__image">
             <img src="/wp-content/uploads/2023/05/with-Text-2-1.png" width="100%" height=auto />
        </div>
    </navbar>
</section>

<section class="modal hidden">
  <div class="flex">
  <img src="/wp-content/uploads/2023/05/Cyber-logo-1.png" width="35%" height=auto alt="logo"/>
    <button class="btn-close">⨉</button>
  </div>
  <hr>
  <img src="/wp-content/uploads/2023/05/Design-Templates.png" width="40" height:auto/>
  
<div class="category__list">
    <div class="cate__essential">
        <h4>ESSENTIALS:</h4>
    <ul>
        <li><a href="">Polo shirts</a></li>
        <li><a href="">T-shirts</a></li>
        <li><a href="">Singlets</a></li>
        <li><a href="">Shorts</a></li>
        <li><a href="">Hoodie top</a></li>
        <li><a href="">Tracksuits</a></li>
        <li><a href="">Softshell Jackets</a></li>
    </ul>
    </div>
    <div class="cate__sports">
        <h4>SPORTS:</h4>
        <ul>
        <li><a href="">AFL</a></li>
        <li><a href="">Basketball</a></li>
        <li><a href="">Fishing</a></li>
        <li><a href="">Cycling</a></li>
        <li><a href="">Golf</a></li>
        <li><a href="">Netball</a></li>
        <li><a href="">Rugby</a></li>
        <li><a href="">Soccer</a></li>
    </ul>

    </div>
    <div class="cate__businesswear">
        <h4>BUSINESS WEAR:</h4>
        <ul>
        <li><a href="">Corporate Uniforms</a></li>
        <li><a href="">Hi Viz Workwear</a></li>
        <li><a href="">Hospitality</a></li>
        <li><a href="">Tourism</a></li>
        <li><a href="">Events</a></li>
    </ul>
    </div>
    <div class="cate__schoolwear">
        <h4>SCHOOL WEAR:</h4>
        <ul>
        <li><a href="">School leaver</a></li>
        <li><a href="">School Polo shirts</a></li>
        <li><a href="">Y6 Polo shirts</a></li>
        <li><a href="">House Polo shirts</a></li>
        <li><a href="">Varsity Jackets</a></li>
        </ul>
    </div>
</div>
</section>
<section class="modalowndesign hidden">
  <div class="flex">
  <img src="/wp-content/uploads/2023/05/Cyber-logo-1.png" width="30%" height=auto alt="logo"/>
    <button class="btn-closeowndesign">⨉</button>
  </div>
  <hr>
  <div class="container__designrequest">
    <form method="POST" action="#">
    <img class="container__owndesigner__logo" src="/wp-content/uploads/2023/05/Design-your-Own.png" width="40" height:auto/>
     <select name="category" class="category__item">
     <option selected disabled>CATEGORIES</option>
        <option>SCHOOLWEAR</option>
        <option>BUSINESS WEAR</option>
        <option>SPORTS WEAR</option>
        <option>WORK WEAR</option>
        <option>PROMOTIONAL</option>
        <option>LEISUREWEAR</option>
     </select>
     <select name="product" class="item-11 category__item">
        <option selected disabled>PRODUCTS</option>
        <option>POLO SHIRTS</option>
        <option>T-SHIRTS</option>
        <option>SINGLETS</option>
        <option>SHORTS</option>
        <option>TRACKSUITS</option>
        <option>HOODIE TOP</option>
        <option>STORM JACKET</option>
        <option>SOFTSHELL JACKET</option>
        <option>SPORTS CAP</option>
        <option>BUCKET HAT</option>
        <option>SOCKS</option>
     </select>
     <input type="text" name="desc" class="category__item" id="desc">
     <h5 class="design_request_title">DESIGN REQUEST FORM:</h5>  
     <div class="requestform__content">
        <div class="requestform__left">
          <img src="/wp-content/uploads/2023/05/G.jpg" alt="image-1" width="98%" height=100%>
        </div>  
        <div class="requestform__right">
            <div class="requestform__right_1">
                <div class="requestform__right_img"><img src="/wp-content/uploads/2023/05/no-image-icon-6-1.png" alt="image-1"></div>
                <div class="requestform__right_img"><img src="/wp-content/uploads/2023/05/no-image-icon-6-1.png" alt="image-2"></div>
            </div> 
            <div class="requestform__right_1">
                <div class="requestform__right_img"><img src="/wp-content/uploads/2023/05/no-image-icon-6-1.png" alt="image-3"></div>
                <div class="requestform__right_img"><img src="/wp-content/uploads/2023/05/no-image-icon-6-1.png" alt="image-4"></div>
            </div>
       </div>              
     </div>
       <div class="btn-action">
         <div class="btn-action__event">
            <button>Add Embedded Images:</button>
            <input type=file name="upload" id="upload" style="background-color:transparent; border-color:transparent;">
            <button>Library:</button>
            <button type="submit" name="submit" class="submit__action" style="background-color:transparent; border-color:transparent;"> 
             <img src="/wp-content/uploads/2023/05/Cyber-Generate.png" height="30"/>
            </button>
         </div>
        </div>
  </div>
    </form>
</section>


<!--<div class="overlay hidden"></div>-->
<!--<div class="overlayowndesign hidden"></div>-->
<?php get_footer(); ?>