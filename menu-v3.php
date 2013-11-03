<?php

class acf_field_menu extends acf_Field
{
    /**
     * __construct.
     *
     * @param $parent
     */
    function __construct($parent)
    {
        // do not delete!
        parent::__construct($parent);

        // set name / title
        $this->name = 'menu';
        $this->title = __('Menu');
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
