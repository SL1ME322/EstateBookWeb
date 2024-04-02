package com.example.estatebookweb.repositories;


import com.example.estatebookweb.models.WatchLaterEstatesModel;
import org.springframework.data.jpa.repository.JpaRepository;

public interface WatchLaterEstatesRepository
        extends JpaRepository<WatchLaterEstatesModel, Long> {
}
