<?php

$GLOBALS['TL_DCA']['tl_appointment'] = [
    'config' => [
        'dataContainer' => 'Table',
        'enableVersioning' => true,
        'switchToEdit' => true
    ],
    'list' => [
        'sorting' => [
            'mode' => 1,
            'fields' => [
                'startDateTime'
            ],
            'flag' => 1,
            'panelLayout' => 'filter;search,limit'
        ],
        'label' => [
            'fields' => [
                'startDateTime',
                'endDateTime'
            ],
            'format' => '%s - %s'
        ],
        'global_operations' => [
            'back' => [
                'label' => &$GLOBALS['TL_LANG']['tl_appointment_archive']['back'],
                'href' => 'table=tl_appointment_archive',
                'icon' => 'back.gif'
            ],
            'all' => [
                'label' => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href' => 'act=select',
                'class' => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            ]
        ],
        'operations' => [
            'edit' => [
                'label' => &$GLOBALS['TL_LANG']['tl_appointment_archive']['edit'],
                'href' => 'act=edit',
                'icon' => 'edit.gif'
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
        'default' => '{date_legend},startDateTime,endDateTime'
    ],
    // Fields
    'fields' => [
        'id' => [],
        'tstamp' => [],
        'startDateTime' => [
            'exclude' => true,
            'search' => true,
            'inputType' => 'text',
            'eval' => [
                'mandatory' => true,
                'maxlength' => 255,
                'tl_class' => 'w50',
                'rgxp' => 'datim'
            ]
        ],
        'endDateTime' => [
            'exclude' => true,
            'search' => true,
            'inputType' => 'text',
            'eval' => [
                'mandatory' => true,
                'maxlength' => 255,
                'tl_class' => 'w50',
                'rgxp' => 'datim'
            ]
        ]
    ]
];
