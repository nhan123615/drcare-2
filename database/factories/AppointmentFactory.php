<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Appointment;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,     
            'service_type_id' => $this->faker->numberBetween(1,4),      
            'phone' => $this->faker->phoneNumber,
            'date' => $this->faker->date,
            'time' => $this->faker->time,
            'message' => $this->faker->text($maxNbChars = 20), 
        ];
    }
}
