/*
 * jQuery and Ajax Add Edit method
 */

function confirmDelete(url) {
    
    jConfirm("Can you confirm delete this Item ?",'Confirmation Dialog',function(r){
    var targetUrl = url;    
    if (r) {
        
        window.location.href = targetUrl;     
    }
    });
    return false;
}
function gradeWeight(flag) {
        
        if(flag){
            
            var letters = /^[a-zA-Z ]+$/;
            var float = /^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/ ;

            if($('#grade_name').val() == '') {

                jAlert('Please enter name');
                return;
            }
            else if(!letters.test($('#grade_name').val())) {

                jAlert('Please input alphanumeric characters only');
                return;
            }
            else if($('#grade_per').val() == '') {

                jAlert('Please enter percentage');
                return;
            }
            else if(!float.test($('#grade_per').val())) {

                jAlert('Please enter integer or float value');
                return;
            }
            else {
                
                var id = $('#hidden_gradeweight').val();
                var name = $('#grade_name').val();
                var percentage = $('#grade_per').val();

                $.ajax({

                    url : BASE_URL + "index.php/gradeweight/edit_gradeweight",
                    type : 'post',
                    data : {name:name,percentage:percentage,id:id},
                    success : function(result) {
                        
                        if(!result) {

                            jAlert(result);
                            return;
                        }
                        else {

                            $('#gradeweight').hide();
                            jAlert('grade weight update successfull','Success',function(r){
                            if(r) {
                                window.location.reload();
                            } });
                        }

                    }

                });
                return false;
            }
        }
        else { 
            
            var letters = /^[a-zA-Z ]+$/;
            var float = /^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/ ;

            if($('#grade_name').val() == '') {

                jAlert('Please enter name');
                return;
            }
            else if(!letters.test($('#grade_name').val())) {

                jAlert('Please input alphanumeric characters only');
                return;
            }
            else if($('#grade_per').val() == '') {

                jAlert('Please enter percentage');
                return;
            }
            else if(!float.test($('#grade_per').val())) {

                jAlert('Please enter integer or float value');
                return;
            }
            else {

                var name = $('#grade_name').val();
                var percentage = $('#grade_per').val();

                $.ajax({

                    url : BASE_URL + "index.php/gradeweight/add_gradeweight",
                    type : 'post',
                    data : {name:name,percentage:percentage},
                    success : function(result) {
                        
                        if(!result) {

                            jAlert(result);
                            return;
                        }
                        else {

                            $('#gradeweight').hide();
                            jAlert('grade weight add successfull','Success',function(r){
                            if(r) {
                                window.location.reload();
                            } });
                        }

                    }

                });
                return false;
            }
        }
}
function get_gradeWeight(id) {
    
    if(id) {
        
        $.ajax({
            
            url : BASE_URL + "index.php/gradeweight/get_gradeweight/",
            type : 'get',
            data : {id : id},
            success : function(result) {
                
                var arr = result.split(',');
                
                $('#hidden_gradeweight').val(arr[0]);
                $('#grade_name').val(arr[1]);
                $('#grade_per').val(arr[2]);
            }
        });
    }
}
function add_studentGrouping() {
    
    
}