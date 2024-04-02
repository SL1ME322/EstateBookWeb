package com.example.estatebookweb.controllers;

import com.example.estatebookweb.repositories.EstateRepository;
import com.example.estatebookweb.models.*;
import com.example.estatebookweb.repositories.TagRepository;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.*;

import javax.validation.Valid;
import java.util.List;
import java.util.Optional;

@RestController
@RequestMapping("/estates")
public class EstateController {
    private final EstateRepository estateRepository;
    private final TagRepository tagRepository;
    public EstateController(EstateRepository estateRepository, TagRepository tagRepository) {
        this.estateRepository = estateRepository;
        this.tagRepository = tagRepository;
    }
   //@GetMapping("/html")
   //public String getHome(Model model) {
   //    List<EstateModel> estates = estateRepository.findAll();
   //    model.addAttribute("estates", estates);
   //    return "html/mainPage";
   //}
    @GetMapping("/allEstates")
    public List<EstateModel> getAllEstates(Model model) {
        List<EstateModel> estates = estateRepository.findAll();
        model.addAttribute("estates", estates);
        model.addAttribute("estatesSize", estates.size());
        return  estateRepository.findAll();
    }
    @RequestMapping("/getEstateById/{id}")
    public Optional<EstateModel> getEstateById(@PathVariable Long id) {
            return estateRepository.findById(id);
    }
        @PostMapping("/createTag")
    public ResponseEntity<String> createTag(@Valid @RequestBody TagModel tagModel,
                                            BindingResult bindingResult)
    {
            if (bindingResult.hasErrors()){
                StringBuilder errorMessage = new StringBuilder();
                bindingResult.getAllErrors().forEach(error -> errorMessage.append(error.getDefaultMessage()).append("\n"));
                return ResponseEntity.badRequest().body(errorMessage.toString());
            }
            else{
               tagRepository.save(tagModel);
                return ResponseEntity.status(HttpStatus.CREATED).body("Tag created successfully");
            }
    }
    }