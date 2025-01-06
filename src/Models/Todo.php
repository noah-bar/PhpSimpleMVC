<?php
namespace App\Models;

class Todo
{
    private int $id;
    private string $title;
    private bool $completed;

    public function __construct(int $id, string $title, bool $completed)
    {
        $this->id = $id;
        $this->title = $title;
        $this->completed = $completed;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCompleted(): bool
    {
        return $this->completed;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public static function getAll(): array {
        return [
            new Todo(1, "Acheter à manger", true),
            new Todo(2, "Nettoyer la vessel", false),
            new Todo(3, "Apprendre à faire des noeuds", false)
        ];
    }
}