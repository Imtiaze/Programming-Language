package com.roze.oop.reflection.thirdExam;

import java.lang.reflect.Constructor;
import java.lang.reflect.Field;
import java.lang.reflect.Method;

/**
 *
 * @author firoze
 */
public class TestReflectionDemo {

    public static void main(String[] args) {
        try {
            ReflectDemo reflectDemo = new ReflectDemo();
            Class cls = reflectDemo.getClass();

            System.out.println("\nThe name of the class: " + cls.getName());

            Constructor con = cls.getConstructor();
            System.out.println("\nThe name of the constructor is: " + con.getName());

            System.out.println("\nThe public methods of the class are: ");

            Method[] methods = cls.getMethods();

            for (Method method : methods) {
                System.out.println(method.getName());
            }

            Method methodCall1 = cls.getDeclaredMethod("method2", int.class);
            methodCall1.invoke(reflectDemo, 01);

            Field field1 = cls.getDeclaredField("str");

            field1.setAccessible(true);

            field1.set(reflectDemo, "Java");

            Method methodCall2 = cls.getDeclaredMethod("method1");

            methodCall2.invoke(reflectDemo);

            Method methodCall3 = cls.getDeclaredMethod("method3");
            methodCall3.setAccessible(true);

            methodCall3.invoke(reflectDemo);

        } catch (Exception e) {
            e.printStackTrace();
        }

    }
}
