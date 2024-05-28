<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('/')}}assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
  <style>
      .site-btn{
          background: #7fad39;
      }
      .dropdown-divider {
          border-top: 10px solid red; /* Example divider styling */
          margin: 5px 0; /* Adjust margin as needed */
      }
  </style>
    <!-- End layout styles -->


    <link rel="shortcut icon" href="{{asset('/')}}assets/images/favicon.ico" />
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-XXXXX" crossorigin="anonymous" />--}}
</head>
<body>
<div class="container-scroller">

    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('/')}}front-end-assets/img/logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="nav-profile-img">
{{--                            <img src="{{asset(Auth::user()->profile_photo_path)}}" alt="image">--}}
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
{{--                            <p class="mb-1 text-black">{{Auth::user()->name}}</p>--}}
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                            <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                        <form action="{{route('logout')}}" method="POST" id="logoutForm">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="count-symbol bg-warning"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <h6 class="p-3 mb-0">Messages</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{asset('/')}}assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                                <p class="text-gray mb-0"> 1 Minutes ago </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{asset('/')}}assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                                <p class="text-gray mb-0"> 15 Minutes ago </p>
                            </div>
                        </a>

                <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{asset('/')}}assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                                <p class="text-gray mb-0"> 18 Minutes ago </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                    </div>
                </li>
{{--                <li class="dropdown">--}}
{{--                    <a class="dropdown-toggle" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">--}}
{{--                        <span class="glyphicon glyphicon-user">lalalalalala</span>--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="notificationsMenu" id="notificationsMenu">--}}
{{--                        <li class="dropdown-header">No notifications</li>--}}
{{--                        <!-- Add notification items here -->--}}
{{--                        <!-- Example: <li><a href="#">Notification 1</a></li> -->--}}
{{--                    </ul>--}}
{{--                </li>--}}
                <ul id="notificationMenu">
                    <li>lalalalalalalalalla</li>
                    <li>A</li>
                    <!-- Notification items will be dynamically inserted here -->
                </ul>


                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                        <i class="mdi mdi-bell-outline position-relative ">
                        <span class="position-absolute font-weight-bold bg-danger text-white " style="top:-2px; right: -10px;  width:100%;    border-radius: 100%; text-align: center; line-height: 20px ;  font-size: 0.6em;">2</span>
                        </i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <h6 class="p-3 mb-0">Notifications</h6>
                        <div class="dropdown-divider"></div>
                        <hr>
                        <ul id="notificationMenu">

                        </ul>
{{--                        <a class="dropdown-item preview-item">--}}
{{--                            <div class="preview-thumbnail">--}}
{{--                                <div class="preview-icon bg-success">--}}
{{--                                    <i class="mdi mdi-calendar"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">--}}
{{--                                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>--}}
{{--                                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                                <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-link-variant"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                    </div>
                </li>
                <li class="nav-item nav-logout d-none d-lg-block">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
                <li class="nav-item nav-settings d-none d-lg-block">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-format-line-spacing"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
{{--                            <img src="{{asset(Auth::user()->profile_photo_path)}}" alt="image">--}}
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
{{--                            <span class="font-weight-bold mb-2">{{Auth::user()->name}}</span>--}}
                            <span class="text-secondary text-small">Project Manager</span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route("dashboard")}}">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>





                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
                        <span  class="menu-title">Category Module</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-shape menu-icon"></i>
{{--                        <i class="mdi mdi-crosshairs-gps menu-icon"></i>--}}
                    </a>
                    <div class="collapse" id="ui-basic1">
                        <ul class="nav flex-column sub-menu">
                            @isset(Auth::user()->role)
                                @if(Auth::user()->role == "Category Manager")
                            <li class="nav-item"> <a class="nav-link" href="{{route("category.create")}}">Add Category</a></li>
                                @endif
                            @else
                                <span></span>
                            @endisset
                            <li class="nav-item"> <a class="nav-link" href="{{route('category.index')}}">Manage Category</a></li>
                                @isset(Auth::user()->role)
                                    @if(Auth::user()->role == "Admin")
                                <li class="nav-item "> <a class="nav-link position-relative" href="{{route('category.newrequest')}}">Requested Category
                                        @isset($categoryCount)
                                            @if($categoryCount > 0)
                                                <span class="position-absolute font-weight-bold bg-danger text-white " style="top:5px; right: 20px;  width:10%;    border-radius: 100%; text-align: center; line-height: 20px ;  font-size: 0.6em;">{{$categoryCount}}</span>
                                            @endif
                                        @else
                                            <span></span>
                                        @endisset
                                    </a></li>
                                        <li class="nav-item"> <a class="nav-link position-relative" href="{{route('category.updatedRequest')}}">Req updateCategory
                                                @isset($updatecategoryCount)
                                                    @if($updatecategoryCount > 0)
                                                        <span class="position-absolute font-weight-bold bg-danger text-white " style="top:5px; right: 20px;  width:10%;    border-radius: 100%; text-align: center; line-height: 20px ;  font-size: 0.6em;">{{$updatecategoryCount}}</span>
                                                    @endif
                                                @else
                                                    <span></span>
                                                @endisset
                                            </a></li>
                                    @endif
                                @else
                                    <span></span>
                                @endisset
                                @isset(Auth::user()->role)
                                    @if(Auth::user()->role == "Category Manager")
                                        <li class="nav-item"> <a class="nav-link" href="{{route('category.newcreatedrequest')}}">Requested Category</a></li>
                                        <li class="nav-item"> <a class="nav-link" href="{{route('category.newUpdatedRequest')}}">Requested updateCategory</a></li>
                                    @endif
                                @else
                                    <span></span>
                                @endisset
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                        <span class="menu-title">Sub Category Module</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-shape-plus menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic2">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('sub-category.index')}}">Manage Sub Category</a></li>
                            @isset(Auth::user()->role)
                            @if(Auth::user()->role == "Category Manager")
                            <li class="nav-item"> <a href="{{route('sub-category.create')}}" class="nav-link" >Add Sub Category</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="{{route('sub-category.newcreatedrequest')}}">Requested SubCategory</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="{{route('sub-category.newUpdatedRequest')}}">Requested updateSubCategory</a></li>
                            @endif
                                @if(Auth::user()->role ==  "Admin")
                                    <li class="nav-item "> <a class="nav-link position-relative" href="{{route('sub-category.newrequest')}}">Requested SubCategory
                                            @isset($subcategoryCount)
                                                @if($subcategoryCount > 0)
                                                    <span class="position-absolute font-weight-bold bg-danger text-white " style="top:5px; right: 20px;  width:10%;    border-radius: 100%; text-align: center; line-height: 20px ;  font-size: 0.6em;">{{$subcategoryCount}}</span>
                                                @endif
                                            @else
                                                <span></span>
                                            @endisset
                                        </a></li>
                                    <li class="nav-item"> <a class="nav-link position-relative" href="{{route('sub-category.updatedRequest')}}">Req updateSubCategory
                                            @isset($updatesubcategoryCount)
                                                @if($updatesubcategoryCount > 0)
                                                    <span class="position-absolute font-weight-bold bg-danger text-white " style="top:5px; right: 20px;  width:10%;    border-radius: 100%; text-align: center; line-height: 20px ;  font-size: 0.6em;">{{$updatesubcategoryCount}}</span>
                                                @endif
                                            @else
                                                <span></span>
                                            @endisset
                                        </a></li>
                                @endif
                            @else
                                <span></span>
                            @endisset
                        </ul>
                    </div>
                </li>








                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#gen" aria-expanded="false" aria-controls="gen">
                        <span class="menu-title">Brand Module</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-watermark menu-icon"></i>
                    </a>
                    <div class="collapse" id="gen">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route('brand.index')}}">Manage Brand</a></li>
                            @isset(Auth::user()->role)
                                @if(Auth::user()->role == "Brand Manager")
                                    <li class="nav-item"> <a class="nav-link" href="{{route('brand.create')}}">Add Brand</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="{{route('brand.newcreatedrequest')}}">Requested Brand</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="{{route('brand.newUpdatedRequest')}}">Requested updateBrand</a></li>
                                @endif
                                @if(Auth::user()->role ==  "Admin")
                                        <li class="nav-item "> <a class="nav-link position-relative" href="{{route('brand.newrequest')}}">Requested Brand
                                                @isset($brandCount)
                                                    @if($brandCount > 0)
                                                        <span class="position-absolute font-weight-bold bg-danger text-white " style="top:5px; right: 20px;  width:10%;    border-radius: 100%; text-align: center; line-height: 20px ;  font-size: 0.6em;">{{$brandCount}}</span>
                                                    @endif
                                                @else
                                                    <span></span>
                                                @endisset
                                            </a></li>
                                        <li class="nav-item"> <a class="nav-link position-relative" href="{{route('brand.updatedRequest')}}">Req updateBrand
                                                @isset($updatebrandCount)
                                                    @if($updatebrandCount > 0)
                                                        <span class="position-absolute font-weight-bold bg-danger text-white " style="top:5px; right: 20px;  width:10%;    border-radius: 100%; text-align: center; line-height: 20px ;  font-size: 0.6em;">{{$updatebrandCount}}</span>
                                                    @endif
                                                @else
                                                    <span></span>
                                                @endisset
                                            </a></li>
                                    @endif
                            @else
                                <span></span>
                            @endisset
                        </ul>
                    </div>
                </li>


            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
                    <span class="menu-title">Unit Module</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-unity menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic4">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('unit.index')}}">Manage Unit</a></li>
                        @isset(Auth::user()->role)
                            @if(Auth::user()->role == "Unit Manager")
                        <li class="nav-item"> <a class="nav-link" href="{{route('unit.create')}}">Add Unit</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('unit.newcreatedrequest')}}">Requested Unit</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('unit.newUpdatedRequest')}}">Requested updateUnit</a></li>
                            @endif
                            @if(Auth::user()->role ==  "Admin")
                                    <li class="nav-item "> <a class="nav-link position-relative" href="{{route('unit.newrequest')}}">Requested Unit
                                            @isset($unitCount)
                                                @if($unitCount > 0)
                                                    <span class="position-absolute font-weight-bold bg-danger text-white " style="top:5px; right: 20px;  width:10%;    border-radius: 100%; text-align: center; line-height: 20px ;  font-size: 0.6em;">{{$unitCount}}</span>
                                                @endif
                                            @else
                                                <span></span>
                                            @endisset
                                        </a></li>
                                    <li class="nav-item"> <a class="nav-link position-relative" href="{{route('unit.updatedRequest')}}">Req updateUnit
                                            @isset($updateunitCount)
                                                @if($updateunitCount > 0)
                                                    <span class="position-absolute font-weight-bold bg-danger text-white " style="top:5px; right: 20px;  width:10%;    border-radius: 100%; text-align: center; line-height: 20px ;  font-size: 0.6em;">{{$updateunitCount}}</span>
                                                @endif
                                            @else
                                                <span></span>
                                            @endisset
                                        </a></li>
                                @endif
                        @else
                            <span></span>
                        @endisset
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
                    <span class="menu-title">Product Module</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-border-all menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic5">
                    <ul class="nav flex-column sub-menu">
                        @isset(Auth::user()->role)
                            @if(Auth::user()->role == "Employee")
                        <li class="nav-item"> <a class="nav-link" href="{{route("product.create")}}">Add Product</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('product.newcreatedrequest')}}">Requested Product</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('product.newUpdatedRequest')}}">Requested updateProduct</a></li>
                            @endif
                            @if(Auth::user()->role ==  "Product Manager")
                                <li class="nav-item "> <a class="nav-link position-relative" href="{{route('product.newrequest')}}">Requested Product
                                        @isset($productCount)
                                            @if($productCount > 0)
                                                <span class="position-absolute font-weight-bold bg-danger text-white " style="top:5px; right: 20px;  width:10%;    border-radius: 100%; text-align: center; line-height: 20px ;  font-size: 0.6em;">{{$productCount}}</span>
                                            @endif
                                        @else
                                            <span></span>
                                        @endisset
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link position-relative" href="{{route('product.updatedRequest')}}">Req updateProduct
                                        @isset($updateProductCount)
                                            @if($updateProductCount > 0)
                                                <span class="position-absolute font-weight-bold bg-danger text-white " style="top:5px; right: 20px;  width:10%;    border-radius: 100%; text-align: center; line-height: 20px ;  font-size: 0.6em;">{{$updateProductCount}}</span>
                                            @endif
                                        @else
                                            <span></span>
                                        @endisset
                                    </a></li>
                            @endif
                            @else
                                <span></span>
                            @endisset
                        <li class="nav-item"> <a class="nav-link" href="{{route("product.index")}}">Manage Product</a></li>
                    </ul>
                </div>
            </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic0" aria-expanded="false" aria-controls="ui-basic0">
                        <span class="menu-title">User Module</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-account-circle menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic0">
                        <ul class="nav flex-column sub-menu">
                            @isset($categoryCount)
                            <li class="nav-item"> <a class="nav-link" href="{{route("user.create")}}">{{ $categoryCount }}Add User</a></li>
                            @else
                                <li class="nav-item"> <a class="nav-link" href="{{route("user.create")}}">Add User</a></li>
                            @endisset
                            <li class="nav-item"> <a class="nav-link" href="{{route("user.index")}}">Manage User</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic6">
                        <span class="menu-title">Order Module</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-cart menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic6">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route("manage.order")}}">Manage Order</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic7">
                        <span class="menu-title">Customer Module</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-account menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic7">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route("manage.customer")}}">Manage Customer</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic8" aria-expanded="false" aria-controls="ui-basic8">
                        <span class="menu-title">Courier Module</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-bus menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic8">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{route("courier.create")}}">Add Courier</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{route("courier.index")}}">Manage Courier</a></li>
                        </ul>
                    </div>
                </li>
                @isset(Auth::user()->role)
                    @if(Auth::user()->role == "Employee")
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic67" aria-expanded="false" aria-controls="ui-basic67">
                        <span class="menu-title">Message Module</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-bus menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic67">
                        <ul class="nav flex-column sub-menu">
{{--                            <li class="nav-item"> <a class="nav-link" href="{{route("chat")}}">Chatting</a></li>--}}
                            <li class="nav-item"> <a class="nav-link" href="{{route("chataccept")}}">Messages</a></li>
                        </ul>
                    </div>
                </li>
                @endif
                @else
                    <span></span>
                @endisset
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel site-btn">
               @yield('body')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('/')}}assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('/')}}assets/vendors/chart.js/Chart.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('/')}}assets/js/off-canvas.js"></script>
