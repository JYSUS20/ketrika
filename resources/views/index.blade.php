<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Blank | Gull Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{asset('')}}dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="{{asset('')}}dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-horizontal-bar" id="app">
        <div class="main-header">
            <div class="logo"><img src="../dist-assets/images/logo.png" alt="" /></div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="d-flex align-items-center">
                <!-- Mega menu-->
                <div class="dropdown mega-menu d-none d-md-block"><a class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu</a>
                    <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                        <div class="row m-0">
                            <div class="col-md-4 p-4 bg-img">
                                <h2 class="title">Mega Menu <br /> Sidebar</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores natus laboriosam fugit, consequatur.</p>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem odio amet eos dolore suscipit placeat.</p>
                                <button class="btn btn-lg btn-rounded btn-outline-warning">Learn More</button>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Features</p>
                                <div class="menu-icon-grid w-auto p-0"><a href="#"><i class="i-Shop-4"></i> Home</a><a href="#"><i class="i-Library"></i> UI Kits</a><a href="#"><i class="i-Drop"></i> Apps</a><a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a><a href="#"><i class="i-Checked-User"></i> Sessions</a><a href="#"><i class="i-Ambulance"></i> Support</a></div>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Components</p>
                                <ul class="links">
                                    <li><a href="accordion.html">Accordion</a></li>
                                    <li><a href="alerts.html">Alerts</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="badges.html">Badges</a></li>
                                    <li><a href="carousel.html">Carousels</a></li>
                                    <li><a href="lists.html">Lists</a></li>
                                    <li><a href="popover.html">Popover</a></li>
                                    <li><a href="tables.html">Tables</a></li>
                                    <li><a href="datatables.html">Datatables</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="nouislider.html">Sliders</a></li>
                                    <li><a href="tabs.html">Tabs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Mega menu-->
                <div class="search-bar">
                    <input type="text" placeholder="Search" /><i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div>
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle--><i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen=""></i>
                <!-- Grid menu Dropdown-->
                <div class="dropdown"><i class="i-Safe-Box text-muted header-icon" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="menu-icon-grid"><a href="#"><i class="i-Shop-4"></i> Home</a><a href="#"><i class="i-Library"></i> UI Kits</a><a href="#"><i class="i-Drop"></i> Apps</a><a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a><a href="#"><i class="i-Checked-User"></i> Sessions</a><a href="#"><i class="i-Ambulance"></i> Support</a></div>
                    </div>
                </div>
                <!-- Notificaiton-->
                <div class="dropdown">
                    <div class="badge-top-container" id="dropdownNotification" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="badge badge-primary">3</span><i class="i-Bell text-muted header-icon"></i></div>
                    <!-- Notification dropdown-->
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon"><i class="i-Speach-Bubble-6 text-primary mr-1"></i></div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center"><span>New message</span><span class="badge badge-pill badge-primary ml-1 mr-1">new</span><span class="flex-grow-1"></span><span class="text-small text-muted ml-auto">10 sec ago</span></p>
                                <p class="text-small text-muted m-0">James: Hey! are you busy?</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon"><i class="i-Receipt-3 text-success mr-1"></i></div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center"><span>New order received</span><span class="badge badge-pill badge-success ml-1 mr-1">new</span><span class="flex-grow-1"></span><span class="text-small text-muted ml-auto">2 hours ago</span></p>
                                <p class="text-small text-muted m-0">1 Headphone, 3 iPhone x</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon"><i class="i-Empty-Box text-danger mr-1"></i></div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center"><span>Product out of stock</span><span class="badge badge-pill badge-danger ml-1 mr-1">3</span><span class="flex-grow-1"></span><span class="text-small text-muted ml-auto">10 hours ago</span></p>
                                <p class="text-small text-muted m-0">Headphone E67, R98, XL90, Q77</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon"><i class="i-Data-Power text-success mr-1"></i></div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center"><span>Server Up!</span><span class="badge badge-pill badge-success ml-1 mr-1">3</span><span class="flex-grow-1"></span><span class="text-small text-muted ml-auto">14 hours ago</span></p>
                                <p class="text-small text-muted m-0">Server rebooted successfully</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton End-->
                <!-- User avatar dropdown-->
                <div class="dropdown">
                    <div class="user col align-self-end"><img id="userDropdown" src="../dist-assets/images/faces/1.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header"><i class="i-Lock-User mr-1"></i> Timothy Carlson</div><a class="dropdown-item">Account settings</a><a class="dropdown-item">Billing history</a><a class="dropdown-item" href="signin.html">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top menu end-->
        <div class="horizontal-bar-wrap">
            <div class="header-topnav">
                <div class="container-fluid">
                    <div class="topnav rtl-ps-none" id="" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                        <ul class="menu float-left">


                            <li>
                                <div>
                                    <div>

                                        <router-link :to="{name:'Dasboard'}"><i class="fas fa-layer-group"><div class="col-md"></div></i></i>Dasboard</router-link>

                                    </div>
                                </div>
                            </li>


                            <li>
                                <div>
                                    <div>
                                        <router-link :to="{name:'produits'}"><i class="fas fa-shopping-bag"><div class="col-md-6"></div></i></i>Produit</router-link>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div>

                                        <router-link :to="{name:'resaux'}"><i class="fas fa-project-diagram"><div class="col-md"></div></i></i>Resaux</router-link>

                                    </div>
                                </div>
                            </li>


                            <li>
                                <div>
                                    <div>

                                        <router-link :to="{name:'Profile'}"></i></i>Profile</router-link>

                                    </div>
                                </div>
                            </li>

                            <!-- end Forms-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- =============== Horizontal bar End ================-->
        <div class="main-content-wrap d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
 <!-- ============ integration vuejs ============= -->
 <router-view></router-view>
<!-- ============ integration vuejs ============= -->



                <div class="separator-breadcrumb border-top"></div><!-- end of main-content -->
            </div><!-- Footer Start -->
            <div class="flex-grow-1"></div>
            <div class="app-footer">

                <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                    <a class="btn btn-primary text-white btn-rounded" href="https://facebook.com" target="_blank">pages Facebook</a>
                    <span class="flex-grow-1"></span>
                    <div class="d-flex align-items-center">
                        <img class="logo" src="dist-assets/images/logo.png" alt="">
                        <div>
                            <p class="m-0">&copy; 2020</p>
                            <p class="m-0">Tous les droits sont réservés</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fotter end -->
        </div>
    </div><!-- ============ Search UI Start ============= -->
    <div class="search-ui">
        <div class="search-header">
            <img src="dist-assets/images/logo.png" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>
        <input type="text" placeholder="Type here" class="search-input" autofocus>
        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>
        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="dist-assets/images/products/headphone-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="dist-assets/images/products/headphone-2.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="dist-assets/images/products/headphone-3.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="dist-assets/images/products/headphone-4.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->
    <script src="{{asset('')}}dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('')}}dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="{{asset('')}}dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{asset('')}}dist-assets/js/scripts/script.min.js"></script>
    <script src="{{asset('')}}dist-assets/js/scripts/sidebar.horizontal.script.js"></script>
</body>

</html>
