$(function(){
    $("#contactForm").validate({
      
      rules : {
        exampleInputName : {
          required : true,
          minlength : 5
        },
        exampleInputEmail: {
          email: true,
          required: true,
        }
      },
      
      messages : {
        exampleInputName : {
          required : "Your name is required",
          minlength: "Your name must have 5 characters"
          
        }
      }
      
    });
  });