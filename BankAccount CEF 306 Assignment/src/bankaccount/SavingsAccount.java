/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package bankaccount;

/**
 * An account that earns interest at a fixed rate.
 * @author daniel
 */
public class SavingsAccount extends BankAccount {
    
    private final double interestRate;
    
    /**
     * Constructs a bank account with a given interest rate.
     * @param interestRate the interest rate
     */
    public SavingsAccount(double interestRate) {
        this.interestRate = interestRate;
    }
    
    /**
     * Adds the earned interest to the account balance.
     */
    public void addInterest() {
        
        double interest = super.getBalance() * interestRate / 100;
        
        deposit(interest);
        
    }
    
}
