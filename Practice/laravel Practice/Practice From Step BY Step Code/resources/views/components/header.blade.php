
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<center>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @if($title == "home")
                    <li class="nav-item active">
                        <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./profile">profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./upload">upload</a>
                    </li>
                @endif
                

                @if($title == "about")
                    <li class="nav-item">
                        <a class="nav-link" href="./">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./about">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./profile">profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./upload">upload</a>
                    </li>
                @endif
                

                @if($title == "contact")
                    <li class="nav-item">
                        <a class="nav-link" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./contact">Contact <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./profile">profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./upload">upload</a>
                    </li>
                @endif

                @if($title == "login")
                    <li class="nav-item">
                        <a class="nav-link" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact">Contact</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./login">login <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./profile">profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./upload">upload</a>
                    </li>
                @endif

                @if($title == "profile")
                    <li class="nav-item">
                        <a class="nav-link" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login">login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./profile">profile<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./upload">upload</a>
                    </li>
                @endif

                @if($title == "upload")
                    <li class="nav-item">
                        <a class="nav-link" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./profile">profile</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./upload">upload<span class="sr-only">(current)</span></a>
                    </li>
                @endif
            </ul>
        </div>
</nav>
</center>

