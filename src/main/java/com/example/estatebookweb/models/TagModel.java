package com.example.estatebookweb.models;

import jakarta.persistence.*;
    import lombok.AllArgsConstructor;
    import lombok.Data;
    import lombok.NoArgsConstructor;

    @Data
    @NoArgsConstructor
    @AllArgsConstructor
    @Entity
    @Table(name = "Tag")
    public class TagModel {

        @Id
        @GeneratedValue(strategy = GenerationType.IDENTITY)
        @Column(name = "ID_Tag")
        private Long id;

        @Column(name = "Tag_Name")
        private String tagName;
    }