{{--

@extends('layout.navbar')
@section('title')
Users
@endsection

@section('user_active')
active
@endsection


@section('container')

<div class="container-fluid">
    <br><br>
        <h1>Update User</h1>
        <br><br>
        <form class="form-group mx-sm-3 mb-2" action="{{route('user.update',$user->id))}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group col-md-4 mb-3">
              <label">User Name</label>
              <input type="text" class="form-control" name="name" value="{{$user->name}}" >
            </div>
            <div class="form-group col-md-4 mb-3">
              <label >Email</label>
              <input type="email" class="form-control" name="email" value="{{$user->email}}" >
            </div>
            <div class="form-group col-md-4 mb-3">
              <label >Phone Number</label>
              <input type="text" class="form-control" name="phone" value="{{$user->phone}}" >
            </div>
            <div class="form-group col-md-4 mb-3">
              <label >Password</label>
              <input type="password" class="form-control" name="password" value="{{$user->password}}" >
            </div>
            <div class="form-group col-md-4 mb-3">
                <label >User Image</label><br>
                <input type="file" class="block w-full text-sm text-gray-500     file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm    file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"  name="image">
              </div>
            <button type="submit" class="btn btn-dark">Update</button>
          </form>

</div>


@endsection --}}










<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
        <meta name="author" content="AdminKit">
        <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" href="../../../assets/img/icons/icon-48x48.png" />

        <link rel="canonical" href="https://demo-basic.adminkit.io/" />

        <title>@yield('title')</title>

        <link href="../../../assets/css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
