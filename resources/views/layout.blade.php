<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit-no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="nav nav-tabs nav-pills">
                <li class="nav-item">
                    <a href="/" class="list-group-item list-group-item-action list-group-item-dark nav-link active">Welcome page</a>>
                </li>
                <li class="nav-item">
                    <a href="/importExportView" class="list-group-item list-group-item-action list-group-item-dark nav-link">Users controll</a>>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="list-group-item list-group-item-action list-group-item-dark nav-link">Our contacts</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="list-group-item list-group-item-action list-group-item-dark nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="/info" class="list-group-item list-group-item-action list-group-item-dark nav-link">Information</a>
                </li>
                <li class="nav-item">
                    <a href="/projects" class="list-group-item list-group-item-action list-group-item-dark nav-link">Projects</a>
                </li>
                <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
            </ul>
        </nav>
    </header>
    <article>
        <nav style="background-color: rgba(108,117,125,0.65) ">
            <div class="container">
                <div class="container">@yield('content')</div>

            </div>
        </nav>
    </article>
    <div class="fixed-bottom">
        <footer class="modal-footer position-sticky bg-secondary" >
            <div class="container">
                <div class="container">
                    <br>
                    <p>Created by Marko in 2019 year.</p>
                </div>

            </div>

        </footer>
    </div>




</body>
</html>
