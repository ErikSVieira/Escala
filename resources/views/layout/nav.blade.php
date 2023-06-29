<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <img class="logo img-fluid img-thumbnail" src="https://laravel.com/img/logotype.min.svg"
            alt="Logo da instituição">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('position.index') }}">
                        Position
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('employee.index') }}">
                        Employees
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn text-light btn-outline-danger" href="#"><i
                            class="bi bi-power"></i> Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
