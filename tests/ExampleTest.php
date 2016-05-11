<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class ExampleTest extends TestCase
{
    
    
    public function testnoteExample()
    {
        Note::create(['note' => 'my first note']);
         Note::create(['note' => 'second note']);
        $this->visit('notes')
        ->see('my first note')
        ->see('second note');
        }
}
