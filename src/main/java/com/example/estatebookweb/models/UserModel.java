package com.example.estatebookweb.models;

import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

import java.util.Date;
import java.util.Set;
@Data
@NoArgsConstructor
@AllArgsConstructor
@Entity
@Table(name = "Users") // Изменено на "User" вместо "Estate_Users"
public class UserModel {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "ID_User")
    private Long id;

    @Column(name = "Name", columnDefinition = "varchar(50) default 'Unknown'")
    private String name;

    @Column(name = "Surname", columnDefinition = "varchar(50) default 'Unknown'")
    private String surname;

    @Column(name = "Middle_Name", columnDefinition = "varchar(50) default 'Unknown'")
    private String middleName;

    //@Column(name = "Login", nullable = false, unique = true)
    @Column(name = "Login")
    private String login;

    @Column(name = "Password", nullable = false)
    private String password;

    @Column(name = "Avatar", columnDefinition = "varchar(max) default 'default_avatar.jpg'")
    private String avatar;

    @Column(name = "Phone", columnDefinition = "varchar(20) default 'Unknown'")
    private String phone;

    @Column(name = "Location", columnDefinition = "varchar(300) default 'Unknown'")
    private String location;

    @Column(name = "Description", columnDefinition = "varchar(max) default 'No description provided'")
    private String description;

    @Column(name = "Average_Mark", columnDefinition = "float default 0")
    private Float averageMark;

    @Column(name = "Registration_Date", columnDefinition = "datetime default current_timestamp")
    private Date registrationDate;

    @ElementCollection(targetClass = RoleEnum.class,  fetch = FetchType.EAGER)
    @CollectionTable(name = "ROLE", joinColumns = @JoinColumn(name = "users_id"))
    @Enumerated(EnumType.STRING)
    private Set<RoleEnum> roles;


}
