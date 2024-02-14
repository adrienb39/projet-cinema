<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/litera/bootstrap.css">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logo-gestimag.png">
    <style>
        section {
            padding: 60px 0;
        }
    </style>
    <title>Logiciel de gestion Gestimag</title>
</head>

<body>
    <!--    Barre de navigation-->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="./assets/images/logo-gestimag.png" alt="Bootstrap" width="30"
                        height="30">
                    Gestimag - logiciel de gestion</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#presentation">A propos du logiciel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#avis">Avis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <button type="button" class="btn btn-secondary">Acheter maintenant</button>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="mt-5">
        <!--    Présentation-->
        <section id="presentation">
            <div class="container d-flex align-items-center justify-content-center row mx-auto text-center">
                <div class="col-md-4 text-center text-md-start">
                    <h2>Gestimag</h2>
                    <h3>Le logiciel ultime</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit deserunt ducimus, hic reiciendis
                        molestiae autem eaque libero sit, dignissimos dolorum illum blanditiis provident vel assumenda
                        soluta,
                        quos nisi veritatis accusamus.</p>
                    <button type="button" class="btn btn-secondary">Acheter maintenant</button>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <img src="./assets/images/logo-gestimag.png" class="img-fluid hidden-md-4" width="200" height="200">
                </div>
            </div>
        </section>

        <!--    Tarifs-->
        <section id="tarifs" class="bg-light mt-5 mb-5">
            <div class="container d-flex align-items-end justify-content-center row mx-auto text-center">
                <div>
                    <h2>Tarifs</h2>
                    <p>Choisir le plan adopté à vos besoins</p>
                </div>
                <div class="card-group align-items-end">
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <div class="card-body p-5">
                                <h4 class="card-title fw-bold">Starter Edition</h4>
                                <h5 class="card-title">Logiciel de base</h5>
                                <p class="fs-1 fw-bold text-primary">49.99€</p>
                                <p class="card-text d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
                                    elit.
                                    Maiores
                                    aliquam
                                    error porro cum harum libero placeat impedit culpa hic! Officiis, error vel
                                    voluptatem
                                    dicta
                                    maxime quia consequatur distinctio atque! Excepturi.</p>
                                <a href="#" class="btn btn-outline-primary">Acheter maintenant</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-primary">
                            <div class="card-header text-primary">
                                Le plus populaire
                            </div>
                            <div class="card-body p-5">
                                <h4 class="card-title fw-bold">Complete Edition</h4>
                                <h5 class="card-title">Logiciel avec Mise à jour</h5>
                                <p class="fs-1 fw-bold text-primary">69.99€</p>
                                <p class="card-text d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
                                    elit.
                                    Maiores aliquam
                                    error porro cum harum libero placeat impedit culpa hic! Officiis, error vel
                                    voluptatem
                                    dicta
                                    maxime quia consequatur distinctio atque! Excepturi.</p>
                                <a href="#" class="btn btn-outline-primary">Acheter maintenant</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <div class="card-body p-5">
                                <h4 class="card-title fw-bold">Ultimate Edition</h4>
                                <h5 class="card-title">Logiciel Premium</h5>
                                <p class="fs-1 fw-bold text-primary">99.99€</p>
                                <p class="card-text d-none d-lg-block">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing
                                    elit.
                                    Maiores aliquam
                                    error porro cum harum libero placeat impedit culpa hic! Officiis, error vel
                                    voluptatem
                                    dicta
                                    maxime quia consequatur distinctio atque! Excepturi.</p>
                                <a href="#" class="btn btn-outline-primary">Acheter maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--    contenu-->
        <section id="contenu">
            <div class="container d-flex align-items-center justify-content-center row mx-auto text-center">
                <div>
                    <h2>Au programme...</h2>
                    <p>Un rapide aperçu des fonctionnalités de ce vous aurez dans le logiciel</p>
                </div>
                <div class="col-lg-6">
                    <img src="./assets/images/logo-gestimag.png" class="img-fluid hidden-md-4" width="200" height="200">
                </div>
                <div class="col-lg-6 text-start text-md-start">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Aperçu 1 - Logiciel de caisse
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Encaissez un client n'a jamais été aussi simple et rapide !</strong>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ad dicta aliquid
                                    recusandae. Eaque cum perferendis, officia possimus ipsam quaerat similique corrupti
                                    culpa. Consequatur, reiciendis eos facilis ipsam labore exercitationem?
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Aperçu 2 - Gestion de stock
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Réalisez un inventaire n'a jamais été aussi facile !</strong> Lorem ipsum
                                    dolor
                                    sit amet consectetur adipisicing elit. Quod consequuntur ratione odio, animi
                                    aliquid,
                                    ullam doloribus provident, aspernatur quis nemo eos. Corporis distinctio voluptatum
                                    non
                                    explicabo perferendis reiciendis quibusdam quia?
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Aperçu 3 - Statistiques
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Pilotez avec des chiffres votre boutique et atelier</strong> Lorem ipsum,
                                    dolor
                                    sit amet consectetur adipisicing elit. Ducimus, recusandae voluptates nihil error
                                    consequuntur quos eveniet, officia unde assumenda quibusdam soluta enim accusantium
                                    ipsum deleniti omnis fuga dignissimos. Id, rem.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    Aperçu 4 - CRM : fichier client
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Connaitre et fidélisez vos clients va devenir un jeu d'enfant !</strong>
                                    Lorem
                                    ipsum dolor, sit amet consectetur adipisicing elit. Ut quibusdam, magni culpa in est
                                    explicabo officiis. Voluptate, ex officia reprehenderit neque nisi enim quibusdam ea
                                    doloremque sunt pariatur deleniti optio.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                    Aperçu 5 - Planning atelier
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Simplifiez et accélérer la gestion de votre atelier</strong> Lorem
                                    ipsum dolor, sit amet consectetur adipisicing elit. Ut quibusdam, magni culpa in est
                                    explicabo officiis. Voluptate, ex officia reprehenderit neque nisi enim quibusdam ea
                                    doloremque sunt pariatur deleniti optio.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                    Aperçu 6 - Comptabilité
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Vous allez enfin bien vous entendre avec votre comptable !</strong> Lorem
                                    ipsum dolor, sit amet consectetur adipisicing elit. Ut quibusdam, magni culpa in est
                                    explicabo officiis. Voluptate, ex officia reprehenderit neque nisi enim quibusdam ea
                                    doloremque sunt pariatur deleniti optio.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                    Aperçu 7 - Catalogue fournisseurs
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ayez accès à +de 30 fournisseurs et optimisez vos commandes</strong> Lorem
                                    ipsum dolor, sit amet consectetur adipisicing elit. Ut quibusdam, magni culpa in est
                                    explicabo officiis. Voluptate, ex officia reprehenderit neque nisi enim quibusdam ea
                                    doloremque sunt pariatur deleniti optio.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseThree">
                                    Aperçu 8 - RDV en ligne
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Proposez un outil de prise de rdv en ligne intégré à votre site web</strong>
                                    Lorem
                                    ipsum dolor, sit amet consectetur adipisicing elit. Ut quibusdam, magni culpa in est
                                    explicabo officiis. Voluptate, ex officia reprehenderit neque nisi enim quibusdam ea
                                    doloremque sunt pariatur deleniti optio.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseThree">
                                    Aperçu 9 - Gestion trésorie
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Gérez votre trésorerie simplement via la visualisation de vos
                                        revenus</strong>
                                    Lorem
                                    ipsum dolor, sit amet consectetur adipisicing elit. Ut quibusdam, magni culpa in est
                                    explicabo officiis. Voluptate, ex officia reprehenderit neque nisi enim quibusdam ea
                                    doloremque sunt pariatur deleniti optio.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseThree">
                                    Aperçu 10 - Commandes & inventaire
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Accélérez et simplifiez vos commandes et réassorts en 1 clic</strong>
                                    Lorem
                                    ipsum dolor, sit amet consectetur adipisicing elit. Ut quibusdam, magni culpa in est
                                    explicabo officiis. Voluptate, ex officia reprehenderit neque nisi enim quibusdam ea
                                    doloremque sunt pariatur deleniti optio.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEleven" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Aperçu 11 - Vente en ligne - site web
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Synchronisez vos stocks et vos commandes de votre site web</strong>
                                    Lorem
                                    ipsum dolor, sit amet consectetur adipisicing elit. Ut quibusdam, magni culpa in est
                                    explicabo officiis. Voluptate, ex officia reprehenderit neque nisi enim quibusdam ea
                                    doloremque sunt pariatur deleniti optio.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    Avis-->
        <section id="avis" class="bg-light">
            <div class="container d-flex align-items-end justify-content-center row mx-auto text-center">
                <div>
                    <h2>Avis</h2>
                    <p>Ce que les utilisateurs pensent du logiciel</p>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action text-start">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-bold">A acheter absolument le logiciel</h5>
                        </div>
                        <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure suscipit
                            molestiae
                            dolorem, impedit rem nobis optio aliquid quisquam, dolore atque omnis. Aperiam inventore
                            voluptates quaerat repudiandae est, quidem totam alias!</p>
                        <small>Avis de Pierre le 12/04/2023</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action text-start">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-bold">A acheter absolument le logiciel</h5>
                        </div>
                        <p class="mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, voluptatibus
                            placeat voluptatum necessitatibus nihil sunt nisi cupiditate accusantium earum nobis. Ipsa
                            culpa
                            ut itaque quisquam doloremque, sunt similique. Veritatis, adipisci?</p>
                        <small>Avis de Pierre le 12/04/2023</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action text-start">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 fw-bold">A acheter absolument le logiciel</h5>
                        </div>
                        <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, expedita alias
                            inventore, doloribus consequatur dolor consectetur tempore iure ea omnis enim illo dolore,
                            adipisci voluptatibus quasi quas in laudantium quisquam.</p>
                        <small>Avis de Pierre le 12/04/2023</small>
                    </a>
                </div>
            </div>
        </section>
        <!--    Contact-->
        <section id="contact">
            <div class="container d-flex align-items-end justify-content-center row mx-auto text-center">
                <div>
                    <h2>Contactez-nous !</h2>
                    <p>Vous avez une question ? Remplissez le formulaire ...</p>
                </div>
                <form class="text-start" style="width: 50rem">
                    <label for="input1">Votre email :</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-fill"></i></span>
                        </div>
                        <input type="email" id="input1" class="form-control" placeholder="ex : pierre@example.fr"
                            aria-label="email" aria-describedby="basic-addon1">
                    </div>
                    <label for="input1">Votre nom :</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-person-fill"></i></span>
                        </div>
                        <input type="text" id="input1" class="form-control" placeholder="ex : Pierre" aria-label="nom"
                            aria-describedby="basic-addon2">
                    </div>
                    <label for="input1">Quelle est le thème de votre question ?</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"><i
                                    class="bi bi-chat-right-dots-fill"></i></span>
                        </div>
                        <select class="form-select" aria-label="nom" aria-describedby="basic-addon3"
                            aria-label="select">
                            <option value="contenu du logiciel" selected>Contenu du logiciel</option>
                            <option value="prix du logiciel">Prix du logiciel</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <textarea class="form-control" id="basic-addon4" rows="4"
                            placeholder="Votre question..."></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-secondary btn-block mb-4 ">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </section>
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Gestimag
                        </h6>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio fugiat obcaecati ut voluptate
                            alias, hic, dicta ratione asperiores dignissimos, animi ipsa mollitia pariatur neque quae ex
                            magnam doloremque eum vero?
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Produit
                        </h6>
                        <p>
                            <a href="http://adrien.digitaledeluxe.fr" class="text-reset text-decoration-none">Propulsé
                                par <span class="text-danger fw-bold">METEASTRO</span></a>
                        </p>
                        <p>
                            <a href="#" class="text-reset text-decoration-none">Espace administrateur du logiciel</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p>
                            <i class="bi bi-envelope-fill"></i>
                            adrienb39@yahoo.com
                        </p>
                        <p><i class="bi bi-telephone-fill"></i> 06 02 43 65 62</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright :
            <a class="text-reset fw-bold" href="#">Gestimag</a>
        </div>
    </footer>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>