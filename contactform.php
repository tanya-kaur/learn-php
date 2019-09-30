<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact form</title>
    <link rel="stylesheet" href="bootstrap-4.3.1/bootstrap-4.3.1/dist/css/bootstrap.min.css">
    <style>
    #contact-form{
        margin-left: auto;
        margin-bottom: 3rem;
        margin-top: 3rem;
        margin-right:auto;
        background: #eee;
        max-width: 500px;
        padding: 2rem;
    }
    
    </style>
</head>
<body>
   <form action="contact.php" method="POST" id="contact-form">       
            <div class="form-group">
                <label for="name"> Name*:</label>
                <input type="text" class="form-control" name="Name">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="email">Email*:</label>
                <input type="email" class="form-control" name="Email">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="subject">Subject*:</label>
                <input type="text" class="form-control" name="Subject">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="name">Message*:</label>
                <textarea class="form-control" style=" height: 300px;" name="Message"></textarea>
                <div class="invalid-feedback"></div>
            </div>

            <button class="btn btn-success" type="submit">Contact Us</button>        
    </form>

        <script>
        document.querySelector('#contact-form').onsubmit = function(e){
            let errorFlag = false;

            document.querySelectorAll('.is-invalid').forEach(function(el){
                el.classList.remove('is-invalid');
            });

            //name is required
            const name = document.querySelector('input[name="Name"]').value;
            const email = document.querySelector("input[name='Email']").value;
            const subject = document.querySelector('input[name="Subject"]').value;
            const message = document.querySelector('textarea[name="Message"]').value;


            //name validations
      
            if(!(/^[a-zA-Z\s]+$/.test(name))){
                errorFlag = true;
                document.querySelector('input[name="Name"]').nextElementSibling.innerHTML = "Please enter a valid name";
                document.querySelector('input[name="Name"]').classList.add('is-invalid');
            }

            if(name.trim().length === 0){
                errorFlag = true;
                document.querySelector('input[name="Name"]').nextElementSibling.innerHTML = "Name is required.";
                document.querySelector('input[name="Name"]').classList.add('is-invalid');
            }

            if(email.trim().length === 0){
                errorFlag = true;
                document.querySelector('input[name="Email"]').nextElementSibling.innerHTML = "Email is required.";
                document.querySelector('input[name="Email"]').classList.add('is-invalid');
            }
            if(subject.trim().length === 0){
                errorFlag = true;
                document.querySelector('input[name="Subject"]').nextElementSibling.innerHTML = "Subject is required.";
                document.querySelector('input[name="Subject"]').classList.add('is-invalid');
            }
            if(!(/^[a-zA-Z\s]+$/.test(subject.trim()))){
                errorFlag = true;
                document.querySelector('input[name="Subject"]').nextElementSibling.innerHTML = "Subject is invalid.";
                document.querySelector('input[name="Subject"]').classList.add('is-invalid');
            }
            if(message.trim().length === 0){
                errorFlag = true;
                document.querySelector('textarea[name="Message"]').nextElementSibling.innerHTML = "Message is required.";
                document.querySelector('textarea[name="Message"]').classList.add('is-invalid');
            }
             if(errorFlag){
                e.preventDefault();
            }

        }
        </script>
</body>
</html>
