<?php include_once('./composant/head.php'); ?>
<?php include_once('./composant/header.php'); ?>
<?php include_once('./composant/nav.php'); ?>
<div class="page-wrapper">
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Creer un nouveau client
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="./client.php" class="btn btn-primary">
                        Voir la liste des clients
                    </a>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Veuillez remplir le formulaire</h3>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Nom</label>
                                        <div>
                                            <input type="text" class="form-control" placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Prenom</label>
                                        <div>
                                            <input type="text" class="form-control" placeholder="Prenom">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Email</label>
                                        <div>
                                            <input type="text" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Adresse</label>
                                        <div>
                                            <input type="text" class="form-control" placeholder="adresse">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Telephone</label>
                                        <div>
                                            <input type="text" class="form-control" placeholder="+221 xx xxx xx xx">
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('./composant/footer.php'); ?>
    </div>
    <?php include_once('./composant/end.php'); ?>