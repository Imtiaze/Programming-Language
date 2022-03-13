package com.roze.oop.cloning.deepCopy;

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
    Student emp = (Student) super.clone();

    emp.subObj = (Subject) subObj.clone();

    return emp;
  }

}
