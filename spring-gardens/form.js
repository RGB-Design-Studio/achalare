$(document).ready(function() {

    // process the form
    $('form').submit(function(event) {
        
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'firstName'  : $('input[name=firstName]').val(),
            'lastName'  : $('input[name=lastName]').val(),
            'emailId'    : $('input[name=emailId]').val(),
            'phoneNo'    : $('input[name=phoneNo]').val(),
            'projectName': $('input[name=projectName]').val(),
            'interestedIn': $('input[name=interestedIn]').val(),
            'comments'   : $('textarea[name=comments]').val()
        };

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'process.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode      : true
        })
            // using the done promise callback
            .done(function(data) {

            // log data to the console so we can see
            console.log(data);
            window.location = "thank-you.html";
                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});