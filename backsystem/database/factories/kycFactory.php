<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kyc>
 */
class kycFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           
                'business_name' => $this->faker->company(),
                'business_email' => $this->faker->unique()->companyEmail(),
                'business_province' => $this->faker->state(),
                'business_city' => $this->faker->city(),
                'business_location' => $this->faker->address(),
                'business_phone_number' => $this->faker->phoneNumber(),
                'lng'=>$this->faker->longitude($min = 27, $max = 30),
                 'lat'=>$this->faker->latitude($min = -18, $max = -14),
                 'client_id' => $this->faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt'),//randomDigit(3),
                 'opening_time' => $this->faker->time(), 
                 'closing_time' =>  $this->faker->time(),
                 'photo' => $this->faker->imageUrl($width = 400, $height = 250),
                 //php artisan tinker
                 //App\Models\kyc::factory(30)->create() 
               
        ];
    }
}
