package com.roze.oop.cloning.firstExam;

import java.util.Map;

/**
 *
 * @author firoze
 */
public class Employee implements Cloneable {

    private int id;
    private String name;

    private Map<String, String> props;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public Map<String, String> getProps() {
        return props;
    }

    public void setProps(Map<String, String> props) {
        this.props = props;
    }

    @Override
    protected Object clone() throws CloneNotSupportedException {
        return super.clone();
    }

}
