<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Winter Wonder Ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    @include('partials.navbar')

    @yield('container')

    {{-- Footer --}}
    <footer class="container-fluid border-top">
        <div class="container pt-4">
            <div class="row">
                <div class="col-12 col-md">
                    <h3><span class="text-primary">Winter</span> <span class="text-danger">Wonder</span> <span
                            class="text-success">Tickets</span></h3>
                    <small class="d-block mb-3 text-body-secondary">&copy; 2023–2024</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random
                                feature</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team
                                feature</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for
                                developers</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource
                                name</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another
                                resource</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final
                                resource</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
