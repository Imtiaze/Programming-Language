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
        props.put("salary", "100000");
        props.put("city", "Dhaka");
        emp.setProps(props);

        Employee clonedEmp = (Employee) emp.clone();

        System.out.println("emp and clonedEmp == test: " + (emp == clonedEmp));

        System.out.println("emp and clonedEmp HashMap == test: " + (emp.getProps() == clonedEmp.getProps()));

       
        emp.getProps().put("title", "CEO");
        emp.getProps().put("city", "Rajshahi");
        System.out.println("clonedEmp props:" + clonedEmp.getProps());

       
        emp.setName("new");
        System.out.println("clonedEmp name:" + clonedEmp.getName());

    }

}
