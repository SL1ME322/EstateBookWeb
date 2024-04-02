package com.example.estatebookweb.repositories;




import com.example.estatebookweb.models.UserReviewModel;
import org.springframework.data.jpa.repository.JpaRepository;


public interface UserReviewRepository extends JpaRepository<UserReviewModel, Long> {
    //ReviewModel findByReviewId (int reviewId);
   // List<ReviewModel> findReviewModelByBookContainingIgnoreCase(String name);
}
