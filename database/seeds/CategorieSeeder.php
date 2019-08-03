<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
        $category->slug = md5(uniqid(time()));
        $category->business_id = 1;
        $category->name = 'Premium Services';
        $category->save();

        $category = new Category;
        $category->slug = md5(uniqid(time()));
        $category->business_id = 1;
        $category->name = 'Brisbane Family Lawyers';
        $category->save();

        $category = new Category;
        $category->slug = md5(uniqid(time()));
        $category->business_id = 1;
        $category->name = 'Super Services';
        $category->save();

        $category = new Category;
        $category->slug = md5(uniqid(time()));
        $category->business_id = 1;
        $category->name = 'Fee 15 Days';
        $category->save();

        $category = new Category;
        $category->slug = md5(uniqid(time()));
        $category->business_id = 2;
        $category->name = 'Fee 15 Days';
        $category->save();

        $category = new Category;
        $category->slug = md5(uniqid(time()));
        $category->business_id = 3;
        $category->name = 'Premium Services';
        $category->save();
    }
}
