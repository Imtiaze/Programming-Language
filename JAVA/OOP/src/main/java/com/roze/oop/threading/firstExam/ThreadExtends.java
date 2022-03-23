package com.roze.oop.threading.firstExam;

/**
 *
 * @author firoze
 */
public class ThreadExtends extends Thread {

    public static void main(String[] args) {
        ThreadExtends thread = new ThreadExtends();
        thread.start();
        System.out.println("The code is outside of the thread");

    }
    
    public void run(){
        System.out.println("The code is running in the thread");
    }
}
