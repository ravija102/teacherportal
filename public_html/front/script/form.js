/*
 * jQuery and Ajax form method
*/


function validateLogin() {
    
    if($("#textfield").val() == '') {
        
        //e.preventDefault();			
        jAlert('Please enter username', 'Alert Dialog');
        return false;
    }
    else if($("#textfield2").val() == '') {
        						
        jAlert('Please enter password', 'Alert Dialog');
        return false;
    }
    else
        
        $("#loginForm").submit();

}
function submitForm(){
    
    var letters = /^[a-zA-Z ]+$/;
    var cmp_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    
    if($("#textfield3").val() == '') {
        
        //e.preventDefault();			
        jAlert('Please enter firstname', 'Alert Dialog');
        return false;
    }
    else if(!letters.test($("#textfield3").val())) {
        				
        jAlert('Please input alphanumeric characters only', 'Alert Dialog');
        return false;
    }
    else if($("#textfield4").val() == '') {
        			
        jAlert('Please enter lastname', 'Alert Dialog');
        return false;
    }
    else if(!letters.test($("#textfield4").val())) {
        					
        jAlert('Please input alphanumeric characters only', 'Alert Dialog');
        return false;
    }
    else if($("#textfield5").val() == '') {
        						
        jAlert('Please enter email', 'Alert Dialog');
        return false;
    }
    else if(!cmp_email.test($("#textfield5").val())) {
        						
        jAlert('Please enter valid email', 'Alert Dialog');
        return false;
    }
    else if($("#textfield6").val() == '') {
        							
        jAlert('Please enter password', 'Alert Dialog');
        return false;
    }
    else if(($("#textfield6").val().length < 8) || ($("#textfield6").val().length > 20) ) {
        						
        jAlert('Password must be between 8 and 20 characters long', 'Alert Dialog');
        return false;
    }
    else if($("#textfield7").val() == '') {
        						
        jAlert('Please enter Retype-password', 'Alert Dialog');
        return false;
    }
    else if($("#textfield7").val() != $("#textfield6").val()) {
        							
        jAlert('Password does not match', 'Alert Dialog');
        return false;
    }
    else {
        
        var form = $("#user_form").serialize();
//        {name: nilesh, lname:abc, comp:asuem}
        $.post(BASE_URL+"index.php/usermgmt/add_user",
        form,
        function(data,status){
            
//          $('#mymodal').html(data); // View Render.
            if(data != true)
            {
                if(data==false) {
                
                    jAlert('Email allready exist','Alert Dialog');
                    return;
                }
                else {
                    
                    $('#error').html(data);
                    return;
                }
            }
            else
            {
                $('#myModal').hide();
                jAlert('Ragistration success please check email.','Success Dialog', function(r) {
                if(r) {
                    
                    window.location.reload();
                } }); 
            }            
        });  
    }
  
}
function payment() {
    
    if($("#textfield3").val() == '') {
        
        jAlert('Please enter price','Alert Dialog');
    }
    else {
        
        var price = $("#textfield3").val();
        var data = 'price=' + price;
        
        $.ajax({
    
            url : BASE_URL+"index.php/usermgmt/select_plan/",
            type : 'post',
            data : data,
            success : function(result) {
        
                jAlert(result);
            },
            error : function(error) {
                
                jAlert(error);
            }
        });
    }
    
}
function add_gradeWeight() {
        
        var name = $('#grade_name').val();
        var percentage = $('#grade_per').val();
        var data = 'name=' + name;

        $.ajax({
              
            url : BASE_URL + "index.php/gradeweight/add_gradeweight",
            type : 'post',
            data : data,
            success : function(result) {
                
                alert(result);
            }
            
        });
}
    