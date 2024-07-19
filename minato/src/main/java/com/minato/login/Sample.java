package com.minato.login;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class Sample {
    @GetMapping("/login")
    public String login(){
        System.out.println("oi");
        return "ha";
    }
}
