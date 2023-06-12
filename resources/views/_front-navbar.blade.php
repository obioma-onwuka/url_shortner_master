<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0" style = "border-radius: 3px; border: 1px solid #FF0000; padding: 5px; background: #222">
                <i class="fa fa-bolt me-2" style = "color: gold"></i>
                OB
                <span class="fs-5">
                    TECHNG
                </span>
            </h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="https://obtechng.com" target = "_blank" class="nav-item nav-link">
                    About
                </a>
                <a href="{{ route('shortener_home') }}" class="nav-item nav-link">
                    Url Shortener
                </a>
                <a href="{{ route('password_home') }}" class="nav-item nav-link">
                    Password Generator
                </a>
            </div>
            {{-- <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> --}}

            <a href="mailto:info@obtechng.com" target = "_blank" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">
                Contact Us
            </a>
        </div>
    </nav>

    