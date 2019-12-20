<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" id="menu">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item element <?php if($_GET['page']=='home')echo'active';?>">
                <a class="nav-link" href="index.php?page=home">Denière recette</a>
            </li>
            <li class="nav-item element <?php if($_GET['page']=='recipes')echo'active';?>">
                <a class="nav-link" href="index.php?page=recipes">Toutes les recettes</a>
            </li>
            <li class="nav-item element <?php if($_GET['page']=='add_recipe')echo 'active';?>">
                <a class="nav-link" href="index.php?page=add_recipe">Ajouter une recette</a>
            </li>
            <li class="nav-item element <?php if($_GET['page']=='vege_recipe')echo 'active';?>">
                <a class="nav-link" href="index.php?page=vege_recipe">Recettes Végétariennes</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>