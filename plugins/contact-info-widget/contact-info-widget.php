<?php
/**
 * RED WordPress Widget Boilerplate
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Contact Info Widget
 * @author    Yen Yin Hing
 * @license   GPL-2.0+
 * @link      https://github.com/yenyin262/
 * @copyright 2019 Yen Yin Hing
 *
 * @wordpress-plugin
 * Plugin Name:       Contact Info Widget
 * Plugin URI:        https://github.com/yenyin262/RED-Academy-Project-4
 * Description:       Contact Info Widget area for Inhabitent Website
 * Version:           1.0.0
 * Author:            Yen Yin Hing
 * Author URI:        https://github.com/yenyin262/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

// TODO: change 'Widget_Name' to the name of your plugin
class Contact_Info extends WP_Widget {

    /**
     * @TODO - Rename "widget-name" to the name your your widget
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'contact-info';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		// TODO: update description
		parent::__construct(
			$this->get_widget_slug(),
			'Contact Info',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'Contact Info Widget.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );

		$telephone = empty( $instance['telephone'] ) ? '' : apply_filters( 'widget_title', $instance['telephone'] );
		$email = empty( $instance['email'] ) ? '' : apply_filters( 'widget_title', $instance['email'] );
		$address= empty( $instance['address'] ) ? '' : apply_filters( 'widget_title', $instance['address'] );
		// TODO: other fields go here...

		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );

		$instance['telephone'] = strip_tags( $new_instance['telephone'] );
		$instance['email'] = strip_tags( $new_instance['email'] );
		$instance['address'] = strip_tags( $new_instance['address'] );
		// TODO: Here is where you update the rest of your widget's old values with the new, incoming values

		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	public function form( $instance ) {

		// TODO: Define default values for your variables, create empty value if no default
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Contact Info',
				'telephone' => '',
				'email' => '',
				'address' => ''

			)
		);

		$title = strip_tags( $instance['title'] );

		$telephone = strip_tags( $instance['telephone'] );
		$email = strip_tags( $instance['email'] );
		$address = strip_tags( $instance['address'] );
		// TODO: Store the rest of values of the widget in their own variables

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

	} // end form

} // end class

// TODO: Remember to change 'Widget_Name' to match the class name definition
add_action( 'widgets_init', function(){
     register_widget( 'Contact_Info' );
});
