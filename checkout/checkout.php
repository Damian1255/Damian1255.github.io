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
    <title>Chatbot Demo - Checkout</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/chatbox_css.css">
    <link rel="stylesheet" href="../css/checkout_web.css">
    <link rel="shortcut icon" href="#">
    <meta name="keywords" content="Chatbot Check-out">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
   <div class="header">
        <h1 style="padding-left: 70px;text-align:left;float:left;">Welcome to Hotel West - Checkout</h1>
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
                    <h3>Search for Stay</h3>
                    <form id="search-panel" style="justify-content: space-between;">
                        <p><input type="text" id="last_name" name="last_name" placeholder="Last Name" onchange="search()"></p>
                        <p><input type="text" id="room_num" name="room_num" placeholder="Room Number" onchange="search()"></p>
                        <p id="result"></p>
                    </form>
                </div>
            </div>


            <div id="animation">
                <video id="botVideo" width="100%" height="100%">
                    <source type="video/mp4" src="../videos/male.mp4">
                </video>
            </div>

            <form id="document">
                <div id="doc_container">
                    <div id="dc1"><img id="doc_logo" src="../images/bill_logo.PNG"  alt="registration_card_logo" style="height:100px;padding:5px"></div>
                    <div id="dc2">TAX INVOICE</div>
                    <div id="dc3" style="font-size:80%">GST Registration No. MB-8100027-6</div>
                    <div id="dc4">GUEST NAME :</div>
                    <div id="dc5"><input type="text" name="g_name" value="" readonly size="14"></div>
                    <div id="dc6">COMPANY :</div>
                    <div id="dc7"><input type="text" name="company" value="" readonly size="14"></div>
                    <div id="dc8">Address :</div>
                    <div id="dc9"><input type="text" name="address" value="" size="14" readonly></div>                    
                    <div id="dc10">FOLIO NO : </div>
                    <div id="dc11"><input type="text" name="folio_no" value="" readonly size="14" class="align_center"></div>
                    <div id="dc12">ROOM NO :</div>
                    <div id="dc13"><input type="text" name="room_no" value="" size="14" readonly class="align_center"></div>
                    <div id="dc14">ARRIVAL DATE :</div>
                    <div id="dc15"><input type="text" name="a_date" value="" readonly size="14" class="align_center"></div>
                    <div id="dc16">DEPARTUTE DATE:</div>
                    <div id="dc17"><input type="text" name="d_date" value="" readonly size="14" class="align_center"> </div> 
                    <div id="dc18">NO OF ADULT/ CHILDREN :</div>
                    <div id="dc19"><input type="text" name="a_c_no" value="" size="14" readonly class="align_center"> </div>     <div id="dc20">CASHIER ID :</div>
                    <div id="dc21"><input type="text" name="cashier_id" value="" size="14" class="align_center"></div>
                    <div id="dc22">PAGE : </div>
                    <div id="dc23"><input type="text" name="page" value="" size="14" class="align_center"></div>
                    <div id="dc24">PRINT DATE :</div>
                    <div id="dc25"><input type="text" name="p_date" id="p_date" value="" size="14" class="align_center"></div>
                    <div id="dc26"><hr ></div>
                    <div id="dc27">DATE</div>
                    <div id="dc28">DESCRIPTION</div>
                    <div id="dc29">REFERENCE</div>
                    <div id="dc30">CHARGES (S$)</div>
                    <div id="dc31">CREDIT (S$)</div>
                    <div id="dc32"><hr></div>
                    <div id="dc33"><input type="text" name="b_date1" value="" size="14"></div>
                    <div id="dc34"><input type="text" name="b_desc1" value="" size="50"></div>
                    <div id="dc35"><input class="align_right" type="text" name="ac1" value="" size="10"></div>
                    <div id="dc36"><input type="text" name="b_date2" value="" size="14"></div>
                    <div id="dc37"><input type="text" name="b_desc2" value="" size="50"></div>
                    <div id="dc38"><input class="align_right" type="text" name="sc1" value="" size="10"></div>
                    <div id="dc39"><input type="text" name="b_date3" value="" size="14"></div>
                    <div id="dc40"><input type="text" name="b_desc3" value="" size="50"></div>
                    <div id="dc41"><input class="align_right" type="text" name="GST1" value="" size="10"></div>
                    <div id="dc42"><input type="text" name="b_date4" value="" size="14"></div>
                    <div id="dc43"><input type="text" name="b_desc4" value="" size="50"></div>
                    <div id="dc44"><input class="align_right" type="text" name="ac2" value="" size="10"></div>
                    <div id="dc45"><input type="text" name="b_date5" value="" size="14"></div>
                    <div id="dc46"><input type="text" name="b_desc5" value="" size="50"></div>
                    <div id="dc47"><input class="align_right" type="text" name="sc2" value="" size="10"></div>
                    <div id="dc48"><input type="text" name="b_date6" value="" size="14"></div>
                    <div id="dc49"><input type="text" name="b_desc6" value="" size="50"></div>
                    <div id="dc50"><input class="align_right" type="text" name="GST2" value="" size="10"></div>
                    <div id="dc51"><input type="text" name="b_date7" value="" size="14"></div>
                    <div id="dc52"><input type="text" name="b_desc7" value="" size="50"></div>
                    <div id="dc53"><input class="align_right" type="text" name="ac3" value="" size="10"></div>
                    <div id="dc54"><input type="text" name="b_date8" value="" size="14"></div>
                    <div id="dc55"><input type="text" name="b_desc8" value="" size="50"></div>
                    <div id="dc56"><input class="align_right" type="text" name="sc3" value="" size="10"></div>
                    <div id="dc57"><input type="text" name="b_date9" value="" size="14"></div>
                    <div id="dc58"><input type="text" name="b_desc9" value="" size="50"></div>
                    <div id="dc59"><input class="align_right" type="text" name="GST3" value="" size="10"></div>
                    <div id="dc60"><input type="text" name="b_date10" id="b_date10" value="" tabindex="14" size="14"></div>
                    <div id="dc61"><button type="button" id="myBtn">Additional Charge</button> 
                        <p id="output"></p>   
                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <input type="checkbox" name="minibar_items" id="minibar_item1" value="Coke" onclick="document.getElementById('add_qty1').style.display='inline'">Coke
                                <input type="number" min="1" max="10" id="add_qty1" name="add_qty1" value="0" size="5" placeholder="Quantity" style="display: none" onchange="calculateAddPrice(1,6)"><br>
                                <input type="checkbox" name="minibar_items" id="minibar_item2" value="Coke Light" onclick="document.getElementById('add_qty2').style.display='inline'">Coke Light
                                <input type="number" min="1" max="10" id="add_qty2" name="add_qty2" value="0" size="5" placeholder="Quantity" style="display: none" onchange="calculateAddPrice(2,6)"><br>
                                <input type="checkbox" name="minibar_items" id="minibar_item3" value="Pokka Tea" onclick="document.getElementById('add_qty3').style.display='inline'">Pokka Tea Assorted (500ml)
                                <input type="number" min="1" max="10" id="add_qty3" name="add_qty3" value="0" size="5" placeholder="Quantity" style="display: none" onchange="calculateAddPrice(3,6)"><br>
                                <input type="checkbox" name="minibar_items" id="minibar_item4" value="Evian Mineral Water" onclick="document.getElementById('add_qty4').style.display='inline'">Evian Mineral Water
                                <input type="number" min="1" max="10" id="add_qty4" name="add_qty4" value="0" size="5" placeholder="Quantity" style="display: none" onchange="calculateAddPrice(4,6)"><br>
                                <input type="checkbox" name="minibar_items" id="minibar_item5" value="Perrier" onclick="document.getElementById('add_qty5').style.display='inline'">Perrier
                                <input type="number" min="1" max="10" id="add_qty5" name="add_qty5" value="0" size="5" placeholder="Quantity" style="display: none" onchange="calculateAddPrice(5,7)"><br>
                                <input type="checkbox" name="minibar_items" id="minibar_item6" value="California Creamery Tortilla Chips" onclick="document.getElementById('add_qty6').style.display='inline'">California Creamery Tortilla Chips
                                <input type="number" min="1" max="10" id="add_qty6" name="add_qty6" value="0" size="5" placeholder="Quantity" style="display: none" onchange="calculateAddPrice(6,9)"><br>
                                <input type="checkbox" name="minibar_items" id="minibar_item7" value="Tao Kae Noi Seaweed Snacks" onclick="document.getElementById('add_qty7').style.display='inline'">Tao Kae Noi Seaweed Snacks
                                <input type="number" min="1" max="10" id="add_qty7" name="add_qty7" value="0" size="5" placeholder="Quantity" style="display: none" onchange="calculateAddPrice(7,7)"><br>
                                <input type="checkbox" name="minibar_items" id="minibar_item8" value="Cadbury Choc Bar" onclick="document.getElementById('add_qty8').style.display='inline'">Cadbury Choc Bar Assorted
                                <input type="number" min="1" max="10" id="add_qty8" name="add_qty8" value="0" size="5" placeholder="Quantity" style="display: none" onchange="calculateAddPrice(8,7)"><br>
                                <input type="checkbox" name="minibar_items" id="minibar_item9" value="Ruffles Potato Chips" onclick="document.getElementById('add_qty9').style.display='inline'">Ruffles Potato Chips (Assorted)
                                <input type="number" min="1" max="10" id="add_qty9" name="add_qty9" value="0" size="5" placeholder="Quantity" style="display: none" onchange="calculateAddPrice(9,10)">
                            </div>
                        </div>
                    </div>
                    <div id="dc62"><input class="align_right" type="text" name="add_price" id="add_price" value="" size="10"></div>
                    <div id="dc63"><hr ></div>
                    <div id="dc64">Total </div>
                    <div id="dc65"><input class="align_right" type="text" name="total" id="total" value="" size="10"></div>
                    <div id="dc66">Balance Due</div>
                    <div id="dc67"><input class="align_right" type="text" name="bal_due" id="bal_due" value="" size="10"></div>
                    <div id="dc68"><hr ></div>
                    <div id="dc69">Total Amount without taxes </div>
                    <div id="dc70"><input class="align_right" type="text" name="total_no_GST" id="total_no_GST" value="" size="10"></div>
                    <div id="dc71">Total GST</div>
                    <div id="dc72"><input class="align_right" type="text" name="GST" id="GST" value="" size="10"></div>
                    <div id="dc73">Total Amount with GST</div>
                    <div id="dc74"><input class="align_right" type="text" name="total_GST" id="total_GST" value="" size="10"></div>           
                    <div id="dc75"><p>I agree that my liability for this bill is not waived and agree to held personally liable in the event the indicated person, company or association fails</p></div>
                    <div id="dc76"><p> to pay for any part of the full amount of these charges. Payment should be made payable to Institute of Techinical Education</p></div>
                    <div id="dc77"><p></p></div>
                    <div id="dc78"><input id='signature_block' type="text" name="signature" size="17" placeholder="Signature here" readonly style="border-bottom: 2px solid darkgray;"></div>
                    <div id="dc79"> Guest Signature</div>
                    <div id="dc80"><button type="submit">Confirm</button></div>
                </div>
            </form>

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
                                2. /complete: to finalize current dialogue and calculate your score
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
{% endblock %}

{% block myscript %}

    <!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
    <script src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--    <script type="text/javascript" src="static/js/script.js"></script>-->
    <script type="text/javascript" src="{% static 'checkout/js/script.js' %}"></script>
    {% if messages %}
    <script>
            {% for msg in messages %}
                alert('{{ msg.message }}');
            {% endfor %}
        </script>
    {% endif %}
{% endblock %}
