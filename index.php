<?php
require_once 'Book.php';
require_once 'Customer.php';

// Create new book object.
$book = new Book(123456789, "1984", "George Orwell", 12);

// Create new customer object.
$customer = new Customer(1, "John", "Doe", "john@test.test");

echo '<pre>';

echo 'Code: echo $book' . "\n\n";
echo $book;
echo "\n\n";

echo 'Code: echo $customer' . "\n\n";
echo $customer;
echo "\n\n";

echo '</pre>';