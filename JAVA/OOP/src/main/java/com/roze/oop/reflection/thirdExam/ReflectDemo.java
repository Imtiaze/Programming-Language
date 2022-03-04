package com.roze.oop.reflection.thirdExam;

/**
 *
 * @author firoze
 */
public class ReflectDemo {

    private String str;

    public ReflectDemo() {

        str = "The Spring in Action";
    }

    public void method1() {

        System.out.println("\nThe String is: " + str);
    }

    public void method2(int num) {
        System.out.println("\nThe number is: " + num);
    }

    public void method3() {

        System.out.println("\nPrivate method invoked");
    }

}
