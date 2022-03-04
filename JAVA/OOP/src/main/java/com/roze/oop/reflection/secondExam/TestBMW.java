package com.roze.oop.reflection.secondExam;

import java.lang.reflect.Field;
import java.lang.reflect.Modifier;

/**
 *
 * @author firoze
 */
public class TestBMW {

    public static void main(String[] args) {
        try {
            BMW bmw = new BMW();
            Class obj = bmw.getClass();

            Field field1 = obj.getDeclaredField("color");
            field1.setAccessible(true);
            field1.set(bmw, "Red");

            String colorValue = (String) field1.get(bmw);
            System.out.println("Value: " + colorValue);

            int mod = field1.getModifiers();

            String modifier = Modifier.toString(mod);
            System.out.println("Modifier: " + modifier);
        } catch (Exception e) {
            e.printStackTrace();

        }

    }
}
