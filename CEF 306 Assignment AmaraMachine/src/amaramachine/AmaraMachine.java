/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package amaramachine;

import static java.lang.System.*;
import java.util.*;

/**
 *
 * @author daniel
 */
public class AmaraMachine {

    public static void main(String[] args) {

        Dispenser dispenser = new Dispenser();
        CashRegister cash = new CashRegister();
        Scanner input = new Scanner(in);

        int index = 0;

        out.println("Menu:\n----------------------------------\n"
                + "1. Different Products.\n"
                + "2. Make Selection.\n"
                + "3. Show Price.\n"
                + "4. Make Payment.\n"
                + "5. Get Item.\n"
                + "6. View Cash.\n"
                + "7. Exit");

        out.println("--------------------------------");
        out.println("Choice: ");
        int choice = input.nextInt();

        do {

            switch (choice) {
                case 1:
                    dispenser.showProducts();
                    break;
                case 2:
                    out.print("\nIndex: ");
                    index = input.nextInt();
                    break;
                case 3:
                    out.println("This item costs: " + dispenser.showPrice(index));
                    break;
                case 4:
                    double amount = input.nextDouble();
                    cash.getAmount(index, amount);
                    break;
                case 5:
                    out.println("Thanks for making business with Mami Amara's Machine!\n");
                    out.println("\nExit? Yes(y/Y) / No(n/N) to quit.");
                    break;
                case 6:
                    out.print("Password: ");
                    String password = input.next();     
                    out.println(cash.viewCash(password));
                    break;
                case 7:
                    out.println("Thanks for making business with Mami Amara's Machine!\nHave a nice Day!");
                    exit(0);
                    break;
                default:
                    out.println("Sorry: invalid choice.");
                    break;

            }

            out.println("Menu:\n----------------------------------\n"
                    + "1. Different Products.\n"
                    + "2. Make Selection.\n"
                    + "3. Show Price.\n"
                    + "4. Make Payment.\n"
                    + "5. Get Item.\n"
                    + "6. View Cash.\n"
                    + "7. Exit");

            out.println("--------------------------------");
            out.println("Choice: ");
            choice = input.nextInt();

        } while (choice != 7);

    }

}
