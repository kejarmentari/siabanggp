<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Siabang GP - Dinas Pekerjaan Umum Kota Balikpapan</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('theme/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="row">
                                <div class="col-4">
                                    <div class="brand-logo mb-2">
                                        <img src="{{ asset('images/logo.png') }}" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8 pl-0">
                                    <h3 class="my-1">SIABANG GP</h3>
                                    <h5>Dinas Pekerjaan Umum<br>Kota Balikpapan</h5>
                                </div>
                            </div>

                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-gradient-info btn-lg font-weight-medium auth-form-btn" type="submit">Login</button>
                                    <a class="btn btn-block btn-gradient-success btn-lg font-weight-medium auth-form-btn"
                                        href="{{ url('tamu') }}">Masuk Sebagai Tamu</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('theme/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('theme/js/off-canvas.js') }}"></script>
    <script src="{{ asset('theme/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('theme/js/misc.js') }}"></script>
</body>

</html>
