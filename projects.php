<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Projects</title>
    <link rel="icon" href="images/Favicon.ico" type="image/x-icon">
    <script>
        function pop_up(url){
        window.open(index.php,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1076,height=768,directories=no,location=no') 
        }
    </script>
</head>
<body>
    <?php include ("navbar.php"); ?>
    <div class="ContentBox">
        <div class="SubContentBox">
            <div class="TitleBox">
                <span class="TitleText">Projects</span>
            </div>
            <div class="SubContentBox">
                I have worked on many different types of project as part of my hands on 
                learning experience at Niagara College, as well as recreationally in my own time. 
                Provided below are a few examples of what I consider to be my best and most intricate work.
            </div>
            <div class="SplitBox">
                <div class="SubContentBox">
                    <img class="ProjectImage" src="images/EmmasThumbnail.png" alt="Emma's Small Engines logo">
                    <span class="SubTitleText">Emma's Engines</span>
                    <p style="margin-bottom: 57px;">
                    A <b>C#, ASP .NET based</b> data tracking and point of Sales system I created as part of a group.
                    </p>
                    <button class="ProjectButton" id="btnEmmas"><span class="MediumText">See more</span></button>
                </div>
                
                <div class="SubContentBox">
                    <img class="ProjectImage" src="images/GameImg1.png" alt="Character standing near a pit">
                    <span class="SubTitleText">Drilling game (WIP)</span>
                    <p style="margin-bottom: 57px;">
                    A 2D tile based drilling game that I am currently developing in the <b>Godot engine using its custom GScript language</b>
                    </p>
                    <button class="ProjectButton" id="btnGame"><span class="MediumText">See more</span></button>
                </div>

                <div class="SubContentBox">
                    <img class="ProjectImage" src="images/WavesThumbnail.png" alt="Waves logo">
                    <span class="SubTitleText">Waves</span>
                    <p style="margin-bottom: 57px;">
                    A data tracking and business managment I designed and developed with a group of other students, using <b>Javascript and NodeJS</b>.
                    </p>
                    <button class="ProjectButton" id="btnWaves"><span class="MediumText">See more</span></button>
                </div>
            </div>
        </div>
    </div>
    <?php include ("footer.php"); ?>

    <div id="modalEmmas" class="modal">
        <div class="modal-content">
            <div class="SubContentBox">
                <div class="AltTitleBox">
                    <span class="TitleText">Emma's Engines</span><span class="close">&times;</span>
                </div>

                <div class="SplitBox">
                    <div class="SubContentBox" style="display: block;">
                        <img class="ProjectImage" src="images/EmmasImg1.png" alt="Character standing near a pit">
                    </div>
                    <div class="SubContentBox" style="display: block;">
                        <img class="ProjectImage" src="images/EmmasImg2.png" alt="Character standing on a platform, there is another platform a short distance away">
                    </div>
                    <div class="SubContentBox" style="display: block;">
                        <img class="ProjectImage" src="images/EmmasImg3.png" alt="Character standing in the corner because they got in trouble">
                    </div>
                </div>
                <div class="SubContentBox" style="display: block;">
                    <span>
                        A web based data tracking and POS system written in <b>C# using
                        the ASP .NET Model View Controller framework as well as
                        SQL server for data storage.</b> This was developed as part of a group of 
                        other students over the course of a semester. The program was created for
                        a fictional company, Emma's Engines. Once signed in, users were 
                        able to manage any infomation that the business tracked,  
                        such as inventory, customers, suppliers, and orders. A user would also 
                        be able to use a Point of Sales system where they could calculate purchase 
                        amounts, add any tax or discounts to the total, and process the order. 
                        The application was also able to generate reports, such as inventory, 
                        order, and sales reports. Users would need to sign into the 
                        application using their credentials in order to gain access to these features. 
                        The areas of the site they were permitted to 
                        access varied based on their role and its permissions. The design of the site 
                        was adapted and rebuilt based off of a purely HTML, CSS and Javascript version of the site. Our group was
                        tasked with <b>translating the program from HTML, CSS and Javasctipt, to 
                        C# and the ASP .NET syntax, and storing data within an SQL server database.</b>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div id="modalGame" class="modal">
        <div class="modal-content">
            <div class="SubContentBox">
                <div class="AltTitleBox">
                    <span class="TitleText">Platformer Game Base</span><span class="close">&times;</span>
                </div>

                <div class="SplitBox">
                    <div class="SubContentBox" style="display: block;">
                        <img class="ProjectImage" src="images/GameImg1.png" alt="Character standing near a pit">
                    </div>
                    <div class="SubContentBox" style="display: block;">
                        <img class="ProjectImage" src="images/GameImg2.png" alt="Character standing on a platform, there is another platform a short distance away">
                    </div>
                    <div class="SubContentBox" style="display: block;">
                        <img class="ProjectImage" src="images/GameImg3.png" alt="Character standing in the corner because they got in trouble">
                    </div>
                </div>

                <div class="SubContentBox" style="display: block;">
                    <span>
                        A 2D, tile based drilling game that I am currently developing in the 
                        <b>Godot engine using its custom GScript language</b>.
                        Currently, the game exists as a rough prototype, and only includes basic block 
                        breaking, movement, and animations, but I plan to develop it further into a full game.
                        I plan to add a variety of ores that a player will be able 
                        to mine and sell for profit, including copper, iron, and gold. 
                        The quantity of more valuable ores will increase as you dig further down, 
                        but the stone you mine will also get harder as you venture deeper. 
                        The drive for collecting these ores is planned to involve 
                        a quota system that will require players to collect an increasing amount of money within a set period of time. 
                        Failure to meet this quota will result in termination from the in game company you work for, and a game over.
                        Players will be able to use their profits to upgrade their drilling machine, 
                        increasing its movement speed, ore and fuel storage, hull strength, and digging speed 
                        which will enable them to earn more profit and meet the ever increasing deadlines.
                        The end goal of the game will involve digging deeper and deeper, to discover 
                        what may lie deep within the planet and potentially find a way to improve their precarious employment situation.
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div id="modalWaves" class="modal">
        <div class="modal-content">
            <div class="SubContentBox">
                <div class="AltTitleBox">
                    <span class="TitleText">Waves</span><span class="close">&times;</span>
                </div>
                <div class="SplitBox">
                    <div class="SubContentBox" style="display: block;">
                        <img class="ProjectImage" src="images/WavesImg1.png" alt="Character standing near a pit">
                    </div>
                    <div class="SubContentBox" style="display: block;">
                        <img class="ProjectImage" src="images/WavesImg2.png" alt="Character standing on a platform, there is another platform a short distance away">
                    </div>
                    <div class="SubContentBox" style="display: block;">
                        <img class="ProjectImage" src="images/WavesImg3.png" alt="Character standing in the corner because they got in trouble">
                    </div>
                </div>

                <div class="SubContentBox" style="display: block;">
                    <span>
                        A web based data tracking system called Waves 
                        myself and a group of other students designed and developed over 
                        the course of a semester. The site would prompt the user to log in 
                        before being able to add or modify information in any way, depending 
                        on their role, they may only be granted access to some pages. Users would 
                        be able to enter data, or edit existing entries of a number of different types 
                        such as inventory, suppliers, and orders. The application could also generate 
                        reports on inventory, sales, and orders. The site was designed by our group, 
                        taking into account our target audience, and designing to be clear, easy to 
                        use, interpret, and navigate for any user on any kind of device. The site was 
                        written in HTML, using Javascript to add functionality and nodeJS for data storage.
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Get the modal
        var modalEmmas = document.getElementById("modalEmmas");
        var modalGame = document.getElementById("modalGame");
        var modalWaves = document.getElementById("modalWaves");

        // Get the button that opens the modal
        var btnEmmas = document.getElementById("btnEmmas");
        var btnGame = document.getElementById("btnGame");
        var btnWaves = document.getElementById("btnWaves");

        // Get the <span> element that closes the modal
        var closeEmmas = document.getElementsByClassName("close")[0];
        var closeGame = document.getElementsByClassName("close")[1];
        var closeWaves = document.getElementsByClassName("close")[2];

        // When the user clicks the button, open the modal 
        btnEmmas.onclick = function() {
            modalEmmas.style.display = "block";
        }
        btnGame.onclick = function() {
            modalGame.style.display = "block";
        }
        btnWaves.onclick = function() {
            modalWaves.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        closeEmmas.onclick = function() {
            modalEmmas.style.display = "none";
        }
        closeGame.onclick = function() {
            modalGame.style.display = "none";
        }
        closeWaves.onclick = function() {
            modalWaves.style.display = "none";
        }
    </script>
</body>
</html>