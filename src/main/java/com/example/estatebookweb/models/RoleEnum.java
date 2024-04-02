package com.example.estatebookweb.models;

import org.springframework.security.core.GrantedAuthority;

public enum RoleEnum implements GrantedAuthority {
    USER, EMPLOYEE, ADMIN;
    @Override
    public String getAuthority()
    {
        return name();
    }
}
