<?php

namespace Drupal\Tests\webform_civicrm\FunctionalJavascript;

use Drupal\Core\Url;

/**
 * Tests submitting a Webform with CiviCRM: Contact with Activity
 *
 * @group webform_civicrm
 */
final class BobSLoginTest extends WebformCivicrmTestBase {

  /**
   * @var array
   */
  private $_contacts;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
  }

  public function testLoginLoop1() {
    $this->htmlOutput();
    for ($i=0; $i<100; $i++) {
      $this->drupalLogin($this->rootUser);
      $this->htmlOutput();
      $this->assertEquals(1, \Drupal::currentUser()->id(), "i=$i");
    }
  }

  public function testLoginLoop2() {
    $this->htmlOutput();
    for ($i=0; $i<100; $i++) {
      $this->drupalLogin($this->rootUser);
      $this->htmlOutput();
      $this->assertEquals(1, \Drupal::currentUser()->id(), "i=$i");
    }
  }

  public function testLoginLoop3() {
    $this->htmlOutput();
    for ($i=0; $i<100; $i++) {
      $this->drupalLogin($this->rootUser);
      $this->htmlOutput();
      $this->assertEquals(1, \Drupal::currentUser()->id(), "i=$i");
    }
  }
}
