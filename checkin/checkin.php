<?php
session_start();
if(!isset($_SESSION['userName'])) {
    header("location: index.html?error=Please sign in!");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Chatbot Demo - Checkin</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/chatbox_css.css">
    <link rel="stylesheet" href="../css/checkin_web.css">
    <link rel="shortcut icon" href="#">
    <meta name="keywords" content="Chatbot Check-in">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
   <div class="header">
        <h1 style="padding-left: 70px;text-align:left;float:left;">Welcome to Hotel West - Checkin</h1>
        <h2 style="padding-right: 70px;text-align:right;float:right;">
        Hi <?php echo $_SESSION['userName']; ?>!
        <a class="login_out" href="../home.php">Home</a>
        <?php if ($_SESSION['role'] != 3) { ?>
            <a class="login_out" href="../admin/admin/admin.html"> Panel</a>
        <?php } ?>
            <a class="login_out" href="../logout.php"> logout</a>
        </h2>
        <hr style="clear:both;"/>     
    </div>
<div id="main_part_inner">
            
            <div id="panel">
                <div style="margin-left:10px">
                    <h3>Search for Reservation</h3>
                    <form id="search-panel" style="justify-content: space-between;">
                        <p><input type="text" id="last_name" name="last_name" placeholder="Last Name" onchange="search()"></p>
                        <p><input type="text" id="confirmation_num" name="confirmation_num" placeholder="Confirmation Number" onchange="search()"></p>
                        <p id="result"></p>
                    </form>
                </div>
            </div>


            <div id="animation">
                <video id="botVideo" width="100%" height="100%">
                    <source type="video/mp4" src="../videos/female.mp4">-->
                </video>
            </div>

            <div id="document">
               <form id="reg_card">
                <div id="doc_container">
                    <div id="dc1"><h1>GUEST REGISTRATION CARD</h1></div>
                    <div id="dc2"><img id="doc_logo" src="../images/logo.png"  alt="registration_card_logo" style="height:100px;padding:5px"></div>
                    <div id="dc3">First name:</div>
                    <div id="dc4"><input class="reg_field_f" type="text" name="f_name" value="" tabindex="1" readonly size="14"></div>
                    <div id="dc5">Last name:</div>
                    <div id="dc6"><input class="reg_field_f" type="text" name="l_name" value="" tabindex="2" readonly size="14"></div>
                    <div id="dc7">Arrival Date:</div>
                    <div id="dc8"><input class="reg_field_f" type="text" name="a_date" value="" tabindex="3" readonly size="14"></div>
                    <div id="dc9">Departure Date:</div>
                    <div id="dc10"><input class="reg_field_f" type="text" name="d_date" value="" tabindex="4" readonly size="14"> </div>
                    <div id="dc11">Reservation No.: </div>
                    <div id="dc12"><input class="reg_field_f" type="text" name="res_no" value="" tabindex="5" readonly size="14"></div>
                    <div id="dc13">Room Type:</div>
                    <div id="dc14"><input class="reg_field_f" type="text" name="r_type" value="" tabindex="6" size="14" readonly></div>
                    <div id="dc15">Room Rate: $</div>
                    <div id="dc16"><input class="reg_field_f" type="text" name="r_rate" value="" tabindex="7" size="13" readonly> </div>
                    <div id="dc17"><hr></div>
                    <div id="dc18">Address:</div>
                    <div id="dc19"><input class="reg_field" type="text" name="address" value="" tabindex="8" size="14"></div>
                    <div id="dc20">Country:</div>
                    <div id="dc21"><input class="reg_field" type="text" name="country" value="" tabindex="9" size="14"></div>
                    <div id="dc22">Zip Code:</div>
                    <div id="dc23"><input class="reg_field" type="text" name="zip" value="" tabindex="10" size="13"></div>
                    <div id="dc24">Phone:</div>
                    <div id="dc25"><input class="reg_field" type="text" name="phone" value="" tabindex="11" size="14"></div>
                    <div id="dc26">Email:</div>
                    <div id="dc27"><input class="reg_field" type="text" name="email" value="" tabindex="12" size="14"></div>
                    <div id="dc28"><hr ></div>
                    <div id="dc29">ID Number:</div>
                    <div id="dc30"><input class="reg_field" type="text" name="id_no" value="" tabindex="13" size="14"></div>
                    <div id="dc31">Nationality:</div>
                    <div id="dc32"><input class="reg_field" type="text" name="nationality" value="" tabindex="14" size="14"></div>
                    <div id="dc33">Date of Birth:</div>
                    <div id="dc34"><input class="reg_field" type="text" name="date_birth" value="" tabindex="15" size="13"></div>
                    <div id="dc35">Date of Issue:</div>
                    <div id="dc36"><input class="reg_field" type="text" name="date_issue" value="" tabindex="16" size="14"></div>
                    <div id="dc37">Date of Expiry:</div>
                    <div id="dc38"><input class="reg_field" type="text" name="date_expiry" value="" tabindex="17" size="14"></div>
                    <div id="dc39"></div>
                    <div id="dc40"><input id='signature_block' class="reg_field_f" type="text" name="signature" size="17" placeholder="Signature here" readonly></div>
                    <div id="dc41">
                        <button id='reg_show_term' type="button" onclick="show_term()">Show terms & conditions</button>
                        <button type="submit">Confirm</button></div>
                   </div>
                </form>
                <img id="term_doc" src="../images/terms_and_conditions.png" alt="terms_and_conditions">
            </div>


            <div id="chat_box" class="msger">
                <header class="msger-header">
                    <div class="msger-header-title">
                        <i class="fas fa-comment-alt"></i> SimpleChat
                    </div>
                    <div class="msger-header-options">
                        <span><i class="fas fa-cog"></i></span>
                    </div>
                </header>

                <main class="msger-chat">
                    <div class="msg left-msg">
                        <div class="msg-img" style="background-image: url(../images/msg_robot.svg)"></div>

                        <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">BOT</div>
                                <div class="msg-info-time">12:45</div>
                            </div>

                            <div class="msg-text">
                                Hi, I am your practice partner.<br>From now on, I play your guest.😄
                                <br><br><b>Comment:</b><br>
                                1. /reset: to restart a new dialogue<br>
                                2. /complete:  to finalize current dialogue and calculate your score
                            </div>
                        </div>
                    </div>

                </main>

                <form class="msger-inputarea">
                    <input type="text" class="msger-input" size="20" placeholder="Enter your message...">
                    <button type="submit" class="msger-send-btn">Send</button>
                    <button id="record" type="button" class="msger-send-btn" onclick="record()">Record</button>
                </form>
            </div>

        </div>
    
    <script src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script type="text/javascript" src="../js/checkin.js"></script>