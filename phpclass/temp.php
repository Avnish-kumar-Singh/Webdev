<?php
// Index-Based Array
$fruits = array("Apple", "Banana", "Cherry", "Date");
// Accessing elements in an index-based array
echo "First fruit: " . $fruits[0] . "<br>"; 
echo "Second fruit: " . $fruits[1] . "<br>"; 
// Associative Array
$person = array(
    "name" => "John",
    "age" => 30,
    "email" => "john@example.com"
);
// Accessing elements in an associative array
echo "Name: " . $person["name"] . "<br>";   
echo "Age: " . $person["age"] . "<br>";     
echo "Email: " . $person["email"] . "<br>"; 
?>


<?php



// Input string
$text = "Hello, World! PHP is awesome.";

// 1. strlen() - Get the length of the string
echo "Length of the string: " . strlen($text) . "\n";

// 2. str_word_count() - Count the number of words in the string
echo "Word count: " . str_word_count($text) . "\n";

// 3. strtoupper() - Convert the string to uppercase
echo "Uppercase: " . strtoupper($text) . "\n";

// 4. strtolower() - Convert the string to lowercase
echo "Lowercase: " . strtolower($text) . "\n";

// 5. ucfirst() - Capitalize the first character of the string
echo "Capitalized: " . ucfirst(strtolower($text)) . "\n";

// 6. str_replace() - Replace "World" with "Universe"
$newText = str_replace("World", "Universe", $text);
echo "Replaced string: " . $newText . "\n";

// 7. substr() - Extract a portion of the string
echo "Substring (first 5 characters): " . substr($text, 0, 5) . "\n";

// 8. strrev() - Reverse the string
echo "Reversed string: " . strrev($text) . "\n";

// 10. trim() - Remove whitespace from the beginning and end of the string
$extraSpaces = "   Extra spaces   ";
echo "Trimmed string: '" . trim($extraSpaces) . "'\n";

// 11. explode() - Split a string into an array
$wordsArray = explode(" ", $text);
echo "Array of words: ";
print_r($wordsArray);

// 12. implode() - Join array elements into a string
$joinedString = implode(" ", $wordsArray);
echo "Joined string: " . $joinedString . "\n";
?>



//Single Inheritance
<?php
// Parent Class
class Animal {
    public function eat() {
        echo "This animal eats food.\n";
    }
}
// Child Class
class Dog extends Animal {
    public function bark() {
        echo "The dog barks.\n";
    }
}
// Using the Child Class
$dog = new Dog();
$dog->eat();  // Accessing the parent class method
$dog->bark(); // Accessing the child class method
?>


//Multilevlel Inheritance
<?php
// Parent Class
class Animal {
    public function breathe() {
        echo "This animal breathes air.\n";
    }
}
// Intermediate Class
class Mammal extends Animal {
    public function feedMilk() {
        echo "This mammal feeds milk to its young.\n";
    }
}
// Child Class
class Dog extends Mammal {
    public function bark() {
        echo "The dog barks.\n";
    }
}
// Using the Child Class
$dog = new Dog();
$dog->breathe();   // Method from the Animal class
$dog->feedMilk();  // Method from the Mammal class
$dog->bark();      // Method from the Dog class
?>

//Hierarchical inheritance
<?php
// Parent Class
class Animal {
    public function eat() {
        echo "This animal eats food.\n";
    }
}
// Child Class 1
class Dog extends Animal {
    public function bark() {
        echo "The dog barks.\n";
    }
}
// Child Class 2
class Cat extends Animal {
    public function meow() {
        echo "The cat meows.\n";
    }
}
// Using Child Classes
$dog = new Dog();
$dog->eat();
$dog->bark();

$cat = new Cat();
$cat->eat();
$cat->meow();
?>




