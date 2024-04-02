package com.example.estatebookweb.models;


import com.example.estatebookweb.models.EstateModel;
import com.example.estatebookweb.models.UserModel;
import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Data
@NoArgsConstructor
@AllArgsConstructor
@Entity
@Table(name = "Declined_Ad")
public class DeclinedAdModel {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "ID_Declined_Ad")
    private Long id;

    @Column(name = "Reason")
    private String reason;

    @ManyToOne
    @JoinColumn(name = "Estate_ID")
    private EstateModel estate;

    @ManyToOne
    @JoinColumn(name = "Moderator_ID")
    private UserModel moderator;
}
