<?php

declare(strict_types=1);

namespace App\Entity;

/**
 * Represents a library book
 * 
 * @author Jelo Flores
 * @since 2026-05-05
 */
class Book{
    private int $id;
    private string $title;
    private string $author;
    private int $year;
    private string $genre;

public function __construct($id, $title, $author, $year, $genre){
    $this->id=$id;
    $this->title=$title;
    $this->author=$author;
    $this->year=$year;
    $this->genre=$genre;
}

public function getId(){
    return $this->id;
}

public function getTitle(){
    return $this->title;
}

public function getAuthor(){
    return $this->author;
}

public function getYear(){
    return $this->year;
}

public function getGenre(){
    return $this->genre;
}
}

?>