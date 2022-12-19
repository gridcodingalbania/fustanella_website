<?php

namespace App;

if (!class_exists('WP_List_Table')) {
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}

class AdminBookingTable extends \WP_List_Table
{

    public function __construct()
    {
        global $status, $page;

        parent::__construct(array(
            'singular' => 'booking',
            'plural'   => 'bookings',
            'ajax'     => false
        ));
    }

    public function column_default($item, $column_name)
    {
        switch ($column_name) {
            case 'name':
                return $item[$column_name];
            case 'surname':
                return $item[$column_name];
            case 'phone_number':
                return $item[$column_name];
            case 'date':
                return $item[$column_name];
            case 'time':
                return $item[$column_name];
            case 'number_of_persons':
                return $item[$column_name];
            default:
                return false;
        }
    }

    public function column_cb($item)
    {
        return sprintf(
            $this->_args['singular'],
            $item['ID']
        );
    }

    public function get_columns()
    {
        $columns = array(
            'name' => __('Name', 'app'),
            'surname' => __('Surname', 'app'),
            'phone_number' => __('Phone No.', 'app'),
            'date' => __('Date', 'app'),
            'time' => __('Time', 'app'),
            'number_of_persons' => __('No. Of Persons', 'app')
        );

        return $columns;
    }


    public function get_table_data()
    {
        global $wpdb;

        $table_name = 'booking';


        return $wpdb->get_results(
            "SELECT * from {$table_name}",
            ARRAY_A
        );
    }

    public function prepare_items()
    {
        global $wpdb;
        $per_page = 50;

        $hidden = array();

        $columns = $this->get_columns();

        $this->_column_headers = array($columns, $hidden);

        $table_data = $this->get_table_data();
        $this->items = $table_data;

        // // Set paginations args
        $this->set_pagination_args(array(
            'total_items' => $total_items,
            'per_page' => $per_page,
            'total_pages' => ceil($total_items / $per_page)
        ));
    }
}
