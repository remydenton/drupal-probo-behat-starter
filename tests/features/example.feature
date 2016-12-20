Feature: Example Tests
  These are just example tests.  Replace them with real ones once you're up and
  running!

  Scenario:
    Given I am on the homepage
    Then I should see text matching "Welcome"

  @api @mytag
  Scenario:
    Given I am logged in as a user with the administrator role
    Then I should be able to edit a basic_page
