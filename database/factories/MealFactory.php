<?php
namespace Database\Factories;

use App\Models\Location;
use App\Models\Meal;
use Illuminate\Database\Eloquent\Factories\Factory;

class MealFactory extends Factory
{
    protected $model = Meal::class;

    public function definition()
    {
        $burgerData = [
            'Classic Cheeseburger' => 'A timeless classic with a juicy beef patty, melted cheddar cheese, lettuce, tomato, and pickles on a sesame seed bun.',
            'Bacon BBQ Burger' => 'A delicious beef patty topped with crispy bacon, tangy BBQ sauce, and cheddar cheese, served on a toasted brioche bun.',
            'Mushroom Swiss Burger' => 'A savory beef patty with sautéed mushrooms and Swiss cheese, topped with caramelized onions on a soft potato bun.',
            'Spicy Jalapeño Burger' => 'A spicy beef patty with fresh jalapeños, pepper jack cheese, and a zesty chipotle mayo, served on a brioche bun.',
            'Veggie Delight Burger' => 'A hearty veggie patty loaded with fresh vegetables, avocado, and a light hummus spread on a multigrain bun.',
            'Ultimate Bacon Burger' => 'An indulgent burger with two beef patties, crispy bacon, onion rings, and American cheese, all topped with a special sauce.',
            'Teriyaki Chicken Burger' => 'A grilled chicken patty with a sweet teriyaki glaze, pineapple, lettuce, and mayo on a soft hamburger bun.',
            'Blue Cheese Burger' => 'A rich beef patty topped with crumbled blue cheese, caramelized onions, and a tangy balsamic glaze on a toasted bun.',
            'Chipotle Black Bean Burger' => 'A flavorful black bean patty with chipotle seasoning, topped with avocado, lettuce, and salsa on a whole wheat bun.',
            'Smoky BBQ Beef Burger' => 'A smoky beef patty with BBQ sauce, cheddar cheese, crispy onion strings, and pickles on a sesame seed bun.',
        ];

        $images = [
            '/burgers/1.avif',
            '/burgers/2.avif',
            '/burgers/3.avif',
            '/burgers/4.avif',
            '/burgers/5.avif',
        ];

        $name = $this->faker->randomElement(array_keys($burgerData));
        $image = $this->faker->randomElement($images);

        return [
            'name' => $name,
            'location_id' => Location::factory(),
            'description' => $burgerData[$name],
            'image_url' => $image,
            'meal_type' => 'burger', // Assuming 'burger' as the meal type here
        ];
    }
}
