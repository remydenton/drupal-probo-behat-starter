<?php

use Drupal\DrupalExtension\Context\RawDrupalContext;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Mink\Driver\DriverInterface;
use Behat\Mink\Selector\SelectorsHandler;
use Behat\Mink\Element\DocumentElement;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawDrupalContext implements SnippetAcceptingContext
{


    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {


    }

   /**
     * @Then I should wait for :time seconds
     */
    public function iShouldWaitForSeconds($time)
    {
      sleep($time);
    }

//     /**
//    * @BeforeStep
//    */
//   public function beforeStep()
//   {
//    $this->getSession()->resizeWindow(1440, 900, 'current');
// }
/**
  * @Given I set browser window size
  */
 public function iSetBrowserWindowSize() {
//   $this->getSession()->resizeWindow((int)$width, (int)$height, 'current');
$this->getSession()->resizeWindow(1450, 950, 'current');


 }

 /**
     * Click on the element with the provided xpath query
     *
     * @When /^I click on the element with xpath "([^"]*)"$/
     */
    public function iClickOnTheElementWithXPath($xpath)
    {
        $session = $this->getSession(); // get the mink session
        $element = $session->getPage()->find(
            'xpath',
            $session->getSelectorsHandler()->selectorToXpath('xpath', $xpath)
        ); // runs the actual query and returns the element

        // errors must not pass silently
        if (null === $element) {
            throw new \InvalidArgumentException(sprintf('Could not evaluate XPath: "%s"', $xpath));
        }

        // ok, let's click on it
        $element->click();

    }
    /**
 * @When /^I hover over the element "([^"]*)"$/
 */
public function iHoverOverTheElement($locator)
{
        $session = $this->getSession(); // get the mink session
        $element = $session->getPage()->find('css', $locator); // runs the actual query and returns the element

        // errors must not pass silently
        if (null === $element) {
            throw new \InvalidArgumentException(sprintf('Could not evaluate CSS selector: "%s"', $locator));
        }

        // ok, let's hover it
        $element->mouseOver();
}
/**
 * Checks, that option from select with specified id|name|label|value is selected.
 *
 * @Then /^the "(?P<option>(?:[^"]|\\")*)" option from "(?P<select>(?:[^"]|\\")*)" (?:is|should be) selected/
 * @Then /^the option "(?P<option>(?:[^"]|\\")*)" from "(?P<select>(?:[^"]|\\")*)" (?:is|should be) selected$/
 * @Then /^"(?P<option>(?:[^"]|\\")*)" from "(?P<select>(?:[^"]|\\")*)" (?:is|should be) selected$/
 */
public function theOptionFromShouldBeSelected($option, $select)
{
    $selectField = $this->getSession()->getPage()->findField($select);
    if (null === $selectField) {
        throw new ElementNotFoundException($this->getSession(), 'select field', 'id|name|label|value', $select);
    }

    $optionField = $selectField->find('named', array(
        'option',
        $option,
    ));

    if (null === $optionField) {
        throw new ElementNotFoundException($this->getSession(), 'select option field', 'id|name|label|value', $option);
    }

    if (!$optionField->isSelected()) {
        throw new ExpectationException('Select option field with value|text "'.$option.'" is not selected in the select "'.$select.'"', $this->getSession());
    }
}
    /**
    * @Then I switchToWindow
    */
   public function iSwitchtowindow($name)
   {
     #$this->driver->switchToWindow($name)
     $this->getSession->switchToWindow($name);
   }
   
}
