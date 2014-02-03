Feature: Rerun
  In order to test only failed scenarios
  As a feature developer
  I need to have an ability to rerun failed previously scenarios

  Background:
    Given a file named "features/bootstrap/FeatureContext.php" with:
      """
      <?php

      use Behat\Behat\Context\Context;

      class FeatureContext implements Context
      {
          private $login = 0;
          private $parameters;

          public function __construct(array $parameters) {
              $this->parameters = $parameters;
          }

          /**
           * @Given /^I have (\d+) login?$/
           */
          public function iHavelogin($count) {
              $this->login = intval($count);
          }

          /**
           * @When /^I ate (\d+) login?$/
           */
          public function iAtelogin($count) {
              $this->login -= intval($count);
          }

          /**
           * @When /^I found (\d+) login?$/
           */
          public function iFoundlogin($count) {
              $this->login += intval($count);
          }

          /**
           * @Then /^I should have (\d+) login$/
           */
          public function iShouldHavelogin($count) {
              PHPUnit_Framework_Assert::assertEquals(intval($count), $this->login);
          }

          /**
           * @Then /^context parameter "([^"]*)" should be equal to "([^"]*)"$/
           */
          public function contextParameterShouldBeEqualTo($key, $val) {
              PHPUnit_Framework_Assert::assertEquals($val, $this->parameters[$key]);
          }

          /**
           * @Given /^context parameter "([^"]*)" should be array with (\d+) elements$/
           */
          public function contextParameterShouldBeArrayWithElements($key, $count) {
              PHPUnit_Framework_Assert::assertInternalType('array', $this->parameters[$key]);
              PHPUnit_Framework_Assert::assertEquals(2, count($this->parameters[$key]));
          }
      }
      """
    And a file named "features/login.feature" with:
      """
      Feature: login story
        In order to eat apple
        As a little kid
        I need to have an apple in my pocket

        Background:
          Given I have 3 login

        Scenario: I'm little hungry
          When I ate 1 apple
          Then I should have 3 login

        Scenario: Found more login
          When I found 5 login
          Then I should have 8 login

        Scenario: Found more login
          When I found 2 login
          Then I should have 5 login

        Scenario Outline: Other situations
          When I ate <ate> login
          And I found <found> login
          Then I should have <result> login

          Examples:
            | ate | found | result |
            | 3   | 1     | 1      |
            | 0   | 4     | 8      |
            | 2   | 2     | 3      |
      """

  Scenario: Run one feature with 2 failed and 3 passing scenarios
    When I run "behat --no-colors -f progress features/login.feature"
    Then it should fail with:
      """
      ..F.............F....

      --- Failed steps:

          features/login.feature:9
            Then I should have 3 login # features/login.feature:11
              Failed asserting that 2 matches expected 3.

          features/login.feature:29
            Then I should have 8 login # features/login.feature:24
              Failed asserting that 7 matches expected 8.

      6 scenarios (4 passed, 2 failed)
      21 steps (19 passed, 2 failed)
      """

  Scenario: Rerun only failed scenarios
    Given I run "behat --no-colors -f progress features/login.feature"
    When I run "behat --no-colors -f progress features/login.feature --rerun"
    Then it should fail with:
    """
    ..F...F

    --- Failed steps:

        features/login.feature:9
          Then I should have 3 login # features/login.feature:11
            Failed asserting that 2 matches expected 3.

        features/login.feature:29
          Then I should have 8 login # features/login.feature:24
            Failed asserting that 7 matches expected 8.

    2 scenarios (2 failed)
    7 steps (5 passed, 2 failed)
    """