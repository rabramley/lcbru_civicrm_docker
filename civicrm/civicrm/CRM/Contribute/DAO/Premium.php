<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.6                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2015                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 *
 * Generated from xml/schema/CRM/Contribute/Premium.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Contribute_DAO_Premium extends CRM_Core_DAO {
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_premiums';
  /**
   * static instance to hold the field values
   *
   * @var array
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = true;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Joins these premium settings to another object. Always civicrm_contribution_page for now.
   *
   * @var string
   */
  public $entity_table;
  /**
   *
   * @var int unsigned
   */
  public $entity_id;
  /**
   * Is the Premiums feature enabled for this page?
   *
   * @var boolean
   */
  public $premiums_active;
  /**
   * Title for Premiums section.
   *
   * @var string
   */
  public $premiums_intro_title;
  /**
   * Displayed in <div> at top of Premiums section of page. Text and HTML allowed.
   *
   * @var text
   */
  public $premiums_intro_text;
  /**
   * This email address is included in receipts if it is populated and a premium has been selected.
   *
   * @var string
   */
  public $premiums_contact_email;
  /**
   * This phone number is included in receipts if it is populated and a premium has been selected.
   *
   * @var string
   */
  public $premiums_contact_phone;
  /**
   * Boolean. Should we automatically display minimum contribution amount text after the premium descriptions.
   *
   * @var boolean
   */
  public $premiums_display_min_contribution;
  /**
   * Label displayed for No Thank-you option in premiums block (e.g. No thank you)
   *
   * @var string
   */
  public $premiums_nothankyou_label;
  /**
   *
   * @var int unsigned
   */
  public $premiums_nothankyou_position;
  /**
   * class constructor
   *
   * @return civicrm_premiums
   */
  function __construct() {
    $this->__table = 'civicrm_premiums';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Dynamic(self::getTableName() , 'entity_id', NULL, 'id', 'entity_table');
    }
    return self::$_links;
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Premium ID') ,
          'required' => true,
        ) ,
        'entity_table' => array(
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Premium Entity') ,
          'description' => 'Joins these premium settings to another object. Always civicrm_contribution_page for now.',
          'required' => true,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'entity_id' => array(
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Premium entity ID') ,
          'required' => true,
        ) ,
        'premiums_active' => array(
          'name' => 'premiums_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Premium Active?') ,
          'description' => 'Is the Premiums feature enabled for this page?',
          'required' => true,
        ) ,
        'premiums_intro_title' => array(
          'name' => 'premiums_intro_title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Title for Premiums section') ,
          'description' => 'Title for Premiums section.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'premiums_intro_text' => array(
          'name' => 'premiums_intro_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Premium Introductory Text') ,
          'description' => 'Displayed in <div> at top of Premiums section of page. Text and HTML allowed.',
        ) ,
        'premiums_contact_email' => array(
          'name' => 'premiums_contact_email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Premium Contact Email') ,
          'description' => 'This email address is included in receipts if it is populated and a premium has been selected.',
          'maxlength' => 100,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'premiums_contact_phone' => array(
          'name' => 'premiums_contact_phone',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Premiums Contact Phone') ,
          'description' => 'This phone number is included in receipts if it is populated and a premium has been selected.',
          'maxlength' => 50,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'premiums_display_min_contribution' => array(
          'name' => 'premiums_display_min_contribution',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Display Minimum Contribution?') ,
          'description' => 'Boolean. Should we automatically display minimum contribution amount text after the premium descriptions.',
          'required' => true,
        ) ,
        'premiums_nothankyou_label' => array(
          'name' => 'premiums_nothankyou_label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('No Thank-you Text') ,
          'description' => 'Label displayed for No Thank-you option in premiums block (e.g. No thank you)',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'premiums_nothankyou_position' => array(
          'name' => 'premiums_nothankyou_position',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('No Thank-you Position') ,
          'default' => '1',
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @return array
   */
  static function &fieldKeys() {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'entity_table' => 'entity_table',
        'entity_id' => 'entity_id',
        'premiums_active' => 'premiums_active',
        'premiums_intro_title' => 'premiums_intro_title',
        'premiums_intro_text' => 'premiums_intro_text',
        'premiums_contact_email' => 'premiums_contact_email',
        'premiums_contact_phone' => 'premiums_contact_phone',
        'premiums_display_min_contribution' => 'premiums_display_min_contribution',
        'premiums_nothankyou_label' => 'premiums_nothankyou_label',
        'premiums_nothankyou_position' => 'premiums_nothankyou_position',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['premiums'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['premiums'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
