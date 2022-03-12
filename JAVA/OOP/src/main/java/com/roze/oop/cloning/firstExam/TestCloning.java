package com.roze.oop.cloning.firstExam;

import java.util.HashMap;
import java.util.Map;

/**
 *
 * @author firoze
 */
public class TestCloning {

    public static void main(String[] args) throws CloneNotSupportedException {

        Employee emp = new Employee();
        emp.setId(1);
        emp.setName("Firoze");

        Map<String, String> props = new HashMap<>();

        props.put("Salary", "100000");
        props.put("City", "Dhaka");

        Employee cloneEmployee = (Employee) emp.clone();
        System.out.println("emp and clonedEmployee == test : " + (emp == cloneEmployee));

        System.out.println("emp and clonedEmployee HsahMap == test : " + (emp.getProps() == cloneEmployee.getProps()));

        emp.getProps().put("Title", "CEO");
        emp.getProps().put("City", "Rajshahi");

        System.out.println("clonedEmp props: " + cloneEmployee.getProps());
        emp.setName("new");
        System.out.println("clonedEmp name: " + cloneEmployee.getName());

    }

}
