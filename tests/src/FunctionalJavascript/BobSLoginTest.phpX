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
  private $loops;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->loops = 300;
  }

  public function loop($test_num) {
    $this->htmlOutput();
    if ($this->loggedInUser) {
      $this->drupalLogout();
    }


    for ($i=0; $i<$this->loops; $i++) {
      $this->drupalGet('/');
      $this->drupalGet(Url::fromRoute('user.login'));
      $submit_button = $this->assertSession()->buttonExists('Log in');
      $form = $this->assertSession()->elementExists('xpath', './ancestor::form', $submit_button);
      // $this->drupalLogin($this->rootUser);
      // $this->htmlOutput();
      // $this->assertEquals(1, \Drupal::currentUser()->id(), "test=$test_num, i=$i");
    }
  }

  public function testLogin0() {
    $this->loop(0);
  }

  public function testLogin1() {
    $this->loop(1);
  }

  public function testLogin2() {
    $this->loop(2);
  }

  public function testLogin3() {
    $this->loop(3);
  }

  public function testLogin4() {
    $this->loop(4);
  }

  public function testLogin5() {
    $this->loop(5);
  }

  public function testLogin6() {
    $this->loop(6);
  }

  public function testLogin7() {
    $this->loop(7);
  }

  public function testLogin8() {
    $this->loop(8);
  }

  public function testLogin9() {
    $this->loop(9);
  }
  
}
