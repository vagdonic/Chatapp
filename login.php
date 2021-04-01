<?php include_once "header.php"; ?>
    <body>
        <div class="wrapper">
            <section class="form login">
                <header>Chat App</header>
                <form action="#">
                    <div class="error-text"></div>
                    
                    <div class="field input">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="field input">
                        <input type="password" name="password" placeholder="Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to chat">
                    </div>
                </form>
                <div class="link">Not yet signed up? <a href="index.php">Sign up</a></div>
            </section>
        </div>
        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/login.js"></script>
    </body>
</html>
