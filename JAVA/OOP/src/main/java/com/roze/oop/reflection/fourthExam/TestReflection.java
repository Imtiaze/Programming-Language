package com.roze.oop.reflection.fourthExam;

/**
 *
 * @author firoze
 */
public class TestReflection {

    public static void main(String[] args) {
        try {
            Yamaha yam = new Yamaha();
            Class obj = yam.getClass();

            Class[] objInterfaces = obj.getInterfaces();
            for (Class c : objInterfaces) {

                System.out.println("Interfaces Name: " + c.getName());

            }

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

}
