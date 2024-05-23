<!DOCTYPE html>
<html lang="jp">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="dist/css/vendor.min.css">
    <link rel="stylesheet" href="dist/css/theme.min.css">
</head>

<body>
    <nav class="d-none d-md-flex align-items-center position-fixed position-relative start-0 end-0 top-0 z-3">
        <div class="px-4 m-auto d-flex justify-content-end align-items-center w-100">
            <figure class="logo w-100 m-0 position-absolute">
                <img src="images/logo.png" alt="logo">
            </figure>

            <ul class="d-none d-lg-flex gap-4 list-style-none m-0">
                <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Home</a></li>
                <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Detail</a></li>
                <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Booking</a></li>
                <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Tour</a></li>
                <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Blog</a></li>
            </ul>

            <a href="#" class="menu d-flex d-lg-none justify-content-between align-items-center">
                <i class="bi bi-list"></i>
            </a>
        </div>
    </nav>

    <nav
        class="mobile-nav d-md-none position-fixed top-0 start-0 end-0 font-Poppins d-flex align-items-center justify-contetn-center z-4">

        <div class="px-4 m-auto d-flex justify-content-end align-items-center w-100">
            <figure class="logo w-100 m-0 position-absolute">
                <img src="images/logo.png" alt="logo">
            </figure>

            <ul class="d-none d-lg-flex gap-4 list-style-none m-0">
                <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Home</a></li>
                <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Detail</a></li>
                <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Booking</a></li>
                <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Tour</a></li>
                <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Blog</a></li>
            </ul>

            <a class="menu" data-bs-toggle="offcanvas" href="#travelcanvasExample" role="button"
                aria-controls="travelcanvasExample">
                <i class="bi bi-list"></i>
            </a>
        </div>
        <div class="side-nav offcanvas offcanvas-start bg-blue-800" tabindex="-1" id="travelcanvasExample"
            aria-labelledby="travelcanvasExampleLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset text-white me-2" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="bi bi-x-lg text-white fs-1"></i>
                </button>
            </div>
            <div class="offcanvas-body d-flex">
                <ul
                    class=" list-style-none d-flex m-auto flex-column gap-sm-5 gap-4 align-items-center justify-contetn-center">
                    <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Home</a></li>
                    <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Detail</a></li>
                    <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Booking</a></li>
                    <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Tour</a></li>
                    <li class="font-Poppins fs-sub-title"><a href="#" class="text-decoration-none">Blog</a></li>
                </ul>
            </div>
        </div>



        <!-- <div class="offcanvas offcanvas-start" tabindex="-1" id="travelcanvasExample"
            aria-labelledby="travelcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="travelcanvasExampleLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                    images, lists, etc.
                </div>
                <div class="dropdown mt-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div> -->

    </nav>