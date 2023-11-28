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
                    <a href="/">AL F<i class="bx bxs-map" style=" font-size: 3rem ;"></i>RUSIA</a>
                </div>
                <div id="mainListDiv" class="main_list">
                    <ul class="navlinks">
                        <li><a href="/">Home</a></li>
                        <li class="dropdown">
                            <a class="dropbtn">Package Travel</a>
                            <div class="dropdown-content">
                                <a href="{{ route('packages', ['country' => 'INDIA']) }}">INDIA</a>
                                <a href="{{ route('packages', ['country' => 'UAE']) }}">UAE</a>
                                <a href="{{ route('packages', ['country' => 'PORTUGAL']) }}">PORTUGAL</a>
                            </div>
                        </li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=919061754081&text=I want to book">Add Booking</a></li>
                    </ul>
                </div>

                <div class="navTrigger">
                    <button id="dropdownBtn">
                        <i></i>
                        <i></i>
                        <i></i>
                    </button>
                </div>
                <ul class="droplinks" id="navList">
                    <li><a class="dropbtnmb" href="/">Home</a></li>
                    <li class="dropdown">
                        <a class="dropbtn" style=" text-decoration: none;
                        color: #003442;
                        line-height: 65px;
                        font-size: 1.5rem;
                        font-weight: 400;">Package Travel</a>
                        <div class="dropdown-content">
                            <a  href="{{ route('packages', ['country' => 'INDIA']) }}">INDIA</a>
                            <a  href="{{ route('packages', ['country' => 'UAE']) }}">UAE</a>
                            <a  href="{{ route('packages', ['country' => 'PORTUGAL']) }}">PORTUGAL</a>
                        </div>
                    </li>
                    <li><a class="dropbtnmb" href="/contact">Contact</a></li>
                    <li><a class="dropbtnmb" href="https://api.whatsapp.com/send?phone=919061754081&text=I want to book">Add Booking</a></li>
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
                <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
         
            <p class="copyright" style="margin-top: auto">AL FARUSIA © 2023</p>

            </div>
        </div>
    </footer>
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
