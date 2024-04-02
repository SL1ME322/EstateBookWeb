package com.example.estatebookweb.repositories;


import com.example.estatebookweb.models.TagAndEstateModel;
import org.springframework.data.jpa.repository.JpaRepository;

public interface TagAndEstateRepository extends JpaRepository<TagAndEstateModel, Long> {
}
