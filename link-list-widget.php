<?php

class Link_List_Widget extends WP_Widget {
	public function __construct(){
		parent::__construct(
			'link_list_menu',
			'List of Menu',
			array(
				'description' => __('Display menu as list'))
			);
	}

	public function form($instance){
		$title = (isset($instance['title'])) ?
			$instance['title'] : "Menu";

		$menu = $instance['menu'];

		$nav_menus = wp_get_nav_menus();
?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
				<?php _e('Title:'); ?>
			</label>
			<input class="widefat" 
				id="<?php echo $this->get_field_id('title'); ?>"
				name="<?php echo $this->get_field_name('title'); ?>"
				type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('menu');?>">
				<?php _e('Menu:'); ?>
			</label>
        	<select class="widefat" id="<?php echo $this->get_field_id('menu');?>"
				name="<?php echo $this->get_field_name('menu'); ?>"
				type="text">
				<?php foreach($nav_menus as $menu_item): ?>
					<option value="<?php echo $menu_item->term_id; ?>"
						<?php echo ($menu == $menu_item->term_id? "selected" : "");?> >
						<?php echo $menu_item->name; ?>
					</option>
				<?php endforeach; ?>
			</select>
		</p>
<?php
	}

	public function update($new_instance, $old_instace){
		$instance = array();
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['menu'] = strip_tags($new_instance['menu']);

		return $instance;
	}

	public function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$menu = $instance['menu'];

		

		$menu_items = wp_get_nav_menu_items($menu);

		$menu_list = '<dl id="menu-' . $menu_name . '">';
		
		$menu_list .= '<dt>' . $title . '</dt>';

		foreach ( (array) $menu_items as $key => $menu_item ) {
		    $title = $menu_item->title;
		    $url = $menu_item->url;
		    $menu_list .= '<dd><a href="' . $url . '">' . $title . '</a></dd>';
		}
		$menu_list .= '</dl>';

		echo $menu_list;

		echo $after_widget;
	}
}

register_widget('Link_List_Widget');

?>