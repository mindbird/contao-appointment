<?php

$GLOBALS['TL_DCA']['tl_appointment_archive'] = [
    'config' => [
        'dataContainer' => 'Table',
        'enableVersioning' => true,
        'switchToEdit' => true
    ],
    'list' => [
        'sorting' => [
            'mode' => 1,
            'fields' => [
                'title'
            ],
            'flag' => 1,
            'panelLayout' => 'filter;search,limit'
        ],
        'label' => [
            'fields' => [
                'title'
            ],
            'format' => '%s'
        ],
        'global_operations' => [
            'all' => [
                'label' => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href' => 'act=select',
                'class' => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            ],
            'categories' => [
                'label' => &$GLOBALS['TL_LANG']['tl_appointment_archive']['categories'],
                'href' => 'table=tl_appointment_category',
                'icon' => 'categories.gif'
            ],
        ],
        'operations' => [
            'edit' => [
                'label' => &$GLOBALS['TL_LANG']['tl_appointment_archive']['edit'],
                'href' => 'table=tl_appointment',
                'icon' => 'edit.gif'
            ],
            'editHeader' => [
                'label' => &$GLOBALS['TL_LANG']['tl_appointment_archive']['editHeader'],
                'href' => 'act=edit',
                'icon' => 'header.gif'
            ],
            'copy' => [
                'label' => &$GLOBALS['TL_LANG']['tl_appointment_archive']['copy'],
                'href' => 'act=copy',
                'icon' => 'copy.gif'
            ],
            'delete' => [
                'label' => &$GLOBALS['TL_LANG']['tl_appointment_archive']['delete'],
                'href' => 'act=delete',
                'icon' => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS ['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ]
        ]
    ],

    // Palettes
    'palettes' => [
        'default' => '{title_legend},title'
    ],
    // Fields
    'fields' => [
        'id' => [],
        'tstamp' => [],
        'title' => [
            'exclude' => true,
            'search' => true,
            'inputType' => 'text',
            'eval' => [
                'mandatory' => true,
                'maxlength' => 255,
                'tl_class' => 'w50'
            ]
        ]
    ]
];
