


<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>RENT CAR</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                <span>{{ auth()->user()->role }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('home') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('transaction') }}" class="nav-item nav-link"><i class="fa fa-shopping-cart me-2"></i>Transaction</a>
            <a href="{{ route('report') }}" class="nav-item nav-link"><i class="fa fa-file-archive me-2"></i>Report</a>
            <a href="{{ route('cars') }}" class="nav-item nav-link"><i class="fa fa-car me-2"></i>Cars</a>
            <a href="{{ route('users') }}" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Users</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
