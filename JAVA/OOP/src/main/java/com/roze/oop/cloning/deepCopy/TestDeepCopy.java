package com.roze.oop.cloning.deepCopy;

/**
 *
 * @author firoze
 */
public class TestDeepCopy {

    public static void main(String[] args) {
        Subject subObject = new Subject("Computer Science");

        Student stuObj1 = new Student(3213, "Kulwinder Kaur", subObject);

        Student stuObj2 = null;

        try {
            stuObj2 = (Student) stuObj1.clone();
        } catch (CloneNotSupportedException e) {
            e.printStackTrace();
        }

        System.out.println(stuObj1.subObj.list[3]);

        stuObj2.subObj.list[3] = "Physical Education";

        System.out.println(stuObj1.subObj.list[3]);

    }
}
