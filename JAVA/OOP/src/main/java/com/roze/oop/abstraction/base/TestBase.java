
package com.roze.oop.abstraction.base;

/**
 *
 * @author firoze
 */
public class TestBase {
    public static void main(String[] args) {
        Derived d=new Derived();
        Base b=new Derived();
        b.fun();
    }
    
}
