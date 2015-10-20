<?php

return [
    'base_url' => 'http://portfolio/',
    'database' => [
        'host' => "localhost",
        'user' => "root",
        'password' => "",
        'dbname' => "portfolio",
    ],
    'captcha' => [
        "secret_key" => "6LceNQ8TAAAAAKW6cz7s-23XwKQJoqfAObZLCQDS",
        "public_key" => "6LceNQ8TAAAAAAQMdpGYOoiRVVhjwAyXtu82NYRq",
        "url_check_request" => "https://www.google.com/recaptcha/api/siteverify",
    ]
];