<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farusia Tours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>

    <header class="header" id="header">
        <nav class="nav">
            <div class="container">
                <div class="logo">
                    <a href="#">AL F<i class="bx bxs-map" style=" font-size: 3rem ;"></i>RUSIA</a>
                </div>
                <div id="mainListDiv" class="main_list">
                    <ul class="navlinks">
                        <li><a href="#">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropbtn">Package Travel</a>
                            <div class="dropdown-content">
                                <a href="#">INDIA</a>
                                <a href="#">UAE</a>
                                <a href="#">PORTUGAL</a>
                            </div>
                        </li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Add Booking</a></li>
                    </ul>
                </div>

                <div class="navTrigger">
                    <button id="dropdownBtn">
                        <i></i>
                        <i></i>
                        <i></i>
                    </button>
                </div>
                <ul class="navlinks" id="navList">
                    <li><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Package Travel</a>
                        <div class="dropdown-content">
                            <a href="#">INDIA</a>
                            <a href="#">UAE</a>
                            <a href="#">PORTUGAL</a>
                        </div>
                    </li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Add Booking</a></li>
                </ul>

            </div>
        </nav>

    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; 2023 AL FARUSIA. All rights reserved.</p>
                    <div class="social-icons">
                        <!-- Add your social media icons or links here -->
                        <a href="#" class="social-icon"><img src="facebook-icon.png" alt="Facebook"></a>
                        <a href="#" class="social-icon"><img src="twitter-icon.png" alt="Twitter"></a>
                        <a href="#" class="social-icon"><img src="instagram-icon.png" alt="Instagram"></a>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- scripts -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
