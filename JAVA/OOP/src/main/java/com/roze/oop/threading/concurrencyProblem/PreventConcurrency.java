package com.roze.oop.threading.concurrencyProblem;

/**
 *
 * @author firoze
 */
public class PreventConcurrency extends Thread {

    public static int amount = 0;

    public static void main(String[] args) {

        PreventConcurrency pvntCon = new PreventConcurrency();
        pvntCon.start();
        while (pvntCon.isAlive()) {
            System.out.println("Waiting...");

        }
        System.out.println("Prevent Concurrency: " + amount);
        amount++;
        System.out.println("Prevent Concurrency: " + amount);

    }

    public void run() {
        amount++;
    }
}
