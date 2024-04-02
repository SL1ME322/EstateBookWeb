package com.example.estatebookweb.repositories;


import com.example.estatebookweb.models.UserHistoryWatchedModel;
import org.springframework.data.jpa.repository.JpaRepository;

public interface UserHistoryWatchedRepository extends JpaRepository<UserHistoryWatchedModel, Long> {
}
