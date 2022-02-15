package com.roze.oop.inheritance;

/**
 *
 * @author firoze
 */
public class Test {

    public static void main(String[] args) {
        Car car = new Car();
        car.vehicleName = "BMW";
        car.carModel = "BMW Frizer";
        car.vehicleBrand = "Zispar";
        car.vehicleColor = "Red Green Mixed";
        System.out.println("Car Details: " + car.carModel +","+ " Car Name: " + car.vehicleName+"," + " Car Brand: "
                + car.vehicleBrand +","+ " Car Color: " + car.vehicleColor);
    }
}
