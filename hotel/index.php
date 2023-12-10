<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meikarta Hotel</title>
    <link rel="stylesheet" href="index-style.css">
</head>
<body class="index" id="bg">
        <header class="nav">
            <nav class="navbar">
                <div class="title"><a href="#">Meikarta Hotel.</a></div>
                    <ul>
                        <li><a href="#HOME">Home</a></li> 
                        <li><a href="#ABOUT">About Us</a></li> 
                        <li><a href="#ROOMS">Rooms</a></li> 
                        <li><a href="#CONTACT">Contact</a></li> 
                    </ul>
                <div class="loginBtn">
                <a href="authentication.php">Login</a>
            </nav>
        </header>
        <main id="HOME">  
            <div class="content">
                <h2>Welcome to Meikarta Hotel.</h2>
            </div>
        </main>
        <main id="ABOUT">
            <div id="container">
            <h2>About Us.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas dolor ab similique assumenda minima, laborum corrupti, quod sit magnam omnis officia. Nemo, hic ratione illo modi aspernatur cumque aliquid sunt. <br>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum tenetur repellendus adipisci. Saepe nesciunt tenetur consequatur ab. Impedit, veritatis dolore! Maiores doloremque veniam minus consectetur obcaecati, ex praesentium libero reiciendis! <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa incidunt itaque fugiat placeat ut cupiditate veritatis praesentium ad quis, accusamus, minus quas quam alias asperiores explicabo? Quibusdam maxime praesentium excepturi.</p>
            </div>
        </main>

        <main id="ROOMS">
            <div id="container" class="styleroom">
                <h2>Rooms.</h2>
                <div id="RoomGroup">
                    <div class="Room">
                        <img src="https://id.marriottyogyakarta.com/resourcefiles/roomssmallimages/presidential-suite-living-room.jpg?version=11102023114352" alt="">
                        <h3>DELUXE SUITE</h3>
                        <p>Makes your sleep enak sangat also make your dream comes true with king size bed</p>
                        <button>Book now</button>
                    </div>
                    <div class="Room">
                        <img src="https://id.marriottyogyakarta.com/resourcefiles/roomssmallimages/deluxe-twin-bed-guw.jpg?version=11102023114352" alt="">
                        <h3>PREMIER SUITE</h3>
                        <p>this is the same but different than before its not the same becaus its different</p>
                        <button>Book now</button>
                    </div>
                    <div class="Room">
                        <img src="https://id.marriottyogyakarta.com/resourcefiles/roomssmallimages/executive-suite.jpg?version=11102023114352" alt="">
                        <h3>EXECUTIVE SUITE</h3>
                        <p>Best for Business needs to help you rest well to face tomorrow's challenge's </p>
                        <button>Book now</button>
                    </div>
                </div>
            </div>
        </main>
        <main id="CONTACT">
            <div class="formBox">
                <h2>Contact.</h2>
                <form action="action-contact.php">
                    <label for="name">Name : </label>
                    <input type="text" id="name" name="name">
                    <label for="email">Email : </label>
                    <input type="text" name="email" id="email">
                    <label for="subject">Subject : </label>
                    <textarea id="subject" name="subject"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
        </main>
        <footer>
            <div class="">©️Meikarta Hotel 2023</div>
        </footer>
        


    <script src="main.js"></script>
</body>
</html>
