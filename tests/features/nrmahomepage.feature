Feature: Homepage test

@javascript @1
  Scenario: Click on Insurance link from header
    Given I am on "https://www.nrma.com.au/"
    Given I set browser window size
    Then I should see "Insurance"
    When I click "Insurance"
    Then the "https://www.nrma.com.au/insurance" should match "/Insurance"
@javascript @2
  Scenario: Test Get a quote link on homepage
    Given I am on "https://www.nrma.com.au/"
    Then I should wait for 5 seconds
    Then I should see "Get a quote"
    When I click "Get a quote"
    Then I should see "Get a quote"
    Then I should see "Retrieve a quote"
    #Then I switchToWindow
@javascript @3
  Scenario: Click Loyality Discount
    Given I am on "https://www.nrma.com.au/"
    Given I set browser window size
    Then I should see "Loyalty Discount"
    Then I should wait for 5 seconds
    Given I click on the element with xpath "//*[@id='desktop-tile-loyalty-discount']/div"
