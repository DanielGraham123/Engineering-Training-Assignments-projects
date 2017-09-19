/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package amaramachine;

import static java.lang.System.*;

/**
 *
 * @author daniel
 */
public class CashRegister {

    private double cash;
    private String password;
    private double balance;
    String message = "";

    private Dispenser disp;

    public CashRegister() {

        this.password = "amara";
        disp = new Dispenser();
        this.cash = 1200;

    }

    public void getAmount(int choice, double amount) {

        if (Dispenser.itemCosts[choice - 1] == amount) {

            message = disp.release(choice);
            out.println(message);
            cash += amount;

        } else if (amount < Dispenser.itemCosts[choice - 1]) {

            message = "Inssuficient amount. Please Enter the correct price!";
            out.println(message);

        } else if (amount > Dispenser.itemCosts[choice - 1]) {

            out.println(returnChange(choice, amount));

            message = disp.release(choice);
            out.println(message);

            cash += amount;
        }

    }

    private String returnChange(int choice, double amount) {

        balance = amount - Dispenser.itemCosts[choice - 1];
        cash -= balance;

        return "Get Your Balance: " + balance;

    }

    public String viewCash(String password) {

        if (password.equals(this.password)) {
            return "Your current cash is : " + this.cash;
        } else {
            return "Invalid Password!";
        }

    }

}


// out.print("\033[H\033[2J");
//            out.flush();