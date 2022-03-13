package com.roze.oop.cloning.shallowCopy;

/**
 *
 * @author firoze
 */
public class Student implements Cloneable {

    int id;
    String name;

    Subject subObj;

    public Student(int id, String name, Subject subObj) {
        this.id = id;

        this.name = name;

        this.subObj = subObj;
    }

    protected Object clone() throws CloneNotSupportedException {
        return super.clone();
    }

}
