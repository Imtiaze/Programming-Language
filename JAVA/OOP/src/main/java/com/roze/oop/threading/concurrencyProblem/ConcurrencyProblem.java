package com.roze.oop.threading.concurrencyProblem;

/**
 *
 * @author firoze
 */
public class ConcurrencyProblem extends Thread {

    public static int amount = 0;

    public static void main(String[] args) {
        ConcurrencyProblem conProb = new ConcurrencyProblem();
        conProb.start();

        System.out.println(amount);
        amount++;
        System.out.println(amount);
    }

    public void run() {
        amount++;
    }
}
