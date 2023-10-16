<?php
class Book
{
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct($isbn, $title, $author, $available)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    // Gets a copy of book if available return true, otherwise false.
    public function getCopy(): bool
    {
        if ($this->available > 0) {
            $this->available--;
            return true;
        }
        return false;
    }

    // Adds new copy of book.
    public function addCopy($num)
    {
        $this->available += $num;
        return true;
    }

    public function __toString()
    {
        return "ISBN: " . $this->isbn . "\n" .
            "Title: " . $this->title . "\n" .
            "Author: " . $this->author . "\n" .
            "Available: " . $this->available . "\n";
    }
}