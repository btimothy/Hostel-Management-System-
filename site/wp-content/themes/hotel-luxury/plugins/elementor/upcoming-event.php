<?php
namespace HotelElements\Widgets;

use  Elementor\Widget_Base ;
use  Elementor\Controls_Manager ;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Hotel_Luxury_Elements_Upcoming_Events extends Widget_Base {

	public function get_name() {
		return 'hotel-luxury-upcoming-event';
	}

	public function get_title() {
		return __( 'Upcoming Events', 'hotel-luxury' );
	}

	public function get_icon() {
		// Icon name from the Elementor font file, as per http://dtbaker.net/web-development/creating-your-own-custom-elementor-widgets/
		return 'fa fa-calendar';
	}

	public function get_categories() {
		return [ 'hotel-elements' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => esc_html__( 'Upcoming Events', 'hotel-luxury' ),
			]
		);

		$this->add_control(
			'event_title',
			[
				'label' => __( 'Title', 'hotel-luxury' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Upcoming Events', 'hotel-luxury' )
			]
		);

		$this->add_control(
			'number_posts',
			[
				'label' => __( 'Number of event to show', 'hotel-luxury' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '3'
			]
		);

		$this->add_control(
			'more_text',
			[
				'label' => __( 'Custom more text', 'hotel-luxury' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'View All', 'hotel-luxury' )
			]
		);

		$this->end_controls_section();
	}


	protected function render( $instance = [] ) {
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		global $post;
		$settings = $this->get_settings();
		$args = array(
			'posts_per_page' => $settings['number_posts'],
			'eventDisplay' => 'list'
		);

		if ( is_plugin_active( 'the-events-calendar/the-events-calendar.php' ) ) {
			$events = tribe_get_events( $args );
			?>

			<div class="builder-item-wrapper builder-rooms ">

				<div class="builder-item-wrapper builder-editor">
					<div class="builder-title-wrapper clearfix">
						<h3 class="builder-item-title"><?php echo ! empty( $settings['event_title'] ) ? esc_attr( $settings['event_title'] ) : esc_html__( 'Upcoming Events', 'hotel-luxury' ) ?></h3>
						<a class="view-all" href="<?php echo esc_url( tribe_get_events_link() ); ?>"> <?php echo esc_attr( $settings['more_text'] ) ?> </a>
					</div>
					<div class="builder-item-content row">
						<div class="col-md-12">
							<ul class="upcoming-events">
								<?php
								if ( $events ) :
									foreach ( $events as $post ) {
										setup_postdata( $post );
										$start_date = tribe_get_start_date( $post, false, 'd' );
										$start_month = tribe_get_start_date( $post, false, 'M' );
									?>
									<li>
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
									}
								else : ?>
									<p><?php printf( esc_html__( 'There are no upcoming at this time.', 'hotel-luxury' ) ); ?></p>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<?php
		} else {
			echo esc_html__('You need to active The Events Calendar plugin to use this widget.','hotel-luxury' );
		}
	}

	protected function _content_template() {}
}

