[7:29 pm, 12/11/2023] Vaibhavi 😁: <?php

class ENotebook {
    private $notes = [];

    public function run() {
        do {
            $this->displayMenu();
            $choice = $this->getUserChoice();

            switch ($choice) {
                case 1:
                    $this->generateNote();
                    break;
                case 2:
                    $this->viewNotes();
                    break;
                case 3:
                    echo "Exiting E-Note Book. Goodbye!\n";
                    break;
                default:
                    echo "Invalid choice. Please try again.\n";
            }
        } while ($choice != 3);
    }

    private function displayMenu() {
        echo "PHP E-Note Book\n";
        echo "1. Generate Note\n";
        echo "2. View Notes\n";
        echo "3. Exit\n";
    }

    private function getUserChoice() {
        do {
            $input = readline("Enter your choice: ");
        } while (!is_numeric($input) || !in_array((int)$input, [1, 2, 3]));

        return (int) $input;
    }

    private function generateNote() {
        $noteTitle = readline("Enter note title: ");
        $noteContent = readline("Enter note content: ");

        $this->notes[] = [
            'title' => $noteTitle,
            'content' => $noteContent,
        ];

        echo "Note generated successfully!\n";
        echo "Returning to the main menu...\n";
    }

    private function viewNotes() {
        if (empty($this->notes)) {
            echo "No notes available.\n";
        } else {
            echo "Notes:\n";
            foreach ($this->notes as $index => $note) {
                echo "[$index] {$note['title']}\n";
            }

            do {
                $viewIndex = (int) readline("Enter the index of the note to view (or any other key to go back): ");
            } while (!is_numeric($viewIndex) || !array_key_exists($viewIndex, $this->notes));

            echo "Note: {$this->notes[$viewIndex]['title']}\n";
            echo "{$this->notes[$viewIndex]['content']}\n";
        }

        echo "Returning to the main menu...\n";
    }
}

$eNotebook = new ENotebook();
$eNotebook->run();

?>