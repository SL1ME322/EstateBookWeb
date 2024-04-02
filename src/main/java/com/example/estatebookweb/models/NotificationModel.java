package com.example.estatebookweb.models;


import com.example.estatebookweb.models.UserModel;
import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Data
@NoArgsConstructor
@AllArgsConstructor
@Entity
@Table(name = "Notification")
public class NotificationModel {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "ID_Notification")
    private Long id;

    @Column(name = "Notification_Header")
    private String notificationHeader;

    @Column(name = "Notification_Text")
    private String notificationText;

    @Column(name = "Notification_Link")
    private String notificationLink;

    @Column(name = "Notification_Flag")
    private String notificationFlag;

    //@Column(name = "Notification_Date")
    //private Date notificationDate;

    @ManyToOne
    @JoinColumn(name = "User_ID")
    private UserModel user;
}