</head>
<body>




    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="#">
          <span class="align-middle">3MART</span>
        </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-item @yield('Dashboard_active')">
                        <a class="sidebar-link" href="/">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
                    </li>

                    <li class="sidebar-item @yield('user_active')">
                        <a class="sidebar-link" href="{{route('user.index')}}">
               <span class="align-middle">User</span>
            </a>
                    </li>

                    <li class="sidebar-item @yield('categories_active')">
                        <a class="sidebar-link" href="{{route('categories.index')}}">
               <span class="align-middle">category</span>
            </a>
                    </li>

                    <li class="sidebar-item @yield('service_active') ">
                        <a class="sidebar-link" href="pages-sign-up.html">
               <span class="align-middle">service</span>
            </a>
                    </li>

                    <li class="sidebar-item @yield('service_active') ">
                        <a class="sidebar-link" href="pages-blank.html">
               <span class="align-middle">reservation</span>
            </a>
                    </li>


                </ul>


            </div>
        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">

                        </li>
                        <li class="nav-item dropdown">



                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="../../../assets/img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
              </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>



                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>




            <div class="container-fluid">
                <br><br>
                    <h1>Update User</h1>
                    <br><br>
                    <form class="form-group mx-sm-3 mb-2" action="{{url('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group col-md-4 mb-3">
                          <label>User Name</label>
                          <input type="text" class="form-control" name="name" value="{{$user->name}}" >
                        </div>
                        <div class="form-group col-md-4 mb-3">
                          <label >Email</label>
                          <input type="email" class="form-control" name="email" value="{{$user->email}}">
                        </div>
                        <div class="form-group col-md-4 mb-3">
                          <label >Phone Number</label>
                          <input type="text" class="form-control" name="phone" value="{{$user->phone}}" >
                        </div>
                        <div class="form-group col-md-4 mb-3">
                          <label >Password</label>
                          <input type="password" class="form-control" name="password" value="{{$user->password}}" >
                        </div>
                        <div class="form-group col-md-4 mb-3">
                            <label >User Image</label><br>
                            <input type="file" class="block w-full text-sm text-gray-500     file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm    file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"  name="image">
                          </div>
                        <button type="submit" class="btn btn-dark">Update</button>
                      </form>

            </div>

















            <script src="../../../assets/js/app.js"></script>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
                    var gradient = ctx.createLinearGradient(0, 0, 0, 225);
                    gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
                    gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
                    // Line chart
                    new Chart(document.getElementById("chartjs-dashboard-line"), {
                        type: "line",
                        data: {
                            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                            datasets: [{
                                label: "Sales ($)",
                                fill: true,
                                backgroundColor: gradient,
                                borderColor: window.theme.primary,
                                data: [
                                    2115,
                                    1562,
                                    1584,
                                    1892,
                                    1587,
                                    1923,
                                    2566,
                                    2448,
                                    2805,
                                    3438,
                                    2917,
                                    3327
                                ]
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            legend: {
                                display: false
                            },
                            tooltips: {
                                intersect: false
                            },
                            hover: {
                                intersect: true
                            },
                            plugins: {
                                filler: {
                                    propagate: false
                                }
                            },
                            scales: {
                                xAxes: [{
                                    reverse: true,
                                    gridLines: {
                                        color: "rgba(0,0,0,0.0)"
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        stepSize: 1000
                                    },
                                    display: true,
                                    borderDash: [3, 3],
                                    gridLines: {
                                        color: "rgba(0,0,0,0.0)"
                                    }
                                }]
                            }
                        }
                    });
                });
            </script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    // Pie chart
                    new Chart(document.getElementById("chartjs-dashboard-pie"), {
                        type: "pie",
                        data: {
                            labels: ["Chrome", "Firefox", "IE"],
                            datasets: [{
                                data: [4306, 3801, 1689],
                                backgroundColor: [
                                    window.theme.primary,
                                    window.theme.warning,
                                    window.theme.danger
                                ],
                                borderWidth: 5
                            }]
                        },
                        options: {
                            responsive: !window.MSInputMethodContext,
                            maintainAspectRatio: false,
                            legend: {
                                display: false
                            },
                            cutoutPercentage: 75
                        }
                    });
                });
            </script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    // Bar chart
                    new Chart(document.getElementById("chartjs-dashboard-bar"), {
                        type: "bar",
                        data: {
                            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                            datasets: [{
                                label: "This year",
                                backgroundColor: window.theme.primary,
                                borderColor: window.theme.primary,
                                hoverBackgroundColor: window.theme.primary,
                                hoverBorderColor: window.theme.primary,
                                data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                                barPercentage: .75,
                                categoryPercentage: .5
                            }]
                        },
                        options: {
                            maintainAspectRatio: false,
                            legend: {
                                display: false
                            },
                            scales: {
                                yAxes: [{
                                    gridLines: {
                                        display: false
                                    },
                                    stacked: false,
                                    ticks: {
                                        stepSize: 20
                                    }
                                }],
                                xAxes: [{
                                    stacked: false,
                                    gridLines: {
                                        color: "transparent"
                                    }
                                }]
                            }
                        }
                    });
                });
            </script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var markers = [{
                            coords: [31.230391, 121.473701],
                            name: "Shanghai"
                        },
                        {
                            coords: [28.704060, 77.102493],
                            name: "Delhi"
                        },
                        {
                            coords: [6.524379, 3.379206],
                            name: "Lagos"
                        },
                        {
                            coords: [35.689487, 139.691711],
                            name: "Tokyo"
                        },
                        {
                            coords: [23.129110, 113.264381],
                            name: "Guangzhou"
                        },
                        {
                            coords: [40.7127837, -74.0059413],
                            name: "New York"
                        },
                        {
                            coords: [34.052235, -118.243683],
                            name: "Los Angeles"
                        },
                        {
                            coords: [41.878113, -87.629799],
                            name: "Chicago"
                        },
                        {
                            coords: [51.507351, -0.127758],
                            name: "London"
                        },
                        {
                            coords: [40.416775, -3.703790],
                            name: "Madrid "
                        }
                    ];
                    var map = new jsVectorMap({
                        map: "world",
                        selector: "#world_map",
                        zoomButtons: true,
                        markers: markers,
                        markerStyle: {
                            initial: {
                                r: 9,
                                strokeWidth: 7,
                                stokeOpacity: .4,
                                fill: window.theme.primary
                            },
                            hover: {
                                fill: window.theme.primary,
                                stroke: window.theme.primary
                            }
                        },
                        zoomOnScroll: false
                    });
                    window.addEventListener("resize", () => {
                        map.updateSize();
                    });
                });
            </script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
                    var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
                    document.getElementById("datetimepicker-dashboard").flatpickr({
                        inline: true,
                        prevArrow: "<span title=\"Previous month\">&laquo;</span>",
                        nextArrow: "<span title=\"Next month\">&raquo;</span>",
                        defaultDate: defaultDate
                    });
                });
            </script>
</body>
</html>

