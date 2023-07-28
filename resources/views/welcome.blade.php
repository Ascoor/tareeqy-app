<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة طريقي</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <!-- Logo Image -->
            <a class="navbar-brand-customer" href="#">
                <img class="navbar-logo" src="/student/logo.png" alt="Logo">
                طريقي
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">الصفحة الرئيسية <span class="sr-only">(current)</span></a>
                    </li>
                    {{-- <li class="nav-item"> <a class="nav-link" href="#">من نحن</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">الخدمات</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">تواصل معنا</a> </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron welcome-section">
        <div class="container">
            <img src="{{ asset('/student/welcome-1.jpg') }}" alt="Welcome Image" class="mb-4 rounded-circle welcome-image">
            <h1 class="display-4">مرحبًا بك في منصة طريقي</h1>
            <p class="lead">منصة تساعدك في الوصول إلى الجامعات المصرية</p>
    
            <!-- WhatsApp Link Button -->
            <a href="https://api.whatsapp.com/send?phone=201060697586" class="btn btn-primary btn-lg">تعرف على خدماتنا</a>
            <!-- Replace "201060697586" with "01060697586" without spaces or special characters -->
    
        </div>
    </div>
    <!-- Rest of your content -->
    
    <!-- Rest of your content -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>
