package com.roze.oop.abstraction.shape;

/**
 *
 * @author firoze
 */
public class TestShape {

    public static void main(String[] args) {
        Shape s = new Circle();
        s.draw();
        Shape s1 = new Rectangle();
        s1.draw();
    }

}
