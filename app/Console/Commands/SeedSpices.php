<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Spice;

class SeedSpices extends Command
{
    protected $signature = 'seed:spices';
    protected $description = 'Seed the database with 20 spices';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $spices = [
            ['name' => 'Basil', 'description' => 'Aromatic herb used in cooking.'],
            ['name' => 'Cinnamon', 'description' => 'Spice obtained from the inner bark of trees.'],
            ['name' => 'Clove', 'description' => 'Spice made from the flower buds of a tree.'],
            ['name' => 'Cumin', 'description' => 'Dried seeds of the Cuminum cyminum plant.'],
            ['name' => 'Dill', 'description' => 'Herb used in pickling and cooking.'],
            ['name' => 'Garlic', 'description' => 'Bulbous plant used as a spice and for its medicinal properties.'],
            ['name' => 'Ginger', 'description' => 'Root used as a spice and for its medicinal properties.'],
            ['name' => 'Nutmeg', 'description' => 'Seed of a tree used as a spice.'],
            ['name' => 'Oregano', 'description' => 'Herb used in cooking, especially in Italian cuisine.'],
            ['name' => 'Paprika', 'description' => 'Ground spice made from red peppers.'],
            ['name' => 'Parsley', 'description' => 'Herb used as a garnish and flavoring.'],
            ['name' => 'Pepper', 'description' => 'Spice made from the dried berries of a vine.'],
            ['name' => 'Rosemary', 'description' => 'Aromatic herb used in cooking.'],
            ['name' => 'Saffron', 'description' => 'Expensive spice made from the stigmas of flowers.'],
            ['name' => 'Sage', 'description' => 'Herb used in cooking and for medicinal purposes.'],
            ['name' => 'Thyme', 'description' => 'Aromatic herb used in cooking.'],
            ['name' => 'Turmeric', 'description' => 'Root used as a spice and for its medicinal properties.'],
            ['name' => 'Vanilla', 'description' => 'Flavoring derived from orchids.'],
            ['name' => 'Anise', 'description' => 'Spice with a licorice-like flavor.'],
            ['name' => 'Cardamom', 'description' => 'Spice made from the seeds of several plants.']
        ];

        foreach ($spices as $spice) {
            Spice::create($spice);
        }

        $this->info('20 spices have been seeded to the database.');
    }
}

