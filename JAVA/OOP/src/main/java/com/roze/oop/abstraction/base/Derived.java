package com.roze.oop.abstraction.base;

/**
 *
 * @author firoze
 */
public class Derived extends Base {

    public Derived() {
        System.out.println("Derived constructor called");
    }

    @Override
    void fun() {
        System.out.println("abstract fun() called");
    }

}
