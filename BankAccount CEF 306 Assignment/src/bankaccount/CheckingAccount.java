/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package bankaccount;

/**
 *
 * @author daniel
 */
public class CheckingAccount extends BankAccount {
    
    private static final double TRANSACTION_FEE = 100.0;
    private static final int FREE_TRANSACTIONS = 3;
   
    private int count;
    
    /**
     * Constructs a checking account with a given balance
     * @param initialBalance the initial balance
     */
    public CheckingAccount(double initialBalance) {
        super(initialBalance);
        count = 1;
    }
    

    /**
     * Gives three free withdrawals per month 
     * @param amount the amount to withdraw
     */
    @Override
    public void withdraw(double amount) {
        
        if (count < FREE_TRANSACTIONS) {
            
            super.withdraw(amount);
            count++;
            
        } else {
            super.withdraw(amount);
            deductFees();
        }
        
    }
    
    /**
     * Deducts the fees which equals 100frs
     */
    private void deductFees() {
        super.withdraw(TRANSACTION_FEE);
    }

    
}
