package com.roze.oop.abstraction.bank;

/**
 *
 * @author firoze
 */
public class TestBank {

    public static void main(String[] args) {
        Bank b;

        b = new IBBL();
        System.out.println("Rate Interest of IBBL: " + b.getRateOfInterest() + "%");

        b=new DBBL();
        System.out.println("Rate Interest of DBBL: " + b.getRateOfInterest() + "%");
    }

}
