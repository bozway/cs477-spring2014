<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
        // $this->useContext('loginContext', new LoginContext());
    }

    /**
     * @Given /^I am on the "([^"]*)"$/
     */
    public function iAmOnThe($arg1)
    {
        echo "\n\ntest\n\n";
        throw new PendingException();
    }

    /**
     * @When /^I enter "([^"]*)" credentials$/
     */
    public function iEnterCredentials($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should see my account dashboard$/
     */
    public function iShouldSeeMyAccountDashboard()
    {
        throw new PendingException();
    }
}
