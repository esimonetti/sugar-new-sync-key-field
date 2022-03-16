<?php

if (!isset($hook_array)) {
    $hook_array = [];
}

if (!isset($hook_array['after_delete'])) {
    $hook_array['after_delete'] = [];
}

$hook_array['after_delete'][] = [
    1,
    'Remove sync key',
    'custom/logichooks/application/afterDeleteRemoveAdditionalFields.php',
    'afterDeleteRemoveAdditionalFields',
    'removeAdditionalFields',
];
