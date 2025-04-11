<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Governance Summit Pre-registration</title>

    <link rel="icon" type="image/x-icon" href={{ asset('assets/img/dilg_logo.png') }}>


    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.1.1/dist/css/tabler.min.css" />

    <!-- ICON -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .navbar {
            padding: 15px 30px;
            background-color: #f8f9fa;
        }

        .navbar-brand-image {
            width: 99px;
            height: 99px;
            margin-left: 20px;
            margin-right: -25px;
        }

        .text-container {
            font-family: 'Barlow', sans-serif;
            margin-left: 25px;
            margin-top: auto;
        }

        .main-text {
            font-size: 26px;
        }

        .sub-text {
            font-weight: 800;
            font-size: 36px;
            margin: 0;
        }

        hr {
            width: 100%;
            margin: 5px 0;
            color: black;
        }

        .colored-rectangle {
            background-color: #F0CF0A;
            height: 22px;
            width: 100%;
        }

        .card {
            padding-top: 150px;
            backdrop-filter: blur(5px);
            background-color: rgba(249, 249, 249, 0.6);
            border-radius: 30px;
            margin: 0 auto;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.25);
            height: 600px;
      
        }
        .status1 {
            font-family: 'Barlow', sans-serif;
            font-weight: 800;
            font-size: 34px;
            text-align: center;
        }
        .highlight-text {
            color: #A81E24;
        }

        /* Add responsiveness */
        @media (max-width: 768px) {
            .card {
                margin: 0 15px;
                padding: 15px;
            }
        }

        .swoosh-image {
            position: fixed;
            bottom: 0;
            right: 0;
            z-index: -1;
            margin: -8px;
            width: 1000px;
            height: auto;
        }

        @media (max-width: 768px) {
            .swoosh-image {
                width: 30%;
                max-width: 150px;
            }
        }

        @media (max-width: 480px) {
            .swoosh-image {
                width: 40%;
                max-width: 120px;
            }
        }
    </style>
</head>

<body>

    <header class="navbar navbar-expand-lg print-none">

        <div class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="javascript:void(0)">
                <!-- DILG Logo -->
                <img src="{{ asset('assets/img/dilg_logo.png') }}" alt="DILG Logo" class="navbar-brand-image">
                <!-- Bagong Pilipinas Logo -->
                <img src="{{ asset('assets/img/bagongpilipinas_logo.png') }}" alt="Bagong Pilipinas Logo"
                    class="navbar-brand-image">
            </a>
        </div>

        <!-- Text Section -->
        <div class="text-container">
            <div class="main-text text-dark">
                REPUBLIC OF THE PHILIPPINES
            </div>
            <hr>
            <div class="sub-text text-dark">
                DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT
            </div>
        </div>

    </header>

    <!-- Colored Rectangle -->
    <div class="colored-rectangle shadow-sm"></div>

    <div class="container mt-5">
    <!-- Row to center the card -->
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mb-5 mt-5"> <!-- Added 'mx-3' class to add margin on left and right -->
                <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center mt-5 mb-3">
                        <i class="fa-solid fa-file-circle-xmark" style="font-size: 80px; color: #6E6F78"></i>
                    </div>
                    <h1 class="mt-5 status1" style="color: #6E6F78">Registration is now closed.</h1>
                    <h1 class="status1" style="color: #6E6F78">We have reached the <span
                            class="highlight-text">maximum</span> number of participants.</h1>
                    <h1 class="status1" style="color: #6E6F78">Thank you for your interest.</h1>
                </div>
            </div>
        </div>
    </div>
    </div>


    <img src={{ asset('assets/img/swoosh.png') }} class="swoosh-image">





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.1.1/dist/js/tabler.min.js"></script>

</body>

</html>