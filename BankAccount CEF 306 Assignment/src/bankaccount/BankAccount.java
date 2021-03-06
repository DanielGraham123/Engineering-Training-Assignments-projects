/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package bankaccount;

/**
 * A bank account has a balance that can be changed by 
 * deposits and withdrawals
 * @author daniel
 */
public class BankAccount {

    private double balance;

    /**
     * Constructs a bank account with a zero balance.
     */
    public BankAccount() {
        balance = 0;
    }

    /**
     * Constructs a bank account with a given balance.
     * @param initialBalance the initial balance.
     */
    public BankAccount(double initialBalance) {
        balance = initialBalance;
    }

    /**
     * Deposits money into the bank account.
     * @param amount the amount to deposit.
     */
    public void deposit(double amount) {
        balance += amount;
    }

    /**
     * Withdraws money from the bank account
     * @param amount the amount to withdraw
     */
    public void withdraw(double amount) {
        balance -= amount;
    }

    /**
     * Gets the current balance of the bank account.
     * @return 
     */
    public double getBalance() {
        return balance;
    }
    
    /**
     * Transfers money from one account to another
     * @param amount the amount to transfer
     * @param other the other bank account
     */
    public void transfer(double amount, BankAccount other) {
        withdraw(amount);
        other.deposit(amount);
    }

}
