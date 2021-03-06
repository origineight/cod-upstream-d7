<?php
/**
 * @file
 * cod_registration.features.inc
 */

/**
 * Implements hook_views_api().
 */
function cod_registration_views_api() {
  return array(
    'api' => 3,
    'path' => drupal_get_path('module', 'cod_registration') . '/views',
  );
}

/**
 * Implements hook_default_ticket_state().
 */
function cod_registration_default_ticket_state() {
  $items = array();
  $items['cancelled'] = entity_import('ticket_state', '{
    "label" : "Cancelled",
    "name" : "cancelled",
    "description" : "People who\\u0027ve cancelled",
    "weight" : "0",
    "active" : "1",
    "bundle" : "ticket_state"
  }');
  $items['checked_in'] = entity_import('ticket_state', '{
    "label" : "Checked-In",
    "name" : "checked_in",
    "description" : "Registered users who\\u0027ve checked-in.",
    "weight" : "0",
    "active" : "1",
    "bundle" : "ticket_state"
  }');
  $items['completed'] = entity_import('ticket_state', '{
    "label" : "Completed",
    "name" : "completed",
    "description" : "Completed Registrations",
    "weight" : "-9",
    "active" : "1",
    "bundle" : "ticket_state"
  }');
  $items['pending'] = entity_import('ticket_state', '{
    "label" : "Pending",
    "name" : "pending",
    "description" : "Registrations that are pending",
    "weight" : "-10",
    "active" : "1",
    "bundle" : "ticket_state"
  }');
  return $items;
}
