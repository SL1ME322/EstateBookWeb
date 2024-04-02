package com.example.estatebookweb.services;

import com.example.estatebookweb.models.UserModel;
import com.example.estatebookweb.repositories.UserRepository;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.stereotype.Service;

@Service
public class UserService {
    private final UserRepository userRepository;
    public UserService(UserRepository userRepository){
        this.userRepository = userRepository;
    }
    public UserModel getCurrentUserLogin() {
        Authentication authentication = SecurityContextHolder.getContext().getAuthentication();
        if (authentication != null) {
            Object principal = authentication.getPrincipal();
            if (principal instanceof UserDetails) {
               String userName = ((UserDetails) principal).getUsername();
                return userRepository.findByLogin(userName);
            }
        }
        return null;
    }
    public UserModel getUserByLogin(String login){
        UserModel user = userRepository.findByLogin(login);
        return user;
    }
    public UserModel createUser(UserModel user){
        UserModel newUser = userRepository.save(user);
        userRepository.flush();
        return newUser;
    }
}
