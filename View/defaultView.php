<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Météo</title>
</head>
<body>
<div class="container">

    <div class="row pt-5">
        <div class="col-md-4" <?= !empty($cities) ? "" : "hidden" ?>>
            <div class="list-group">
                <?php foreach ($cities["cities"] as $city) { ?>
                    <form method="post" action="">
                        <input type="text" class="form-control" name="city" id="exampleInputEmail1" value="<?= filter_var($city,FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>" hidden>
                        <button type="submit" class="list-group-item list-group-item-action">
                            <?= filter_var($city, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>
                        </button>
                    </form>
                <?php } ?>
            </div>
        </div>
        <div class="container col-md-8">
            <div class="alert alert-danger mt-3" role="alert" <?= isset($message) ? "" : "hidden" ?>>
                <?= filter_var($message, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?>
            </div>
            <form method="post" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" class="form-control" name="city" id="exampleInputEmail1"
                           value="<?= isset(filter_input_array(INPUT_POST)["city"]) ? filter_var(
                               $_POST["city"],
                               FILTER_SANITIZE_FULL_SPECIAL_CHARS
                           ) : "" ?>">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
            <div class="card mt-3 d-flex justify-content-center" style="width: 18rem;">
                <div class="card-body" <?= isset($message) ? "hidden" : "" ?>>
                    <p class="card-text">City: <?= filter_var($response->getCity(), FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?></p>
                    <p class="card-text">Degree: <?= filter_var($response->getTemperature(), FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?> °C</p>
                    <p class="card-text">Description: <?= filter_var($response->getDescription(), FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?></p>
                    <p class="card-text"><?= filter_var($response->getIcon(), FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>














