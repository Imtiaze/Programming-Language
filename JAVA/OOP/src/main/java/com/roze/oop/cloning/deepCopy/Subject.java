package com.roze.oop.cloning.deepCopy;

/**
 *
 * @author firoze
 */
public class Subject implements Cloneable {

    String list[] = new String[4];

    public Subject(String optionalSubject) {
        list[0] = "Physics";
        list[1] = "Chemistry";
        list[2] = "Maths";
        list[3] = optionalSubject;

    }

    protected Object clone() throws CloneNotSupportedException {
        return super.clone();
    }

}
