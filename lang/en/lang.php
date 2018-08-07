<?php return [
    'plugin'     => [
        'name'        => 'Toolbox',
        'description' => 'Toolbox is a set of helpers for faster development for October CMS.',
    ],
    'field'      => [
        'id'                       => 'ID',
        'name'                     => 'Name',
        'title'                    => 'Title',
        'active'                   => 'Active',
        'hidden'                   => 'Hidden',
        'code'                     => 'Code',
        'slug'                     => 'URL',
        'external_id'              => 'External ID',
        'preview_text'             => 'Preview text',
        'preview_image'            => 'Preview image',
        'image'                    => 'Image',
        'images'                   => 'Images (gallery)',
        'description'              => 'Description',
        'category'                 => 'Category',
        'email'                    => 'Email',
        'phone'                    => 'Phone',
        'moderation'               => 'Moderation',
        'status'                   => 'Status',
        'city'                     => 'City',
        'address'                  => 'Address',
        'street'                   => 'Street',
        'lat'                      => 'lat',
        'lng'                      => 'lng',
        'type'                     => 'Type',
        'avatar'                   => 'Avatar',
        'property'                 => 'Property',
        'property_list_value'      => 'Available property values',
        'property_mode'            => 'Property mode',
        'property_tab'             => 'Tab name',
        'property_is_translatable' => 'Property is translatable',
        'key'                      => 'Key',
        'value'                    => 'Value',
        'date'                     => 'Date',
        'datetime'                 => 'Date and time',
        'time'                     => 'Time',
        'file'                     => 'File',
        'decimals'                 => 'Number of decimal places',
        'dec_point'                => 'Fractional part separator',
        'thousands_sep'            => 'Thousands separator',
        'dot'                      => 'Dot',
        'comma'                    => 'Comma',
        'together'                 => 'Merge',
        'space'                    => 'Space',


        'sort_order' => 'Sorting',
        'created_at' => 'Created',
        'updated_at' => 'Updated',
        'deleted_at' => 'Deleted',
        'deleted'    => 'deleted',
        'empty'      => 'Empty',
        'password'   => 'Password',

        'site_settings'             => 'Application settings',
        'site_settings_description' => 'Common settings of application',
        'queue_on'                  => 'Sending messages from the queue',
        'queue_name'                => 'The name of the queue for sending the emails',
        'email_list_description'    => 'Fill out list of emails separated by commas',
    ],
    'tab'        => [
        'preview_content' => 'Preview content',
        'full_content'    => 'Content',
        'images'          => 'Images',
        'settings'        => 'Settings',
        'description'     => 'Description',
        'properties'      => 'Properties',
        'mail'            => 'Sending emails',
        'permissions'     => 'Manage site settings',
        'prices_format'   => 'Price format',
    ],
    'component'  => [
        'property_name_error_404' => 'View 404 page',
        'property_slug'           => 'Slug',
        'property_slug_required'  => 'Slug is required',
        'pagination'              => 'Pagination',
        'pagination_desc'         => 'Render button of pagination',

        'property_redirect_page' => 'Redirect page',
        'property_redirect_on'   => 'Redirect ON',
        'property_flash_on'      => 'Flash ON',
        'property_mode'          => 'Component mode',
        'mode_submit'            => 'Form submit',
        'mode_ajax'              => 'Ajax',
    ],
    'message'    => [
        'create_success'        => 'Create :name was successfully',
        'update_success'        => 'Update :name was successfully',
        'delete_success'        => 'Delete :name was successfully',
        'restore_confirm'       => 'Do you want to restore selected items?',
        'restore_success'       => 'Restore elements was successfully',
        'e_not_correct_request' => 'Request is not correct',
    ],
    'settings'   => [
        'count_per_page'          => 'Count elements per page',
        'number_validation'       => 'You must enter the number',
        'pagination_limit'        => 'Max count buttons',
        'active_class'            => 'Class for active button',
        'button_list'             => 'Button list',
        'button_list_description' => 'main,first,first-more,prev,prev-more,next,next-more,last,last-more',
        'button_name'             => 'Button name',
        'button_limit'            => 'Show button after page',
        'button_number'           => 'Show number button name',
        'button_class'            => 'CSS class',
        'last_button'             => '"Last" button',
        'last-more_button'        => '"More" (before "Last")',
        'next_button'             => '"Next" button',
        'next-more_button'        => '"More" (before "Next")',
        'prev_button'             => '"Prev" button',
        'prev-more_button'        => '"More" (after "Prev")',
        'first_button'            => '"First" button',
        'first-more_button'       => '"More" (after "First")',
        'main_button'             => '"Main" button',
    ],
    'button'     => [
        'add_property_value' => 'Add property value',
    ],
    'type'       => [
        'input'       => 'Text field (input)',
        'textarea'    => 'Text field (textarea)',
        'checkbox'    => 'Checkbox list (checkbox)',
        'select'      => 'Select',
        'date'        => 'Date picker (datetime)',
        'colorpicker' => 'Color picker (colorpicker)',
        'mediafinder' => 'File',
    ],
    'permission' => [
        'settings' => 'Manage settings',
    ],
];