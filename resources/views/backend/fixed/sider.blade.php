<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('Movie.list')}}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Movies
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('user')}}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Ticket Booked List
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('category.list')}}">
                    <span data-feather="file" class="align-text-bottom"></span>
                   Movie Catagory
                </a>
                <li class="nav-item">
                <a class="nav-link" href="{{route('category.list')}}">
                    <span data-feather="file" class="align-text-bottom"></span>
                   Schedule
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Contact Us
                </a>
            </li>
         

        </ul>

    </div>
</nav>