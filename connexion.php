<?php include_once('./composant/head.php'); ?>

<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="text-center mb-4">
                <h1>
                    Logo
                </h1>
            </div>
            <form class="card card-md" action="client" method="get" autocomplete="off">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Login to your account</h2>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                            <span class="form-label-description">
                                <a href="./vide.php">I forgot password</a>
                            </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" placeholder="Password" autocomplete="off">
                            <span class="input-group-text">
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                Don't have account yet? <a href="./sign-up.html" tabindex="-1">S'sinscire</a>
            </div>
        </div>
    </div>
    <?php include_once('./composant/end.php'); ?>