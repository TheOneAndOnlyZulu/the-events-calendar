<?php

namespace Tribe\Events\Views\V2\Partials\Components;

use tad\FunctionMocker\FunctionMocker as Test;
use Tribe\Events\Views\V2\View;
use Tribe\Events\Views\V2\Views\Day_View;
use Tribe\Events\Views\V2\Views\List_View;
use Tribe\Events\Views\V2\Views\Month_View;
use Tribe\Test\Products\WPBrowser\Views\V2\HtmlPartialTestCase;

class Events_BarTest extends HtmlPartialTestCase
{

	protected $partial_path = 'components/events-bar';

	public function setUp() {
		parent::setUp();
		// Start Function Mocker.
		Test::setUp();
		// Always return the same value when creating nonces.
		Test::replace( 'wp_create_nonce', '2ab7cc6b39' );
	}

	/**
	 * Test render with views
	 */
	public function test_render_with_views() {
		$views = [
			'list'  => List_View::class,
			'month' => Month_View::class,
			'day'   => Day_View::class,
		];
		$view  = View::make( List_View::class );

		$this->assertMatchesSnapshot( $this->get_partial_html( [
			'url'                  => 'http://test.tri.be',
			'views'                => $views,
			'view'                 => $view,
			'display_events_bar'   => true,
			'disable_event_search' => false,
		] ) );
	}

	/**
	 * Test render with views disabled event search
	 */
	public function test_render_with_views_disabled_event_search() {
		$views = [
			'list'  => List_View::class,
			'month' => Month_View::class,
			'day'   => Day_View::class,
		];
		$view  = View::make( List_View::class );

		$this->assertMatchesSnapshot( $this->get_partial_html( [
			'url'                  => 'http://test.tri.be',
			'views'                => $views,
			'view'                 => $view,
			'display_events_bar'   => true,
			'disable_event_search' => true,
		] ) );
	}

	/**
	 * Test render empty
	 */
	public function test_render_empty() {

		$this->assertMatchesSnapshot( $this->get_partial_html( [
			'display_events_bar' => false,
		] ) );
	}

	public function tearDown(){
		Test::tearDown();
		parent::tearDown();
	}
}
