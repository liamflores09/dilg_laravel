<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Governance Summit Pre-registration</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/dilg_logo.png') }}">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;600;800&family=Montserrat:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.1.1/dist/css/tabler.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->


    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

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

        /* 
        .card {
            backdrop-filter: blur(5px);
            background-color: rgba(249, 249, 249, 0.6);
            border-radius: 30px;
            margin: 0 auto;
            box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.25);
            padding-left: 50px;
            padding-right: 50px;
        } */

        @media (max-width: 768px) {
            .card {
                margin: 0 15px;
                padding: 15px;
            }

            .row.mb-3>div {
                margin-bottom: 10px;
            }
        }

        .search-filter-bar input,
        .search-filter-bar select {
            height: 58px;
            border-radius: 5px;
            font-family: 'Montserrat', sans-serif;
        }

        .logout-btn {
            position: absolute;
            right: 30px;
            top: 30px;
        }

        .regtable {
            padding-left: 50px;
            padding-right: 50px;
        }

        .alert_message {
            padding-left: 50px;
            padding-right: 50px;
        }
    </style>
</head>

<body style="background-color: white;">

    <header class="navbar navbar-expand-lg print-none position-relative">

        <div class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="javascript:void(0)">
                <img src="{{ asset('assets/img/dilg_logo.png') }}" alt="DILG Logo" class="navbar-brand-image">
                <img src="{{ asset('assets/img/bagongpilipinas_logo.png') }}" alt="Bagong Pilipinas Logo"
                    class="navbar-brand-image">
            </a>
        </div>

        <div class="text-container">
            <div class="main-text text-dark">REPUBLIC OF THE PHILIPPINES</div>
            <hr>
            <div class="sub-text text-dark">DEPARTMENT OF THE INTERIOR AND LOCAL GOVERNMENT</div>
        </div>

        <div class="logout-btn">
            <a href="{{ route('admin.logout') }}" class="btn btn-danger">Logout</a>
        </div>

    </header>

    <div class="colored-rectangle shadow-sm"></div>

    <div class="alert_message">
        @if(session('success'))
            <div class="mt-3">
                <div class="alert alert-success alert-important alert-dismissible show d-flex align-items-center shadow-sm rounded"
                    role="alert">
                    <div class="me-2">
                        <i class="fa-solid fa-circle-check text-success"></i>
                    </div>
                    <div class="flex-grow-1">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close ms-2" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
    </div>

    <div class="regtable">
        <!-- Page Title -->
        <div class="d-flex justify-content-between align-items-center mb-4 fw-bold mt-5">
            <h2 style="font-family: 'Barlow', sans-serif; font-size: 24px;">Registration Entries</h2>

            <!-- Status for Breakout Sessions -->
            <div>
                <span class="badge badge-outline text-blue me-2">BS1: {{ $bs1Count }}</span>
                <span class="badge badge-outline text-azure">BS2: {{ $bs2Count }}</span>
            </div>
        </div>

        <!-- Search & Filter -->
        <div class="row mb-3 search-filter-bar">
            <div class="col-md-6">
                <input type="text" id="searchInput" class="form-control" placeholder="Search...">
            </div>
            <div class="col-md-6">
                <select id="breakoutFilter" class="form-control">
                    <option value="">Filter by Breakout Session</option>
                    <option value="BS1">BS1</option>
                    <option value="BS2">BS2</option>
                </select>
            </div>
        </div>


        <div class="table-responsive">
            <table class="table table-striped mt-2" style="font-family: 'Montserrat', sans-serif;">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Designation</th>
                        <th>Breakout Session</th>
                        <th>LGU</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registrations as $registration)
                                        <tr class="text-center">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $registration->fname }}</td>
                                            <td>{{ $registration->lname }}</td>
                                            <td>{{ $registration->email }}</td>
                                            <td>{{ $registration->contact_number }}</td>
                                            @php
                                                $designationMap = [
                                                    'lce' => ['label' => 'Local Chief Executive', 'color' => 'blue'],
                                                    'vip' => ['label' => 'VIP', 'color' => 'red'],
                                                    'vvip' => ['label' => 'VVIP', 'color' => 'yellow'],
                                                    'secretariat' => ['label' => 'Secretariat', 'color' => 'cyan'],
                                                    'exhibitor' => ['label' => 'Exhibitor', 'color' => 'purple'],
                                                    'devpartner' => ['label' => 'Development Partner', 'color' => 'orange'],
                                                    'crew' => ['label' => 'Crew', 'color' => 'green'],
                                                ];

                                                $designation = strtolower($registration->designation);
                                                $badge = $designationMap[$designation] ?? ['label' => ucfirst($designation), 'color' => 'dark'];
                                            @endphp

                                            <td>
                                                <span class="badge bg-{{ $badge['color'] }} text-white text-uppercase fw-bold py-1 fs-6"
                                                    style="width:150px">
                                                    {{ $badge['label'] }}
                                                </span>
                                            </td>

                                            <td>
                                                {{ strtoupper($registration->breakout_session) === 'BS1' ? 'Breakout Session 1' : (strtoupper($registration->breakout_session) === 'BS2' ? 'Breakout Session 2' : $registration->breakout_session) }}
                                            </td>

                                            <td>
                                                @php
                                                    $lguFormatted = match(strtolower($registration->lgu)) {
                                                        'region1' => 'Region I (Ilocos Region)',
                                                        'region2' => 'Region II (Cagayan Valley)',
                                                        default => $registration->lgu,
                                                    };
                                                @endphp
                                                {{ $lguFormatted }}
                                            </td>

                                            <td>{{ \Carbon\Carbon::parse($registration->created_at)->timezone('Asia/Manila')->format('F j, Y \a\t g:i A') }}
                                            </td>
                                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination Links -->
            @if ($registrations->hasPages())
                <div class="d-flex justify-content-end mt-3">
                    {{ $registrations->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
    </div>


    <!-- Scripts -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const searchInput = document.getElementById("searchInput");
            const filterSelect = document.getElementById("breakoutFilter");
            const rows = document.querySelectorAll("tbody tr");

            function filterTable() {
                const search = searchInput.value.toLowerCase();
                const filter = filterSelect.value.toLowerCase();

                rows.forEach(row => {
                    const cells = Array.from(row.getElementsByTagName("td"));

                    // Check if any cell in the row matches the search query
                    const matchesSearch = cells.some(cell => cell.textContent.toLowerCase().includes(search));

                    // Check if the row matches the breakout session filter (if set)
                    const breakoutSession = cells[6]?.textContent.toLowerCase(); // Assuming breakout session is in column 6 (index starts at 0)
                    const matchesFilter = filter === "" || breakoutSession === filter;

                    // Show or hide row based on both search and filter conditions
                    row.style.display = (matchesSearch && matchesFilter) ? "" : "none";
                });
            }

            searchInput.addEventListener("input", filterTable);
            filterSelect.addEventListener("change", filterTable);
        });
    </script>

    <script>
        setTimeout(() => {
            const alert = document.querySelector('.alert');
            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(() => alert.remove(), 500); // Remove from DOM
            }
        }, 4000); // 4 seconds
    </script>

</body>

</html>