<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIABANG GP - Dinas Pekerjaan Umum Kota Balikpapan</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('theme/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/style.css?ver='.time()) }}">
    @stack('styles')
</head>

<body>
    <div class="container-scroller">
        {{-- navbar --}}
        @include('layouts.navbar')

        <div class="container-fluid page-body-wrapper">
            {{-- sidebar --}}
            @php $is_guest = request()->segment(1) == 'tamu' @endphp
            @if (!$is_guest)
                @include('layouts.sidebar')
            @endif

            <div class="main-panel" id="{!! $is_guest ? 'mapid' : '' !!}" {!! $is_guest ? 'style="width: 100%;"' : '' !!}>
                <div class="content-wrapper">
                    @isset($title)
                        {{-- page title --}}
                        <div class="page-header">
                            <h3 class="page-title">
                                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                                    <i class="mdi mdi-arrow-down"></i>
                                </span>
                                {{ $title ?? 'Dashboard' }}
                            </h3>
                        </div>
                    @endisset

                    {{-- main content --}}
                    @yield('content')
                </div>

                {{-- footer --}}
                @include('layouts.footer')
            </div>
        </div>
    </div>

    <script src="{{ asset('theme/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('theme/js/off-canvas.js') }}"></script>
    <script src="{{ asset('theme/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('theme/js/misc.js') }}"></script>
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="{{ asset('js/js-autocomplete.min.js') }}"></script>
  @stack('scripts')
</body>

</html>
