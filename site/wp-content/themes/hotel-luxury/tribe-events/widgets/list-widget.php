<?php
/**
 * Events List Widget Template
 * This is the template for the output of the events list widget.
 * All the items are turned on and off through the widget admin.
 * There is currently no default styling, which is needed.
 *
 * This view contains the filters required to create an effective events list widget view.
 *
 * You can recreate an ENTIRELY new events list widget view by doing a template override,
 * and placing a list-widget.php file in a tribe-events/widgets/ directory
 * within your theme directory, which will override the /views/widgets/list-widget.php.
 *
 * You can use any or all filters included in this file or create your own filters in
 * your functions.php. In order to modify or extend a single filter, please see our
 * readme on templates hooks and filters (TO-DO)
 *
 * @version 4.5.13
 * @return string
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_plural = tribe_get_event_label_plural();
$events_label_plural_lowercase = tribe_get_event_label_plural_lowercase();

$posts = tribe_get_list_widget_events();

// Check if any event posts are found.
if ( $posts ) : ?>

	<ol class="tribe-list-widget upcoming-events">
		<?php
		// Setup the post data for each event.
		foreach ( $posts as $post ) :
			setup_postdata( $post );
			$start_date = tribe_get_start_date( $post, false, 'd' );
			$start_month = tribe_get_start_date( $post, false, 'M' );
			?>
			<li class="<?php tribe_events_event_classes() ?>">
				<?php
				if (
					tribe( 'tec.featured_events' )->is_featured( get_the_ID() )
					&& get_post_thumbnail_id( $post )
				) {
					/**
					 * Fire an action before the list widget featured image
					 */
					do_action( 'tribe_events_list_widget_before_the_event_image' );

					/**
					 * Allow the default post thumbnail size to be filtered
					 *
					 * @param $size
					 */
					$thumbnail_size = apply_filters( 'tribe_events_list_widget_thumbnail_size', 'post-thumbnail' );

					/**
					 * Filters whether the featured image link should be added to the Events List Widget
					 *
					 * @since 4.5.13
					 *
					 * @param bool $featured_image_link Whether the featured image link should be added or not
					 */
					$featured_image_link = apply_filters( 'tribe_events_list_widget_featured_image_link', true );
					$post_thumbnail      = get_the_post_thumbnail( null, $thumbnail_size );

					if ( $featured_image_link ) {
						$post_thumbnail = '<a href="' . esc_url( tribe_get_event_link() ) . '">' . $post_thumbnail . '</a>';
					}
					?>
					<div class="tribe-event-image">
						<?php
						// not escaped because it contains markup
						echo $post_thumbnail;
						?>
					</div>
					<?php

					/**
					 * Fire an action after the list widget featured image
					 */
					do_action( 'tribe_events_list_widget_after_the_event_image' );
				}
				?>

				<?php do_action( 'tribe_events_list_widget_before_the_event_title' ); ?>
                <p class="small-event-data">
                    <strong><?php echo $start_date ?></strong><a href="<?php the_permalink() ?>"></a><span><?php echo $start_month ?></span>
                </p>
                <a class="event-title" href="<?php the_permalink() ?>"><?php the_title() ?></a>
				<?php if ( tribe_get_start_date($post) ) : ?>
                    <span><i class="fa fa-clock-o"></i> <?php echo tribe_get_start_date( $post ); ?></span>
				<?php endif; ?>
				<?php if ( tribe_get_cost($post) ) : ?>
                    <span><strong><i class="fa fa-money"></i> <?php echo  tribe_get_cost( $post ) ?></strong></span>
				<?php endif; ?>
			</li>
			<?php
		endforeach;
		?>
	</ol><!-- .tribe-list-widget -->

	<p class="tribe-events-widget-link">
		<a href="<?php echo esc_url( tribe_get_events_link() ); ?>" rel="bookmark"><?php printf( esc_html__( 'View All %s', 'hotel-luxury' ), $events_label_plural ); ?> </a>
	</p>

	<?php
// No events were found.
else : ?>
	<p><?php printf( esc_html__( 'There are no upcoming %s at this time.', 'hotel-luxury' ), $events_label_plural_lowercase ); ?></p>
	<?php
endif;
