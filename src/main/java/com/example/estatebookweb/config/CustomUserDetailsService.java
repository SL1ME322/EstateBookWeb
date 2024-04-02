package com.example.estatebookweb.config;



import com.example.estatebookweb.models.RoleEnum;
import com.example.estatebookweb.models.UserModel;
import com.example.estatebookweb.repositories.UserRepository;
import org.springframework.security.core.userdetails.User;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.stereotype.Service;

import java.util.Arrays;
import java.util.List;
import java.util.Set;

@Service
public class CustomUserDetailsService implements UserDetailsService {
    private UserRepository userRepository;
    public CustomUserDetailsService(UserRepository userRepository) {
        this.userRepository = userRepository;
    }
    @Override
    public UserDetails loadUserByUsername(String username) throws UsernameNotFoundException  {
        UserModel user = userRepository.findByLogin(username);
        if (user == null) {
            throw new UsernameNotFoundException("No user with the given username");
        }
        List<Set<RoleEnum>> roles = Arrays.asList(user.getRoles());
        UserDetails userDetails = User.builder()
                .username(user.getLogin())
                .password(user.getPassword())
                .roles(user.getRoles().stream().map(Enum::name).toArray(String[]::new))
                .build();
        return userDetails;
    }
}
