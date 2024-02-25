<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event2book</title>
</head>
<body bgcolor="powderblue">
<header>
    <nav style= "text-decoration: none; padding:3px">
            <a>event2book</a>
            <a href="#home" >Home</a>
            <a href="#about">About</a>
            <a href="#book">Book Tickets</a>
            <a href="#schedule">Schedule Events</a>
            <a href="#faq">FAQ</a>
            <a href="#footer">Contact</a>
    </nav>
    <hr>
</header>
    <style>
        .inline{
            display:flex;
            flex-direction: row;
            margin:10px;
        }
    </style>
    <section>
        <div  id="home">
        <div>
            <p>Best Summer fest</p>
            <h2>Dreamville music festival</h2>
            <h5><i style="font-size:24px" class="fa">&#xf073;</i> 29th February 2024 &nbsp;<i style="font-size:24px" 
                class="fa">&#xf041;</i> qwe road, Boston </h5>
            <button>Buy Tickets</button>
        </div>
        </div>
    </section>
    <section>
        <div id="about">
        <div class="container1">
            <h2>About the event</h2>
                <p style="border-left: 1px solid;">
                Lorem ipsum, dolor sit amet consectetur 
                    adipisicing elit. Veniam eum maiores tenetur
                    commodi distinctio, excepturi neque 
                    dignissimos reprehenderit recusandae 
                    consequuntur dicta facilis ab cum. 
                    Deserunt inventore nobis voluptatibus 
                    numquam labore.
                </p>
        </div>
        <div class="container1">
            <h2>Details on the event</h2>
                <p style="border-left: 1px solid;">
                    Lorem ipsum, dolor sit amet consectetur 
                    adipisicing elit. Veniam eum maiores tenetur
                    commodi distinctio, excepturi neque 
                    dignissimos reprehenderit recusandae 
                    consequuntur dicta facilis ab cum. 
                    Deserunt inventore nobis voluptatibus 
                    numquam labore.
                </p>
        </div>
        <div class="container2">
            <h3><i style="font-size:24px" class="fa">&#xf073;</i> February 29, 2024</h3>
            <h3><i style="font-size:24px" class="fa">&#xf041;</i> qwe road, Boston</h3>
            <h3>100+ performances</h3>    
            <h3>1250+ seats</h3>
            <button>Register Now!</button>
        </div>
        </div>
    </section>
    <section>
        <div id="book">
        <h2>Book Tickets for an event</h2>
        <div class="inline">
        <div class="inline">
            <img src="">
            <h5>5 Mar</h5>
            <h5>&nbsp;2024</h5>
            <h5>&nbsp;4:30 GMT</h5>
        </div>
        <div class="inline">
            <i></i><h5>Utopia Tour</h5>
        </div>
        <div class="inline">
            <h5>Venue : Circus Maximus</h5>
        </div>
        <div class="inline">
            <button>Buy a ticket</button>
        </div>
        <!-- 2nd div -->
        </div>
        <div class="inline">
        <div class="inline">
            <img src="">
            <h5>10 Mar</h5><br>
            <h5>&nbsp;2024</h5><br>
            <h5>&nbsp;4:30 GMT</h5>
        </div>
        <div class="inline">
            <i></i><h5>DAMN.</h5>
        </div>
        <div class="inline">
            <h5>Venue : Paris</h5>
        </div>
        <div class="inline">
            <button>Buy a ticket</button>
        </div>
        </div>
        <!-- 3rd div -->
        </div>
        <div class="inline">
        <div class="inline">
            <img src="">
            <h5>15 Mar</h5><br>
            <h5>&nbsp;2024</h5><br>
            <h5>&nbsp;4:30 GMT</h5>
        </div>
        <div class="inline">
            <i></i><h5>SET IT OFF</h5>
        </div>
        <div class="inline">
            <h5>Venue : Sydney</h5>
        </div>
        <div class="inline">
            <button>Buy a ticket</button>
        </div>
        </div>
        <!-- 4th div -->
        </div>
        <div class="inline">
        <div class="inline">
            <img src="">
            <h5>20 Mar</h5><br>
            <h5>&nbsp;2024</h5><br>
            <h5>&nbsp;4:30 GMT</h5>
        </div>
        <div class="inline">
            <i></i><h5>Savage Mode</h5>
        </div>
        <div class="inline">
            <h5>Venue : California</h5>
        </div>
        <div class="inline">
            <button>Buy a ticket</button>
        </div>
        </div>
        </div>
    </section>
    <section>
        <div id="schedule">
        <h2>Schedule your Event</h2>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <label>Event Name</label><br>
            <input type="text" name="ename" required><br>
            <label>Event Location</label><br>
            <input type="text" name="eloc" required><br>
            <label>Event Time</label><br>
            <input type="time" name="etime" required><br> <!-- 00:00 time format -->
            <label>Event Date</label><br>        <!-- dd/mm/yyyy date format -->
            <input type="date" name="edate" required><br><br>
            <input type="submit" name="schedule" value="Schedule!"><br>
        </form>
        </div>
    </section>
    <section>
        <div id="faq">
        <h2>Frequently asked questions</h2>
        <div>
            <h4>Why are you gay?</h4>
            <h5>I am gay</h5>
        </div>
        <div>
            <h4>Who are you?</h4>
            <h5>Your mom</h5>
        </div>
        <div>
            <h4>usn 406?</h4>
            <h5>Yes mom</h5>
        </div>
        <div>
            <h4>Can I really book event tickets irl?</h4>
            <h5>You bet</h5>
        </div>
        </div>
    </section>
    <footer id="footer">
    <hr>
    <div class="inlinefooter">
    <label>ph_no</label>
    <ul>
        <li>+91 91081 34824</li>
        <li>+91 72041 71401</li>
    </ul>
    <label>E-mail</label>
    <ul>
        <li>arunreddy21@gmail.com</li>
        <li>anilkumarns2@gmail.com</li>
    </ul>
    <label>Location</label>
    <ul>
        <li>#420/69, The Oxford College of Engineering,<br>Bommanahalli, Bangalore-69</li>
    </ul>
</div>
</footer>
</body>
<?php
    try{
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $ename=filter_input(INPUT_POST,"ename", FILTER_SANITIZE_SPECIAL_CHARS);
            $eloc=filter_input(INPUT_POST,"eloc",  FILTER_SANITIZE_SPECIAL_CHARS);
            $etime=filter_input(INPUT_POST,"etime",  FILTER_SANITIZE_SPECIAL_CHARS);
            $edate=filter_input(INPUT_POST,"edate",  FILTER_SANITIZE_SPECIAL_CHARS);
            $SQL="INSERT INTO events(ename,eloc,etime,edate) VALUES('$ename','$eloc','$etime','$edate')";
            mysqli_query($conn,$SQL);
            echo"You have scheduled your event successfully!";
        }
    }
    catch(mysqli_sql_exception){
        echo"This event is already scheduled by your mom";
    }
    mysqli_close($conn);
?>
</html>