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
                        Gestion de clients
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="./nouveau_client.php" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        Ajouter un client
                    </a>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <!-- Content here -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Adresse</th>
                                            <th>Type</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sougou</td>
                                            <td>Hamza</td>

                                            <td class="text-muted">
                                                <a href="tel:778963214" class="text-reset">
                                                    +221778963214
                                                </a>
                                            </td>
                                            <td class="text-muted">
                                                hamza@gmail.com
                                            </td>
                                            <td class="text-muted">
                                                Bel Air
                                            </td>

                                            <td>
                                                <a href="#">Edit</a>
                                                <a href="#" class="text-danger">Suprrimer</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('./composant/footer.php'); ?>
    </div>
    <?php include_once('./composant/end.php'); ?>