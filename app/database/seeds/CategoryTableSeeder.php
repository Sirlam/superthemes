<?php
class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(array(
            'name' => 'Blogger Themes',
        ));
        Category::create(array(
            'name' => 'Bootstrap Themes',
        ));
        Category::create(array(
            'name' => 'Drupal Themes',
        ));
        Category::create(array(
            'name' => 'Joomla Themes',
        ));
        Category::create(array(
            'name' => 'Wordpress Themes',
        ));
    }
}