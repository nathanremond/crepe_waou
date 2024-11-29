<?php

class MainController
{
    // Page d'accueil
    public function home()
    {
        $this->render('home');
    }

    // Page "Catalogue"
    public function catalogue()
    {
        $this->render('catalogue');
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
    public function detail()
    {
        $this->render('detail');
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
        // Transmet les données aux vues
        extract($data);

        // Inclut la vue demandée
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            require_once __DIR__ . '/../views/partials/header.php';
            require_once $viewFile;
            require_once __DIR__ . '/../views/partials/footer.php';
        } else {
            echo "View not found: $view";
        }
    }
}
