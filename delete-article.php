<?php
require_once './database/database.php';
$authDAO = require_once __DIR__.'/database/security.php';

$currentUser = $authDAO->isLoggedIn();

if(!$currentUser) {
    header('Location: /');
}
// /**
//  * @var PDO
//  */
// $pdo = require_once './database.php';
// $statement = $pdo->prepare('DELETE FROM article WHERE id=:id');

/**
 * @var ArticleDAO
 */
$articleDAO = require_once './database/models/ArticleDAO.php';

$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$id = $_GET['id'] ?? '';

// if (!$id) {
//     header('Location: /');
// } else {
//     if (file_exists($filename)) {
//         $articles = json_decode(file_get_contents($filename), true) ?? [];
//         $articleIdx = array_search($id, array_column($articles, 'id'));
//         array_splice($articles, $articleIdx, 1);
//         file_put_contents($filename, json_encode($articles));
//         header('Location: /');
//     }
// }

if($id) {
    $article = $articleDAO->getOne($id);

    if($currentUser['id'] === $article['author']) {
        $articleDAO->deleteOne($id);
    } else {
        header('Location: /');
    }
    
}
header('Location: /');