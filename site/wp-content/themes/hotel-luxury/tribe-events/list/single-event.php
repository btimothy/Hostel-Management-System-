<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @version 4.6.3
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// The address string via tribe_get_venue_details will often be populated even when there's
// no address, so let's get the address string on its own for a couple of checks below.
$venue_address = tribe_get_address();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();


$time_format = get_option( 'time_format', Tribe__Date_Utils::TIMEFORMAT );
$time_range_separator = tribe_get_option( 'timeRangeSeparator', ' - ' );

$start_datetime = tribe_get_start_date();
$start_date = tribe_get_start_date( null, false, 'd' );
$start_month = tribe_get_start_date( null, false, 'M' );

?>

<!-- Event Title -->

<div class="event-single-date">
    <p class="small-event-data">
        <strong><?php echo $start_date ?></strong><a href="<?php echo esc_url( tribe_get_event_link() ); ?>"></a><span><?php echo  $start_month?></span>
    </p>
</div>


<?php do_action( 'tribe_events_before_the_event_title' ) ?>
<div class="post-heading">
    <h2 class="tribe-events-list-event-title blog-title">
        <a class="tribe-event-url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
            <?php the_title() ?>
        </a>
    </h2>
    <div class="blog-meta">
        <span class="event-time"><i class="fa fa-clock-o"></i> <?php echo tribe_events_event_schedule_details(); ?></span>
        <?php if ( tribe_get_address() ) : ?>
        <span class="event-address"><i class="fa fa-map-marker"></i><span> <?php echo tribe_get_address(); ?></span></span>
        <?php endif; ?>
	    <?php if ( tribe_get_cost() ) : ?>
            <span class="event-cost"><i class="fa fa-money"></i><span> <?php echo tribe_get_cost( null, true ) ?></span></span>
	    <?php endif; ?>
    </div>
</div>
<?php do_action( 'tribe_events_after_the_event_title' ) ?>



<!-- Event Image -->

<?php echo tribe_event_featured_image( null, 'hotel_luxury_medium' ); ?>



<!-- Event Content -->
<?php do_action( 'tribe_events_before_the_content' ); ?>
<div class="tribe-events-list-event-description tribe-events-content description entry-summary">
	<?php echo tribe_events_get_the_excerpt( null, wp_kses_allowed_html( 'post' ) ); ?>
	<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more" rel="bookmark"><?php esc_html_e( 'View Event Detail', 'hotel-luxury' ) ?> <i class="fa fa-long-arrow-right"></i></a>
</div><!-- .tribe-events-list-event-description -->
<?php
do_action( 'tribe_events_after_the_content' );