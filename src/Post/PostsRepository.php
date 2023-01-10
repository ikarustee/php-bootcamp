<?php

namespace App\Post;

use PDO; // verwende die Klasse, die keinen Namespace hat

class PostsRepository {
    private $pdo;

    // Schreibweise über constructor: stellt sicher, dass dem PostsRepository die Variable übergeben wird
    public function __construct(PDO $pdo) { // die Variable muss den Typ pdo haben; der einzige Parameter, der hier erlaubt ist / übergeben werden darf, ist ein Objekt zur Datenbankverbindung
        // Dependency Injection / Constructor Injection
        // Objekte, die eine Klasse zur Ausführung benötigen 
        $this->pdo = $pdo;
    }
    // Damit wird gewährleistet, dass die PDO-Verbindung beim Erzeugen des PostsRepository mit übergeben wird
    // kann also nur dann erzeugt werden, wenn eine Datenbankverbindung vorhanden ist
    // -> Constructor Injection nennt sich das

    function fetchPosts() {
        $statement = $this->pdo->query("SELECT * FROM `posts`");
        $posts = $statement->fetchAll(PDO::FETCH_CLASS, "App\\Post\\PostModel");
        return $posts;
    }
    
    function fetchPost($id) {
        $statement = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = :id"); // Parameterbenennung auch möglich
        $statement->execute(['id' => $id]); // Parametername wird übergeben
        $statement->setFetchMode(PDO::FETCH_CLASS, "App\\Post\\PostModel");
        $post = $statement->fetch(PDO::FETCH_CLASS); // sagt PHP, dass KLasse erzeugt werden soll
        // fetch(PDO::CLASS) holt einzelnen Eintrag aus der Datenbank

        // Idee: PostModel verwenden
        // $post = new PostModel();
        // $post->id = $postArray['id'];
        // $post->title = $postArray['title'];
        // $post->content = $postArray['content'];

        // var_dump($post); // gibt jetzt ein Objekt mit entsprechenden Attributen zurück
        // erzeugt jetzt ein Model mit entsprechenden Attributen und Werten

        return $post;
    }
}

?>