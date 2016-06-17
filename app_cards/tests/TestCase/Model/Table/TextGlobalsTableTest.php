<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TextGlobalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TextGlobalsTable Test Case
 */
class TextGlobalsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TextGlobalsTable
     */
    public $TextGlobals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.text_globals',
        'app.cards',
        'app.dies',
        'app.sets',
        'app.images',
        'app.affiliations',
        'app.globals',
        'app.comments',
        'app.users',
        'app.inventories',
        'app.teams',
        'app.team_cards'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TextGlobals') ? [] : ['className' => 'App\Model\Table\TextGlobalsTable'];
        $this->TextGlobals = TableRegistry::get('TextGlobals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TextGlobals);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
