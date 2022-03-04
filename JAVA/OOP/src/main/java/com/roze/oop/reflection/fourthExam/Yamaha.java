package com.roze.oop.reflection.fourthExam;

/**
 *
 * @author firoze
 */
public class Yamaha implements Bike, Bicycle {

    @Override
    public void display() {
        System.out.println("I am a bike");

    }

    @Override
    public void makeNoise() {
        System.out.println("The bike make nosie");
    }
}
