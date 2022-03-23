package com.roze.oop.threading.secondExam;

/**
 *
 * @author firoze
 */
public class ImplementsRunnable implements Runnable {

    public static void main(String[] args) {
        ImplementsRunnable impRun = new ImplementsRunnable();
        Thread thread = new Thread(impRun);
        thread.start();
        System.out.println("This code is outside of the thread");
    }

    @Override
    public void run() {
        System.out.println("This code is running in the thread");
    }

}
