<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // ** Important look at the following NOTES **
            /*we write the as the following lines to fill the columns of the table in database by a vlues just for test our
            website, server and hosting
            **faker: is PHP library it fills automatically the columns of the table in database
            $this: is a global vairiable in factory file
            ** We move on after that to the seeder file
            ** this command create factory file: "php artisan make:factory 'the factory file name......' "
            ** go to the seeder Now
            */
            'name'=>$this->faker->sentence(),
            'title'=>$this->faker->paragraph(),
            'image'=>$this->faker->imageurl()
        ];
    }
}
