package com.example.estatebookweb;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.data.jpa.repository.config.EnableJpaRepositories;


@SpringBootApplication
public class EstateBookWebApplication {

	public static void main(String[] args) {
		SpringApplication.run(EstateBookWebApplication.class, args);
	}

}
