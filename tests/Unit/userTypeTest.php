<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class UserTypeTest extends TestCase
{
    /**
     * Prueba unitaria de la tabla user_types
     */
    public function test_user_types_table_exists(): void
    {
        $this->assertTrue(
            Schema::hasTable('user_types'),
            'La tabla user_types no existe'
        );
    }

    public function test_user_types_table_columns(): void
    {
        $expectedColumns = ['id', 'name', 'description', 'created_at', 'updated_at'];
        $actualColumns = Schema::getColumnListing('user_types');
    
        $this->assertEquals($expectedColumns, $actualColumns);
    }
}


