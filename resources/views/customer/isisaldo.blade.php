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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('wecando.ico') }}">
    <!-- Custom styles for this teplate-->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

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
                    <span>Cek Plagiarisme</span>
                </a>
            </li>
            {{-- <li class="nav-item">
=======
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Cek Plagiarisme</span>
                </a>
            </li>
            <li class="nav-item">
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
                <a class="nav-link" href="{{url('customer/pulsa')}}">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Top Up E-Wallet</span>
                </a>
            </li>
<<<<<<< HEAD
             --}}
=======
            
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


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
                                <a class="dropdown-item" href="">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profil
                                </a>
                                <div class="dropdown-divider"></div>
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
                        <h1 class="h3 mb-0 text-gray-800">Isi Saldo</h1>
                        <!-- Button trigger modal -->
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Untuk isi saldo minimal <strong>Rp. 3.000!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                    {{-- tabel --}}

                    <div class="card shadow mb-4">
                        <form action="{{route('customer.isisaldo')}}" method="POST">
                            @csrf
<<<<<<< HEAD
=======
                            {{-- <label for="amount">Jumlah Saldo:</label>
                            {{-- <input type="number" name="amount" id="amount" min="1000" required> --}}
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
                            <style>
                                .uhuy {
                                    margin-left: 12px;
                                    margin-right: 12px;
                                    margin-top: 15px;
                                }
<<<<<<< HEAD
                                .payment-method-btn {
                                    display: flex;
                                    align-items: center;
                                    justify-content: flex-start;
                                    margin: 5px;
                                    padding: 10px;
                                    border: 1px solid #ddd;
                                    border-radius: 5px;
                                    cursor: pointer;
                                    background-color: #f8f9fc;
                                    transition: background-color 0.3s;
                                }
                                .payment-method-btn:hover {
                                    background-color: #e2e6ea;
                                }
                                .payment-method-btn img {
                                    width: 24px;
                                    height: 24px;
                                    margin-right: 8px;
                                }
                                .price-list-btn {
                                    margin: 5px;
                                    padding: 10px;
                                    border: 1px solid #ddd;
                                    border-radius: 5px;
                                    cursor: pointer;
                                    background-color: #f8f9fc;
                                    transition: background-color 0.3s;
                                }
                                .price-list-btn:hover {
                                    background-color: #e2e6ea;
                                }
                            </style>
                            <div class="form-group uhuy">
                                <label for="amount">Jumlah Saldo (Custom):</label>
                                <input type="number" name="amount" min="3000" class="form-control" id="amount" required>
                            </div>
                            <div class="form-group uhuy">
                                <label for="preset_amount">Atau Pilih Paket Saldo:</label>
                                <div class="d-flex flex-wrap">
                                    <button type="button" class="price-list-btn" onclick="setAmount(3000)" data-toggle="tooltip" data-placement="top" title="Pilih untuk isi saldo Rp. 3.000">1 Cek - Rp. 3.000</button>
                                    <button type="button" class="price-list-btn" onclick="setAmount(5000)" data-toggle="tooltip" data-placement="top" title="Pilih untuk isi saldo Rp. 5.000">2 Cek - Rp. 5.000</button>
                                    <button type="button" class="price-list-btn" onclick="setAmount(7000)" data-toggle="tooltip" data-placement="top" title="Pilih untuk isi saldo Rp. 7.000">3 Cek - Rp. 7.000</button>
                                    <button type="button" class="price-list-btn" onclick="setAmount(9000)" data-toggle="tooltip" data-placement="top" title="Pilih untuk isi saldo Rp. 9.000">4 Cek - Rp. 9.000</button>
                                </div>

                                <script>
                                    $(document).ready(function(){
                                        $('[data-toggle="tooltip"]').tooltip(); 
                                    });


                                </script>

                                <style>
                                            .payment-method-btn {
                                            position: relative;
                                            overflow: hidden;
                                            background-color: #f8f9fa;
                                            border: 1px solid #ccc;
                                            margin: 5px;
                                            padding: 10px 15px;
                                            border-radius: 8px;
                                            cursor: pointer;
                                            transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
                                            display: flex;
                                            align-items: center;
                                            gap: 10px;
                                            font-weight: bold;
                                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                                        }

                                        .payment-method-btn img {
                                            height: 30px;
                                            width: auto;
                                            transition: transform 0.2s ease;
                                        }

                                        .payment-method-btn:hover {
                                            background-color: #007bff;
                                            color: #fff;
                                            box-shadow: 0 6px 12px rgba(0, 123, 255, 0.3);
                                        }

                                        .payment-method-btn:hover img {
                                            transform: scale(1.1);
                                        }

                                        .payment-method-btn::after {
                                            content: attr(data-hover-text);
                                            position: absolute;
                                            bottom: -30px;
                                            left: 50%;
                                            transform: translateX(-50%);
                                            background-color: #343a40;
                                            color: #fff;
                                            padding: 5px 10px;
                                            font-size: 12px;
                                            border-radius: 4px;
                                            white-space: nowrap;
                                            opacity: 0;
                                            transition: all 0.2s ease;
                                            pointer-events: none;
                                            z-index: 1;
                                        }

                                        .payment-method-btn:hover::after {
                                            bottom: -10px;
                                            opacity: 1;
                                        }                                 
                                </style>
                            </div>

                            <div class="form-group uhuy">
                                <label for="payment_method">Metode Pembayaran:</label>
                                <div class="d-flex flex-wrap">
                                    <button type="button" onclick="validateAndSubmit('QRIS')" class="payment-method-btn"
                                        data-hover-text="Bayar dengan QRIS">
                                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjz-avG86GYMkCIY6hE7qkMRN9AhvZsbQXKSfxTp_OUIPZF3fY8tjhfpQn2cYD3hwXsqfFPxVMwsnP9YQ2Ika68Dp0qUBHxYfv4y_hVWieJWBXJtEanrDtnYwRFbU_DWPy975S9_G2tUl4/s0/QRIS+%2528Quick+Response+Code+Indonesia+Standard%2529+Logo+-+Download+Free+Vector+PNG.png" alt="QRIS Logo">
                                        QRIS
                                    </button>
                                    <button type="button" onclick="validateAndSubmit('BRIVA')" class="payment-method-btn"
                                        data-hover-text="Bayar dengan BRI VA">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Logo_Bank_Rakyat_Indonesia.svg/2046px-Logo_Bank_Rakyat_Indonesia.svg.png" alt="BRI Logo">
                                        BRI VA
                                    </button>
                                    <button type="button" onclick="validateAndSubmit('DANA')" class="payment-method-btn"
                                        data-hover-text="Bayar dengan DANA">
                                        <img src="https://static.vecteezy.com/system/resources/previews/028/766/359/non_2x/dana-payment-icon-symbol-free-png.png" alt="DANA Logo">
                                        DANA
                                    </button>
                                    <button type="button" onclick="validateAndSubmit('SHOPEEPAY')" class="payment-method-btn"
                                        data-hover-text="Bayar dengan ShopeePay">
                                        <img src="https://play-lh.googleusercontent.com/H7Ja21f7Q66xICkTSzWzjR3E9IB_2YQUbt0xlHtFdXSdUOdbOqQxxCVxiA73mm8heA=w240-h480-rw" alt="ShopeePay Logo">
                                        SHOPEEPAY
                                    </button>
                                </div>
                            </div>
                            

                            <script>
                                $(document).ready(function(){
                                    $('[data-toggle="tooltip"]').tooltip(); 
                                });
                            </script>
                        </form>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        function setAmount(amount) {
                            document.getElementById('amount').value = amount;
                        }

                        function validateAndSubmit(method) {
                            const amount = document.getElementById('amount').value;
                            if (!amount || amount < 3000) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Jumlah saldo minimal Rp. 3.000!',
                                });
                                return;
                            }

                            Swal.fire({
                                title: 'Konfirmasi',
                                text: `Anda akan memilih metode pembayaran ${method}. Lanjutkan?`,
                                icon: 'question',
                                showCancelButton: true,
                                confirmButtonText: 'Ya, Lanjutkan',
                                cancelButtonText: 'Batal'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    const form = document.createElement('form');
                                    form.method = 'POST';
                                    form.action = "{{ route('customer.isisaldo') }}";

                                    const csrfInput = document.createElement('input');
                                    csrfInput.type = 'hidden';
                                    csrfInput.name = '_token';
                                    csrfInput.value = "{{ csrf_token() }}";
                                    form.appendChild(csrfInput);

                                    const amountInput = document.createElement('input');
                                    amountInput.type = 'hidden';
                                    amountInput.name = 'amount';
                                    amountInput.value = amount;
                                    form.appendChild(amountInput);

                                    const methodInput = document.createElement('input');
                                    methodInput.type = 'hidden';
                                    methodInput.name = 'method';
                                    methodInput.value = method;
                                    form.appendChild(methodInput);

                                    document.body.appendChild(form);
                                    form.submit();
                                }
                            });
                        }
                    </script>

                                    <div class="card shadow mb-4">
                                        {{-- {{ $dokument }} --}}
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Riwayat Isi Saldo</h6>
                                        </div>
                                        <div class="card-body">
                                            @if($saldo->isEmpty())
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
                                                    <p class="mt-3 text-muted text-center">Belum ada riwayat isi saldo.</p>
                                                </div>
                                            @else
                                                {{-- {{ $saldo }} --}}
                                                <div class="table-responsive">
                                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nomor Referensi</th>
                                                                <th>Metode Pembayaran</th>
                                                                <th>Nominal</th>
                                                                <th>Status</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($saldo as $key => $uhuy)
                                                                <tr>
                                                                    <td>{{ $key + 1 }}</td>
                                                                    <td>{{ $uhuy->merchant_ref }}</td>
                                                                    <td>{{ $uhuy->method }}</td>
                                                                    <td>{{ $uhuy->amount }}</td>
                                                                    <td>{{ $uhuy->status }}</td>
                                                                    {{-- {{ $uhuy }} --}}
                                                                    <td>
                                                                        @if($uhuy->status === 'unpaid')
                                                                            <a href="{{ $uhuy->checkout_url }}" class="btn btn-success btn-sm" target="_blank">Bayar</a>
                                                                        @elseif($uhuy->status === 'paid')
                                                                            <span class="text-success">Sudah Bayar</span>
                                                                        @else
                                                                            <span class="text-muted">Menunggu Verifikasi</span>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
