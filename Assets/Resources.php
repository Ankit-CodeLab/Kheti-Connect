<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="KhetiConnect.css">

    <title>Kheti-Connect - Home</title>
</head>

<body>

    <nav>
        <!-- Navigation Bar -->
        <div class="nav-left">
            <a href="../index.php">Home</a>
            <a href="#" class="active">Resources</a>
            <a href="">Marketplace</a>
            <a href="">Community</a>
            <a href="">Contact</a>
            <a href="">About</a>

        </div>

        <div class="nav-right">

            <a href="">Kheti-Connect</a>
            <a href=""><img src="Images/Logo.png" alt="Logo"></a>
            <a href="../login.php" id="userprofile">Login</a>

        </div>

    </nav>

    <main>

        <div class="Banner">
            <!-- Kheti-Connect Banner -->
            <img src="Images/Banner.jpg" alt="Banner">

        </div>

        <div class="searchbar">
            
            <input type="text" placeholder="Search" list="Options" id="searchinput">
            
            <datalist id="Options">

                <option value="Krishi Darshan I Organic farming (जैविक खेती)" data-link="https://youtu.be/4BECXLemYQs?feature=shared">
                <option value="DAP और NPK में क्या अंतर है।देखे। DAP vs NPK।" data-link="https://youtu.be/rwRs3PUa9GI?feature=shared">

            </datalist>

            <button id="searchbutton"><i class="bi bi-search" style="color: black;"></i></button>

        </div>

        <div class="list-box">

            <div class="video-list">

                <a href="https://youtu.be/4BECXLemYQs?feature=shared" class="video"><img src="Images/KrishiDarshan.jpg" alt="Video" class="video"></a>

                    <div class="video-info">

                        <a href="https://youtu.be/4BECXLemYQs?feature=shared">Krishi Darshan I Organic farming (जैविक खेती)</a>

                    </div>
            </div>
        
        <div class="video-list">

                <a href="https://youtu.be/rwRs3PUa9GI?feature=shared" class="video"><img src="Images/DAPvsNPK.jpg" alt="Video" class="video"></a>

                    <div class="video-info">

                        <a href="https://youtu.be/rwRs3PUa9GI?feature=shared">DAP और NPK में क्या अंतर है।देखे। DAP vs NPK।</a>
                    
                    </div>
        </div>

        <div class="video-list">

                <a href="https://youtu.be/Tr41Hfolok0?feature=shared" class="video"><img src="Images/PaddyStemborer.jpg" alt="Video" class="video"></a>

                    <div class="video-info">

                        <a href="https://youtu.be/Tr41Hfolok0?feature=shared">धान में तनाभेदक। Paddy Stemborer। संपूर्ण जानकारी।</a>
                    
                    </div>
        </div>

</div>

    </main>

    <footer>
        <!-- Footer -->
        <div class="Upper-Content">

            <div class="Upper-left-Content">

                <div>

                    
                    <p> Rohit Shah </p>
                    <a href=""><img src="Images/Github.png" alt="Logo" id = "github1"></a>
                    <a href="mailto:rohitshah.dce22@sltiet.edu.in"><img src="Images/Mail.png" alt="Logo" id = "mail1"></a>
                    <a href="mailto:rohitshah.dce22@sltiet.edu.in"><img src="Images/linkedin.png" alt="Logo" id = "linkedin1"></a>
                </div>
            
            </div>

            <div class="Upper-Mid-Content">

            <p>Credits</p>

            </div>
            
            <div class="Upper-right-Content">
                <div>
                    
                    <p> Ankit Kushwaha </p>
                    <a href="mailto:ankitkushwaha.dce22@sltiet.edu.in"><img src="Images/Mail.png" alt="Logo" id = "mail2"></a>
                    <a href=""><img src="Images/Github.png" alt="Logo" id = "github2"></a>
                    <a href="mailto:rohitshah.dce22@sltiet.edu.in"><img src="Images/linkedin.png" alt="Logo" id = "linkedin2"></a>
                </div>
                <br>
            </div>
           
        </div>

        <hr>

        <div class="Lower-Content">

            <div class="Lower-left-Content">
            <p>
            © 2024 - Copyright Ankit & Rohit. All rights reserved.
            </p>
            </div>

            <div class="Lower-right-Content">

                <a href="PrivacyPolicy.php" id="footpp">Privacy Policy</a>
                
            </div>

        </div>

    </footer>

    <script src="KhetiConnect.js"></script>

</body>

</html>