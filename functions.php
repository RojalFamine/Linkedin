<?php

function isPage(string $page_name, string $class = 'active') {
    if (isset($_GET['page']) && $_GET['page'] === $page_name) {
        return $class;
    }
    return '';
}