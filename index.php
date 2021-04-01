<?php include_once "header.php"; ?>
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
                <div class="link">Already signed up? <a href="login.php">Login</a></div>
            </section>
        </div>
        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/signup.js"></script>
    </body>
</html>
