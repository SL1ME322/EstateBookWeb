package com.example.estatebookweb.controllers;

import com.example.estatebookweb.repositories.EstateRepository;
import com.example.estatebookweb.models.*;
import com.example.estatebookweb.repositories.TagRepository;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.*;
//import org.slf4j.Logger;
//import org.slf4j.LoggerFactory;
import javax.validation.Valid;
import java.util.List;
import java.util.Optional;

@RestController
@RequestMapping("/estates")
public class EstateController {
    private final EstateRepository estateRepository;
    private final TagRepository tagRepository;
    //private static final Logger logger = LoggerFactory.getLogger(EstateController.class);
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

    /**
     * Метод для вывода всех объявлений
     * @param model
     * @return
     */
    @GetMapping("/allEstates")
    public List<EstateModel> getAllEstates(Model model) {
        try {
            List<EstateModel> estates = estateRepository.findAll();
            model.addAttribute("estates", estates);
            model.addAttribute("estatesSize", estates.size());
            //logger.info("Retrieved all estates successfully");
        } catch (Exception e) {
            //logger.error("Exception occurred while retrieving all estates", e);
            System.out.println("Exception:" + e);
        }
        return estateRepository.findAll();
    }

    /**
     * Метод для получения объявления по id
     * @param id
     * @return estateRepository.findById(id)
     */
    @RequestMapping("/getEstateById/{id}")
    public Optional<EstateModel> getEstateById(@PathVariable Long id) {
       // logger.info("Retrieving estate by ID: {}", id);
        return estateRepository.findById(id);
    }

    /**
     * Метод для создания тэга
     * @param tagModel
     * @param bindingResult
     * @return
     */
    @PostMapping("/createTag")
    public ResponseEntity<String> createTag(@Valid @RequestBody TagModel tagModel,
                                            BindingResult bindingResult) {
        if (bindingResult.hasErrors()) {
            StringBuilder errorMessage = new StringBuilder();
            bindingResult.getAllErrors().forEach(error -> errorMessage.append(error.getDefaultMessage()).append("\n"));
           // logger.error("Validation error occurred while creating tag: {}", errorMessage.toString());
            return ResponseEntity.badRequest().body(errorMessage.toString());
        } else {
            tagRepository.save(tagModel);
          //  logger.info("Tag created successfully: {}", tagModel);
            return ResponseEntity.status(HttpStatus.CREATED).body("Tag created successfully");
        }
    }

//    @RequestMapping("/createEstate")
//    public ResponseEntity<String> createEstate(@RequestParam ("estate_type") String estateType) {
//        if (bindingResult.hasErrors()) {
//            StringBuilder errorMessage = new StringBuilder();
//            bindingResult.getAllErrors().forEach(error -> errorMessage.append(error.getDefaultMessage()).append("\n"));
//            return ResponseEntity.badRequest().body(errorMessage.toString());
//        } else {
//            estateRepository.save(estateModel);
//            return ResponseEntity.status(HttpStatus.CREATED).body("Estate created successfully");
//        }
//    }
}