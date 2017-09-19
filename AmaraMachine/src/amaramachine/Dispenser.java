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
public class Dispenser {
    
    private final static String[] items = {"Fried eggs", "Bananas", "Beverages", "Plantain chips", "Cookies"};
    public final static double[] itemCosts = {250, 100, 150, 100, 50};
    
    private static int[] itemQuantity = {5, 3, 5, 4, 8};
    
    public String release(int choice) {
        
        if (itemQuantity[choice - 1] != 0) {
            itemQuantity[choice - 1]--; 
            return ("Thanks: You bought " + items[choice - 1] + " for " + itemCosts[choice - 1]);
        } else {
            return ("Sorry, " + items[choice - 1] + " are not available for now.");
        }      
        
    }
    
    public void showItems() {
        
        out.printf("%-10s%-20s%-10s%9s\n", "Index", "Available Items", "Quantity", "Costs");
        
        
        for(int i = 0; i < items.length; i++) {
            out.printf("%-10d%-20s%-10d%10.2f\n", (i+1), items[i], itemQuantity[i], itemCosts[i]);
        }
        
    }
    
    public void showProducts() {
        
        out.println("Choose an Item from the table below by entering the corresponding index\n");
        
        out.printf("%-10s%-20s%-10s\n", "Index", "Available Products", "Quantity");
        for (int i = 0; i < items.length; i++) {
            
            out.printf("%-10d%-20s%-10d\n", (i+1), items[i], itemQuantity[i]);
        }
        
    }
    
    public double showPrice(int index) {
        
        return itemCosts[index - 1];
        
    }
    
}
