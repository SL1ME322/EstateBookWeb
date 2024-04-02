package com.example.estatebookweb.config;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.authentication.AuthenticationManager;
import org.springframework.security.config.annotation.authentication.builders.AuthenticationManagerBuilder;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.crypto.password.NoOpPasswordEncoder;
import org.springframework.security.web.SecurityFilterChain;
import org.springframework.security.web.csrf.CookieCsrfTokenRepository;
import org.springframework.security.web.csrf.HttpSessionCsrfTokenRepository;

@Configuration
@EnableWebSecurity
public class SecurityConfig {
    private  final CustomUserDetailsService userDetailsService;
    public SecurityConfig(CustomUserDetailsService userDetailsService) {
        this.userDetailsService = userDetailsService;
    }
    @Bean
    public AuthenticationManager authenticationManager
            (HttpSecurity httpSecurity, NoOpPasswordEncoder noOpPasswordEncoder)
            throws Exception{
        AuthenticationManagerBuilder authenticationManagerBuilder =
                httpSecurity.getSharedObject(AuthenticationManagerBuilder.class);
        authenticationManagerBuilder.userDetailsService(userDetailsService).passwordEncoder(noOpPasswordEncoder);
        return authenticationManagerBuilder.build();
    }


    @Bean
    public SecurityFilterChain securityFilter (HttpSecurity httpSecurity) throws Exception {
        httpSecurity
                .csrf().disable()
                //.csrf((csrf) -> csrf.csrfTokenRepository( CookieCsrfTokenRepository.withHttpOnlyFalse()))
                .authorizeHttpRequests()
                //.requestMatchers("/login**","/logout**", "/register**").permitAll()
//              //   .requ  estMatchers("/admin/**").hasRole("ADMIN")
                // .requestMatchers("/**").hasRole("USER")
//              //  .requestMatchers("/estates/user/**", "/estates/user/").hasRole("USER")
//              //  .requestMatchers("/estates/userAndAdmin/**").hasAnyRole("EMPLOYEE", "ADMIN")
                //.anyRequest()
                //.authenticated();

                .anyRequest().permitAll();

        httpSecurity.formLogin().loginPage("/login").defaultSuccessUrl("/html").permitAll() ;
        return httpSecurity.build();
    }
    @SuppressWarnings("deprecation")
    @Bean
    public NoOpPasswordEncoder passwordEncoder() {
        return (NoOpPasswordEncoder) NoOpPasswordEncoder.getInstance();
    }
}
