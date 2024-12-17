<?php

use App\Models\Product;
use App\Models\Category;

class MainController
{
    // Page d'accueil
    public function home()
    {
        $this->render('home');
    }

    // Page "Catalogue"
    public function showCatalog()
    {
        $idCategory = 0;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idCategory = $_POST['idCategory'];
        }

        $product = new Product();
        if($idCategory == 0) {
            $products = $product->findAll();
        }
        else {
            $products = $product->findByCategory($idCategory);
        }

        $category = new Category();
        $categories = $category->findAll();

        $this->render('catalogue', ['products' => $products, 'categories' => $categories, 'selectedCategoryId' => $idCategory]);
    }

    // Page "Connexion"
    public function connexion()
    {
        $this->render('connexion');
    }

    // Page "Inscription"
    public function inscription()
    {
        $this->render('inscription');
    }

    // Page "Détail"
    public function showDetail($id)
    {
        $repository = new Product();
        $product = $repository->find($id);
        $this->render('detail', ['product' => $product]);
    }

    // Page 404
    public function notFound()
    {
        http_response_code(404);
        echo "404 - Page Not Found!";
    }

    // Méthode pour inclure une vue
    private function render($view, $data = [])
    {
        // Inclut la vue demandée
        $viewFile = __DIR__ . '/../views/' . $view . '.php';

        // Transmet les données aux vues
        extract($data);

        if (file_exists($viewFile)) {
            require_once __DIR__ . '/../views/partials/header.php';
            require_once $viewFile;
            require_once __DIR__ . '/../views/partials/footer.php';
        } else {
            echo "View not found: $view";
        }
    }
}
