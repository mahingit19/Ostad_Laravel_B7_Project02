<?php 

// Contact Management Terminal-Based App

$contacts = [];

// Function to add contact 
function addContacts(array &$contacts, string $name, string $email, string $phone): void {
    $contacts[] = [
        'name' => $name,
        'email' => $email,
        'phone'=> $phone
    ];
}

// Function to display contacts
function displayContacts(array $contacts): void {
    if (empty($contacts)) {
        echo "No contacts found.\n";
        
    } else {
        foreach ($contacts as $contact) {
            echo "Name: {$contact['name']}\n";
            echo "Email: {$contact['email']}\n";
            echo "Phone: {$contact['phone']}\n";
            echo "----------------------\n";
        }
    }
}

// Terminal-based interface

while (true) {
    echo"\nContact Management Menu:\n";
    echo"1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    $choice = (int) readline("Choose an option: ");

    switch($choice) {
        case 1:
            $name = readline("Enter name: ");
            $email = readline("Enter email: ");
            $phone = readline("Enter phone: ");
            addContacts($contacts, $name, $email, $phone);
            echo "$name added successfully!\n";
            break;

        case 2:
            displayContacts($contacts);
            break;

        case 3:
            echo "Exiting...\n";
            exit(0);

        default:
            echo "Invalid choice. Please try again.\n";
    }
}