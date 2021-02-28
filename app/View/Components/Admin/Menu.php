<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Menu extends Component
{
    public array $all_menus = [
        [
            'title' => 'Dashboard',
            'icon' => 'fa-tachometer-alt',
            'url' => '/admin/dashboard',
            'badge' => '',
            'children' => [
                [
                    'title' => 'Dashboard V1',
                    'icon' => 'fa-circle',
                    'url' => '/admin/dashboard',
                ],
                [
                    'title' => 'Dashboard V1',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Dashboard V1',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ]
            ]
        ],
        [
            'title' => 'Widget',
            'icon' => 'fa-th',
            'url' => '#',
            'badge' => 'New',
            'children' => []
        ],
        [
            'title' => 'Layout Options',
            'icon' => 'fa-copy',
            'url' => '#',
            'badge' => '6',
            'children' => [
                [
                    'title' => 'Top Navigation',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Boxed',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Fixed Sidebar',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Fixed Navbar',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Fixed Footer',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Collapsed Sidebar',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
            ]
        ],
        [
            'title' => 'Charts',
            'icon' => 'fa-chart-pie',
            'url' => '#',
            'badge' => '',
            'children' => [
                [
                    'title' => 'ChartJS',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Flot',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Inline',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
            ]
        ],
        [
            'title' => 'UI Elements',
            'icon' => 'fa-tree',
            'url' => '#',
            'badge' => '',
            'children' => [
                [
                    'title' => 'General',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Icons',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Buttons',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Sliders',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Modals & Alerts',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Navbar & Tabs',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Timeline',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Ribbons',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
            ]
        ],
        [
            'title' => 'Forms',
            'icon' => 'fa-edit',
            'url' => '#',
            'badge' => '',
            'children' => [
                [
                    'title' => 'General Elements',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Advanced Elements',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'Editors',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
            ]
        ],
        [
            'title' => 'Tables',
            'icon' => 'fa-table',
            'url' => '/admin/dashboard/table',
            'badge' => '',
            'children' => [
                [
                    'title' => 'Simple Tables',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
                [
                    'title' => 'DataTables',
                    'icon' => 'fa-circle',
                    'url' => '/admin/dashboard/table',
                ],
                [
                    'title' => 'jsGrid',
                    'icon' => 'fa-circle',
                    'url' => '#',
                ],
            ]
        ]
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.admin.menu');
    }
}
