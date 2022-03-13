package com.roze.oop.cloning.shallowCopy;

/**
 *
 * @author firoze
 */
public class TestShallowCopy {

    public static void main(String[] args) {
        Subject subject = new Subject("Computer Science");

        Student stuObj1 = new Student(3, "Md. Firoze Hossain", subject);

        Student stuObj2 = null;

        try {

            stuObj2 = (Student) stuObj1.clone();
        } catch (CloneNotSupportedException e) {
            e.printStackTrace();
        }

        System.out.println(stuObj1.subObj.list[3]);

        stuObj2.subObj.list[3] = "Database";

        System.out.println(stuObj1.subObj.list[3]);
    }
}
