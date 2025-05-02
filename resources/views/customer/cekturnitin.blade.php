<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Customer Dashboard | wecan.do</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('wecando.ico') }}">
    <!-- Custom styles for this teplate-->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{URL('customer')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">WE CAN DO</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Layanan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('customer')}}">
<<<<<<< HEAD
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                      </svg>                    
                      <span>Dashboard</span>
=======
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Dashboard</span>
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('customer/isisaldo')}}">
<<<<<<< HEAD
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                        <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z"/>
                      </svg>
=======
                    <i class="fas fa-fw fa-cog"></i>
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
                    <span>Saldo</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('customer/turnitin')}}">
<<<<<<< HEAD
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-check" viewBox="0 0 16 16">
                        <path d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
                      </svg>
=======
                    <i class="fas fa-fw fa-cog"></i>
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
                    <span>Cek Plagiarisme</span>
                </a>
            </li>
            
            <!-- Nav Item - Utilities Collapse Menu -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Sewa Zoom</span>
                </a> --}}
            {{-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div> --}}
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Riwayat User</span>
                </a> --}}
            {{-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div> --}}
            {{-- </li> --}}
            <!-- Divider -->
            <hr class="sidebar-divider">
            
            <!-- Heading -->
            {{-- <div class="sidebar-heading">
                Addons
            </div> --}}

            <!-- Nav Item - Pages Collapse Menu -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            {{-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{asset('template/img/undraw_rocket.svg')}}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> --}}

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
<<<<<<< HEAD
                        {{-- <li class="nav-item dropdown no-arrow mx-1">
=======
                        <li class="nav-item dropdown no-arrow mx-1">
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
<<<<<<< HEAD
                        </li> --}}

                        <!-- Nav Item - Messages -->
                        {{-- <li class="nav-item dropdown no-arrow mx-1">
=======
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{asset('template/img/undraw_profile_1.svg')}}"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{asset('template/img/undraw_profile_2.svg')}}"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
<<<<<<< HEAD
                        </li> --}}
=======
                        </li>
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
<<<<<<< HEAD
                                <img class="img-profile rounded-circle" 
                                     src="{{ Auth::user()->avatar ?? asset('template/img/undraw_profile.svg') }}" 
                                     alt="User Avatar"
                                     style="width: 32px; height: 32px; object-fit: cover;">
=======
                                <img class="img-profile rounded-circle" src="{{asset('template/img/undraw_profile.svg')}}" alt="User Avatar">
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!-- Logout -->
                                <form method="POST" action="{{route('logout')}}">
                                    @csrf
                                    <button class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Keluar
                                    </button>
                                </form>
                                
                            </div>
                        </li>
                        

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cek Turnitin - No Repository</h1>
                        <!-- Button trigger modal -->
                    <!-- Button trigger modal -->
                    <div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Upload File
                        </button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalkuota">
                            Tambah Kuota
                            </button>
                    </div>
                    
                    <!-- Modal -->
