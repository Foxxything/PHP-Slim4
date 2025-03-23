<?php

namespace Project\Name\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;
use Project\Name\Core\Math;

final readonly class HomeAction
{
    public function __construct(
        private PhpRenderer $view,
    ) {
    }

    public function __invoke(Request $request, Response $response): Response
    {
        // Calculate all formulas
        $formulas = $this->calculateFormulas(20, 8);

        // Render the view and pass formulas to the template
        return $this->view->render($response, 'home.php', $formulas);
    }

    /**
     * Perform the calculations for sum, product, and factorial.
     *
     * @param int $a
     * @param int $b
     * @return array
     */
    private function calculateFormulas(int $a, int $b): array
    {
        $sum = Math::add($a, $b);
        $product = Math::multiply($a, $b);
        $factorial = Math::factorial($b);

        // Return the formulas to be passed to the template
        return [
            'add' => "$a + $b = $sum",
            'multiply' => "$a * $b = $product",
            'factorial' => "$b! = $factorial",
        ];
    }
}
