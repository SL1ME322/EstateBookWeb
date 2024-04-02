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
@Table(name = "User_Review")
public class UserReviewModel {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "ID_User_Review")
    private Long id;

    @Column(name = "Review_Mark")
    private int reviewMark;

    @Column(name = "Review_Text")
    private String reviewText;

    @ManyToOne
    @JoinColumn(name = "Agency_Reciever_ID")
    private UserModel agencyReceiver;

    @ManyToOne
    @JoinColumn(name = "User_Reviewer_ID")
    private UserModel userReviewer;

    @ManyToOne
    @JoinColumn(name = "User_Reciever_ID")
    private UserModel userReceiver;
}
