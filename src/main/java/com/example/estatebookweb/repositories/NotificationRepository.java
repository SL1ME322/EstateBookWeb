package com.example.estatebookweb.repositories;


import com.example.estatebookweb.models.NotificationModel;
import org.springframework.data.jpa.repository.JpaRepository;


public interface NotificationRepository extends JpaRepository<NotificationModel, Long> {
     NotificationModel findById(int libraryId);
     //List<NotificationModel> findLibraryModelByNameContainingIgnoreCase(String name);
}
