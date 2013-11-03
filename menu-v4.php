<?php

class acf_field_menu extends acf_field
{
    /**
    *  __construct
    *
    *  Set name / label needed for actions / filters
    *
    *  @since	3.6
    *  @date	23/01/13
    */
    function __construct()
    {
        // vars
        $this->name = 'menu';
        $this->label = __('Menu');
        $this->category = __("Basic", 'acf'); // Basic, Content, Choice, etc

        // do not delete!
        parent::__construct();
    }

    /**
     * create_field
     *
     * @param $field
     */
    function create_field($field)
    {
		echo '<select id="' . $field['name'] . '" name="' . $field['name'] . '">';
		echo '<option>' . __('Nessuno') . '</option>';

		foreach ( get_nav_menu_locations() as $location => $menu_id )
		{
			$menu = wp_get_nav_menu_object($menu_id);
			echo '<option value="' . $location . ( $location == $field['value'] ? '" selected="selected">' : '">' ) . $menu->name . '</option>';
		}

		echo '</select>';
    }
}

// create field
new acf_field_menu();
