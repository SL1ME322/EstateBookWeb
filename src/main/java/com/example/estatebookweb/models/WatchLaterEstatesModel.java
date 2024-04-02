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
@Table(name = "Watch_Later_Estates")
public class WatchLaterEstatesModel {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "ID_Watch_Later_Estates")
    private Long id;

    @ManyToOne
    @JoinColumn(name = "Estate_ID")
    private EstateModel estate;

    @ManyToOne
    @JoinColumn(name = "User_ID")
    private UserModel user;
}
