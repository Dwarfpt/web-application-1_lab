<?php
header('Content-Type: application/json');

// Массив с данными
$data = [
    'users' => [
        [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john@example.com'
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'email' => 'jane@example.com'
        ]
    ],
    'status' => 'success',
    'timestamp' => time()
];

// Вывод JSON
echo json_encode($data, JSON_PRETTY_PRINT); 