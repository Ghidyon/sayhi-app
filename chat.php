<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" sizes="32x32" href="images/favicon.jpg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>SayHi - Chat Interface</title>
</head>

<body>

    <div class="border">
        <div class="fixed-header">
            <div class="header darkBlue">
                <div class="chat-header">
                    <a href="home.php"><i class="material-icons white-text size-2">keyboard_arrow_left</i></a>
                    <a href="profile.html">
                        <i class="material-icons white-text size-3">account_circle</i>
                    </a>
                    <span class="white-text size-1">Ghidyon</span>
                </div>
                <div class="right-align">
                    <i class="material-icons white-text black-text">more_vert</i>
                </div>
            </div>
            <div class="center-align status">
                <span>Don't be shy, just say Hi!</span>
            </div>
        </div>

        <!-- Chat Messages -->
        <div class="messages">
            <div class="row lr-padding">
                <div
                    class="col s9 offset-s3 m8 offset-m4 sender-box-right  light-blue lighten-4 margin-down1 top-margin1">

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

</body>

</html>