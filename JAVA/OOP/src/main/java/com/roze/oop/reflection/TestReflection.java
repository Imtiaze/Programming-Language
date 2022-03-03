package com.roze.oop.reflection;

import java.lang.reflect.Modifier;

/**
 *
 * @author firoze
 */
public class TestReflection {

    public static void main(String[] args) {
        try {
            Cat ct = new Cat();
            Class obj = ct.getClass();

            String name = obj.getName();
            System.out.println("Name: " + name);

            int modifier = obj.getModifiers();

            String mod = Modifier.toString(modifier);
            System.out.println("Modifier: " + mod);

            Class superClass = obj.getSuperclass();
            System.out.println("Super Class: " + superClass.getName());

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
