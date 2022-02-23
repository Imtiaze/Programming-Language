package com.roze.oop.bike;

/**
 *
 * @author firoze
 */
class TestAbstract extends Bike {

    @Override
    void run() {
        System.out.println("Running safely");
    }

    public static void main(String[] args) {
        Bike b = new TestAbstract();
        b.run();
        b.bikeModel();

    }

}
