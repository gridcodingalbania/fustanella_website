<?php

namespace App;

if (!class_exists('WP_List_Table')) {
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}

class AdminApplicationTable extends \WP_List_Table
{

    public function __construct()
    {
        global $status, $page;

        parent::__construct(array(
            'singular' => 'subscription',
            'plural'   => 'subscriptions',
            'ajax'     => false
        ));
    }

    public function column_default($item, $column_name)
    {
        switch ($column_name) {
            case 'full_name':
                return $item[$column_name];
            case 'phone':
                return $item[$column_name];
            case 'position':
                return $item[$column_name];
            case 'file_name':
                return '<a href=' . $item[$column_name] . ' download>' . $item['full_name'] . '</a>';
            default:
                return false;
        }
    }

    public function column_cb($item)
    {
        return sprintf(
            '<input type="checkbox" name="%1$s[]" value="%2$s" />',
            $this->_args['singular'],
            $item['ID']
        );
    }

    public function get_columns()
    {
        $columns = array(
            'cb' => '<input type="checkbox" />',
            'full_name' => __('Full Name', 'app'),
            'phone' => __('Phone', 'app'),
            'position' => __('Position', 'app'),
            'file_name' => __('CV', 'app')
        );

        return $columns;
    }

    public function get_sortable_columns()
    {
        $sortable_columns = array(
            // 'full_name' => array('full_name', false),
            // 'phone' => array('phone', false),
            // 'position' => array('position', false),
            // 'file_name' => array('file_name', false)
        );

        return $sortable_columns;
    }

    public function get_bulk_actions()
    {
        $actions = array(
            'delete' => __('Delete', 'app'),
            #'export' => __('Export CSV', 'app'),
        );

        return $actions;
    }

    public function process_bulk_action()
    {
        global $wpdb;
        $table_name = 'application';
        $email_list = @$_GET['application'];

        // delete email
        if ('delete' === $this->current_action()) {
            if (is_array($email_list)) {
                foreach ($email_list as $contact) {
                    $wpdb->delete($table_name, array('id' => $contact));
                }
            }
        }

        # Export contact list
        // if ('export' === $this->current_action() ) {
        //     if (isset($_GET['application'])) {
        //         $i = 0;
        //         $email_list = $_GET['application'];
        //         foreach ($email_list as $contact) {
        //             $row = $wpdb->get_results(
        //                 sprintf(
        //                     'select `first_name`,`last_name`, `email`, `status`, `ip_address`, `u_agent`, `created_at`, `updated_at` from `%s` where ID = %s',
        //                     $table_name,
        //                     $contact
        //                 ),
        //                 OBJECT
        //             );

        //             $list[$i]['first_name'] = $row[0]->first_name;
        //             $list[$i]['last_name'] = $row[0]->last_name;
        //             $list[$i]['email'] = $row[0]->email;
        //             $list[$i]['status'] = $row[0]->status;
        //             $list[$i]['ip_address'] = $row[0]->ip_address;
        //             $list[$i]['u_agent'] = $row[0]->u_agent;
        //             $list[$i]['created_at'] = $row[0]->created_at;
        //             $list[$i]['updated_at'] = $row[0]->updated_at;
        //             $i++;
        //         }
        //     } else {
        //         $list = $wpdb->get_results(
        //             sprintf(
        //                 'select `first_name`, `last_name`, `email`, `status`, `ip_address`, `u_agent`, `created_at`, `updated_at` from `%s`',
        //                 $table_name
        //             ),
        //             ARRAY_A
        //         );
        //     }

        //     if (!empty($list)) {
        //         $filename = 'subscriptions_';
        //         $heading = [
        //             __('First Name', 'app'),
        //             __('Last Name', 'app'),
        //             __('Email', 'app'),
        //             __('Status', 'app'),
        //             __('Ip Address', 'app'),
        //             __('User Agent', 'app'),
        //             __('Created At', 'app'),
        //             __('Updated At', 'app')
        //         ];
        //         $i = 0;
        //         $file_extension = '.csv';
        //         $upload_dir = wp_upload_dir();
        //         $csv_file = $upload_dir['basedir'] .'/export/'.  $filename . date('Y_m_d_') . time() . $file_extension;
        //         $csv_download_link = $upload_dir['baseurl'] . '/export/' . $filename . date('Y_m_d_') . time() . $file_extension;
        //         $f = fopen('php://memory', 'r+');
        //         fputcsv($f, $heading);
        //         foreach($list as $row){
        //             fputcsv($f, $row);
        //             $i++;
        //         }
        //         rewind($f);
        //         $data = stream_get_contents($f);
        //         file_put_contents($csv_file, $data);               
        //         printf(
        //             '<a href="%s" class="button" download style="margin-top: 50px;">Download CSV File</a>',
        //             $csv_download_link
        //         );
        //     }
        // }
    }


    public function get_table_data()
    {
        global $wpdb;

        $table_name = 'application';
        $main_query = sprintf('select * from ', $table_name);


        return $wpdb->get_results(
            "SELECT * from {$table_name}",
            ARRAY_A
        );
    }

    public function prepare_items()
    {
        global $wpdb;
        $per_page = 50;

        $table_name = 'application';
        $hidden = array();

        $columns = $this->get_columns();
        $sortable = $this->get_sortable_columns();


        // $search_term = (!empty($_REQUEST['s'])) ? trim($_REQUEST['s']) : false;
        // $orderby = (!empty($_REQUEST['orderby'])) ? $_REQUEST['orderby'] : 'ID';
        // $order = (!empty($_REQUEST['order'])) ? $_REQUEST['order'] : 'asc';

        $this->_column_headers = array($columns, $hidden, $sortable);

        $table_data = $this->get_table_data();
        $this->items = $table_data;
        // $total_items = $table_data;
        // dump($total_items);die;
        $this->process_bulk_action();

        // $total_coupons = $wpdb->get_results(sprintf('select * from', $table_name));
        // dump($total_coupons);die;

        // Get current page
        // $current_page = $this->get_pagenum();
        // $total_items = @$total_coupons[0]->cnt;

        // // Set query
        // $main_query = sprintf('select * from ', $table_name);

        // $main_query .= sprintf(
        //     ' order by %s %s limit %s,%s',
        //     $orderby,
        //     $order,
        //     (($current_page - 1) * $per_page),
        //     $per_page
        // );

        // Load items
        // $items = $wpdb->get_results($main_query);
        // foreach ($items as $item) {
        //     $item->full_name;
        // }

        // // Set paginations args
        $this->set_pagination_args(array(
            'total_items' => $total_items,
            'per_page' => $per_page,
            'total_pages' => ceil($total_items / $per_page)
        ));
    }
}
