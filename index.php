<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=egde">

        <title>Chat App</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    </head>

    <body>
        <div class="wrapper">
            <section class="form signup">
                <header>Chat App</header>
                <form action="#">
                    <div class="error-text">This is an error message!</div>
                    <div class="name-details">
                        <div class="field input">
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="field input">
                            <input type="text" placeholder="Last Name">
                        </div>
                    </div>
                        <div class="field input">
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="field input">
                            <input type="password" placeholder="Password">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field image">
                            <label>Select image</label>
                            <input type="file">
                        </div>
                        <div class="field button">
                            <input type="submit" value="Sign Up">
                        </div>
                </form>
                <div class="link">Already signed up? <a href="#">Login</a></div>
            </section>
        </div>
        <script src="javascript/pass-show-hide.js"></script>
    </body>
</html>