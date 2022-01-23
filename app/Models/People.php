<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    public function getByID(int $peopleID): self {
        return $this->where('id', $peopleID)->first();
    }

    protected function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    protected function setSurname(string $surname): self {
        $this->surname = $surname;
        return $this;
    }

    public function newEntity(string $name, string $surname): self
    {
        $this->setName($name);
        $this->setSurname($surname);
        $this->save();

        return $this;
    }
}
