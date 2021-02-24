<?php
echo $this->element('genericElements/Form/genericForm', [
    'data' => [
        'title' => __('Add Correlation Exclusion Entry'),
        'description' => __('If you wish to exclude certain entries from being correlated on, simply add an entry here.'),
        'fields' => [
            [
                'field' => 'value',
                'label' => __('Value'),
                'class' => 'span6',
            ]
        ],
        'submit' => [
            'action' => $this->request->params['action']
        ]
    ]
]);
if (!$ajax) {
    echo $this->element('/genericElements/SideMenu/side_menu', $menuData);
}