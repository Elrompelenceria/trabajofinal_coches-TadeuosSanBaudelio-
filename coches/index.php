<?php
require_once 'db.php';
$query = $conn->query("SELECT * FROM coches");
$coches = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Coches</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Rubik', sans-serif;
            background-color: #f3f3f3;
            color: #2c2c2c;
        }
        .titulo {
            font-size: 2.5rem;
            font-weight: bold;
            margin-top: 2rem;
            text-align: center;
            color: #004080;
        }
        .carta {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.2s ease-in-out;
        }
        .carta:hover {
            transform: scale(1.02);
        }
        .card-img-top {
            height: 220px;
            object-fit: contain;
            background-color: #ffffff;
        }
        .btn-ver {
            background-color: #004080;
            color: white;
            font-weight: bold;
        }
        .especificaciones {
            font-style: italic;
            font-size: 0.95rem;
            color: #555;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="titulo">Catálogo de Coches Deportivos</h1>
    <div class="row mt-4">
        <?php foreach ($coches as $coche): ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card carta h-100">
                <img src="imagenes/<?php echo $coche['imagen']; ?>" class="card-img-top" alt="<?php echo $coche['nombre']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $coche['nombre']; ?></h5>
                    <p class="mb-1"><strong>Marca:</strong> <?php echo $coche['marca']; ?></p>
                    <p class="mb-1"><strong>Año:</strong> <?php echo $coche['anio']; ?></p>
                    <button class="btn btn-ver mt-2">Ver especificaciones</button>
                    <p class="especificaciones mt-2 d-none"><?php echo $coche['especificaciones']; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(".btn-ver").click(function(){
        $(this).siblings(".especificaciones").toggleClass("d-none");
    });
</script>
</body>
</html>