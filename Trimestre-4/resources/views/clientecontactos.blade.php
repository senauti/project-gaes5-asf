<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactos</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <img src="{{ asset('img/Carro.jpg') }}" alt="">
            <span class="logo_name">Don-Speed's-Fierro</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Inicio</span>
                </a>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="{{ route('citas.index') }}">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Agendar</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">servicios</span>
                    </a>
                </div>
            </li>
            <li>
                <a href="{{ route('contactos') }}">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="link_name">Contactos</span>
                </a>
            </li>
            <li>
                <a href="{{ route('comments.index') }}">
                    <i class='bx bx-history'></i>
                    <span class="link_name">Califiquenos</span>
                </a>
            </li>
            <li>
                <div class="iocn-link">
                <a href="{{ url('garantias') }}">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Garantias</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Don Speeds Fierro</div>
                        <div class="job">Cliente</div>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <div class="bx bx-log-out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></div>
                </div>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">Contactos</span>
        </div>
        <div>
            <div class="table-responsive">
                <table class="table">
                    <div class="alert alert-primary" role="alert">
                        Lista de Funcionarios
                    </div>
                    <thead>
                        <tr>
                            <td class="bg-primary">#</td>
                            <td class="bg-primary">Nombre</td>
                            <td class="bg-primary">Apellido</td>
                            <td class="bg-primary">Correo</td>
                            <td class="bg-primary">Numero</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bg-primary">1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@gmail.com</td>
                            <td>322-256.....</td>
                        </tr>
                        <tr>
                            <td class="bg-primary">2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@gmail.com</td>
                            <td>311-278.....</td>
                        </tr>
                        <tr>
                            <td class="bg-primary">3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@gmail.com</td>
                            <td>311-256.....</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
</body>

</html>
