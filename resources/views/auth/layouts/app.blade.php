<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Digiworks | {{ $titlePage }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/admin/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/datetime-picker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @yield('content')

    <a class="back-to-top d-flex align-items-center justify-content-center" href="{{ url('#') }}"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/datetime-picker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/datetime-picker/bootstrap-datetimepicker.id.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            dateTime('#generation_year_1')
            processGenerationData()

            $('#showPassword').click(function() {
                if ($(this).is(':checked')) {
                    $('#yourPassword').attr('type', 'text');
                } else {
                    $('#yourPassword').attr('type', 'password');
                }
            });
        });

        function processGenerationData() {
            const oldGeneration = $('#generation_year_1').data('old-generation');
            $('#generation_year_1').val(oldGeneration).trigger('change');
        }

        function dateTime(id) {
            $(id).datetimepicker({
                language: 'id',
                todayBtn: true,
                format: "yyyy",
                startView: 'decade',
                minView: 'decade',
                viewSelect: 'decade',
                autoclose: true,
            });
        }

        function fillGen2(input) {
            let year = parseInt(input.value);
            let nextYear = !isNaN(year) ? year + 1 : '';

            document.getElementById('generation_year_2').value = nextYear;
        }
    </script>
</body>

</html>
