<?php

Kirby::plugin('medienbaecker/cropselect', [
    'fields' => [
        'cropselect' => [
            'props' => [
                'value' => function ($value = "center") {
                    return $value;
                },
                'image' => function() {
                    if($this->model()->type() == "image") {
                        return $this->model()->url();
                    }
                    else {
                        return false;
                    }
                },
                'options' => function() {
                    return [
                        "top left",
                        "top",
                        "top right",
                        "left",
                        "center",
                        "right",
                        "bottom left",
                        "bottom",
                        "bottom right"
                    ];
                }
            ],
            'computed' => [
                
            ]
        ]
    ]
]);