<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.88.1" />
    <title>Cover Template · Bootstrap v5.1</title>
    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="./assets/css/cover.css" rel="stylesheet" />
    <link href="./assets/css/login.css" rel="stylesheet" />
</head>

<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0"><a href="http://localhost/My_FRAMEWORKS/SAP/">Home</a></h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a data-page="home" class="nav-link <?= $active == 'home' ? 'active' : '' ?>" aria-current="page">Home</a>
                    <a data-page="about" class="nav-link <?= $active == 'about' ? 'active' : '' ?>">About</a>
                    <a data-page="dompdf" class="nav-link <?= $active == 'dompdf' ? 'active' : '' ?>">Dompdf</a>
                    <a data-page="login" class="nav-link <?= $active == 'login' ? 'active' : '' ?>">Login</a>
                </nav>
            </div>
        </header>