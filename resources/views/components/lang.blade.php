<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Multilingual Website</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Laravel Google Translate Example</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <strong>Select Language:</strong>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select changeLang">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : ' ?>' }}>English
                            </option>
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France
                            </option>
                            <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish
                            </option>
                            <option value="ur" {{ session()->get('locale') == 'ur' ? 'selected' : '' }}>Urdu
                            </option>
                            <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic
                            </option>
                        </select>
                    </div>
                </div>
                <h3>{{ GoogleTranslate::trans('Welcome to User', app()->getLocale()) }}</h3>
                <h3>{{ GoogleTranslate::trans('Hello World !', app()->getLocale()) }}</h3>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS and Popper.js (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('frontend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('fontawesome/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('frontend/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script src="{{ asset('frontend/dist/js/demo.js') }}"></script>

    <script src="{{ asset('frontend/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ asset('frontend/plugins/toastr/toastr.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Trumbowyg JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/trumbowyg.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";
        $(".changeLang").change(function(event) {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>

</body>

</html>
