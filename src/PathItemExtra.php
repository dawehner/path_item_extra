<?php

namespace Drupal\path_item_extra\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\path\Plugin\Field\FieldType\PathItem;

class PathItemExtra extends PathItem {

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    return [
      'columns' => [
        'alias' => [
          'description' => 'The alias for this path; e.g. title-of-the-story.',
          'type' => 'varchar',
          'length' => 255,
          'not null' => TRUE,
          'default' => '',
        ],
        'pid' => [
          'description' => 'A unique path alias identifier.',
          'type' => 'serial',
          'unsigned' => TRUE,
          'not null' => TRUE,
        ],
      ],
    ];
  }

}
