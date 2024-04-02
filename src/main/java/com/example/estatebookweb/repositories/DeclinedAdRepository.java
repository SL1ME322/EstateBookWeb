package com.example.estatebookweb.repositories;


import com.example.estatebookweb.models.DeclinedAdModel;
import org.springframework.data.jpa.repository.JpaRepository;

public interface DeclinedAdRepository extends JpaRepository<DeclinedAdModel, Integer> {
    //DeclinedAdModel findDeclinedAdModelByEstate(int id);
    //List<BookModel> findBookModelByNameContainingIgnoreCase(String name);
}
