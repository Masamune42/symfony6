# Cours Symfony 6
/!\ Cours abandonné car dernier projet uniquement en Symfony 5 /!\

## Bases
```php
// On défini une route avec comme requirement sur "name" et "id" en RegEx
#[Route('/blog/{id}/{name}', name: 'app_blog', requirements: ["name" => "[a-zA-Z]{5,50}", "id" => "[0-9]{2,6}"])]
// On indique le type attendu pour id et name
public function index(int $id, string $name): Response
{
    return $this->render('blog/index.html.twig', [
        'id' => $id,
        'name' => $name,
        'controller_name' => 'BlogController',
    ]);
}
```