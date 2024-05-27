<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nom' => $this->faker->name, // Generate a random name
            'Email' => $this->faker->unique()->safeEmail, // Generate a unique email
            'Telephone' => $this->faker->phoneNumber, // Generate a random phone number
            'telephone_2' => $this->faker->phoneNumber, // Generate a random  number phone
            'Societe' => $this->faker->company, // Generate a random company name
            'Adresse_Personnelle' => $this->faker->address, // Generate a random address
        ];
    }
}
