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

        .card-title {
            text-align: center;
            font-size: 36px;
            font-family: 'Barlow', sans-serif;
            font-weight: 700;
        }

        .card {
            backdrop-filter: blur(5px);
            background-color: rgba(249, 249, 249, 0.6);
            border-radius: 30px;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.25);
            padding-left: 50px;
            padding-right: 50px;
        }

        .form-control {
            border-radius: 5px;
            height: 58px;
        }

        #submit {
            margin-right: 18px;
            margin-left: 18px;
            background-color: #011D93;
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

        .form-label,
        .form-control,
        select,
        #submit {
            font-family: 'Montserrat', sans-serif;
            border: none;
        }

        /* You can also apply it to the button and text */
        button,
        .text-center {
            font-family: 'Montserrat', sans-serif;
        }

        .form-control {
            border-radius: 5px;
            height: 58px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 5px 0px;
            /* Add a subtle shadow */
        }

        .form-control:focus {
            box-shadow: rgba(0, 123, 255, 0.5) 0px 0px 8px 0px;
            /* Blue shadow on focus */
            border-color: #011D93;
            /* Optional: Change border color on focus */
        }

        .btn.red-icon {
            background-color: transparent;
            border: none;
            padding: 0;
            color: #A81E24;
            font-size: 15px;
            /* margin-left: 375px; */
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

    <!-- Modal for Validation Errors -->
    <div class="modal modal-blur fade" id="errorModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger fw-bold">Duplicate Email Entry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul id="errorMessages">
                        <!-- Error messages will be dynamically added here -->
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <!-- Row to center the card -->
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-6">
                <div class="card mb-5 mt-2"> <!-- Added 'mx-3' class to add margin on left and right -->
                    <div class="card-body">
                        <h3 class="card-title mt-3">Local Governance Summit</h3>
                        <h3 class="card-title mb-5">Pre-Registration</h3>

                        <form action="{{ route('register.submit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label mt-3">First Name</label>
                                        <div class="input-group">
                                            <span class="input-group-text custom-input-group"><i
                                                    class="fa-solid fa-user"></i></span>
                                            <input type="text" class="form-control" name="fname"
                                                placeholder="Enter First Name" value="{{ old('fname') }}" required />
                                            @error('fname')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label mt-3">Last Name</label>
                                        <div class="input-group">
                                            <span class="input-group-text custom-input-group"><i
                                                    class="fa-solid fa-user"></i></span>
                                            <input type="text" class="form-control" name="lname"
                                                placeholder="Enter Last Name" value="{{ old('lname') }}" required />
                                            @error('lname')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Contact Number</label>
                                        <div class="input-group">
                                            <span class="input-group-text custom-input-group"><i
                                                    class="fa-solid fa-phone"></i></span>
                                            <input type="text" class="form-control" name="contact_number"
                                                placeholder="Enter Contact Number" value="{{ old('contact_number') }}"
                                                required />
                                            @error('contact_number')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text custom-input-group"><i
                                                    class="fa-solid fa-envelope"></i></span>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter Email" value="{{ old('email') }}" required />
                                            <!-- @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Select LGU</label>
                                <div class="input-group">
                                    <span class="input-group-text custom-input-group"><i
                                            class="fa-solid fa-building-columns"></i></span>
                                    <select class="form-control" name="lgu" required>
                                        <option value="" disabled selected>LGU</option>
                                        <option value="region1" {{ old('lgu') == 'region1' ? 'selected' : '' }}>Region I
                                            (Ilocos Region)</option>
                                        <option value="region2" {{ old('lgu') == 'region2' ? 'selected' : '' }}>Region II
                                            (Cagayan Valley)</option>
                                    </select>
                                    @error('lgu')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label mt-3">Select Designation</label>
                                <div class="input-group">
                                    <span class="input-group-text custom-input-group"><i
                                            class="fa-solid fa-briefcase"></i></span>
                                    <select id="designationSelect" class="form-control" name="designation" required>
                                        <option value="" disabled selected>Designation</option>
                                        <option value="lce" {{ old('designation') == 'lce' ? 'selected' : '' }}>Local
                                            Chief Executive</option>
                                        <option value="vip" {{ old('designation') == 'vip' ? 'selected' : '' }}>VIP
                                        </option>
                                        <option value="vvip" {{ old('designation') == 'vvip' ? 'selected' : '' }}>VVIP
                                        </option>
                                        <option value="secretariat" {{ old('designation') == 'secretariat' ? 'selected' : '' }}>Secretariat</option>
                                        <option value="exhibitor" {{ old('designation') == 'exhibitor' ? 'selected' : '' }}>Exhibitor</option>
                                        <option value="devpartner" {{ old('designation') == 'devpartner' ? 'selected' : '' }}>Development Partner</option>
                                        <option value="crew" {{ old('designation') == 'crew' ? 'selected' : '' }}>Crew
                                        </option>
                                    </select>
                                    @error('designation')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="mb-3">
                                <label class="form-label mt-3">Select Breakout Session <span>
                                        <span class="form-help" data-bs-toggle="popover" data-bs-placement="top"
                                            data-bs-html="true"
                                            data-bs-content="<p><span strong>Breakout Session 1: </span>Learn how LGUs can leverage digital tools and e-Governance to improve service delivery. Topics include cloud-based solutions, cybersecurity, and real-world case studies.</p><p class='mb-0'>Breakout Session 2: Explore strategies for disaster preparedness and climate adaptation in LGUs. This session covers risk assessment, early warning systems, and best practices in disaster response.</p>">?</span>

                                    </span><span style="font-size: 10px; color: #A81E24;">Choose one (1) technical
                                        session only</span></label>

                                <div class="input-group">
                                    <span class="input-group-text custom-input-group"><i
                                            class="fa-solid fa-location-pin"></i></span>
                                    <select class="form-control" name="breakout_session" required>
                                        <option value="" disabled selected>Breakout Session</option>
                                        <option value="bs1" {{ old('breakout_session') == 'bs1' ? 'selected' : '' }}>
                                            Digital Transformation in Local Governance Session</option>
                                        <option value="bs2" {{ old('breakout_session') == 'bs2' ? 'selected' : '' }}>
                                            Disaster Risk Reduction and Climate Resilience Session</option>
                                    </select>
                                    <!-- @error('breakout_session')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror -->
                                </div>
                            </div>

                            <p class="text-center mt-3">By continuing, you are agreeing to the data privacy.</p>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-block mb-3">SUBMIT</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>


    <img src={{ asset('assets/img/swoosh.png') }} class="swoosh-image">

    <script>
        const designationColors = {
            lce: "#f9f9f9",
            vip: "#d0e0e3",
            vvip: "#f8d7da",
            secretariat: "#f9f9f9",
            exhibitor: "#d4edda",
            devpartner: "#fff3cd",
            crew: "#e2e3e5"
        };

        const designationSelect = document.getElementById('designationSelect');
        const inputField = designationSelect.parentElement.querySelector('.form-control'); // The select input field

        // When the user changes the designation, apply the background color
        designationSelect.addEventListener('change', function () {
            const selectedDesignation = designationSelect.value;

            if (designationColors[selectedDesignation]) {
                inputField.style.backgroundColor = designationColors[selectedDesignation];
            }
        });

        // Set initial background color based on the selected value (if any)
        const initialDesignation = designationSelect.value;
        if (designationColors[initialDesignation]) {
            inputField.style.backgroundColor = designationColors[initialDesignation];
        }
    </script>

    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var errorMessages = @json($errors->all()); // Get all errors from session
                var errorList = document.getElementById('errorMessages');
                errorList.innerHTML = '';  // Clear any existing errors

                // Add each error to the list in the modal
                errorMessages.forEach(function (message) {
                    var listItem = document.createElement('li');
                    listItem.textContent = message;
                    errorList.appendChild(listItem);
                });

                // Initialize and show modal
                const modalElement = document.getElementById('errorModal');
                const modal = new bootstrap.Modal(modalElement);
                modal.show();

                // Refresh on modal close (X or outside click)
                modalElement.addEventListener('hidden.bs.modal', function () {
                    location.reload();
                });

                // Refresh on Cancel button click (optional, if you have a Cancel button)
                const cancelBtn = document.getElementById('cancelButton'); // replace with your actual ID
                if (cancelBtn) {
                    cancelBtn.addEventListener('click', function () {
                        modal.hide(); // This will also trigger the refresh from 'hidden.bs.modal'
                    });
                }
            });
        </script>

    @endif



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.1.1/dist/js/tabler.min.js"></script>

</body>

</html>