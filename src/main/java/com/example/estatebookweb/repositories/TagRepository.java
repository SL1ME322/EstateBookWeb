package com.example.estatebookweb.repositories;



import com.example.estatebookweb.models.TagModel;
import org.springframework.data.jpa.repository.JpaRepository;

public interface TagRepository extends JpaRepository<TagModel, Long> {
   TagModel findById(int id);
   // List<TagRepository> findLibrarianRepositoriesByName(String name);
}
