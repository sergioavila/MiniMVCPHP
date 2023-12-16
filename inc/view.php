<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/favicon.png">
</head>
<body>
    <div class="card votes-card">
        <div class="card-body">
            <h1 class="fs-2 text-center mb-4">Formulario de Votación</h1>
            <form action="" method="post" id="voteform">
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
                    <input type="text" class="form-control" name="rut" id="rut" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="state" id="state" required disabled>
                        <option value="">Región</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="city" id="city" required disabled>
                        <option value="">Comuna</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="candidate" id="candidate" required disabled>
                        <option value="">Candidato</option>
                    </select>
                </div>
                <p class="fs-5">¿Cómo se enteró de nosotros?</p>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="option-group form-check-input" type="checkbox" role="switch" id="option1" name="option[]" value="1">
                            <label class="form-check-label" for="option1">Web</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="option-group form-check-input" type="checkbox" role="switch" id="option2" name="option[]" value="1">
                            <label class="form-check-label" for="option2">TV</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="option-group form-check-input" type="checkbox" role="switch" id="option3" name="option[]" value="1">
                            <label class="form-check-label" for="option3">Redes Sociales</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check form-switch">
                            <input class="option-group form-check-input" type="checkbox" role="switch" id="option4" name="option[]" value="1">
                            <label class="form-check-label" for="option4">Amigo</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="error-group"></div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/additional-methods.min.js"></script>
    <script src="assets/js/messages_es.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>