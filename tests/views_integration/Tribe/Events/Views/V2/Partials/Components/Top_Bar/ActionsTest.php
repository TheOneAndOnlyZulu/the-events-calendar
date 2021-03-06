<?php

namespace Tribe\Events\Views\V2\Partials\Components\Top_Bar;

use Tribe\Test\Products\WPBrowser\Views\V2\HtmlPartialTestCase;

class ActionsTest extends HtmlPartialTestCase
{

	protected $partial_path = 'components/top-bar/actions';

	/**
	 * Test render
	 */
	public function test_render() {
		$this->assertMatchesSnapshot( $this->get_partial_html() );
	}
}
