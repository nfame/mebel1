<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\Catalog::factory()->create([
            'title' => 'Шкаф',
            'alias' => 'shakaf'
        ]);
        \App\Models\Catalog::factory()->create([
            'title' => 'Cтолы для кухни',
            'alias' => 'kitchen-table'
        ]);
        \App\Models\Catalog::factory()->create([
            'title' => 'Тумбы',
            'alias' => 'tumba'
        ]);
        \App\Models\Catalog::factory()->create([
            'title' => 'Мебель для кухни',
            'alias' => 'kitchen-mebel'
        ]);
        \App\Models\Catalog::factory()->create([
            'title' => 'Комоды',
            'alias' => 'comods'
        ]);
        \App\Models\Catalog::factory()->create([
            'title' => 'Столы компьютерные',
            'alias' => 'table-pc'
        ]);
        \App\Models\Catalog::factory()->create([
            'title' => 'Мебель для спальни',
            'alias' => 'bedroom-mebel'
        ]);
        \App\Models\Catalog::factory()->create([
            'title' => 'Настенные полки',
            'alias' => 'wall-shelf'
        ]);

        \App\Models\Item::factory()->create([
            'title' => 'квадратный выезжающие дверцы',
            'alias' => 'comods',
            'article' => '343423424',
            'desc' => 'комод с выезжающими дверцами с мягкими подшипниками обеспечивает легкость выкатывания и удобного хранения',
            'size' => 'от 1х1х1',
            'color' => 'серый, черный',
            'material' => 'дуб',
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'прямоугольный открывающиеся дверцы',
            'alias' => 'comods',
            'article' => '343423424',
            'desc' => 'комод с открывающими дверцами обеспечивает доступность вертикального хранения',
            'size' => 'от 1х1х1',
            'color' => 'серый, черный',
            'material' => 'дуб'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'комод с разными ящиками',
            'alias' => 'comods',
            'article' => '343423424',
            'desc' => 'комод с разными типами дверц обеспечивает гибкость хранения',
            'size' => 'от 1х1х1',
            'color' => 'серый, черный',
            'material' => 'дуб'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'раскладной',
            'alias' => 'kitchen-table',
            'article' => '343423424',
            'desc' => 'кухонный стол раскладной позволит сэкономить пространства',
            'size' => 'от 1х1х1',
            'color' => 'белый, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'раздвижной',
            'alias' => 'kitchen-table',
            'article' => '343423424',
            'desc' => 'кухонный стол в раздвижном варианте',
            'size' => 'от 1х1х1',
            'color' => 'серый, черный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'стол с ящиком',
            'alias' => 'kitchen-table',
            'article' => '343423424',
            'desc' => 'кухонный стол обычный без заморочек',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'купе',
            'alias' => 'shkaf',
            'article' => '1003143',
            'desc' => 'шкаф купе с раздвижными дверцами',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп, стекло'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'распашные двери',
            'alias' => 'shkaf',
            'article' => '1003144',
            'desc' => 'шкаф из детства',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'комбинированный',
            'alias' => 'shkaf',
            'article' => '1003145',
            'desc' => 'симбиоз шкафа и комода',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'с 4 ящиками и зеркалом',
            'alias' => 'tumba',
            'article' => '1113533',
            'desc' => 'для запасливых домохозяек',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'прямоугольная низкая',
            'alias' => 'tumba',
            'article' => '1113535',
            'desc' => 'вдруг кому то нужно под кровать',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'бизнес',
            'alias' => 'computer-table',
            'article' => '1118801',
            'desc' => 'широкий и большой',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'детский',
            'alias' => 'computer-table',
            'article' => '1118802',
            'desc' => 'чтоб чадо радо было',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'простой',
            'alias' => 'computer-table',
            'article' => '1118803',
            'desc' => 'без заморочек поставил и засел',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'набор стол+стулья',
            'alias' => 'kitchen-mebel',
            'article' => '1119999',
            'desc' => 'комплект дополняет экспозицию',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'стулья кухонные',
            'alias' => 'kitchen-mebel',
            'article' => '1119988',
            'desc' => 'простенько и крепко',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'барная стойка',
            'alias' => 'kitchen-mebel',
            'article' => '1119977',
            'desc' => 'удобно на самом деле',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'каркасная кровать',
            'alias' => 'bedroom-mebel',
            'article' => '1117766',
            'desc' => 'крепкая и надежная каркасная кровать под ваш матрас',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'кровать с подъемным механизмом',
            'alias' => 'bedroom-mebel',
            'article' => '1117765',
            'desc' => 'когда то повыше когда то пониже',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'тахта угловая',
            'alias' => 'bedroom-mebel',
            'article' => '1117764',
            'desc' => 'для уютных вечеров',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'квадратная',
            'alias' => 'wall-shelf',
            'article' => '1115501',
            'desc' => 'для маленьких книголюбов',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => 'прямоугольная',
            'alias' => 'wall-shelf',
            'article' => '1115502',
            'desc' => 'для книголюбов побольше',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => '2х ярусная',
            'alias' => 'wall-shelf',
            'article' => '1115503',
            'desc' => 'для преданных делу',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
        \App\Models\Item::factory()->create([
            'title' => '2 ящика перекатная',
            'alias' => 'tumba',
            'article' => '1113534',
            'desc' => 'мобильная тумба для непостоянных личностей',
            'size' => 'от 1х1х1',
            'color' => 'голубой, красный',
            'material' => 'дуб, мдф, лдсп'
        ]);
    }
}
