<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=egde">

        <title>Chat App</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    </head>

    <body>
        <div class="wrapper">
            <section class="form signup">
                <header>Chat App</header>
                <form action="#" enctype="multipart/formdata">
                    <div class="error-text"></div>
                    <div class="name-details">
                        <div class="field input">
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="field input">
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                        <div class="field input">
                            <input type="text" name="email" placeholder="Email" required>
                        </div>
                        <div class="field input">
                            <input type="password" name="password" placeholder="Password" required>
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field image">
                            <label>Select image</label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="field button">
                            <input type="submit" value="Sign Up">
                        </div>
                </form>
                <div class="link">Already signed up? <a href="#">Login</a></div>
            </section>
        </div>
        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/signup.js"></script>
    </body>
</html>
