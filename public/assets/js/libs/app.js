console.log('Welcome to online application')

$(document).ready(function(){
    
    
    
    printYear();
    printMonth();
    
    
    $("#btn-submit").click(function(event){
        event.preventDefault();
        submitForm()
    })
    

    function submitForm() { 
        
        swal({
            title:"Are you sure you want to submit?",
            text: " I confirm that the information given in this form is true, complete and accurate.",
            icon: "info",
            buttons: true,
        })
        .then((willSubmit) => {
            if (willSubmit) {
                $("#application-form").submit();
            } else {
                
            }
        });
    }
    
    
    
    function printMonth() {
        var months = ["January", "Februray", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        months.forEach(function(month) {
            $(".date-month-picker").append(new Option(month, month));
        });
        
    }
    function printYear() {
        var end_year = 2020
        for ( i = 1960; end_year >= i ; end_year--) {
            $(".date-year-picker").append(new Option(end_year, end_year));
        }
    }
})