<<<<<<< HEAD
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Upload Dokumen</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                            
                                    <!-- Info Kuota -->
                                    <div class="alert alert-warning mb-3" role="alert">
                                        Kuota Tersisa: <strong>{{ auth()->user()->quota }}</strong>
                                    </div>
                            
                                    <!-- Form Upload -->
                                    <form id="uploadForm" action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                            
                                        <!-- Nama File -->
                                        <div class="form-group">
                                        <label for="name">Nama File</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                        </div>
                            
                                        <!-- Dropzone Upload -->
                                        <div class="form-group">
                                        <label for="file">Upload File</label>
                                        <div id="dropzone" class="text-center p-4" style="cursor: pointer; position: relative;">
                                            <i class="fas fa-file-alt fa-3x text-primary mb-2"></i>
                                            <p id="dropzone-text" class="text-muted">Drag & drop dokumen di sini atau klik untuk memilih file</p>
                                            <div id="upload-animation" class="d-none">
                                            <div class="spinner-border text-primary" role="status">
                                                <span class="sr-only">Uploading...</span>
                                            </div>
                                            <p class="mt-2">Uploading...</p>
                                            </div>
                                            <input type="file" name="file" id="file" class="form-control-file d-none" accept=".pdf,.doc,.docx" required>
                                        </div>
                            
                                        <!-- Uploaded File Info -->
                                        <div id="uploaded-card" class="d-none mt-3">
                                            <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title" id="uploaded-file-name"></h5>
                                                <p class="card-text text-success">File berhasil dipilih.</p>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                            
                                        <!-- Keterangan -->
                                        <div class="form-group">
                                        <label for="description">Keterangan</label>
                                        <textarea name="description" id="description" class="form-control"></textarea>
                                        </div>
                            
                                        <!-- Tombol -->
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary" id="uploadButton">Upload Dokumen</button>
                                        </div>
                                    </form>
                            
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                            <!-- Font Awesome (CDN) -->
                            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
                            
                            <!-- SweetAlert2 (CDN) -->
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            
                            <!-- Dropzone CSS -->
                            <style>
                                #dropzone {
                                background-color: #f0f8ff;
                                border: 2px dashed #007bff;
                                border-radius: 10px;
                                transition: background-color 0.3s, border-color 0.3s;
                                }
                            
                                #dropzone:hover,
                                #dropzone.dragover {
                                background-color: #e6f0ff;
                                border-color: #0056b3;
                                }
                            
                                #dropzone i {
                                transition: transform 0.3s ease;
                                }
                            
                                #dropzone:hover i {
                                transform: scale(1.1);
                                }
                            </style>
                            
                            <!-- Dropzone JavaScript -->
                            <script>
                                const dropzone = document.getElementById('dropzone');
                                const fileInput = document.getElementById('file');
                                const dropzoneText = document.getElementById('dropzone-text');
                                const uploadAnimation = document.getElementById('upload-animation');
                                const uploadedCard = document.getElementById('uploaded-card');
                                const uploadedFileName = document.getElementById('uploaded-file-name');
                            
                                dropzone.addEventListener('click', () => fileInput.click());
                            
                                dropzone.addEventListener('dragover', (e) => {
                                e.preventDefault();
                                dropzone.classList.add('dragover');
                                });
                            
                                dropzone.addEventListener('dragleave', () => {
                                dropzone.classList.remove('dragover');
                                });
                            
                                dropzone.addEventListener('drop', (e) => {
                                e.preventDefault();
                                dropzone.classList.remove('dragover');
                                fileInput.files = e.dataTransfer.files;
                                handleFileUpload();
                                });
                            
                                fileInput.addEventListener('change', () => {
                                if (fileInput.files.length > 0) {
                                    handleFileUpload();
                                }
                                });
                            
                                function handleFileUpload() {
                                dropzoneText.classList.add('d-none');
                                uploadAnimation.classList.remove('d-none');
                                setTimeout(() => {
                                    uploadAnimation.classList.add('d-none');
                                    uploadedCard.classList.remove('d-none');
                                    uploadedFileName.textContent = fileInput.files[0].name;
                                }, 1000);
                                }
                            
                                // SweetAlert Confirmation
                                document.getElementById('uploadButton').addEventListener('click', function (e) {
                                        e.preventDefault();

                                        const name = document.getElementById('name').value.trim();
                                        const file = document.getElementById('file').files[0];

                                        if (!name || !file) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Form tidak lengkap',
                                            text: 'Mohon isi nama file dan unggah dokumen sebelum melanjutkan.'
                                        });
                                        return;
                                        }

                                        Swal.fire({
                                        title: 'Yakin ingin mengunggah dokumen?',
                                        text: 'Pastikan file dan informasi sudah benar.',
                                        icon: 'question',
                                        showCancelButton: true,
                                        confirmButtonText: 'Ya, Upload!',
                                        cancelButtonText: 'Batal'
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                            Swal.fire({
                                            title: 'Mengunggah...',
                                            text: 'Mohon tunggu sebentar.',
                                            allowOutsideClick: false,
                                            showConfirmButton: false,
                                            didOpen: () => {
                                                Swal.showLoading();
                                                document.getElementById('uploadForm').submit();
                                            }
                                            });
                                        }
                                        });
                                    });
                            </script>
  

                    
                    {{-- modalkuota --}}
                    <div class="modal fade" id="modalkuota" tabindex="-1" aria-labelledby="modalkuota" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalkuotaLabel">Pilih Jumlah Cek</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-info d-flex align-items-center justify-content-between">
                                        <div>
                                            Saldo Anda: <strong>Rp {{ number_format(auth()->user()->balance, 0, ',', '.') }}</strong>
                                        </div>
                                        <a href="{{ route('customer.isisaldo') }}" class="btn btn-primary">Isi Saldo</a>
                                    </div>
                                    <form id="purchase-form" action="{{ route('customer.belikuota') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="jumlah_cek" class="form-label">Jumlah Cek</label>
                                            <div id="jumlah_cek_buttons" class="btn-group d-flex flex-wrap" role="group">
                                                @foreach($pricelist as $pricelis)
                                                    <button type="button" class="btn btn-outline-primary mb-2 option-btn" data-value="{{ $pricelis->check_count }}" data-price="{{ $pricelis->price }}">
                                                        {{ $pricelis->check_count }} cek - Rp {{ number_format($pricelis->price, 0, ',', '.') }}
                                                    </button>
                                                @endforeach
                                            </div>
                                            <!-- Hidden input to store the selected value -->
                                            <input type="hidden" name="jumlah_cek" id="selected_jumlah_cek" required>
                                        </div>
                                        <button type="submit" id="confirm-purchase" class="btn btn-primary">Beli Kuota</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <script>
                        // JavaScript to handle button selection
                        document.querySelectorAll('.option-btn').forEach(button => {
                            button.addEventListener('click', function() {
                                // Remove the active class from all buttons
                                document.querySelectorAll('.option-btn').forEach(btn => btn.classList.remove('active'));
                                
                                // Add the active class to the selected button
                                this.classList.add('active');
                                
                                // Set the value in the hidden input field
                                document.getElementById('selected_jumlah_cek').value = this.getAttribute('data-value');
                            });
                        });
                    </script>
                    
