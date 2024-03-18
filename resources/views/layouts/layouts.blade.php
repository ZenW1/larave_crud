
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- resources/views/layouts/app.blade.php -->

<!-- Other scripts ... -->

<script src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>
<style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
   .{
     width: auto%;
   }

    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
    }
    body {
        margin: 0;
    }
    main {
        display: block;
    }
    h1 {
        font-size: 2em;
        margin: 0.67em 0;
    }
    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible;
    }
    pre {
        font-family: monospace, monospace;
        font-size: 1em;
    }
    a {
        background-color: transparent;
    }
     .container {

    }
    abbr[title] {
        border-bottom: none;
        text-decoration: underline;
        text-decoration: underline dotted;
    }
    p{
        color: red;
    }
    b,
    strong {
        font-weight: bolder;
    }
    code,
    kbd,
    samp {
        font-family: monospace, monospace;
        font-size: 1em;
    }
    small {
        font-size: 80%;
    }
    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
    }
    sub {
        bottom: -0.25em;
    }
    sup {
        top: -0.5em;
    }
    img {
        border-style: none;
    }
    button,
    input,
    optgroup,
    select,
    textarea {
        font-family: inherit;
        font-size: 100%;
        line-height: 1.15;
        margin: 0;
    }
    button,
    input {
        overflow: visible;
    }
    button,
    select {
        text-transform: none;
    }
    [type='button'],
    [type='reset'],
    [type='submit'],
    button {
        -webkit-appearance: button;
    }
    button::-moz-focus-inner,
    [type='button']::-moz-focus-inner,
    [type='reset']::-moz-focus-inner,
    [type='submit']::-moz-focus-inner,
    button::-moz-focus-inner {
        border-style: none;
        padding: 0;
    }
    .nav{
        width: 100%;

    }


    .nav-item{
        margin: 0 10px;
    }
    .navbar-nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }
    </style>
<body>
    <div class=" container nav">
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    @yield('content')
</body>

</html>
