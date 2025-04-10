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

        /* Add responsiveness */
        @media (max-width: 768px) {
            .card {
                margin: 0 15px;
                padding: 15px;

            }
        }

        /* Custom styles for input group */
        .custom-input-group {
            background-color: white;
            border: 1px solid white;
            color: #011D93;
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

        .card {
            backdrop-filter: blur(5px);
            background-color: rgba(249, 249, 249, 0.6);
            border-radius: 30px;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.25);
            padding-left: 50px;
            padding-right: 50px;
            margin-top: 100px;
        }

        .form-control {
            border-radius: 5px;
            height: 58px;
        }

        .custom-input-group {
            background-color: #f1f1f1;
            border-right: 0;
            height: 58px;
            display: flex;
            align-items: center;
        }

        .input-group .form-control {
            border-left: 0;
        }

        /* Font styles */
        h1 {
            text-align: center;
            font-size: 36px;
            font-family: 'Barlow', sans-serif;
            font-weight: 700;
        }

        .form-label,
        .form-control,
        select,
        #submit {
            font-family: 'Montserrat', sans-serif;
            border: none;
        }
        #login_button {
            background-color: #011D93;
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
        <div class="card p-4">
            <h1 class="mb-4 text-center">DILG Administrator</h1>
            <hr>
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="username" class="form-label mt-3">Username</label>
                        <div class="input-group">
                            <span class="input-group-text custom-input-group">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Enter Username" value="{{ old('username') }}" required>
                        </div>
                        @error('username')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <label for="password" class="form-label mt-3">Password</label>
                        <div class="input-group">
                            <span class="input-group-text custom-input-group">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter Password" required>
                            <span class="input-group-text custom-input-group" style="cursor: pointer;"
                                onclick="togglePassword()">
                                <i class="fa-solid fa-eye" id="togglePasswordIcon"></i>
                            </span>
                        </div>


                        @error('password')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="text-center d-grid gap-2">
                    <button type="submit" class="btn px-5 btn-block text-light" id="login_button">Login</button>
                </div>
            </form>
        </div>
    </div>

    <img src={{ asset('assets/img/swoosh.png') }} class="swoosh-image">

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const icon = document.getElementById('togglePasswordIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>


</body>

</html>