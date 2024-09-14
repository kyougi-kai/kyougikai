package com.minato.minato.login;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class Sample {
    @GetMapping("/login")
    public String login(){
        return "login";
    }

    @RequestMapping("/finish")
    public ModelAndView finish
    (@ModelAttribute minato rb, ModelAndView m){
        m.addObject("rb",rb);
        m.setViewName("finish.html");
        return m;
    }
}
