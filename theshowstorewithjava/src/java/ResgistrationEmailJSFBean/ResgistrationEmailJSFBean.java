/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ResgistrationEmailJSFBean;

/**
 *
 * @author Mitesh
 */

import javax.enterprise.context.RequestScoped;
import javax.inject.Named;

@Named(value = "registration")
@RequestScoped

public class ResgistrationEmailJSFBean {
    private String email;
    
    public ResgistrationEmailJSFBean(){
    }
    
    public String getEmail(){
        return email;
    }
    
    public void setEmail(String email){
        this.email = email;
    }
    
    public String getResponse(){
      if (email == null) return "";
      else
            return "<p style=\"color: red\"> Thanks! We will notify you of our new shoes at this email: "+
                    email + "</p>";    
    }
    
    
    
}