<script src="{{asset('/')}}assets/js/hoverable-collapse.js"></script>
<script src="{{asset('/')}}assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('/')}}assets/js/dashboard.js"></script>
<script src="{{asset('/')}}assets/js/todolist.js"></script>
<!-- jQuery -->
{{--<script src="https://js.pusher.com/7.0/pusher.min.js"></script>--}}

{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}

{{--<!-- Lodash -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>--}}

{{--<!-- Bootstrap -->--}}
{{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}
{{--<!-- Include Echo library -->--}}
{{--<!-- Include Echo library -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.11.3/echo.min.js"></script>--}}
{{--<!-- Include Laravel Echo from CDN -->--}}
{{--<script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.11.3/dist/echo.min.js"></script>--}}
{{--<script src="https://js.pusher.com/7.0/pusher.min.js"></script>--}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script>
    var csrfToken = "{{ csrf_token() }}"; // Get the CSRF token from Laravel
    // Use csrfToken in your AJAX requests
    window.Laravel = {
        userId: {{ auth()->check() ? auth()->user()->id : null }}
    };
</script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Lodash -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>

<!-- Bootstrap -->


<!-- Pusher -->
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<!-- Echo -->
<script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.11.2/dist/echo.iife.js"></script>
{{--<script  src="https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.11.3/echo.min.js"></script>--}}
{{--<script type="module" src="https://cdn.jsdelivr.net/npm/laravel-echo/dist/echo.js"></script>--}}


<script  src="{{asset('/')}}assets/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
{{--<script>--}}
{{--    document.getElementById('add-brand-link').addEventListener('click', function(event) {--}}
{{--        event.stopPropagation();--}}
{{--    });--}}
{{--</script>--}}

<!-- End custom js for this page -->
<script src="https://kit.fontawesome.com/e1ea402ddb.js" crossorigin="anonymous"></script>
</body>

<script>
    function getSubCategory(categoryId){
        $.ajax({
            type: "GET",
            url: "{{route('get-sub-category-by-category-id')}}",
            data: {category_id: categoryId},
            DataType: "JSON",
            success: function (response){
                var option = '';
                option += '<option value=""> -- Select Category Name -- </option>';
                $.each(response,function (key, value){
                    option += '<option value="'+value.id+'">' +value.name+'</option>';
                });
                $('#subCategoryId').empty();
                $('#subCategoryId').append(option);
            }
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    @isset(Auth::user()->role)
        @if(Auth::user()->role == "Admin")
        window.onload = function () {
        @isset($total)
        @if($total > 0)
        Swal.fire({
            title: '',
            text: "You Have {{ $total }} Notification",
            icon: 'success',
            confirmButtonText: 'OK',
            confirmButtonColor: '#7fad39'
        });
        @endif
        @endisset
    };
    @endif
    @endisset



</script>
<script>
    const token = '{{ csrf_token() }}';
    console.log('token',  token);
    // // Attach the sendMessage function to the button's click event
    // const myButton = document.getElementById('btn-chat');
    //
    // // Attach an event listener to the button
    // myButton.addEventListener('click', function() {
    //     // Execute this function when the button is clicked
    //     console.log('Button clicked!');
    //     // You can perform any actions you need here
    // });
    document.getElementById('btn-chat').addEventListener('click', sendMessage);

    // Attach the sendMessage function to the input field's enter key event
    document.getElementById('btn-input').addEventListener('keyup', function(event) {
        if (event.key === 'Enter') {
            sendMessage();
        }
    });

    window.Echo.private('chat')
        .listen('MessageSent', (e) => {
            this.messages.push({
                message: e.message.message,
                user: e.user
            });
        });

    // Assuming you're using Echo for real-time broadcasting
    // Echo.private('chat')
    //     .listen('MessageSent', (e) => {
    //         // Handle the event, e.g., by updating the messages list
    //     });

    {{--function sendMessage() {--}}
    {{--    const input = document.getElementById('btn-input');--}}
    {{--    const message = input.value;--}}
    {{--    console.log(message);--}}
    {{--    input.value = ''; // Clear the input field--}}

    {{--    // Send the message using Laravel's HTTP client or another method--}}
    {{--    axios.post('/send-message', {--}}
    {{--        message: message,--}}
    {{--        user: {!! json_encode(Auth::user()) !!}--}}
    {{--    })--}}
    {{--        .then(response => {--}}
    {{--            // Handle the successful response--}}
    {{--        })--}}
    {{--        .catch(error => {--}}
    {{--            // Handle any errors--}}
    {{--        });--}}
    {{--}--}}

    function sendMessage() {
        const input = document.getElementById('btn-input');
        const message = input.value;
        console.log(message);
        // input.value = ''; // Clear the input field

        // Prepare the data to be sent
        const data = {
            _token: token,
            message: message,
            user: {!! json_encode(Auth::user()) !!}
        };

        // Send the AJAX request
        $.ajax({
            url: '/send-messages',
            type: 'POST',
            data: data,
            // contentType: 'application/json',
            success: function(response) {
                console.log('AJAX request completed')


            },
            error: function(xhr, status, error) {
                // Handle any errors
                console.log('AJAX error occurred')
                console.log(error);
            }
        });
    }



</script>








</html>
