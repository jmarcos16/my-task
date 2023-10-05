<?php

use Livewire\Volt\Volt;

it('can render', function () {
    $component = Volt::test('tasks.create');

    $component->assertSee('');
});
