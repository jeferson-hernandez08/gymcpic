<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ?> </title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/styles_admin_layout.css">
    <!-- Añadiendo Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-content">
                <div class="logo">
                    <img src="" alt="">
                    <span class="logo-text">GymCPIC</span>
                </div>
                <nav class="menu">
                    <ul>
                        <?php if(isset($_SESSION['rol']) && $_SESSION['rol'] == 1): ?>
                            <li><a href="/centroFormacion/view"><i class="fas fa-building"></i><span class="info-text">Centros</span></a></li>
                            <li><a href="/programaFormacion/view"><i class="fas fa-dumbbell"></i><span class="info-text">Programas</span></a></li>
                        <?php endif ?>   
                        <li><a href=""><i class="fas fa-user-tag"></i><span class="info-text">Roles</span></a></li>
                        <li><a href=""><i class="fas fa-running"></i><span class="info-text">Actividades</span></a></li>
                        <li><a href=""><i class="fas fa-user"></i><span class="info-text">Usuario</span></a></li>
                        <li><a href=""><i class="fas fa-users"></i><span class="info-text">Grupo</span></a></li>
                        <li><a href=""><i class="fas fa-id-badge"></i><span class="info-text">Rol</span></a></li>
                        <li><a href=""><i class="fas fa-chart-line"></i><span class="info-text">Control Progreso</span></a></li>
                        <li><a href=""><i class="fas fa-sign-in-alt"></i><span class="info-text">Registro Ingreso</span></a></li>
                        <?php if(isset($_SESSION['nombre'])) {  ?> 
                        <li><a href="/login/logout">
                                <i class="fas fa-sign-in-alt"></i>
                                <span class="info-text">Cerrar sesión (<?php echo $_SESSION['nombre'] ?? "";?>)</span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </aside>
        <main class="main-content">
            <header class="header">
                <div class="header-container">
                    <button class="menu-toggle"><i class="fas fa-bars"></i> Menu</button>
                    <h1> <?php echo $title ?> </h1>
                    <div class="search-container">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Buscar...">
                    </div>
                    <div class="header-icons">
                        <a href="#" class="icon-link"><i class="fas fa-user-circle"></i></a>
                        <a href="#" class="icon-link"><i class="fas fa-bell"></i></a>
                        <a href="#" class="icon-link" id="theme-toggle"><i class="fas fa-moon"></i></a>
                    </div>
                </div>
            </header>
            <div class="content">
                <?php include_once $content; ?>
            </div>
        </main>
    </div>

    
    <script>
        // Funcionabilidad de Cambiar de tema a oscuro
        document.getElementById('theme-toggle').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            const icon = this.querySelector('i');
            if (icon.classList.contains('fa-moon')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }
        });

        // Funcionabilidad de Sidebar
        document.querySelector('.menu-toggle').addEventListener('click', function() {      // Selecciona el botón con la clase menu-toggle. y Cuando el usuario haga clic en el botón, se ejecutará la función que está dentro del addEventListener.
            const sidebar = document.getElementById('sidebar');                            // Seleccionamos el sidebar por su ID
            sidebar.classList.toggle('sidebar-hidden');                                    // Método que alterna (agrega o quita) una clase en un elemento.
        });
    </script>
</body>

</html>