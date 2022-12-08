<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>MYJ World - The Homepage Of MYJ</title>
    <link rel="icon" href="MYJ_icon_updated.png">

    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <meta name="viewport" content="width=device-width">
    <meta name="google-site-verification" content="J91IjLyufmgCuYE1h_ZmA-nwqf67FA8uZpKAeKpVVaQ" />

    <!-- <script>
        function validate_form(event) {
            var name = document.forms["contact-form"]["name"].value
            var email = document.forms["contact-form"]["email"].value
            var messege = document.forms["contact-form"]["message"].value

            if (name == "") {
                alert("Name field is blank. Required to fill")
                event.preventDefault();
                window.history.back();
            }
            if (email == "") {
                alert("Email field is blank. Required to fill")
                event.preventDefault();
                window.history.back();
            }
            if (messege == "") {
                alert("Messege field is blank. Required to fill")
                event.preventDefault();
                window.history.back();
            }
            if (!name == "") {
                if (!email == "") {
                    if (!messege == "") {
                        localStorage.setItem("Name", na)
                        localStorage.setItem("Email", ema)
                        localStorage.setItem("Message", messege)
                    }
                }
            }

        }
    </script> -->

    <!-- <link rel="manifest" href="manifest.webmanifest"/> -->
</head>

<body>


    <nav>
        <div id="inner-nav">
            <div id="logo">
                <a href="https://myj.rf.gd">
                    <image src="MYJ_icon_updated_white.png" height="55px" title="MYJ Icon">
                </a>
            </div>
            <div id="nav-btns">
                <a href="#" title="Home"><button class="selectedbtn" ::before>Home</button></a>
                <!-- <a href="play.html" title="Play Store Details"> <button>Play Store Details</button></a>
                <a href="yt.html" title="Youtube Details"> <button>YouTube Details</button></a>
                <a href="scratch.html" title="Scratch Details"> <button>Scratch Details</button></a>
                <a href="https://scratch.mit.edu/studios/27396731" target="_blank" rel="noopener noreferrer" title="Scratch"><button>Scratch<img src="new_tab.png" height="15px"
                            onmouseover="this.src='new_tab_hover.png'" onmouseout="this.src='new_tab.png'"
                            title="Open in new tab"></button></a>
                <a href="https://play.google.com/store/apps/developer?id=Muhammad+Yousuf+Jamil" target="_blank" rel="noopener noreferrer"><button>Play Store<img src="new_tab.png" height="15px"
                            onmouseover="this.src='new_tab_hover.png'" onmouseout="this.src='new_tab.png'"
                            title="Open in new tab"></button></a>
                <a href="https://www.youtube.com/channel/UC91NABKCGSLKzfcqiipr3rg" target="_blank" rel="noopener noreferrer" title="Youtube"> <button>YouTube<img src="new_tab.png" height="15px"
                            onmouseover="this.src='new_tab_hover.png'" onmouseout="this.src='new_tab.png'"
                            title="Open in new tab"></button></a> -->
                <a href="services"><button>Services</button></a>
                <div id="nav-drp-play" class="drp-name" onmousemove="document.getElementById('nav-play').style.display = 'block';" onmouseout="document.getElementById('nav-play').style.display = 'none';" onclick="document.getElementById('nav-play').style.display = 'block';">
                    <button>Play Store</button>
                    <div id="nav-play" class="hover-nav">
                        <a href="play-store" title="Play Store Details"> <button>Details</button></a>
                        <a href="https://play.google.com/store/apps/developer?id=Muhammad+Yousuf+Jamil" target="_blank" rel="noopener noreferrer"><button>Play Store</button></a>
                    </div>
                </div>
                <div id="nav-drp-yt" class="drp-name" onmousemove="document.getElementById('nav-yt').style.display = 'block';" onmouseout="document.getElementById('nav-yt').style.display = 'none';" onclick="document.getElementById('nav-yt').style.display = 'block';">
                    <button>YouTube</button>
                    <div id="nav-yt" class="hover-nav">
                        <a href="youtube" title="Youtube Details"> <button>Details</button></a>
                        <a href="https://www.youtube.com/channel/UC91NABKCGSLKzfcqiipr3rg" target="_blank" rel="noopener noreferrer" title="Youtube"> <button>YouTube</button></a>
                    </div>
                </div>
                <div id="nav-drp-scratch" class="drp-name" onmousemove="document.getElementById('nav-scratch').style.display = 'block';" onmouseout="document.getElementById('nav-scratch').style.display = 'none';" onclick="document.getElementById('nav-scratch').style.display = 'block';">
                    <button>Scratch</button>
                    <div id="nav-scratch" class="hover-nav">
                        <a href="scratch" title="Scratch Details"> <button>Details</button></a>
                        <a href="https://scratch.mit.edu/studios/27396731" target="_blank" rel="noopener noreferrer" title="Scratch"><button>Scratch</button></a>
                    </div>
                </div>
                <a href="https://chatting.page/foit4pdnzzdkvjyx7qdrmlqzq9js3pir" target="_blank" rel="noopener noreferrer" title="Chatting Page"> <button>Chat with us<img src="new_tab.png" height="15px"
                            onmouseover="this.src='new_tab_hover.png'" onmouseout="this.src='new_tab.png'"
                            title="Open in new tab"></button></a>
            </div>
            <i class='fa fa-bars' style='color: white' onclick="document.getElementById('sidebar').style.display='flex';"></i>
        </div>
    </nav>
    <div id="sidebar" class="sidebar" onclick="document.getElementById('sidebar').style.display='none';">
        <span><i class="fa fa-times"></i></span>
        <div>
            <a href="#" title="Home"><button>Home</button></a>
            <button onclick="document.getElementById('sidebar-play').style.display='block';">Play Store</button>
            <button onclick="document.getElementById('sidebar-yt').style.display='block';">YouTube</button>
            <button onclick="document.getElementById('sidebar-scratch').style.display='block';">Scratch</button>
            <a href="services" title="Services"><button>Services</button></a>
            <a href="https://chatting.page/foit4pdnzzdkvjyx7qdrmlqzq9js3pir" target="_blank" rel="noopener noreferrer" title="Chatting Page"> <button>Chat with us</button></a>
        </div>
    </div>
    <div id="sidebar-play" class="sidebar" onclick="document.getElementById('sidebar-play').style.display='none';">
        <span><i class="fa fa-times"></i></span>
        <div class="inner-padding">
            <a href="play-store" title="Play Store Details"> <button>Details</button></a>
            <a href="https://play.google.com/store/apps/developer?id=Muhammad+Yousuf+Jamil" target="_blank" rel="noopener noreferrer"><button>Play Store</button></a>
        </div>
    </div>
    <div id="sidebar-yt" class="sidebar" onclick="document.getElementById('sidebar-yt').style.display='none';">
        <span><i class="fa fa-times"></i></span>
        <div class="inner-padding">
            <a href="youtube" title="Youtube Details"> <button>Details</button></a>
            <a href="https://www.youtube.com/channel/UC91NABKCGSLKzfcqiipr3rg" target="_blank" rel="noopener noreferrer" title="Youtube"> <button>YouTube</button></a>
        </div>
    </div>
    <div id="sidebar-scratch" class="sidebar" onclick="document.getElementById('sidebar-scratch').style.display='none';">
        <span><i class="fa fa-times"></i></span>
        <div class="inner-padding">
            <a href="scratch" title="Scratch Details"> <button>Details</button></a>
            <a href="https://scratch.mit.edu/studios/27396731" target="_blank" rel="noopener noreferrer" title="Scratch"><button>Scratch</button></a>
        </div>
    </div>
    <div id="header">
        <div id="header-content">
            <h1 align="center" title="MYJ World - The Place Where Everything Is Latest">MYJ World - The Place Where Everything Is The Latest</h1>
            <h2 title="Working for your betterment">Working for your betterment</h2>
        </div>
    </div>

    <div id="intro">
        <div id="inner-intro">
            <h1 title="Introduction"> Introduction </h1>
            <p align="left" title="Want to have latest technology? Want to get latest updates? No issue. MYJ is the solution for you.">Want to have latest technology? Want to get latest updates? No issue. MYJ is the solution for you.</p>
        </div>
    </div>

    <div id="what-we-provide">
        <div id="what-image">
            <img src="MYJ_icon_updated.png" alt="MYJ Icon" title="MYJ Icon">
        </div>
        <div id="what-text">
            <h1 title="Our services">Our Services</h1>
            <p title="MYJ provides multiple services for users. They include: 1. Scratch, 2. Play store, 3. YouTube">MYJ provides multiple services for users. They include:
                <ul>
                    <li><a href="https://scratch.mit.edu/studios/27396731">Scratch</a></li>
                    <li><a href="https://play.google.com/store/apps/developer?id=Muhammad+Yousuf+Jamil">Play Store</a></li>
                    <li><a href="https://www.youtube.com/channel/UC91NABKCGSLKzfcqiipr3rg"> YouTube</a></li>
                </ul>
            </p>

        </div>
    </div>


    <div id="why-choose-us">
        <table>
            <tr>
                <td>
                    <h1 title="Why choose MYJ?">Why choose MYJ?</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <p title="There are multiple reasons why you should choose MYJ. They include: 1. Technology at your fingertips, 2. Providing Number One Service, 3. Multi-featured apps with extremely well developed services">There are multiple reasons why you should choose MYJ. They include:
                        <ol>
                            <li><a href="#technology-at-your-fingertips">Technology at your fingertips</a></li>
                            <li><a href="#no-1-service">Providing Number 1 Service</a></li>
                            <li><a href="https://play.google.com/store/apps/developer?id=Muhammad+Yousuf+Jamil">Multi-featured
                                apps with extremely well developed services</a></li>
                        </ol>
                    </p>
                </td>
            </tr>
        </table>
    </div>

    <div id="technology-at-your-fingertips">
        <div id="inner-technology-at-your-fingertips">
            <h1 id="technology-at-your-fingertips-heading" title="Technology at your fingertips">Technology At Your Fingertips</h1>
            <p title="With technology paving the way towards new developments, accessing, finding, and sharing information is easier than ever before. With a simple click we can make your daily tasks simpler and more efficient. Our sophisticated technology here at MYJ is ready for you to use at your own convenience. Start using our services today and see how it can change your life!">With technology paving the way towards new developments, accessing, finding, and sharing information is easier than ever before. With a simple click we can make your daily tasks simpler and more efficient. Our sophisticated technology here
                at MYJ is ready for you to use at your own convenience. Start using our services today and see how it can change your life!</p>
        </div>
    </div>

    <div id="no-1-service">
        <div id="inner-no-1-service">
            <h1 id="providing-number-1-service-heading">Providing Number 1 Service</h1>
            <p>Looking for an app that can do it all? MYJ is what you need. Our easy-to-use platform can do just about anything, and allows you to live your life to the fullest. MYJ is the tool for you and can be used from anywhere at anytime! See what it
                has to offer you today!</p>
        </div>
    </div>

    <div id="advantages">
        <div id="advantages-image">
            <img src="image.png">
        </div>
        <div id="advantages-text">
            <h1>Learn All About the Advantages that Our System Has to Offer</h1>
            <div id="personalize-inner-advantages-text">
                <h2>Personalize Your Experience</h2>
                <p>Since 2020, MYJ has set out to provide mobile solutions to help minimize all your daily stresses &ndash; allowing you the chance to maximize your productivity and get back to the things that matter most. At MYJ, we&#8217;ve witnessed first
                    hand how technology and design work together to improve people&#8217;s lives, and believe that this winning combination has the power to revolutionize the way we live our lives.
                </p>
            </div>
            <div id="accessible-inner-advantages-text">
                <h2>Accessible from All Locations</h2>
                <p>At MYJ, we believe that technology and design should seamlessly coexist. With everything there is to do in a day, why not make the things that matter most, the easiest? MYJ is aimed at improving and tackling all the small daily stresses
                    that take up your time, and we have one of the most innovative teams in the industry here to make sure your day is managed as smoothly as possible.</p>
            </div>
        </div>
    </div>

    <div id="long-way">
        <div id="inner-long-way">
            <h1>We&#8217;ve come a long way</h1>
            <h2>We Work Hard For Your Better Life With Advanced Technology</h2>
            <p>What started off as a simple idea evolved in time to a well established company that&#8217;s eager to give back more to its users. Following years of research, MYJ has turned into the Company that can not only offer users a wide range of special
                technological tools, but can also simplify and ease their lives. Start using our innovative services to learn what MYJ can do for you!</p>
        </div>
    </div>

    <div id="reviews">
        <div id="inner-reviews">
            <h1>What people are saying</h1>
            <h2>You can see user reviews below.</h2>
            <!-- <div id="user-reviews">
                <img src="review_abdullah_swoosh.png">
                <img src="review_konstantinas_feetz.png">
                <img src="review_w1_assistant.png">
                <img src="review_w1_translate.png">
                <img src="review_w2_translate.png">
            </div> -->
            <!-- <div id="single-review" class="single-review">
                <div id="inner-review-review" class="review-quote-design">
                    <img src="quote_sign.PNG" alt="quote-sign">
                    <p>review</p>
                </div>
                <p>Name</p>
            </div> -->
            <?php
                $host="sql112.epizy.com";
                $dbuser="epiz_30389702";
                $dbpassword="VjgiAEJdCn4";
                $dbname="epiz_30389702_database";
                $conn = new mysqli($host, $dbuser, $dbpassword, $dbname);
                $success = "Success!";
                $fail = "Not Connected";
                if($conn) {
                    echo "<script>console.log('{$success}' );</script>";
                }
                else {
                    echo "<script>console.log('{$fail}' );</script>";
                }

                $query = $conn->query("SELECT * FROM feedback ORDER BY id DESC LIMIT 3");
                while ($row=$query->fetch_array(MYSQLI_ASSOC)) {
                    echo "<div id='single-review' class='single-review'>";
                    echo "<div id='inner-review-review' class='review-quote-design'>";
                    echo "<img src='quote_sign.PNG' alt='quote-sign'>";
                    echo "<p>".$row['message']."</p>";
                    echo "<div class='ellipsis'>...</div>";
                    echo "</div>";
                    echo "<p>".$row['name']."</p>";
                    echo "<div class='ellipsis'>...</div>";
                    echo "</div>";
                }
            ?>
            <br>
            <a href="feedback">See all &rarr;</a>

            <!-- <div id="single-review" class="single-review">
                <div id="inner-review-review" class="review-quote-design">
                    <img src="quote_sign.PNG" alt="quote-sign">
                    <p>review</p>
                </div>
                <p>Name</p>
            </div>
            <div id="single-review" class="single-review">
                <div id="inner-review-review" class="review-quote-design">
                    <img src="quote_sign.PNG" alt="quote-sign">
                    <p>review</p>
                </div>
                <p>Name</p>
            </div>
            <div id="single-review" class="single-review">
                <div id="inner-review-review" class="review-quote-design">
                    <img src="quote_sign.PNG" alt="quote-sign">
                    <p>review</p>
                </div>
                <p>Name</p>
            </div>
            <div id="single-review" class="single-review">
                <div id="inner-review-review" class="review-quote-design">
                    <img src="quote_sign.PNG" alt="quote-sign">
                    <p>review</p>
                </div>
                <p>Name</p>
            </div>
            <div id="single-review" class="single-review">
                <div id="inner-review-review" class="review-quote-design">
                    <img src="quote_sign.PNG" alt="quote-sign">
                    <p>review</p>
                </div>
                <p>Name</p>
            </div> -->
        </div>
    </div>

    <div id="contact-us">
        <div id="inner-contact">
            <table>
                <tr>
                    <td>
                        <h2>Contact us</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="contact-detail-one" class="zoom">
                            <p>Email: contact.us.myj@gmail.com</p>
                            <a href="email"><button>Email</button></div></a>
                        </div>
                        <div id="contact-detail-two" class="zoom">
                            <p>Live Chat With Us</p>
                            <a href="https://chatting.page/foit4pdnzzdkvjyx7qdrmlqzq9js3pir"><button>Live Chat</button></a>
                        </div>
                        <div id="contact-detail-three" class="zoom">
                            <p>Feedback Form</p>
                            <a href="feedback"><button>Fill Form</button></a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <!-- <p>Contact us is under development.</p> -->
    </div>

    <!-- <p align="left"><a href="https://yousufjamil.wixsite.com/myj-apps"><button>Website for Play Store</button></a></p>
    <p align="left"><a href="https://yousufjamil.wixsite.com/naat" class="test"><button>Website for YouTube</button></a>
    </p>

    <br><br>

    <p>&nbsp;</p>
    <button onclick="myalert()">
        Version 5.0
    </button>
    <script>
        function myalert() {
            alert("This is Version 5.0.");
        }
    </script>

    <p>Go to a previous version?</p>
    <ul>
        <li><a href="old/v1.0/old_v1.html"><button>v1.0</button></a>&nbsp; </li>
        <li><a href="old/v2.0/old_v2.html"><button>v2.0</button></a>&nbsp; </li>
        <li><a href="old/v3.0/old_v3.html"><button>v3.0</button></a>&nbsp; </li>
        <li><a href="old/v4.0/old_v4.html"><button>v4.0</button></a></li>
    </ul>
    <br> -->

    <!-- <div id="contact-us">
        <table width="30%">
            <tr height="40px"></tr>
            <tr>
                <td>
                    <h2>Contact us</h2>
                    <p>Note: After you submit, you will be prompted to send the email. Click the send button to send the email.
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="inner-contact">
                        <form name="contact-form" onsubmit="validate_form(event)" method="post" enctype="text/plain">
                            <br>
                            <p>Email: *</p><input type="text" name="email" placeholder="Email">
                            <br>
                            <p>Name: *</p><input type="text" name="name" placeholder="Name">
                            <br>
                            <p>Message: *</p><textarea type="text" name="message" placeholder="Type your message here" rows="5" cols="65"></textarea>
                            <br>
                            <p>* Required</p>
                            <br>
                            <input type="submit" value="Submit" name="submit" id="myBtn">
                            <input type="reset" value="Reset">
                    </div>
                    </form>
                </td>
            </tr>
            <tr height="40px"></tr>
        </table> -->

    <!-- </div> -->

    <!-- Trigger/Open The Modal
    <button id="myBtn">Open Modal</button>

    The Modal
    <div id="myModal" class="modal">

        Modal content
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Type the following email:</p>
            <div id="inner-modal">
                <p>Email: contact.us.myj@gmail.com</p>
                <p>Subject: Contact Us</p>
                <p>Name: &nbsp;</p>
                <p id="nam"></p>
                <p>Email:: &nbsp;</p>
                <p id="emai"></p>
                <p>Messege: &nbsp;</p>
                <p id="messeg"></p>

            </div>
        </div>

    </div>
    <script>
        function setDataName() {
            document.getElementById("nam").innerHTML += localStorage.getItem(Name)
        }

        function setDataEmail() {
            document.getElementById("emai").innerHTML += localStorage.getItem(Email)
        }

        function setDataMessege() {
            document.getElementById("messeg").innerHTML += localStorage.getItem(Messege)
        }
    </script> -->
    <div class=".footer">
        <div id="down-footer">
            <div id="footer-left1">
                <h1>MYJ World</h1>
                <h2>Working for your betterment</h2>
            </div>
            <div id="footer-right1">
                <p>What started off as an idea to tackle one specific industry has grown into an automated and intricate technology managing to make a breakthrough in the world of Online Services. Since 2020 MYJ Apps has been making users&#8217; lives easier
                    by offering a wide range of products and services through its extensive platform.
                </p>
            </div>
        </div>

        <div id="footer2">
            <p align="center">&copy; 2022, MYJ
                <image src="dot.png" height="10px" width="10px" alt="dot"><a href="https://privacy.myj.rf.gd"><i>Privacy Policy</i> </a>
                    <image src="dot.png" height="10px" width="10px" alt="dot"><a href="https://termsofuse.myj.rf.gd"><i>Terms of Use</i> </a>
            </p>
        </div>
        <div id="footer3">
            <p>This part is for authorised users only: <a href="https://myj.rf.gd/Assets/login_warning.html">&nbsp;<i>Click
                    here</i>&nbsp;</a> to access the private page.</p>
        </div>
        <div id="ginastic-assosiaction">
            <div id="inner-ginastic">
                <!-- <p>We're currently:</p> -->
                <img src="association.png" alt="Association of Ginastic">
            </div>
        </div>
    </div>

    <!-- <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script> -->


    <script type='text/javascript'>
        (function(I, L, T, i, c, k, s) {
            if (I.iticks) return;
            I.iticks = {
                host: c,
                settings: s,
                clientId: k,
                cdn: L,
                queue: []
            };
            var h = T.head || T.documentElement;
            var e = T.createElement(i);
            var l = I.location;
            e.async = true;
            e.src = (L || c) + '/client/inject-v2.min.js';
            h.insertBefore(e, h.firstChild);
            I.iticks.call = function(a, b) {
                I.iticks.queue.push([a, b]);
            };
        })(window, 'https://cdn-v1.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', '24dSCuYprvQfPp73d_c', {});
    </script>

    <!-- <script src="js/app.js"></script> -->
</body>

</html>