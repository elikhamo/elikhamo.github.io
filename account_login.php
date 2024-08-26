<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Open Graph protocol -->
        <meta property="og:title" content="FilArt Demo">
        <meta property="og:site_name" content="FilArt Demo">
        <meta property="og:description"
            content="High Quality Artwork Market with Content-Based Filtering for Personalized Recommendations - filartdemo.github.io">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://filartdemo.github.io/">
        <meta property="og:image"
            content="https://filartdemo.github.io/assets/FilArtDemoPreview.png">
        <meta property="og:image:secure_url"
            content="https://filartdemo.github.io/assets/FilArtDemoPreview.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1471">
        <meta property="og:image:height" content="981">
        <meta property="og:image:alt"
            content="FilArt">

        <!-- import from fonts.google.com -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Bree+Serif&family=Caprasimo&family=Niconne&family=Noto+Color+Emoji&family=Noto+Sans+JP:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Pacifico&family=Walter+Turncoat&display=swap"
            rel="stylesheet">

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!-- import  -->
        <link href="css/styles_account_login.css" rel="stylesheet">
        <!-- import from getbootstrap.com -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
        <title>Artisan Marketplace | Login</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">FilArt Demo</a>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="explore.html">Explore</a>
                        </li>
                    </ul>
                    <a href="account_login.html">
                        <button class="btn btn-success active"
                            type="submit">Login</button>
                    </a>
                </div>
            </div>
        </nav>
        <div class="bodyCusDiv">
            <div class="container" id="container">
                <div class="form-container sign-up">
                    <form>
                        <h1>Create Account</h1>
                        <div class="social-icons">
                            <a href="#" class="icon"><i
                                    class="fa-brands fa-google-plus-g"></i></a>
                            <a href="#" class="icon"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                        </div>
                        <span>or use your email for registration</span>
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Password">
                        <button>Sign Up</button>
                    </form>
                </div>
                <div class="form-container sign-in">
                    <form>
                        <h1>Sign In</h1>
                        <div class="social-icons">
                            <a href="#" class="icon"><i
                                    class="fa-brands fa-google-plus-g"></i></a>
                            <a href="#" class="icon"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                        </div>
                        <span>or use your email password</span>
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Password">
                        <a href="#">Forget Your Password?</a>
                        <button>Sign In</button>
                    </form>
                </div>
                <div class="toggle-container">
                    <div class="toggle">
                        <div class="toggle-panel toggle-left">
                            <h1>Let's Start!</h1>
                            <p>Enter your personal details to use all of site
                                features</p>
                            <button class="hidden" id="login">Sign In</button>
                        </div>
                        <div class="toggle-panel toggle-right">
                            <h1>Artisan Marketplace</h1>
                            <p>Register with your personal details to use all of
                                site features</p>
                            <button class="hidden" id="register">Sign
                                Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- import script -->
        <script src="js/script.js"></script>
    </body>

</html>