=======
                            </style>
                            <div class="form-group uhuy">
                                <label for="amount">Jumlah Saldo :</label>
                                <input type="number" name="amount" min="3000" class="form-control" id="amount" required>
                            </div>
                            <div class="form-group uhuy">
                                <label for="payment_method">Metode Pembayaran:</label>
                                {{-- <select name="payment_method" id="payment_method" required> --}}
                                    {{-- <option value="bca">BCA</option>
                                    <option value="bni">BNI</option>
                                    <option value="qris">QRIS</option> --}}
                                    <select name="method" class="custom-select">
                                        <option name="QRIS" value="QRIS">QRIS</option>
                                        <option name="BRIVA" value="BRIVA">BRI VA</option>
                                        <option name="DANA" value="DANA">DANA</option>
                                        <option name="SHOPEEPAY" value="SHOPEEPAY">SHOPEEPAY</option>
                                      </select>
                                </select>
                                <button type="submit" class="btn btn-primary mt-4">Isi Saldo</button>
                            </div>
                        </form>
                    </div>

                    <div class="card shadow mb-4">
                        {{-- {{ $dokument }} --}}
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Riwayat Isi Saldo</h6>
                        </div>
                        <div class="card-body">
                            {{-- {{ $saldo }} --}}
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Referensi</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Nominal</th>
                                            <th>Status</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>     
                                    <tbody>
                                        @foreach($saldo as $key => $uhuy)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $uhuy->merchant_ref}}</td>
                                            <td>{{ $uhuy->method}}</td>
                                            <td>{{ $uhuy->amount}}</td>
                                            <td>{{ $uhuy->status}}</td>
                                            {{-- {{ $uhuy }} --}}
                                            <td>
                                                @if($uhuy->status === 'unpaid')
                                                <!-- Tombol Bayar mengarah ke URL checkout -->
                                                <a href="{{ $uhuy->checkout_url }}" class="btn btn-success btn-sm" target="_blank">Bayar</a>
                                            @elseif($uhuy->status === 'paid')
                                                <span class="text-success">Sudah Bayar</span>
                                            @else
                                                <span class="text-muted">Menunggu Verifikasi</span>
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

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
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

</body>

</html>

