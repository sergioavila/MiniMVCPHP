<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votos</title>
    <script src="assets/js/app.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="card votes-card">
        <div class="card-body">
            <h1 class="fs-2 text-center mb-4">Formulario de Votación</h1>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" required>
                </div>
                <div class="mb-3">
                    <label for="nickname" class="form-label">Alias</label>
                    <input type="text" class="form-control" name="nickname" id="nickname" required>
                </div>
                <div class="mb-3">
                    <label for="rut" class="form-label">RUT</label>
                    <input type="text" class="form-control mb-4" name="rut" id="rut" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control mb-4" name="email" id="email" required>
                </div>
                <select class="form-select mb-4" name="state" id="state" required disabled>
                    <option value="">Región</option>
                </select>
                <select class="form-select mb-4" name="city" id="city" required disabled>
                    <option value="">Comuna</option>
                </select>
                <select class="form-select mb-4" name="candidate" id="candidate" required disabled>
                    <option value="">Candidato</option>
                </select>
                <p class="fs-5">¿Cómo se enteró de nosotros?</p>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Web</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">TV</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Redes Sociales</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Amigo</label>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Votar</button>
                    <div class="spinner-border text-primary d-none" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div id="message" class="d-none">
                        <p class="fs-5">Gracias por votar</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>