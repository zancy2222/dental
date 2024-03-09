<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Dashboard</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <!-- Iconify -->
        <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.0.0/dist/iconify-icon.min.js"></script>

        <!-- Fullcalendar -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="libs/fullcalendar/main.min.css">
  <script src="libs/fullcalendar/main.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">

        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.2/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.4.2/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/timeline@4.4.3/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/resource-common@4.4.2/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/resource-timeline@4.4.2/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.4.2/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid@4.4.2/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/resource-daygrid@4.4.2/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/resource-timegrid@4.4.2/main.min.js"></script>
        <!-- Load the Google API client -->

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://fullcalendar.io/releases/google-calendar/4.0.1/main.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>

</head>
<body>

    <nav class="dashboard-header navbar">
        <div class="container-fluid">
                <iconify-icon icon="material-symbols:menu" class="fs-4 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation"></iconify-icon>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/doctors">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/patients">Patients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/appointments">Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/bookings">Bookings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/reports">Reports</a>
                </li>
            </div>
            </div>
            <div class="dheader-right d-flex align-items-center mx-3">
                <p class="m-0">superadmin@email.com</p>
                <iconify-icon icon="carbon:settings" class="mx-3 fs-4"></iconify-icon>
            </div>
        </div>
    </nav>

    
    <div class="container-fluid dashboard-content mt-4">
        <div class="row">
            <div class="col-9 d-left-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="d-frame dpatient-frame">
                                    <div class="d-title d-font">
                                        Patient
                                    </div>
                                    <div class="row">
                                        <form action="" class="d-flex">
                                            <div class="col-3">
                                                <label for="" class="form-label">First Name</label>
                                                <input type="text" class="form-control d-input">
                                            </div>
                                            <div class="col-2">
                                                <label for="" class="form-label">Last Name</label>
                                                <input type="text" class="form-control d-input">
                                            </div>
                                            <div class="col-2">
                                                <label for="" class="form-label">Gender</label>
                                                <select name="" id="" class="form-select d-input">
                                                    <option value="" disabled selected></option>
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                    <option value="">Not Specified</option>
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <label for="" class="form-label">Mobile</label>
                                                <input type="text" class="form-control d-input">
                                            </div>
                                            <div class="col-2 mx-auto d-flex align-items-end justify-content-around">
                                                <button class="btn bttn secondary-button">Edit</button>
                                                <button class="btn bttn primary-button">Select</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="d-remarks mt-4">
                                        <div class="d-font">Remarks Here</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="d-frame dbookings-frame">
                                    <div class="d-title d-font">
                                        Bookings Details
                                    </div>
                                    <div class="row">
                                        <button class="d-fit-content no-style-btn">
                                            <iconify-icon icon="clarity:plus-circle-solid"  style="color: black" class="fs-5"></iconify-icon>
                                            <div class="d-font">Create Booking</div>
                                        </button>
                                        <div class="form-check d-fit-content">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="dbooking">
                                            <label class="form-check-label d-font" for="dbooking">
                                                Booking
                                            </label>
                                        </div>
                                        <div class="form-check d-fit-content">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="dcancel">
                                            <label class="form-check-label d-font" for="dcancel">
                                                Cancel
                                            </label>
                                        </div>
                                        <div class="form-check d-fit-content">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="dfinish">
                                            <label class="form-check-label d-font" for="dfinish">
                                                Finish
                                            </label>
                                        </div>
                                        <div class="form-check d-fit-content">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="dremind">
                                            <label class="form-check-label d-font" for="dremind">
                                                Remind
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-3">
                                            <label for="" class="form-label d-font">Doctor</label>
                                            <select name="" id="" class="form-control d-input">
                                                <option value="" disabled selected></option>
                                                <option value="">Jean Victoria Eraya</option>
                                                <option value="">Juan Dela Cruz</option>
                                            </select>
                                        </div>
                                        <div class="col-2">
                                            <label for="" class="form-label d-font">Date</label>
                                            <input type="date" class="form-control d-input">
                                        </div>
                                        <div class="col-2">
                                            <label for="" class="form-label d-font">Start Time</label>
                                            <input type="time" class="form-control d-input">
                                        </div>
                                        <div class="col-2">
                                            <label for="" class="form-label d-font">Est. time</label>
                                            <input type="text" class="form-control d-input">
                                        </div>
                                        <div class="col-2">
                                            <label for="" class="form-label d-font">Res. Method</label>
                                            <input type="text" class="form-control d-input">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Diagnosis/Treatment Items"></textarea>
                                        </div>
                                        <div class="col-6">
                                            <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="New Remarks"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 d-flex align-items-end justify-content-around">
                                            <div class="form-check d-fit-content">
                                                <input class="form-check-input" type="checkbox" value="" id="dnotification">
                                                <label class="form-check-label d-font" for="dnotification">
                                                    Notification
                                                </label>
                                            </div>
                                            <div class="form-check d-fit-content">
                                                <input class="form-check-input" type="checkbox" value="" id="dsurgery">
                                                <label class="form-check-label d-font" for="dsurgery">
                                                    Surgery
                                                </label>
                                            </div>
                                            <div class="form-check d-fit-content">
                                                <input class="form-check-input" type="checkbox" value="" id="microscopy">
                                                <label class="form-check-label d-font" for="microscopy">
                                                    Microscopy
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button class="btn bttn secondary-button text-danger">Clear All</button>
                                            <button class="btn bttn primary-button">History</button>
                                            <button class="btn bttn primary-button">Status</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="row search-container">
                            <div class="col-4">
                                <div class="search-calendar">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text bg-primary text-light" id="basic-addon1">Select Doctor</span>
                                        <select name="" id="" class="form-select">
                                            <option value=""></option>
                                            <option value="">Jean Victoria Eraya</option>
                                            <option value="">Juan Dela Cruz</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text bg-primary text-light" id="basic-addon1">Select Date</span>
                                    <input type="text" id="datepicker" autocomplete="off" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div id="calendar-appointment"></div>
                    </div>
                </div>
            </div>
            <div class="col-3 p-0 d-right-content">
                <div class="dfirst-table border-bottom">
                    <p class="m-0 d-font p-2">Booking History</p>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-success-tab" data-bs-toggle="tab" data-bs-target="#nav-success" type="button" role="tab" aria-controls="nav-success" aria-selected="true">Success</button>
                            <button class="nav-link" id="nav-canceled-tab" data-bs-toggle="tab" data-bs-target="#nav-canceled" type="button" role="tab" aria-controls="nav-canceled" aria-selected="false">Profile</button>
                            <button class="nav-link" id="nav-completed-tab" data-bs-toggle="tab" data-bs-target="#nav-completed" type="button" role="tab" aria-controls="nav-completed" aria-selected="false">Complete</button>
                            <button class="nav-link" id="nav-reminder-tab" data-bs-toggle="tab" data-bs-target="#nav-reminder" type="button" role="tab" aria-controls="nav-reminder" aria-selected="false">Reminder</button>
                            <button class="nav-link" id="nav-com-reminder-tab" data-bs-toggle="tab" data-bs-target="#nav-com-reminder" type="button" role="tab" aria-controls="nav-com-reminder" aria-selected="false">Completed Rem.</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-success" role="tabpanel" aria-labelledby="nav-success-tab" tabindex="0">
                            <table class="table">
                                <thead>
                                    <th>Name</th>
                                    <th>Doctor</th>
                                    <th>Date</th>
                                    <th>Diagnosis</th>
                                    <th>Rem. Time</th>
                                    <th>Status</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jean Victoria</td>
                                        <td>Dr. Juan</td>
                                        <td>2024-02-02</td>
                                        <td>Diagnosis</td>
                                        <td>10:00am</td>
                                        <td>Status</td>
                                    </tr>
                                    <tr>
                                        <td>Jean Victoria</td>
                                        <td>Dr. Juan</td>
                                        <td>2024-02-02</td>
                                        <td>Diagnosis</td>
                                        <td>10:00am</td>
                                        <td>Status</td>
                                    </tr>
                                    <tr>
                                        <td>Jean Victoria</td>
                                        <td>Dr. Juan</td>
                                        <td>2024-02-02</td>
                                        <td>Diagnosis</td>
                                        <td>10:00am</td>
                                        <td>Status</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-canceled" role="tabpanel" aria-labelledby="nav-canceled-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="nav-completed" role="tabpanel" aria-labelledby="nav-completed-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="nav-reminder" role="tabpanel" aria-labelledby="nav-reminder-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="nav-com-reminder" role="tabpanel" aria-labelledby="nav-com-reminder-tab" tabindex="0">...</div>
                    </div>
                </div>
                <div class="dsecond-table">
                    <p class="m-0 d-font p-2">Booking List</p>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-reservations-tab" data-bs-toggle="tab" data-bs-target="#nav-reservations" type="button" role="tab" aria-controls="nav-reservations" aria-selected="true">Reservations</button>
                            <button class="nav-link" id="nav-line-reservations-tab" data-bs-toggle="tab" data-bs-target="#nav-line-reservations type="button" role="tab" aria-controls="nav-line-reservations" aria-selected="false">Line Reservations</button>
                            <button class="nav-link" id="nav-line-changes-tab" data-bs-toggle="tab" data-bs-target="#nav-line-changes" type="button" role="tab" aria-controls="nav-line-changes" aria-selected="false">Line Changes</button>
                            <button class="nav-link" id="nav-blreminder-tab" data-bs-toggle="tab" data-bs-target="#nav-blreminder" type="button" role="tab" aria-controls="nav-blreminder" aria-selected="false">Reminders</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-success" role="tabpanel" aria-labelledby="nav-reservations-tab" tabindex="0">
                            <table class="table">
                                <thead>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Birthdate</th>
                                    <th>Status</th>
                                    <th>Filled. Time</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jean Victoria</td>
                                        <td>+639123456789</td>
                                        <td>2024-02-02</td>
                                        <td>Status</td>
                                        <td>10:00am</td>
                                    </tr>
                                    <tr>
                                        <td>Jean Victoria</td>
                                        <td>+639123456789</td>
                                        <td>2024-02-02</td>
                                        <td>Status</td>
                                        <td>10:00am</td>
                                    </tr>
                                    <tr>
                                        <td>Jean Victoria</td>
                                        <td>+639123456789</td>
                                        <td>2024-02-02</td>
                                        <td>Status</td>
                                        <td>10:00am</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-line-reservations" role="tabpanel" aria-labelledby="nav-line-reservations-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="nav-line-changes" role="tabpanel" aria-labelledby="nav-line-changes-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="nav-blreminder" role="tabpanel" aria-labelledby="nav-blreminder-tab" tabindex="0">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>