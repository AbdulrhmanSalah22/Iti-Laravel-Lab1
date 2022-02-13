<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cat_id = DB::table('categories')->pluck('id');
        return [
            'name'=> $this->faker-> name(),
            'details' => $this->faker->paragraph(50),
            'is_used' => $this->faker->boolean(),
            'cat_id' => $this->faker ->randomElement($cat_id)
        ];
    }
}
