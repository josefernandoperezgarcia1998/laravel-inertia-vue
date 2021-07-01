<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Esta es la estructura de datos, lo que quiero que se cree en mi base de datos
        return [
            'excerpt' => $this->faker->text(140),
            'content' => $this->faker->text(1200)

        ];
    }
}
