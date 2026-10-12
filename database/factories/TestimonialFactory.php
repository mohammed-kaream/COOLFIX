<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            // مصفوفة الأسماء الحقيقية الثلاثة من تصميمك الأصلي
            'name' => $this->faker->randomElement([
                'Ahmad Al-Sayed',
                'Huda Nassar',
                'Samir Barghouti'
            ]),

            // مصفوفة العناوين والمناطق بـ غزة
            'location' => $this->faker->randomElement([
                'Rimal, Gaza',
                'Al-Nasr, Gaza',
                'Shop owner, Omar Al-Mukhtar St.'
            ]),

            // أسماء الصور الافتراضية المطابقة لأكواد الـ asset عندك
            'avatar' => $this->faker->randomElement([
                't1.png',
                't2.png',
                't3.png'
            ]),

            // نصوص التقييمات الحقيقية الثلاثة بالظبط من كودك
            'feedback' => $this->faker->randomElement([
                'My fridge stopped cooling on a Friday and COOLFIX still came out. Fixed the compressor the same evening and it\'s been running perfectly since.',
                'Clear price before they started, no hidden fees after. The technician also showed me how to keep the seals clean so it doesn\'t happen again.',
                'We use COOLFIX for all the display fridges in our store. They know commercial units well and always work around our opening hours.'
            ]),

            'stars' => 5, // كل تقييمات زبائنك 5 نجوم ما شاء الله
            'is_active' => true,
        ];
    }
}
