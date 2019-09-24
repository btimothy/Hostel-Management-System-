<?php
namespace HotelElements\Widgets;
use  Elementor\Widget_Base ;
use  Elementor\Controls_Manager ;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
class Hotel_Luxury_Elements_Rooms extends Widget_Base {
	public function get_name() {
		return 'hotel-luxury-rooms';
	}
	public function get_title() {
		return __( 'Rooms', 'hotel-luxury' );
	}
	public function get_icon() {
		// Icon name from the Elementor font file, as per http://dtbaker.net/web-development/creating-your-own-custom-elementor-widgets/
		return 'fa fa-hotel';
	}
	public function get_categories() {
		return [ 'hotel-elements' ];
	}
	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => esc_html__( 'Rooms', 'hotel-luxury' ),
			]
		);
		$this->add_control(
			'room_title',
			[
				'label' => __( 'Title', 'hotel-luxury' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Rooms', 'hotel-luxury' )
			]
		);
		$this->add_control(
			'number_posts',
			[
				'label' => __( 'Number of rooms to show', 'hotel-luxury' ),
				'type' => Controls_Manager::NUMBER,
				'default' => ''
			]
		);
		$this->add_control(
			'room_category',
			[
				'label' => __( 'Select Room Category', 'hotel-luxury' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => hotel_luxury_get_taxonomy('category')
			]
		);
		$this->add_control(
			'order',
			[
				'label' => __( 'Order', 'hotel-luxury' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'desc',
				'options' => [
					'asc' => __( 'ASC', 'hotel-luxury' ),
					'desc' => __( 'DESC', 'hotel-luxury' )
				]
			]
		);
		$this->add_control(
			'orderby',
			[
				'label' => __( 'Orderby', 'hotel-luxury' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'title',
				'options' => [
					'ID' => __( 'ID', 'hotel-luxury' ),
					'title' => __( 'Title', 'hotel-luxury' ),
					'date' => __( 'Date', 'hotel-luxury' ),
					'rand' => __( 'Random', 'hotel-luxury' )
				]
			]
		);
		$this->add_control(
			'column_layout',
			[
				'label' => __( 'Column Layout', 'hotel-luxury' ),
				'type' => Controls_Manager::SELECT,
				'default' => '6',
				'options' => [
					'4' => __( '3', 'hotel-luxury' ),
					'6' => __( '2', 'hotel-luxury' )
				]
			]
		);

		$this->end_controls_section();
	}
	protected function render( $instance = [] ) {
		// get our input from the widget settings.
		global $post;
		$settings = $this->get_settings();
		$args = array(
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'posts_per_page' => $settings['number_posts'],
			'cat'            => $settings['room_category'],
			'orderby'        => $settings['orderby'],
			'order'          => $settings['order'],
		);
		$rooms = get_posts( $args );
		?>
		<div class="builder-item-wrapper builder-rooms ">
			<div class="builder-title-wrapper clearfix has_filter">
				<h3 class="builder-item-title"><?php echo !empty( $settings['room_title'] ) ? esc_attr( $settings['room_title'] ) : esc_html__('Rooms', 'hotel-luxury') ?></h3>

			</div>
			<!-- room layout -->
			<?php
			if ( $rooms ) {
				echo  '<div class="room-items row clearfix">';
				foreach ( $rooms as $post ) {
					setup_postdata( $post );
					?>
						<div class="mix col-md-<?php echo $settings['column_layout'] ; ?> column">
                            <div class="hover">
                                <?php the_post_thumbnail('hotel_luxury_medium') ; ?>

                                <div class="overlay">                                    
                                    <a href="<?php the_permalink() ?>" class="info"><span><i class="fa fa-link" ></i></span></a>
                                </div>
                            </div>                            
							<div class="cpt-detail clearfix">
								<h2 class="cpt-title">
									<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
								</h2>
								<div class="cpt-desc"><?php the_excerpt() ?></div>
							</div>
						</div>
					<?php
				}
				echo '</div>';
			}
			wp_reset_postdata();
			?>
		</div>

		<?php
	}

	protected function _content_template() {}
}