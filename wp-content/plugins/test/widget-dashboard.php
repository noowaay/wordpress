<?php
class Test_Widget_Dashboard extends WP_Widget {
	
	public function __construct(){
		add_action('wp_dashboard_setup', array($this, 'widget'));
	}
	
	public function widget(){
		wp_add_dashboard_widget('test_widget_dashboard', 'My Widget', array($this, 'display'));
	}
	
	public function display(){
		echo '<p>Ðây là Widget Dashboard</p>';
	}
	

}