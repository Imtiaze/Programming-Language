package com.roze.oop.interfaces.secondExam;

/**
 *
 * @author firoze
 */
public interface Drawable {

    public void draw();

    default void message() {
        System.out.println("Default Method");
    }

}
