<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DateDebate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleGame.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
<ul class="nav justify-content-center">
    <li class="nav-item">
        <h1>DateDebate</h1>
    </li>
</ul>
<div class="container">

    <div class="row top-50">
        <div class="col-sm">
            <div class="card">
                <img src="./files/pepi.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 id="event-left-name" class="card-title">Pepi hat Sonnenbrand und kauft sich Mascarpone</h5>
                    <h5 id="event-left-date" class="card-text">04.04.2022</h5>
                </div>
            </div>
        </div>
        <div class="col-sm align-items-center">
            <div class="btn-group" role="group" aria-label="BeforeOrLater">
                <button id="btn-before" value="before" type="button" class="btn btn-outline-primary rounded-start-pill"
                        style="width:2vw;">Before
                </button>
                <button id="btn-later" value="later" type="button" class="btn btn-outline-primary rounded-end-pill"
                        style="width:2vw;">Later
                </button>
            </div>
        </div>

        <div class="col-sm">
            <div class="card">
                <img src="./files/pepi.JPG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 id="event-right-name" class="card-title">Pepi hat Sonnenbrand und kauft sich Mascarpone</h5>
                    <h5 id="event-right-date" class="card-text">04.04.2022</h5>
                </div>
            </div>
        </div>
    </div>

    <script src="js/backend.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
</body>
</html>