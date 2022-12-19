<?php

namespace App;

if (!class_exists('WP_List_Table')) {
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}

class AdminContactTable extends \WP_List_Table
{

    public function __construct()
    {
        global $status, $page;

        parent::__construct(array(
            'singular' => 'contact',
            'plural'   => 'contacts',
            'ajax'     => false
        ));
    }

    public function column_default($item, $column_name)
    {
        switch ($column_name) {
            case 'full_name':
                return $item[$column_name];
            case 'email':
                return $item[$column_name];
            case 'message':
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
            'full_name' => __('Full Name', 'app'),
            'email' => __('Email', 'app'),
            'message' => __('Message', 'app')
        );

        return $columns;
    }

    public function get_table_data()
    {
        global $wpdb;

        $table_name = 'contact';

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
    }
}
