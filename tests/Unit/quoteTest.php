<?php

namespace Tests\Unit;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class QuoteTest extends TestCase
{
    /**
     * Prueba unitaria de la tabla quotes
     */
    public function test_quotes_table_exists(): void
    {
        $this->assertTrue(
            Schema::hasTable('quotes'),
            'La tabla quotes no existe'
        );
    }

    public function test_quotes_table_columns(): void
    {
        $expectedColumns = [
            'id',
            'number_of_revisions',
            'user_id',
            'service_id',
            'created_at',
            'updated_at',
        ];
        $actualColumns = Schema::getColumnListing('quotes');

        $this->assertEqualsCanonicalizing($expectedColumns, $actualColumns);
    }

}



