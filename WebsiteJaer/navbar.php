<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Add your CSS links and other meta tags here -->
</head>

<body>

    <!-- Your existing HTML code -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button" id="menu-toggle"><i
                    class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>

    <!-- Your existing JavaScript libraries and links -->

    <!-- Add the following script for handling sidebar toggle -->
    <script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.body.classList.toggle('sidebar-collapse');
    });
    </script>

</body>

</html>