package bankaccount;

/**
 * A class to test the BankAccount class.
 *
 * @author daniel
 */
public class BankAccountTester {

    /**
     * Tests the methods of the BankAccount class.
     *
     * @param args not used
     */
    public static void main(String[] args) {

//        SavingsAccount momsSavings = new SavingsAccount(0.5);
//
//        CheckingAccount harrysChecking = new CheckingAccount(100);
        
        BankAccount myAccount = new CheckingAccount(9000);
        BankAccount saving = new SavingsAccount(0.5);
        
        myAccount.deposit(1000);
        System.out.println("Current Balance: " + myAccount.getBalance());
        
        myAccount.withdraw(1000);
        myAccount.withdraw(4000);
        System.out.println("Current Balance: " + myAccount.getBalance());
        
        myAccount.withdraw(3000);
        System.out.println("Current Balance(with fee subtracted): " + myAccount.getBalance());
        

//        System.out.println("Harry's Current: " + harrysChecking.getBalance() + "\n");
//        momsSavings.deposit(10000);
//        System.out.println("Mom's deposit: " + momsSavings.getBalance());
//
//        momsSavings.transfer(2000, harrysChecking);
//        System.out.println("Transferred: " + harrysChecking.getBalance() + " to Harry");
//        harrysChecking.withdraw(1500);
//        System.out.println("After Harry's Withdraw: " + harrysChecking.getBalance());
//        harrysChecking.withdraw(80);
//        System.out.println("After Harry's Withdraw: " + harrysChecking.getBalance());
//
//        momsSavings.transfer(1000, harrysChecking);
//        System.out.println("Harry's Current balance: " + harrysChecking.getBalance());
//        harrysChecking.withdraw(400);
//        System.out.println("After Harry's Withdraw: " + harrysChecking.getBalance());
//
//        System.out.println();
//        // Simulate end of month
//        momsSavings.addInterest();
//        System.out.println("After adding Mom's interest: " + momsSavings.getBalance());
////        harrysChecking.deductFees();
//
//        System.out.println("Mom's savings balance: " + momsSavings.getBalance());
//        System.out.println("Expected: 7035");
//
//        System.out.println("Harry's checking balance: " + harrysChecking.getBalance());
//        System.out.println("Expected: 1116");



    }

}
