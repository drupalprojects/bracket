<?php
// $Id$

/**
 * @file
 * This file contains the functions required for views integration
 *
 * @author Jim Bullington <jimb@jrbcs.com>
 */

/**
 * Inform views module of our tables
 *
 * @return
 *   views tables
 */
function bracket_views_tables() {

  $tables['bracket'] = array(
    'name' => 'bracket', 
    'join' => array(
      'left' => array(
      'table' => 'node',
      'field' => 'nid',
      ),
      'right' => array(
        'field' => 'nid',
      ),    
      'type' => 'inner'
    ),
    'fields' => array(
      'sport' => array(
        'name' => t('Bracket: Sport'),
        'sortable' => TRUE,
        'help' => t('Display bracket sport.'),
      ),
      'division' => array(
        'name' => t('Bracket: Division'),
        'sortable' => TRUE,
        'help' => t('Display bracket division.'),
      ),
      'season' => array(
        'name' => t('Bracket: Season'),
        'sortable' => TRUE,
        'help' => t('Display bracket season.'),
      ),
      'group' => array(
        'name' => t('Bracket: Group'),
        'field' => 'brgroup',
        'sortable' => TRUE,
        'help' => t('Display bracket group.'),
      ),
    ),
    'filters' => array(
      'sport' => array(
        'field' => 'sport',
        'name' => t('Bracket: Sport'),
        'operator' => 'views_handler_operator_eqneq',
        'help' => t('Filter by Sport.'),
      ),
      'division' => array(
        'field' => 'division',
        'name' => t('Bracket: Division'),
        'operator' => 'views_handler_operator_eqneq',
        'help' => t('Filter by Division.'),
      ),
      'season' => array(
        'field' => 'season',
        'name' => t('Bracket: Season'),
        'operator' => 'views_handler_operator_eqneq',
        'help' => t('Filter by Season.'),
      ),
      'group' => array(
        'field' => 'brgroup',
        'name' => t('Bracket: Group'),
        'operator' => 'views_handler_operator_eqneq',
        'help' => t('Filter by Group.'),
      ),
    ),
  );
  
  return $tables;
}

