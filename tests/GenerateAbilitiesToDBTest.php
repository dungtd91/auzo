<?php

use Kordy\Auzo\Services\GenerateAbilitiesToDB;

class GenerateAbilitiesToDBTest extends AuzoTestCase
{
    private $expected_saved_generated_abilities = [
        [
            'name' => 'ability.index',
            'tag'  => 'ability',
        ],

        [
            'name' => 'ability.create',
            'tag'  => 'ability',
        ],

        [
            'name' => 'ability.store',
            'tag'  => 'ability',
        ],

        [
            'name' => 'ability.show',
            'tag'  => 'ability',
        ],

        [
            'name' => 'ability.edit',
            'tag'  => 'ability',
        ],

        [
            'name' => 'ability.update',
            'tag'  => 'ability',
        ],

        [
            'name' => 'ability.destroy',
            'tag'  => 'ability',
        ],

        [
            'name' => 'ability.index.id',
            'tag'  => 'ability.index',
        ],

        [
            'name' => 'ability.create.id',
            'tag'  => 'ability.create',
        ],

        [
            'name' => 'ability.store.id',
            'tag'  => 'ability.store',
        ],

        [
            'name' => 'ability.show.id',
            'tag'  => 'ability.show',
        ],

        [
            'name' => 'ability.edit.id',
            'tag'  => 'ability.edit',
        ],

        [
            'name' => 'ability.update.id',
            'tag'  => 'ability.update',
        ],

        [
            'name' => 'ability.destroy.id',
            'tag'  => 'ability.destroy',
        ],

        [
            'name' => 'ability.index.name',
            'tag'  => 'ability.index',
        ],

        [
            'name' => 'ability.create.name',
            'tag'  => 'ability.create',
        ],

        [
            'name' => 'ability.store.name',
            'tag'  => 'ability.store',
        ],

        [
            'name' => 'ability.show.name',
            'tag'  => 'ability.show',
        ],

        [
            'name' => 'ability.edit.name',
            'tag'  => 'ability.edit',
        ],

        [
            'name' => 'ability.update.name',
            'tag'  => 'ability.update',
        ],

        [
            'name' => 'ability.destroy.name',
            'tag'  => 'ability.destroy',
        ],

        [
            'name' => 'ability.index.label',
            'tag'  => 'ability.index',
        ],

        [
            'name' => 'ability.create.label',
            'tag'  => 'ability.create',
        ],

        [
            'name' => 'ability.store.label',
            'tag'  => 'ability.store',
        ],

        [
            'name' => 'ability.show.label',
            'tag'  => 'ability.show',
        ],

        [
            'name' => 'ability.edit.label',
            'tag'  => 'ability.edit',
        ],

        [
            'name' => 'ability.update.label',
            'tag'  => 'ability.update',
        ],

        [
            'name' => 'ability.destroy.label',
            'tag'  => 'ability.destroy',
        ],

        [
            'name' => 'ability.index.tag',
            'tag'  => 'ability.index',
        ],

        [
            'name' => 'ability.create.tag',
            'tag'  => 'ability.create',
        ],

        [
            'name' => 'ability.store.tag',
            'tag'  => 'ability.store',
        ],

        [
            'name' => 'ability.show.tag',
            'tag'  => 'ability.show',
        ],

        [
            'name' => 'ability.edit.tag',
            'tag'  => 'ability.edit',
        ],

        [
            'name' => 'ability.update.tag',
            'tag'  => 'ability.update',
        ],

        [
            'name' => 'ability.destroy.tag',
            'tag'  => 'ability.destroy',
        ],

    ];

    public function test_use_auzo_tools_scan_model_add_generated_abilities_to_database()
    {
        $ability_model = app('AuzoAbility');

        $generator = new GenerateAbilitiesToDB();

        $generator->fullCrudAbilities($ability_model)->saveToDB();

        $saved_abilities = AuzoAbility::all(['name', 'tag'])->toArray();

        $this->assertEquals($this->expected_saved_generated_abilities, $saved_abilities);
    }
}
