
              
                    $(document).ready(function() {  
                        $('input[type="text"]').addClass("idleField");  
                        $('input[type="text"]').focus(function() {  
                            $(this).removeClass("idleField").addClass("focusField");  
                            if (this.value == this.defaultValue){  
                                this.value = '';  
                            }  
                            if(this.value != this.defaultValue){  
                                this.select();  
                            }  
                        });  
                        $('input[type="text"]').blur(function() {  
                            $(this).removeClass("focusField").addClass("idleField");  
                              
                        });  
                    });  
                  $(document).ready(function() {  
                        $('input[type="password"]').addClass("idleField");  
                        $('input[type="password"]').focus(function() {  
                            $(this).removeClass("idleField").addClass("focusField");  
                            if (this.value == this.defaultValue){  
                                this.value = '';  
                            }  
                            if(this.value != this.defaultValue){  
                                this.select();  
                            }  
                        });  
                        $('input[type="password"]').blur(function() {  
                            $(this).removeClass("focusField").addClass("idleField");  
                              
                        });  
                    });