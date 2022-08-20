<!DOCTYPE html>
<html lang="en">

<head>
    <title>Joel Raspberry Pi Controller</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- include jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- include script.js -->
    <script src="script.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {
            height: 1500px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav"><br>
                <h4>Joel Raspi</h4><br>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#section1">Home</a></li>
                    <!-- <li><a href="#section2">Friends</a></li>
                    <li><a href="#section3">Family</a></li>
                    <li><a href="#section3">Photos</a></li> -->
                </ul>
            </div>

            <div class="col-sm-9">
                <h4><small>Joel Raspberry Pi Controller</small></h4>
                <hr>

                <h2>GPIOs</h2><br>

                <form id="form_control" action="control.php" method="post">
                    <input type="hidden" name="action" value="form_control">
                    <input type="hidden" name="gpio" value="0">
                    <!-- bootstrap button -->
                    <button type="button" class="btn btn-secondary btn-lg">1</button>
                    <button type="button" class="btn btn-secondary btn-lg">2</button>
                    <button type="button" class="btn btn-secondary btn-lg">3</button>
                    <button type="button" class="btn btn-secondary btn-lg">4</button>
                    <button type="button" class="btn btn-secondary btn-lg">5</button>
                    <button type="button" class="btn btn-secondary btn-lg">6</button>
                    <button type="button" class="btn btn-secondary btn-lg">7</button>
                </form>

                <br><br>
            </div>
        </div>
    </div>

    <footer class="container-fluid">
        <p>Footer Text</p>
    </footer>

</body>

</html>