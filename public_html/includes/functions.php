<?php
// includes/functions.php

function loadComponent($componentName, $data = []) {
    $componentPath = __DIR__ . '/../components/' . $componentName . '.php';

    if (file_exists($componentPath)) {
        extract($data); // Makes data available as variables in the component
        include $componentPath;
    } else {
        echo "<!-- Component '{$componentName}' not found -->";
    }
}