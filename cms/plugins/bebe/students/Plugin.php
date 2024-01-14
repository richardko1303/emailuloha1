<?php namespace Bebe\Students;

use Backend;
use System\Classes\PluginBase;

/**
 * students Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'students',
            'description' => 'No description provided yet...',
            'author'      => 'bebe',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Bebe\Students\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'bebe.students.some_permission' => [
                'tab' => 'students',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'students' => [
                'label'       => 'students',
                'url'         => Backend::url('bebe/students/students'),
                'icon'        => 'icon-leaf',
                'permissions' => ['bebe.students.*'],
                'order'       => 500,
            ],
        ];
    }
}
