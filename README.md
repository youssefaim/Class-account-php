# Class-account-php
Class Definition:
The code defines a class named Compte.
This class represents an account (or “compte” in French).
It has two private properties:
$montantet: Represents the account balance (initial amount).
$intérêt: Represents the interest rate (in percentage).
The class also has a constructor (__construct) that initializes the properties with the provided values.
Methods:
interet(): This method calculates the new account balance after applying interest.
It multiplies the current balance ($montantet) by (1 + $this->intérêt/100).
The result is stored back in $montantet.
get_montantet(): This method returns the current account balance.
Creating Instances:
The code creates two instances of the Compte class:
$income: Initial balance of 200 dirhams with an interest rate of 20%.
$newincome: Initial balance of 1000 dirhams with an interest rate of 2%.
Interest Calculation:
A loop runs 9 times (from 1 to 9).
In each iteration, the interet() method is called on both instances ($income and $newincome).
This simulates the interest being applied to the account balances over time.
Displaying Results:
Finally, the code echoes the updated account balances:
Valeur du compte = ... dirhams for both $income and $newincome.