=======
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            </div>
                            <div class="modal-body">
                                <p>Kuota Tersisa: <strong>{{ auth()->user()->quota }}</strong></p>
                                <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="uploadModalLabel">Upload Dokumen</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nama File</label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload File</label>
                                            <input type="file" name="file" class="form-control-file" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea name="description" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    {{-- modalkuota --}}
                    <div class="modal fade" id="modalkuota" tabindex="-1" aria-labelledby="modalkuota" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            </div>
                            <div class="modal-body">
                                <form id="purchase-form" action="{{ route('customer.belikuota') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="jumlah_cek" class="form-label">Jumlah Cek</label>
                                        <select name="jumlah_cek" id="jumlah_cek" class="form-control" required>
                                            @foreach( $pricelist as $pricelis)
                                                <option value="{{ $pricelis->jumlah_cek }}">
                                                    {{ $pricelis->jumlah_cek}} cek - Rp {{ number_format($pricelis->harga, 0, ',', '.') }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" id="confirm-purchase" class="btn btn-primary">Beli Kuota</button>
                                </form>
                                    
                                    {{-- @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="uploadModalLabel">Upload Dokumen</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <h6>Sisa Saldo</h6>
                                            <input type="text"  class="form-control" name="sisasaldo" value="{{ $saldohuy->balance}}" class="form-control-file" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Kuota</label>
                                            <select class="form-control" id="jumlahKuota">
                                              @foreach(config('pricelist') as $jumlah => $harga)
                                                <option value="{{ $jumlah }}">{{ $jumlah }}x Cek - Rp {{ number_format($harga, 0, ',', '.') }}</option>
                                              @endforeach
                                            </select>
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                        </div>
                    </div>
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833

                    </div>

                    {{-- tabel --}}
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        - Untuk melakukan Cek Turnitin, silakan untuk menukar saldo yang telah kamu top-up dengan kuota cek.<br>
                        - Upload Dokumen dengan klik tombol Upload File
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-center">
                            Sisa Kuota : {{ auth()->user()->quota }}
                        </div>
<<<<<<< HEAD

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Riwayat Pengecekan</h6>
                        </div>

                        <div class="card-body">
                            @if($dokument->isEmpty())
                                <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
                                <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100%;">
                                    <dotlottie-player
                                        src="https://lottie.host/7015a5bd-0f6b-46b5-8f3c-146c768ed548/Hw9h4jutLu.lottie"
                                        background="transparent"
                                        speed="1"
                                        style="width: 200px; height: 200px; margin: auto;"
                                        loop
                                        autoplay>
                                    </dotlottie-player>
                                    <p class="mt-3 text-muted text-center">Belum ada dokumen yang diunggah.</p>
                                </div>
                            @else
                                <div class="row">
                                    @foreach($dokument as $key => $document)
                                        <div class="col-md-3">
                                            <div class="card mb-3">
                                                <div class="card-header">
                                                    <h5 class="card-title">{{ $document->name }}</h5>
                                                </div>
                                                <div class="card-body">
                                                    <p><strong>ID Transaksi:</strong> {{ $document->transaction_id }}</p>
                                                    <p><strong>Status:</strong> {{ $document->status }}</p>
                                                    <p><strong>Keterangan:</strong> {{ $document->description }}</p>
                        
                                                    <div class="d-flex justify-content-between">
                                                        <!-- Tombol Feedback -->
                                                        <button class="btn btn-success btn-sm me-2"
                                                            onclick="window.location.href='{{ route('feedback.download', $document->id) }}'">
                                                            Buka Feedback
                                                        </button>
                        
                                                        <!-- Form Hapus dengan SweetAlert -->
                                                        <form id="deleteForm{{ $document->id }}"
                                                            action="{{ route('document.destroy', $document->id) }}"
                                                            method="POST" style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-danger btn-sm"
                                                                onclick="confirmDelete({{ $document->id }})">
                                                                Hapus
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        
                                <!-- Pagination -->
                                <div class="d-flex justify-content-center mt-3">
                                    {{ $dokument->links() }}
                                </div>
                            @endif
                        </div>
                        
                        <!-- SweetAlert2 Delete Script -->
                        <script>
                            function confirmDelete(id) {
                                Swal.fire({
                                    title: 'Apakah kamu yakin?',
                                    text: "Dokumen yang dihapus tidak dapat dikembalikan!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#d33',
                                    cancelButtonColor: '#6c757d',
                                    confirmButtonText: 'Ya, hapus!',
                                    cancelButtonText: 'Batal'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        document.getElementById('deleteForm' + id).submit();
                                    }
                                });
                            }
                        </script>

                        <script>
                            function openFeedback(url) {
                                window.location.href = url;
                            }
                        </script>
                    </div>
                    
                    <!-- Tambahkan ini di bawah sebelum </body> -->
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    
=======
                        {{-- {{ $dokument }} --}}
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Riwayat Pengecekan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama File</th>
                                            <th>ID Transaksi</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                            <th>Hasil Cek</th>
                                        </tr>
                                    </thead>     
                                    <tbody>
                                        @foreach($dokument as $key => $document)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $document->name}}</td>
                                            <td>{{ $document->transaction_id}}</td>
                                            <td>{{ $document->status}}</td>
                                            <td>{{ $document->description}}</td>
                                            <td>
                                                @if($document->status === 'checked')
                                                    <a href="{{ route('customer.download', $document->id) }}" class="btn btn-success btn-sm">Download</a>
                                                @else
                                                    <span class="text-muted">Menunggu verifikasi</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
                    {{-- tabel --}}
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
<<<<<<< HEAD
            {{-- <footer class="sticky-footer bg-white">
=======
            <footer class="sticky-footer bg-white">
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; we can do 2025</span>
                    </div>
                </div>
<<<<<<< HEAD
            </footer> --}}
=======
            </footer>
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendorvendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/chart.js/Chart.min.js')}}"></script>

    <script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('template/js/demo/chart-pie-demo.js')}}"></script>
    <script src="{{asset('template/js/demo/datatables-demo.js')}}"></script>

    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false,
            });
        @endif
    
        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session('error') }}',
            });
        @endif
    </script>

</body>

</html>

