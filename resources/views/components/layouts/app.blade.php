<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Admin template for store">
        <meta name="author" content="Enrique Damasco Alducin">
        <meta name="keywords" content="">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" href="img/icons/icon-48x48.png" />


        <title>Admin Globos @yield('title') </title>

        <link href="{{ asset('build/admin/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('build/assets/icons/fontawesome/css/all.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
        <script src="https://cdn.tiny.cloud/1/lx92kl723shlhhv74kfb5hmczn4pdmx5uq48azse8rf4s5tp/tinymce/7/tinymce.min.js"
            referrerpolicy="origin"></script>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

    <body>

        <div class="wrapper">
            @include('admin.components.menus.sidebar')
            <div class="main">
                @include('admin.components.menus.nav-bar')
                <main class="content">
                    @yield('content')
                </main>
            </div>
        </div>
        <script src="{{ asset('build/admin/js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
            integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
        <script>
            $(document).on("change", '.input-photo-preview', function(event) {
                var output = document.getElementById('preview_main_photo');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function() {
                    URL.revokeObjectURL(output.src) // free memory
                }
            })
        </script>

        <script>
            tinymce.init({
                selector: '.tinny-editor',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                    "See docs to implement AI Assistant")),
            });
        </script>
    </body>

</html>
