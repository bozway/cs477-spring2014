#features/login.feature

Feature: Login
	In order to see my account dashboard
	As a regular user/applicant
	I need to be able to login using my credentials

	Scenario: Regular user login
		Given I am on the "login page"
		When I enter "regular user" credentials
		Then I should see my account dashboard