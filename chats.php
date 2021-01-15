<?php
require_once('app.php');

// When login details is correct, extract user session
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']); // extract user session


    require_once(APP_ROOT . DS . 'includes' . DS . 'header.php');
?>

    <body>

    <!-- 
<ul class="collection">
    <li class="collection-item avatar">
      <img src="images/yuna.jpg" alt="" class="circle">
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
</ul>

     -->

        <div class="border">
            <div class="left">
                <div class="profile-img">
                    <img src="images/+234 816 045 1288 20210115_132423.jpg" alt="">
                </div>
            </div>
            <div class="right">
                <div class="fixed-header">
                    <div class="header darkBlue">
                        <div class="chat-header">
                            <a href="profile"><i class="material-icons white-text size-2">keyboard_arrow_left</i></a>
                            <a href="profile">
                                <i class="material-icons white-text size-3">account_circle</i>
                            </a>
                            <span class="white-text size-1">Ghidyon</span>
                        </div>
    
                        <div class="right-align">
                            <!-- <i class="material-icons white-text black-text">more_vert</i> -->
                            <a href="<?= ROOT ?>actions/logout.php" class="tiny-bottom-margin waves-effect waves-light btn white darkBlue-text rounded bold lr-padding">Logout</a>
                        </div>
                    </div>
                    <div class="center-align status">
                        <span>Don't be shy, just say Hi!</span>
                    </div>
                </div>
    
                <!-- Chat Messages -->
                <div class="messages">
                    <div class="row lr-padding">
                        <div class="col s9 offset-s3 m8 offset-m4 sender-box-right  light-blue lighten-4 margin-down1 top-margin1">
    
                            <div class="col s12">
                                <h5>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem assumenda excepturi
                                    voluptatum
                                    sed hic, esse aliquam ratione ipsa explicabo, consectetur repudiandae quae sint delectus
                                    odio
                                    labore
                                    perferendis, sit earum cupiditate.
                                </h5>
                            </div>
                            <div class="col s12 right-align">
                                <span class="chat-time">6:30 AM</span>
                                <i class="material-icons chat-sent">done_all</i>
                            </div>
    
                        </div>
    
                        <div class="col s9 m8 sender-box-left light-blue lighten-4 margin-down1">
    
                            <div class="col s12">
                                <h5>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, ex ab autem odio adipisci
                                    magnam
                                    praesentium, eum molestias fugit omnis tempora esse! Dignissimos quibusdam sapiente dolorum
                                    voluptatum eius laboriosam accusamus.
                                </h5>
                            </div>
                            <div class="col s12 right-align">
                                <span class="chat-time">6:43 AM</span>
                                <i class="material-icons chat-sent">done_all</i>
                            </div>
    
                        </div>
    
                        <div class="col s9 offset-s3 m8 offset-m4 sender-box-right  light-blue lighten-4 margin-down1">
    
                            <div class="col s12">
                                <h5>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing, ab asperiores consequuntur
                                    sequi minus, quaerat sed? Suscipit.
                                </h5>
                                <h5>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit...
                                </h5>
                            </div>
                            <div class="col s12 right-align">
                                <span class="chat-time">6:50 AM</span>
                                <i class="material-icons chat-sent">done_all</i>
                            </div>
    
                        </div>
    
                        <div class="col s9 m8 sender-box-left light-blue lighten-4 margin-down2">
    
                            <div class="col s12">
                                <h5>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos, ex ab autem odio adipisci
                                    magnam
                                    praesentium, eum molestias fugit omnis tempora esse! Dignissimos quibusdam sapiente dolorum
                                    voluptatum eius laboriosam accusamus.
                                </h5>
                            </div>
                            <div class="col s12 right-align">
                                <span class="chat-time">6:43 AM</span>
                                <i class="material-icons chat-sent">done_all</i>
                            </div>
    
                        </div>
                    </div>
                </div>
    
    
                <div class="fixed-input">
                    <div class="input-group">
                        <input type="text" placeholder="Say Hi" class="browser-default input">
                        <i class="material-icons size-4">sentiment_satisfied_alt</i>
                        <a href="#!" class="btn-large btn-floating darkBlue"><i class="material-icons">send</i></a>
                    </div>
                </div>
            </div>
        </div>
        
    </body>

    <!-- Scripts -->
    <?php
    require_once(APP_ROOT. DS . 'includes' . DS . 'scripts.php');
    ?>

    </html>
<?php
} else {
    redirect('login');
}
?>