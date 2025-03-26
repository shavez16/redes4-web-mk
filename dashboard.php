<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Estilo general */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 0;
        }

        /* Estilos de la barra lateral (sidebar) */
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            color: #fff;
            box-shadow: 4px 0 6px rgba(0, 0, 0, 0.1);
            padding-top: 20px;
        }

        .sidebar .nav-link {
            display: block;
            padding: 12px 20px;
            color: #ddd;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
            color: #fff;
        }

        .sidebar .nav-link.active {
            background-color: #007bff;
            color: #fff;
        }

        /* Estilo del cuerpo de las tarjetas */
        .card-body {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilo del título de las tarjetas */
        .card-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #343a40;
            margin-bottom: 20px;
        }

        /* Estilos de los botones */
        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px;
            width: 100%;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
            cursor: pointer;
        }

        /* Estilos de los inputs */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            font-size: 1rem;
            background-color: #fff;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        /* Estilo de la página */
        .container-fluid {
            margin-left: 270px;
            padding: 30px;
        }

        .row {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Barra Lateral (Sidebar) -->
            <nav class="col-md-2 bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dispositivos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Monitoreo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Configuración</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reportes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link1" href="index.html">Cerrar sesión</a>

                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido Principal -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h2 class="my-4">Estado de la Red</h2>

                <!-- Estado de la Conexión -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Conexión a MikroTik</h5>
                        <p id="connectionStatus">Conectado</p>
                    </div>
                </div>

                <!-- Gráfico de Tráfico de Red -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Tráfico de Red (Ancho de Banda)</h5>
                        <canvas id="bandwidthChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
