<?php

namespace App\Blog;

// use User\User;
use App\User\User as SomeUser;


class Post implements PostInterface {
    public $title;

    public $user;

    public function __construct() {
        $this->user = new SomeUser();
    }
}

// namespace App\Blog;

// damit wird beschrieben, dass, wenn in der Funktion new User() steht, dort die Klasse User\User verwendet werden soll
// am Ende steht der Name der Klasse, die importiert werden soll
// lädt Klasse aus einem anderen namespace
// mit "as SomeUser" kann SomeUser dann eigenständig verwendet werden
// use App\User\User as SomeUser;

// class Post implements PostInterface {
//     public $title;

//     public $user;

//     public function __construct() {
//         $this->user = new SomeUser(); // erster \ zeigt auf leeren namespace, dann User betrachten, dann \ dort die Klasse User
//         $this->blogUser = new User();
//     }
// }

?>