<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BhOOKey.com </title>
    <meta name="description" content="BhOOKey.com – Children's Adventure Books" />
    <link rel="icon" type="image/png" href="images/favicon-32x32.png">

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&display=swap" rel="stylesheet" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css" />
    
    <style>
        /* WhatsApp Fixed Button Styles */
        .whatsapp-float {
            position: fixed;
           bottom: 78px;
            right: 17px;
            z-index: 9999;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.2s ease;
            animation: subtle-pulse 1.8s infinite;
        }
        .whatsapp-float i {
            font-size: 34px;
            color: white;
        }
        .whatsapp-float:hover {
            transform: scale(1.08);
            background-color: #1ea952;
        }
        @keyframes subtle-pulse {
            0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5); }
            70% { box-shadow: 0 0 0 14px rgba(37, 211, 102, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }
        /* Tooltip on hover */
        .whatsapp-float::after {
            content: "Chat on WhatsApp";
            position: absolute;
            right: 70px;
            background: #1e2a32;
            color: #fff;
            font-size: 13px;
            padding: 5px 12px;
            border-radius: 40px;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s;
            font-family: 'Fredoka', sans-serif;
        }
        .whatsapp-float:hover::after {
            opacity: 1;
        }
        
        /* Top Bar & Navbar original styles */
   
     
    </style>
</head>

<body>

    <!-- =============================================
         TOP BAR (ORIGINAL - NO CHANGE)
         ============================================= -->
    <div class="top-bar d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="top-bar-item">
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+1-301-615-1239">+1-301-615-1239</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="top-bar-item">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@bhookey.com">info@bhookey.com</a>
                    </div>
                </div>
                <div class="col-auto ms-auto">
                    <div class="top-bar-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>3689 Forest Hill Rd. Gwynn Oak, Baltimore MD 21207</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============================================
         NAVBAR (ORIGINAL - NO CHANGE)
         ============================================= -->
    <nav class="site-navbar navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img class="w-15" src="images/logo.png" alt="BhOOKey.com"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="readersClubDrop" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Readers Club
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="readersClubDrop">
                            <li><a class="dropdown-item" href="welcome-to-the-readers-club.php">Join Now / Subscribe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-order-btn" href="order-now.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ========== FIXED WHATSAPP ICON ========== -->
    <!-- Number: +1-301-615-1239 se WhatsApp open hoga -->
    <a href="https://wa.me/13016151239?text=Hello!%20I%20have%20a%20question%20about%20BhOOKey%20books."
       class="whatsapp-float"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Bootstrap JS Bundle (required for navbar toggle) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS (if any) -->
    <script src="js/main.js"></script>
</body>

</html>