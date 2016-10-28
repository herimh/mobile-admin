<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('videos')->insert([
            'title'         => 'The Science of Sword Fighting! (For Honor) - Game Lab',
            'url'           => 'https://www.youtube.com/watch?v=bYGMH1mTrKg',
            'Description'   => 'For the finale of Game Lab Season 1 I wanted us to go out in style…so I decided to SIEGE MY OWN CASTLE! Or at least, a castle I rented for a day. This was one of the most fun episodes to make in the entire series—I got to learn sword techniques, dress in historic armor and stab the Beard Bros. IN THE FACE! When you think about comparing these games to real life, you think about the weapons and the armor, but you DON’T think about the adrenaline, the fatigue, and the idea of complete strangers running at you with axes. It’s a lot more intense and a lot more dangerous than I ever anticipated! For the 360 video, we staged a castle defense with trained knights and Vikings that literally puts you in the middle of the battle',
        ]);

        DB::table('videos')->insert([
            'title'         => 'DON\'T GET CAUGHT! Stealthing like Metal Gear Solid - Game Lab',
            'url'           => 'https://www.youtube.com/watch?v=f1WM3uVC1yc',
            'Description'   => 'Last but definitely not least, a huge wave of gratitude to our expert Jeramiah Dinnell and everyone who
                                works with him in the military and armed forces. We were so honored to learn from you for this
                                episode and gain an even stronger appreciation for the life-saving work you do every day.'
        ]);

        DB::table('videos')->insert([
            'title'         => 'Top 8 Autos Más Avanzados Del Mundo || Coches del futuro',
            'url'           => 'https://www.youtube.com/watch?v=07jjQ_90_oI',
            'Description'   => 'En este Video Hablaremos sobre Los Carros Más Avanzados Del Mundo y también sobre algunos prototipos de carros del futuro'
        ]);

        DB::table('videos')->insert([
            'title'         => 'DON\'T GET CAUGHT! Stealthing like Metal Gear Solid - Game Lab',
            'url'           => 'https://www.youtube.com/watch?v=f1WM3uVC1yc',
            'Description'   => 'Last but definitely not least, a huge wave of gratitude to our expert Jeramiah Dinnell and everyone who
                                works with him in the military and armed forces. We were so honored to learn from you for this
                                episode and gain an even stronger appreciation for the life-saving work you do every day.'
        ]);

        DB::table('videos')->insert([
            'title'         => 'Top 8 inventos futuristas que ya existen',
            'url'           => 'https://www.youtube.com/watch?v=7Z5p-jS99VY',
            'Description'   => 'En este video te mostramos los inventos futuristas que ya existen ;)'
        ]);

        DB::table('videos')->insert([
            'title'         => 'The Science of Sword Fighting! (For Honor) - Game Lab',
            'url'           => 'https://www.youtube.com/watch?v=bYGMH1mTrKg',
            'Description'   => 'For the finale of Game Lab Season 1 I wanted us to go out in style…so I decided to SIEGE MY OWN CASTLE! Or at least, a castle I rented for a day. This was one of the most fun episodes to make in the entire series—I got to learn sword techniques, dress in historic armor and stab the Beard Bros. IN THE FACE! When you think about comparing these games to real life, you think about the weapons and the armor, but you DON’T think about the adrenaline, the fatigue, and the idea of complete strangers running at you with axes. It’s a lot more intense and a lot more dangerous than I ever anticipated! For the 360 video, we staged a castle defense with trained knights and Vikings that literally puts you in the middle of the battle',
        ]);

        DB::table('videos')->insert([
            'title'         => 'DON\'T GET CAUGHT! Stealthing like Metal Gear Solid - Game Lab',
            'url'           => 'https://www.youtube.com/watch?v=f1WM3uVC1yc',
            'Description'   => 'Last but definitely not least, a huge wave of gratitude to our expert Jeramiah Dinnell and everyone who
                                works with him in the military and armed forces. We were so honored to learn from you for this
                                episode and gain an even stronger appreciation for the life-saving work you do every day.'
        ]);

        DB::table('videos')->insert([
            'title'         => 'DON\'T GET CAUGHT! Stealthing like Metal Gear Solid - Game Lab',
            'url'           => 'https://www.youtube.com/watch?v=f1WM3uVC1yc',
            'Description'   => 'Last but definitely not least, a huge wave of gratitude to our expert Jeramiah Dinnell and everyone who
                                works with him in the military and armed forces. We were so honored to learn from you for this
                                episode and gain an even stronger appreciation for the life-saving work you do every day.'
        ]);

        DB::table('videos')->insert([
            'title'         => 'DON\'T GET CAUGHT! Stealthing like Metal Gear Solid - Game Lab',
            'url'           => 'https://www.youtube.com/watch?v=f1WM3uVC1yc',
            'Description'   => 'Last but definitely not least, a huge wave of gratitude to our expert Jeramiah Dinnell and everyone who
                                works with him in the military and armed forces. We were so honored to learn from you for this
                                episode and gain an even stronger appreciation for the life-saving work you do every day.'
        ]);
    }
}
