<?php
/**
 * View: Events Bar Search Button
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/views/v2/events-bar/search-button.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version TBD
 *
 */

/**
 * @todo: if filter bar is active, change icon
 */
?>
<button
	class="tribe-events-c-events-bar__search-button"
	aria-controls="tribe-events-search-filter-container"
	aria-expanded="false"
	aria-selected="false"
	data-js="tribe-events-accordion-trigger"
>
	<span class="tribe-events-c-events-bar__search-button-icon tribe-common-svgicon tribe-common-svgicon--search"></span>
	<span class="tribe-events-c-events-bar__search-button-text tribe-common-a11y-visual-hide">
		<?php esc_html_e( 'Search', 'the-events-calendar' ); ?>
	</span>
</button>
