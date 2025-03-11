<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/css/styles_admin_layout.css">
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="sidebar-content">
                <div class="logo">
                    <img src="" alt="">
                    <span class="logo-text">GymCPIC</span>
                </div>
                <nav class="menu">
                    <ul>
                        <li><a href=""><span>Centros</span></a></li>
                        <li><a href=""><span>Programas</span></a></li>
                        <li><a href=""><span>Roles</span></a></li>
                        <li><a href=""><span>Actividades</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main class="main-content">
            <header class="header">
                <div class="header-container">
                    <button class="menu-toggle">Menu</button>
                    <h1><?php echo $title; ?></h1>
                    <div class="search-container">Buscar ...</div>
                    <div class="header-icons"></div>
                </div>
            </header>
            <div class="content">
                <?php include_once $content; ?>

            </div>
        </main>
    </div>
    
  
   

</body>
        <?php //include_once $content;
        // ?>



</html>
